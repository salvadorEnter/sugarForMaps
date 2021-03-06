<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

require_once("vendor/ytree/Tree.php");
require_once("vendor/ytree/ExtNode.php");

/**
 * Polymorphic buckets - place any item in a folder
 */
class SugarFolder {

	// public attributes
	var $id;
	var $name;
	var $parent_folder;
	var $has_child = 0; // flag node has child
	var $is_group = 0;
	var $is_dynamic = 0;
	var $dynamic_query = '';
	var $assign_to_id;
	var $created_by;
	var $modified_by;
	var $date_created;
	var $date_modified;
	var $deleted;
	var $folder_type;
	var $team_id;
	var $team_set_id;

	var $db;
	var $new_with_id = false;

	// core queries
	var $core = "SELECT f.id, f.name, f.has_child, f.is_group, f.is_dynamic, f.dynamic_query, f.folder_type, f.created_by, i.deleted FROM folders f left join inbound_email i on f.id = i.groupfolder_id ";
	var $coreSubscribed = "SELECT f.id, f.name, f.has_child, f.is_group, f.is_dynamic, f.dynamic_query, f.folder_type, f.created_by, i.deleted FROM folders f LEFT JOIN folders_subscriptions fs ON f.id = fs.folder_id LEFT JOIN inbound_email i on  i.groupfolder_id = f.id ";
	var $coreWhere = "WHERE f.deleted = 0 ";
	var $coreWhereSubscribed = "WHERE f.deleted = 0 AND fs.assigned_user_id = ";
	var $coreOrderBy = " ORDER BY f.is_dynamic, f.is_group, f.name ASC ";

	var $hrSortLocal = array(
            'flagged' => 'type',
            'status'  => 'reply_to_status',
            'from'    => 'emails_text.from_addr',
            'subject' => 'name',
            'date'    => 'date_sent',
            'AssignedTo' => 'assigned_user_id',
            'flagged' => 'flagged'
        );
    var $defaultSort = 'date';
    var $defaultDirection = "DESC";

    protected $emailBean;

	// private attributes
	var $_depth;

    /**
     * Basic field metadata format.
     * The metadata follows the basic SugarBean metadata format.
     * Attention: This metadata does not accept the full metadata
     * vardefs for dbTypes.
     *
     * @var array
     */
    private $fields = array(
        'id' => array(
            'name' => 'id',
            'type' => 'id',
        ),
        'name' => array(
            'name' => 'name',
            'type' => 'varchar',
        ),
        'folder_type' => array(
            'name' => 'folder_type',
            'type' => 'varchar',
        ),
        'parent_folder' => array(
            'name' => 'parent_folder',
            'type' => 'link',
        ),
        'has_child' => array(
            'name' => 'has_child',
            'type' => 'tinyint',
        ),
        'is_group' => array(
            'name' => 'is_group',
            'type' => 'tinyint',
        ),
        'is_dynamic' => array(
            'name' => 'is_dynamic',
            'type' => 'tinyint',
        ),
        'dynamic_query' => array(
            'name' => 'dynamic_query',
            'type' => 'text',
        ),
        'assign_to_id' => array(
            'name' => 'assign_to_id',
            'type' => 'link',
        ),
        'team_set_id' => array(
            'name' => 'team_set_id',
            'type' => 'link',
        ),
        'team_id' => array(
            'name' => 'team_id',
            'type' => 'link',
        ),
        'created_by' => array(
            'name' => 'created_by',
            'type' => 'link',
        ),
        'modified_by' => array(
            'name' => 'modified_by',
            'type' => 'link',
        ),
        'deleted' => array(
            'name' => 'deleted',
            'type' => 'tinyint',
        ),
    );

    /**
     * @deprecated Use __construct() instead
     */
    public function SugarFolder()
    {
        self::__construct();
    }

	/**
	 * Sole constructor
	 */
    public function __construct()
    {
		$this->db = DBManagerFactory::getInstance();
        $this->emailBean = BeanFactory::getBean('Emails');
	}

	function deleteEmailFromAllFolder($id) {
		$q = "delete from folders_rel where polymorphic_module = 'Emails' AND polymorphic_id = '{$id}' ";
		$r = $this->db->query($q);
	}

	function deleteEmailFromFolder($id) {
		$q = "delete from folders_rel where polymorphic_module = 'Emails' AND polymorphic_id = '{$id}' AND folder_id = '{$this->id}'";
		$r = $this->db->query($q);
	}

	function checkEmailExistForFolder($id) {
		$q = "SELECT COUNT(*) c from folders_rel where polymorphic_module = 'Emails' AND polymorphic_id = '{$id}' AND folder_id = '{$this->id}'";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);
		if ($a['c'] > 0) {
			return true;
		} else {
			return false;
		} // else
	}
	/**
	 * Moves beans from one folder to another folder
	 * @param string fromFolder GUID of source folder
	 * @param string toFolder GUID of destination folder
	 * @param string beanId GUID of SugarBean being moved
	 */
	function move($fromFolder, $toFolder, $beanId) {
		$q = "UPDATE folders_rel SET folder_id = '{$toFolder}' WHERE folder_id = '{$fromFolder}' AND polymorphic_id = '{$beanId}' AND deleted = 0";
		$r = $this->db->query($q);
	}

	/**
	 * Copies one bean from one folder to another
	 */
	function copyBean($fromFolder, $toFolder, $beanId, $module) {
		$q = "INSERT INTO folders_rel (id, folder_id, polymorphic_module, polymorphic_id, deleted)
				VALUES('{$guid}', '{$toFolder}', '{$module}', '{$beanId}', 0)";
		$r = $this->db->query($q);
	}

	/**
	 * Creates a new group Folder from the passed fields
	 * @param array fields
	 */
	function setFolder($fields) {

		global $current_user;
		if(empty($fields['groupFoldersUser'])) {
			$fields['groupFoldersUser'] = $current_user->id;
		}

		$this->name = $fields['name'];
		$this->parent_folder = $fields['parent_folder'];
		$this->has_child = 0;
		$this->is_group = 1;
		$this->assign_to_id = $fields['groupFoldersUser'];
		$this->team_id = $fields['team_id'];
		$this->team_set_id = $fields['team_set_id'];

		$this->save();
	}

	/**
	 * Returns GUIDs of folders that the user in focus is subscribed to
	 * @param object user User object in focus
	 * @return array
	 */
	function getSubscriptions($user) {
		if(empty($user)) {
			global $current_user;
			$user = $current_user;
		}

		$q = "SELECT folder_id FROM folders_subscriptions WHERE assigned_user_id = '{$user->id}'";
		$r = $this->db->query($q);
		$ret = array();
		while($a = $this->db->fetchByAssoc($r)) {
			$ret[] = $a['folder_id'];
		}
		return $ret;
	}

	/**
	 * Sets a user's preferences for subscribe folders (Sugar only)
	 * @param array subs Array of IDs for subscribed folders
	 */
	function setSubscriptions($subs) {
		global $current_user;

		if(empty($current_user->id)) {
			$GLOBALS['log']->fatal("*** FOLDERS: tried to update folder subscriptions for a user with no ID");
			return false;
		}

		$cleanSubscriptions = array();

		// ensure parent folders are selected, regardless.
		foreach($subs as $id) {
			$id = trim($id);
			if(!empty($id)) {
				$cleanSubscriptions[] = $id;
				$qChk = "SELECT parent_folder FROM folders WHERE id = '{$id}'";
				$rChk = $this->db->query($qChk);
				$aChk = $this->db->fetchByAssoc($rChk);

				if(!empty($aChk['parent_folder'])) {
					$cleanSubscriptions = $this->getParentIDRecursive($aChk['parent_folder'], $cleanSubscriptions);
				}
			}
		}

		$this->clearSubscriptions();

		foreach($cleanSubscriptions as $id) {
		    $this->insertFolderSubscription($id, $current_user->id);
		}
	}

	/**
	 * Given a folder id and user id, create a folder subscription entry.
	 *
	 * @param String $folderId
	 * @param String $userID
	 * @return String The id of the newly created folder subscription.
	 */
	function insertFolderSubscription($folderId, $userID)
	{
	    $guid = create_guid();
		$query = "INSERT INTO folders_subscriptions (id, folder_id, assigned_user_id) VALUES ('{$guid}', '{$folderId}', '{$userID}')";
		$r = $this->db->query($query);
		return $guid;
	}
	/**
	 * Recursively finds parent node until it hits root
	 * @param string id Starting id to follow up
	 * @param array ret collected ids
	 * @return array of IDs
	 */
	function getParentIDRecursive($id, $ret=array()) {
		$q = "SELECT * FROM folders WHERE id = '{$id}' AND deleted = 0";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if(!in_array($id, $ret)) {
			$ret[] = $id;
		}

		if($a['parent_folder'] != '') {
			$qChk = "SELECT parent_folder FROM folders WHERE id = '{$id}'";
			$rChk = $this->db->query($qChk);
			$aChk = $this->db->fetchByAssoc($rChk);

			if(!empty($aChk['parent_folder'])) {
				$ret = $this->getParentIDRecursive($aChk['parent_folder'], $ret);
			}
		}

		return $ret;
	}

	/**
	 * Deletes subscriptions to folders in preparation for reset
	 */
	function clearSubscriptions() {
		global $current_user;

		if(!empty($current_user->id)) {
			$q = "DELETE FROM folders_subscriptions WHERE assigned_user_id = '{$current_user->id}'";
			$r = $this->db->query($q);
		}
	}


	/**
	 * Deletes all subscriptions for a particular folder id
	 *
	 * @return unknown
	 */
	function clearSubscriptionsForFolder($folderID)
	{
        $query = "DELETE FROM folders_subscriptions WHERE folder_id = " . $this->db->quoted($folderID);
	    $r = $this->db->query($query);
	}

	protected function generateArchiveFolderQuery()
	{
		global $current_user;
	    $q = <<<ENDQ
SELECT emails.id , emails.name, emails.date_sent, emails.status, emails.type, emails.flagged, emails.reply_to_status, emails_text.from_addr, emails_text.to_addrs, 'Emails' polymorphic_module FROM emails
JOIN emails_text on emails.id = emails_text.email_id
ENDQ;
        $this->emailBean->addVisibilityFrom($q, array('where_condition' => true));

        $q .= <<<ENDW
 WHERE emails.deleted=0 AND emails.type NOT IN ('out', 'draft') AND emails.status NOT IN ('sent', 'draft')
AND emails.id IN (
SELECT eear.email_id FROM emails_email_addr_rel eear
JOIN email_addr_bean_rel eabr ON eabr.email_address_id=eear.email_address_id AND eabr.bean_id = '{$current_user->id}' AND eabr.bean_module = 'Users'
WHERE eear.deleted=0
)
ENDW;
        $this->emailBean->addVisibilityWhere($q, array('where_condition' => true));
        return $q;
	}

	function generateSugarsDynamicFolderQuery()
	{
		global $current_user;
		$type = $this->folder_type;
		if($type == 'archived') {
		    return $this->generateArchiveFolderQuery();
		}
		$status = $type;
		if($type == "sent") {
			$type = "out";
		}
		if($type == 'inbound') {
			$ret = " AND emails.status NOT IN ('sent', 'archived', 'draft') AND emails.type NOT IN ('out', 'archived', 'draft')";
		} else {
			$ret = " AND emails.status NOT IN ('archived') AND emails.type NOT IN ('archived')";
		}
        $q = "SELECT
                emails.id,
                emails.name,
                emails.date_sent,
                emails.status,
                emails.type,
                emails.flagged,
                emails.reply_to_status,
                emails_text.from_addr,
                emails_text.to_addrs,
                'Emails' polymorphic_module
            FROM
                emails
            JOIN
                emails_text
            on
                emails.id = emails_text.email_id
                ";
        $options = array(
            'where_condition' => true,
            'action' => 'list',
        );
        $this->emailBean->addVisibilityFrom($q, $options);
        $q .= "
            WHERE
                (type = '{$type}' OR status = '{$status}')
                AND assigned_user_id = '{$current_user->id}'
                AND emails.deleted = 0 ";
        $this->emailBean->addVisibilityWhere($q, $options);
		return $q . $ret;
	} // fn

	/**
	 * returns array of items for listView display in yui-ext Grid
	 */
	function getListItemsForEmailXML($folderId, $page = 1, $pageSize = 10, $sort = '', $direction='') {
		require_once('include/TimeDate.php');
		global $timedate;
		global $current_user;
		global $beanList;
		global $sugar_config;
		global $app_strings;

		$this->retrieve($folderId);
		$start = ($page - 1) * $pageSize;

		$sort = (empty($sort)) ? $this->defaultSort : $sort;
		if (!in_array(strtolower($direction), array('asc', 'desc'))) $direction = $this->defaultDirection;

		if (!empty($this->hrSortLocal[$sort]))
		{
			$order = " ORDER BY {$this->hrSortLocal[$sort]} {$direction}";
		}
		else
		{
			$order = "";
		}

		if($this->is_dynamic) {
			$r = $this->db->limitQuery(from_html($this->generateSugarsDynamicFolderQuery() . $order), $start, $pageSize);
		} else {
			// get items and iterate through them
            $q = "SELECT
                    emails.id,
                    emails.name,
                    emails.date_sent,
                    emails.status,
                    emails.type,
                    emails.flagged,
                    emails.reply_to_status,
                    emails_text.from_addr,
                    emails_text.to_addrs,
                    'Emails' polymorphic_module
                FROM
                    emails
                JOIN
                    folders_rel
                ON
                    emails.id = folders_rel.polymorphic_id
                JOIN
                    emails_text
                on
                    emails.id = emails_text.email_id
                    ";
            $this->emailBean->addVisibilityFrom($q, array('where_condition' => true));
            $q .= "
                WHERE
                    folders_rel.folder_id = '{$folderId}'
                    AND folders_rel.deleted = 0
                    AND emails.deleted = 0 "
            ;
            $this->emailBean->addVisibilityWhere($q, array('where_condition' => true));
			if ($this->is_group) {
				$q = $q . " AND ((emails.assigned_user_id is null or emails.assigned_user_id = '') OR (emails.intent = 'createcase'))";
			}
			$r = $this->db->limitQuery($q . $order, $start, $pageSize);
		}

		$return = array();

		$email = BeanFactory::getBean('Emails'); //Needed for email specific functions.

		while($a = $this->db->fetchByAssoc($r)) {

			$temp = array();
			$temp['flagged'] = (is_null($a['flagged']) || $a['flagged'] == '0') ? '' : 1;
			$temp['status'] = (is_null($a['reply_to_status']) || $a['reply_to_status'] == '0') ? '' : 1;
			$temp['from']	= preg_replace('/[\x00-\x08\x0B-\x1F]/', '', $a['from_addr']);
			$temp['subject'] = $a['name'];
			$temp['date']	= $timedate->to_display_date_time($this->db->fromConvert($a['date_sent'], 'datetime'));
			$temp['uid'] = $a['id'];
			$temp['mbox'] = 'sugar::'.$a['polymorphic_module'];
			$temp['ieId'] = $folderId;
			$temp['site_url'] = $sugar_config['site_url'];
			$temp['seen'] = ($a['status'] == 'unread') ? 0 : 1;
			$temp['type'] = $a['type'];
			$temp['hasAttach'] = $email->doesImportedEmailHaveAttachment($a['id']);
			$temp['to_addrs'] = preg_replace('/[\x00-\x08\x0B-\x1F]/', '', $a['to_addrs']);
			$return[] = $temp;
		}


		$metadata = array();
		$metadata['mbox'] = $app_strings['LBL_EMAIL_SUGAR_FOLDER'].': '.$this->name;
		$metadata['ieId'] = $folderId;
		$metadata['name'] = $this->name;
		$metadata['unreadChecked'] = ($current_user->getPreference('showUnreadOnly', 'Emails') == 1) ? 'CHECKED' : '';
		$metadata['out'] = $return;

		return $metadata;
	}

	function getCountItems ( $folderId ) {
		global $current_user ;
		global $beanList ;
		global $sugar_config ;
		global $app_strings ;

		$this->retrieve ( $folderId ) ;
		if ($this->is_dynamic) {
	    	$pattern = '/SELECT(.*?)(\s){1}FROM(\s){1}/is';  // ignores the case
	    	$replacement = 'SELECT count(*) c FROM ';
	    	$modified_select_query = preg_replace($pattern, $replacement, $this->generateSugarsDynamicFolderQuery(), 1);
	    	$r = $this->db->query ( from_html ( $modified_select_query )) ;
		} else {
			// get items and iterate through them
            $q = "SELECT
                    count(*) c
                FROM
                    folders_rel
                JOIN
                    emails
                ON
                    emails.id = folders_rel.polymorphic_id
                    ";
            $this->emailBean->addVisibilityFrom($q, array('where_condition' => true));
            $q .= "
                WHERE
                    folder_id = '{$folderId}'
                    AND folders_rel.deleted = 0
                    AND emails.deleted = 0 "
            ;
            $this->emailBean->addVisibilityWhere($q, array('where_condition' => true));
			if ($this->is_group) {
				$q .= " AND ((emails.assigned_user_id is null or emails.assigned_user_id = '') OR (emails.intent = 'createcase'))";
			}
			$r = $this->db->query ( $q ) ;
		}

		$a = $this->db->fetchByAssoc($r);
		return $a['c'];
	}

    function getCountUnread ( $folderId ) {
        global $current_user ;
        global $beanList ;
        global $sugar_config ;
        global $app_strings ;

        $this->retrieve ( $folderId ) ;
        if ($this->is_dynamic) {
	    	$pattern = '/SELECT(.*?)(\s){1}FROM(\s){1}/is';  // ignores the case
	    	$replacement = 'SELECT count(*) c FROM ';
	    	$modified_select_query = preg_replace($pattern, $replacement, $this->generateSugarsDynamicFolderQuery(), 1);
	    	$r = $this->db->query (from_html($modified_select_query) . " AND emails.status = 'unread'") ;
        } else {
            // get items and iterate through them
            $q = "SELECT
                    count(*) c
                FROM
                    folders_rel fr
                JOIN
                    emails
                on
                    fr.folder_id = '{$folderId}'
				";
            $this->emailBean->addVisibilityFrom($q, array('where_condition' => true));
            $q .= "
                    AND fr.deleted = 0
                    AND fr.polymorphic_id = emails.id
                    AND emails.status = 'unread'
                    AND emails.deleted = 0 "
            ;
            $this->emailBean->addVisibilityWhere($q, array('where_condition' => true));
            if ($this->is_group) {
                $q .= " AND ((emails.assigned_user_id is null or emails.assigned_user_id = '') OR (emails.intent = 'createcase'))";
            }
            $r = $this->db->query ( $q ) ;
        }

		$a = $this->db->fetchByAssoc($r);
        return $a['c'];
    }


	/**
	 * Convenience method, pass a SugarBean and User to this to add anything to a given folder
	 */
	function addBean($bean, $user=null) {
		if(empty($bean->id) || empty($bean->module_dir)) {
			$GLOBALS['log']->fatal("*** FOLDERS: addBean() got empty bean - not saving");
			return false;
		} elseif(empty($this->id)) {
			$GLOBALS['log']->fatal("*** FOLDERS: addBean() is trying to save to a non-saved or non-existent folder");
			return false;
		}

		global $current_user;
		if($user == null) {
			$user = $current_user;
		}

        $query = sprintf(
            'INSERT INTO folders_rel (id, folder_id, polymorphic_module, polymorphic_id, deleted)
             VALUES (%s, %s, %s, %s, 0)',
            $this->db->quoted(create_guid()),
            $this->db->quoted($this->id),
            $this->db->quoted($bean->module_dir),
            $this->db->quoted($bean->id)
        );

        $r = $this->db->query($query);
		return true;
	}

	/**
	 * Builds up a metacollection of user/group folders to be passed to processor methods
	 * @param object User object, defaults to $current_user
	 * @return array Array of abstract folder objects
	 */
	function retrieveFoldersForProcessing($user, $subscribed=true) {
		global $sugar_config;
		global $current_language, $current_user;

		$emails_mod_strings = return_module_language($current_language, "Emails");
		$myEmailTypeString = 'inbound';
		$myDraftsTypeString = 'draft';
		$mySentEmailTypeString = 'sent';

		if(empty($user)) {
			global $current_user;
			$user = $current_user;
		}
		$rootWhere = '';
        $teamSecurityClause = '';

		$bean = new SugarBean();
		$bean->disable_row_level_security = false;
		$bean->add_team_security_where_clause($teamSecurityClause,'f');
		$bean->disable_row_level_security = true;


    	$rootWhere .= "AND (f.parent_folder IS NULL OR f.parent_folder = '')";

		if($subscribed) {
			$q = $this->coreSubscribed.$teamSecurityClause.$this->coreWhereSubscribed."'{$user->id}' ".$rootWhere.$this->coreOrderBy;
		} else {
			$q = $this->core.$teamSecurityClause.$this->coreWhere.$rootWhere.$this->coreOrderBy;
		}
		$r = $this->db->query($q);
		$return = array();

		$found = array();
		while($a = $this->db->fetchByAssoc($r, false)) {
            $a['created_by'] = $this->db->fromConvert($a['created_by'], 'id');

			if ((($a['folder_type'] == $myEmailTypeString) ||
				($a['folder_type'] == $myDraftsTypeString) ||
				($a['folder_type'] == $mySentEmailTypeString)) &&
				($a['created_by'] != $current_user->id)) {

				continue;
			} // if
			if (!isset($found[$a['id']])) {
                $found[$a['id']] = true;
			    $return[] = $a;
			}
		}
		return $return;
	}
    /**
	 * Preps object array for async call from user's Settings->Folders
	 */
	function getGroupFoldersForSettings($focusUser=null) {
		global $app_strings;

		$grp = array();

		$folders = $this->retrieveFoldersForProcessing($focusUser, false);
		$subscriptions = $this->getSubscriptions($focusUser);

		foreach($folders as $a) {
			$a['selected'] = (in_array($a['id'], $subscriptions)) ? true : false;
            $a['origName'] = $a['name'];

			if($a['is_group'] == 1)
				if ($a['deleted'] != 1)
					$grp[] = $a;
		}

		return $grp;
	}
	/**
	 * Preps object array for async call from user's Settings->Folders
	 */
	function getFoldersForSettings($focusUser=null) {
		global $app_strings;

		$user = array();
		$grp = array();
		$user[] = array('id' => '', 'name' => $app_strings['LBL_NONE'], 'has_child' => 0, 'is_group' => 0, 'selected' => false);
		$grp[] = array('id' => '', 'name' => $app_strings['LBL_NONE'], 'has_child' => 0, 'is_group' => 1, 'selected' => false, 'origName' => "");

		$folders = $this->retrieveFoldersForProcessing($focusUser, false);
		$subscriptions = $this->getSubscriptions($focusUser);

		foreach($folders as $a) {
			$a['selected'] = (in_array($a['id'], $subscriptions)) ? true : false;
            $a['origName'] = $a['name'];
            if( isset($a['dynamic_query']) )
                unset($a['dynamic_query']);
			if($a['is_group'] == 1) {
				$grp[] = $a;
			} else {
				$user[] = $a;
			}

			if($a['has_child'] == 1) {
				$qGetChildren = $this->core.$this->coreWhere."AND parent_folder = '{$a['id']}'";
				$rGetChildren = $this->db->query($qGetChildren);

				while($aGetChildren = $this->db->fetchByAssoc($rGetChildren, false)) {
					if($a['is_group']) {
						$this->_depth = 1;
						$grp = $this->getFoldersChildForSettings($aGetChildren, $grp, $subscriptions);
					} else {
						$this->_depth = 1;
						$user = $this->getFoldersChildForSettings($aGetChildren, $user, $subscriptions);
					}
				}
			}
		}

		$ret = array(
			'userFolders'	=> $user,
			'groupFolders'	=> $grp,
		);
		return $ret;
	}

	function getFoldersChildForSettings($a, $collection, $subscriptions) {
		$a['selected'] = (in_array($a['id'], $subscriptions)) ? true : false;
		$a['origName'] = $a['name'];

		if(isset($a['dynamic_query']))
		{
		   unset($a['dynamic_query']);
		}

		for($i=0; $i<$this->_depth; $i++)
		{
			$a['name'] = ".".$a['name'];
		}

		$collection[] = $a;

		if($a['has_child'] == 1) {
			$this->_depth++;
			$qGetChildren = $this->core.$this->coreWhere."AND parent_folder = '{$a['id']}'";
			$rGetChildren = $this->db->query($qGetChildren);
			while($aGetChildren = $this->db->fetchByAssoc($rGetChildren)) {
				$collection = $this->getFoldersChildForSettings($aGetChildren, $collection, $subscriptions);
			}
		}

		return $collection;
	}

	/**
	 * Returns the number of "new" items (based on passed criteria)
	 * @param string id ID of folder
	 * @param array criteria
	 * 		expected:
	 * 		array('field' => 'status',
	 * 				'value' => 'unread');
	 * @param array
	 * @return int
	 */
	function getCountNewItems($id, $criteria, $folder) {
		global $current_user;

		$sugarFolder = new SugarFolder();
		return $sugarFolder->getCountUnread($id);
	}

	/**
	 * Collects, sorts, and builds tree of user's folders
	 * @param objec $rootNode Reference to tree root node
	 * @param array $folderStates User pref folder open/closed states
	 * @param object $user Optional User in focus, default current_user
	 * @return array
	 */
	function getUserFolders(&$rootNode, $folderStates, $user=null, $forRefresh=false) {
		if(empty($user)) {
			global $current_user;
			$user = $current_user;
		}
		global $mod_strings;
		$folders = $this->retrieveFoldersForProcessing($user, true);
		$subscriptions = $this->getSubscriptions($user);

		$refresh = ($forRefresh) ? array() : null;

		if(!is_array($folderStates)) {
			$folderStates = array();
		}

		foreach($folders as $a) {
			if ($a['deleted'] == 1)
				continue;
			$label = ($a['name'] == 'My Email' ? $mod_strings['LNK_MY_INBOX'] : $a['name']);

			$unseen = $this->getCountNewItems($a['id'], array('field' => 'status', 'value' => 'unread'), $a);

			$folderNode = new ExtNode($a['id'], $label);
			$folderNode->dynamicloadfunction = '';
			$folderNode->expanded = false;

			if(array_key_exists('Home::'.$a['id'], $folderStates)) {
				if($folderStates['Home::'.$a['id']] == 'open') {
					$folderNode->expanded = true;
				}
			}
			$nodePath = "Home::".$folderNode->_properties['id'];

			$folderNode->dynamic_load = true;
	        //$folderNode->set_property('click', " SUGAR.email2.listView.populateListFrameSugarFolder(YAHOO.namespace('frameFolders').selectednode, '{$a['id']}', 'false');");
	        $folderNode->set_property('ieId', 'folder');
	        $folderNode->set_property('is_group', ($a['is_group'] == 1) ? 'true' : 'false');
	        $folderNode->set_property('is_dynamic', ($a['is_dynamic'] == 1) ? 'true' : 'false');
	        $folderNode->set_property('mbox', $folderNode->_properties['id']);
	        $folderNode->set_property('unseen', $unseen);
	        $folderNode->set_property('id', $a['id']);
	        $folderNode->set_property('folder_type', $a['folder_type']);
	        $folderNode->set_property('children', array());

			if(in_array($a['id'], $subscriptions) && $a['has_child'] == 1) {
				$qGetChildren = $this->core.$this->coreWhere."AND parent_folder = '{$a['id']}'";
				$rGetChildren = $this->db->query($qGetChildren);

				while ($aGetChildren = $this->db->fetchByAssoc($rGetChildren, false)) {
                    if (in_array($aGetChildren['id'], $subscriptions)) {
						$folderNode->add_node($this->buildTreeNodeFolders($aGetChildren, $nodePath, $folderStates, $subscriptions));
					}
				}
			}
			$rootNode->add_node($folderNode);
		}

		/* the code below is called only by Settings->Folders when selecting folders to subscribe to */
		if($forRefresh) {
			$metaNode = array();

			if(!empty($rootNode->nodes)) {
				foreach($rootNode->nodes as $node) {
					$metaNode[] = $this->buildTreeNodeRefresh($node, $subscriptions);
				}
			}
			return $metaNode;
		}
	}

	/**
	 * Builds up a metanode for folder refresh (Sugar folders only)
	 */
	function buildTreeNodeRefresh($folderNode, $subscriptions) {
		$metaNode = $folderNode->_properties;
		$metaNode['expanded'] = $folderNode->expanded;
		$metaNode['text'] = $folderNode->_label;
		if($metaNode['is_group'] == 'true') {
			$metaNode['cls'] = 'groupFolder';
		} else {
		    $metaNode['cls'] = 'sugarFolder';
		}
		$metaNode['id'] = $folderNode->_properties['id'];
		$metaNode['children'] = array();
		$metaNode['type'] = 1;
		$metaNode['leaf'] = false;
		$metaNode['isTarget'] = true;
		$metaNode['allowChildren'] = true;

		if(!empty($folderNode->nodes)) {
			foreach($folderNode->nodes as $node) {
				if(in_array($node->_properties['id'], $subscriptions))
					$metaNode['children'][] = $this->buildTreeNodeRefresh($node, $subscriptions);
			}
		}
		return $metaNode;
	}

	/**
	 * Builds children nodes for folders for TreeView
	 * @return $folderNode TreeView node
	 */
	function buildTreeNodeFolders($a, $nodePath, $folderStates, $subscriptions) {
		$label = $a['name'];
		global $mod_strings;
		if($a['name'] == 'My Drafts') {
			$label = $mod_strings['LBL_LIST_TITLE_MY_DRAFTS'];
		}
		if($a['name'] == 'Sent Emails') {
			$label = $mod_strings['LBL_LIST_TITLE_MY_SENT'];
		}
		$unseen = $this->getCountNewItems($a['id'], array('field' => 'status', 'value' => 'unread'), $a);

		$folderNode = new ExtNode($a['id'], $label);
		$folderNode->dynamicloadfunction = '';
		$folderNode->expanded = false;

		$nodePath .= "::{$a['id']}";

		if(array_key_exists($nodePath, $folderStates)) {
			if($folderStates[$nodePath] == 'open') {
				$folderNode->expanded = true;
			}
		}

		$folderNode->dynamic_load = true;
        $folderNode->set_property('click', "SUGAR.email2.listView.populateListFrameSugarFolder(YAHOO.namespace('frameFolders').selectednode, '{$a['id']}', 'false');");
        $folderNode->set_property('ieId', 'folder');
        $folderNode->set_property('mbox', $a['id']);
		$folderNode->set_property('is_group', ($a['is_group'] == 1) ? 'true' : 'false');
        $folderNode->set_property('is_dynamic', ($a['is_dynamic'] == 1) ? 'true' : 'false');
        $folderNode->set_property('unseen', $unseen);
	    $folderNode->set_property('folder_type', $a['folder_type']);

		if(in_array($a['id'], $subscriptions) && $a['has_child'] == 1) {
			$qGetChildren = $this->core.$this->coreWhere."AND parent_folder = '{$a['id']}' ".$this->coreOrderBy;
			$rGetChildren = $this->db->query($qGetChildren);

			while ($aGetChildren = $this->db->fetchByAssoc($rGetChildren, false)) {
				$folderNode->add_node($this->buildTreeNodeFolders($aGetChildren, $nodePath, $folderStates, $subscriptions));
			}
		}
		return $folderNode;
	}

	/**
	 * Flags a folder as deleted
	 * @return bool True on success
	 */
	function delete() {
		global $current_user;

		if(!empty($this->id)) {
			if($this->has_child) {
				$this->deleteChildrenCascade($this->id);
			}

			$ownerCheck = ($current_user->is_admin == 0) ? " AND created_by = '{$current_user->id}'" : "";
			$q = "UPDATE folders SET deleted = 1 WHERE id = '{$this->id}'{$ownerCheck}";
			$r = $this->db->query($q);
			return true;
		}
		return false;
	}

	/**
	 * Deletes all children in a cascade
	 * @param string $id ID of parent
	 * @return bool True on success
	 */
	function deleteChildrenCascade($id) {
		global $current_user;

		$canContinue = true;
		$checkInboundQuery = "SELECT count(*) c FROM inbound_email WHERE groupfolder_id = '{$id}' and deleted = 0";
		$resultSet = $this->db->query($checkInboundQuery);
		$a = $this->db->fetchByAssoc($resultSet);
		if ($a['c'] > 0) {
			return false;
		} // if

		$q = "SELECT COUNT(*) c from folders_rel where polymorphic_module = 'Emails' AND polymorphic_id = '{$id}' AND folder_id = '{$this->id}'";

		$checkEmailQuery = "SELECT count(*) c FROM folders_rel where polymorphic_module = 'Emails' and folder_id = '{$id}' and deleted = 0";
		$resultSet = $this->db->query($checkEmailQuery);
		$a = $this->db->fetchByAssoc($resultSet);
		if ($a['c'] > 0) {
			return false;
		} // if

		$q = "SELECT * FROM folders WHERE id = '{$id}'";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if($a['has_child'] == 1) {
			$q2 = "SELECT id FROM folders WHERE parent_folder = '{$id}'";
			$r2 = $this->db->query($q2);

			while($a2 = $this->db->fetchByAssoc($r2)) {
				$canContinue = $this->deleteChildrenCascade($a2['id']);
			}
		}

		if ($canContinue) {
			// flag deleted
			$ownerCheck = ($current_user->is_admin == 0) ? " AND created_by = '{$current_user->id}'" : "";
			$q3 = "UPDATE folders SET deleted = 1 WHERE id = '{$id}'{$ownerCheck}";
			$r3 = $this->db->query($q3);

			// flag rels
			$qRel = "UPDATE folders_rel SET deleted = 1 WHERE folder_id = '{$id}'";
			$rRel = $this->db->query($qRel);

			// delete subscriptions
			$qSub = "DELETE FROM folders_subscriptions WHERE folder_id = '{$id}'";
			$rSub = $this->db->query($qSub);
		}
		return $canContinue;
		//_pp($q3);_pp($qRel);_pp($qSub);
	}

    /**
     * Outputs a correct string for the sql statement according to value.
     *
     * @param mixed $val Query value.
     * @return Safe query string
     */
    public function massageValue($val, $fieldDef)
    {
        switch($fieldDef['type']) {
            case 'varchar':
                $val = $this->db->decodeHTML($val);
                break;
            case 'uint':
            case 'tinyint':
            case 'int':
                return intval($val);
        }
        if (empty($val)) {
            return 'NULL';
        }
        return $this->db->quoted($val);
    }

    /**
     * Return the default mapping values.
     *
     * @return array Mapping key-value pairs.
     */
    protected function getFieldMapping()
    {
        global $current_user;
        return array(
            'created_by' => $current_user->id,
            'modified_by' => $current_user->id,
            'dynamic_query' => $this->dynamic_query,
            'deleted' => 0,
        );
    }

    /**
     * Return the safe field value for query.
     *
     * @param string $field Name of field.
     * @param array $fieldMapping Key-value pair for mapping default values.
     * @return string Safe field value.
     */
    protected function getFieldValue($field, $fieldMapping) {
        if (isset($this->$field)) {
            return $this->massageValue($this->$field, $this->fields[$field]);
        } elseif (isset($fieldMapping[$field])) {
            return $this->massageValue($fieldMapping[$field], $this->fields[$field]);
        }
        return "NULL";
    }

    /**
     * Generate insert SQL query command for SugarFolders.
     *
     * @param array $fieldNames Database field sets.
     * @param array $fieldMapping Key-value pair for mapping default values.
     * @return string Generated SQL query.
     */
    protected function getInsertQuery($fieldNames, $fieldMapping = array())
    {
        $values = array();
        foreach ($fieldNames as $field) {
            $values[] = $this->getFieldValue($field, $fieldMapping);
        }
        return "INSERT INTO folders (".implode(",", $fieldNames).") VALUES(".implode(",", $values).")";
    }

    /**
     * Generate update SQL query command for SugarFolders.
     *
     * @param array $fieldNames Database field sets.
     * @param array $fieldMapping Key-value pair for mapping default values.
     * @return string Generated SQL query.
     */
    protected function getUpdateQuery($fieldNames, $fieldMapping = array())
    {
        $columns = array();
        $where = "where id = " . $this->db->quoted($this->id);

        foreach (array_filter($fieldNames, array($this, 'isNotId')) as $field) {
            $columns[] = "{$field}=" . $this->getFieldValue($field, $fieldMapping);
        }

        return "UPDATE folders SET ".implode(",", $columns)." $where";
    }

    /**
     * Return true if field is not id
     *
     * @param $field
     * @return bool
     */
    private function isNotId($field) {
        return $field !== "id";
    }

	/**
	 * Saves folder
	 * @return bool
	 */
	function save($addSubscriptions = TRUE) {

		if((empty($this->id) && $this->new_with_id == false) || (!empty($this->id) && $this->new_with_id == true))
		{

		    if( empty($this->id) )
		    {
			    $guid = create_guid();
			    $this->id = $guid;
		    }

            $q = $this->getInsertQuery(array_keys($this->fields), $this->getFieldMapping());

			if($addSubscriptions)
			{
			    // create default subscription
			    $this->addSubscriptionsToGroupFolder();
			}

			// if parent_id is set, update parent's has_child flag
            $q3 = "UPDATE folders SET has_child = 1 WHERE id = " . $this->db->quoted($this->parent_folder);
			$r3 = $this->db->query($q3);
		}
		else {
            $q = $this->getUpdateQuery(array_keys($this->fields), $this->getFieldMapping());
		}

		$this->db->query($q, true);

		return true;
	}

	/**
	 * Add subscriptions to this group folder.
	 *
	 */
	function addSubscriptionsToGroupFolder()
	{
	    global $current_user;

	    $this->createSubscriptionForUser($current_user->id);

	    if ($this->is_group)
	    {
	        require_once("modules/Teams/Team.php");
	        $team = BeanFactory::getBean('Teams', $this->team_id);
	        $usersList = $team->get_team_members(true);
	        foreach($usersList as $userObject)
	           $this->createSubscriptionForUser($userObject->id);
	    }
	}



    /**
	 * Add subscriptions to this group folder.
	 *
	 */
	function createSubscriptionForUser($user_id)
	{
	   $guid2 = create_guid();
        $query = sprintf(
            'INSERT INTO folders_subscriptions VALUES(%s, %s, %s)',
            $this->db->quoted($guid2),
            $this->db->quoted($this->id),
            $this->db->quoted($user_id)
        );
	   $this->db->query($query);
	}


	function updateFolder($fields) {
		global $current_user;

		$this->dynamic_query = $this->db->quote($this->dynamic_query);
		$id = $fields['record'];
		$name = $fields['name'];
		$parent_folder = $fields['parent_folder'];
		$team_id = $fields['team_id'];
		$team_set_id = $fields['team_set_id'];
		// first do the retrieve
		$this->retrieve($id);
		if ($this->has_child) {
			$childrenArray = array();
			$this->findAllChildren($id, $childrenArray);
			if (in_array($parent_folder, $childrenArray)) {
				return array('status' => "failed", 'message' => "Can not add this folder to its children");
			}
		}
		// update has_child to 0 for this parent folder if this is the only child it has
        $q1 = "select count(*) count from folders
            where deleted = 0 AND parent_folder = " . $this->db->quoted($this->parent_folder);
		$r1 = $this->db->query($q1);
		$a1 = $this->db->fetchByAssoc($r1);
		if ($a1['count'] == 1) {
            $q1 = "UPDATE folders SET has_child = 0 WHERE id = " . $this->db->quoted($this->parent_folder);
			$r1 = $this->db->query($q1);
		} // if


		$this->name = $name;
		$this->parent_folder = $parent_folder;
		$this->team_id = $team_id;
		$this->team_set_id = $team_set_id;

        $q2 = $this->getUpdateQuery(array(
                'dynamic_query',
                'parent_folder',
                'team_set_id',
                'team_id',
                'modified_by'
            ), $this->getFieldMapping());

		$r2 = $this->db->query($q2);
		if (!empty($this->parent_folder)) {
            $q3 = "UPDATE folders SET has_child = 1 WHERE id = " . $this->db->quoted($this->parent_folder);
			$r3 = $this->db->query($q3);
		} // if
		return array('status' => "done");

	} // fn

	function findAllChildren($folderId, &$childrenArray) {
        $q = "SELECT * FROM folders WHERE id = " . $this->db->quoted($folderId);
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r, false);

		if($a['has_child'] == 1) {
            $q2 = "SELECT id FROM folders WHERE deleted = 0 AND parent_folder = " . $this->db->quoted($folderId);
			$r2 = $this->db->query($q2);

			while($a2 = $this->db->fetchByAssoc($r2)) {
				$childrenArray[] = $a2['id'];
				$this->findAllChildren($a2['id'], $childrenArray);
			} // while
		} // if

	} // fn

	/**
	 * Retrieves and populates object
	 * @param string $id ID of folder
	 * @return bool True on success
	 */
	function retrieve($id) {
        global $dictionary;
        require_once 'modules/TableDictionary.php';

        $q = "SELECT * FROM folders WHERE id = " . $this->db->quoted($id) . " AND deleted = 0";
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if(!empty($a)) {
            if (isset($a['dynamic_query'])) {
                $a['dynamic_query'] = from_html($a['dynamic_query']);
            }

            $fields = array();
            foreach ($dictionary['folders']['fields'] as $field) {
                $fields[$field['name']] = $field['type'];
            }

			foreach($a as $k => $v) {
                if (isset($fields[$k])) {
                    $v = $this->db->fromConvert($v, $fields[$k]);
                }
				$this->$k = $v;
			}
			return true;
		}

		return false;
	}


    /**
     * Generates clause for excluding emails that are placed into non-dynamic child folders of a dynamic one
     * @return string SQL 'NOT IN' clause
     */
    protected function addNonDynamicChildFoldersClause()
    {
        $allChildFolders = array();
        $folders = array();
        $this->findAllChildren($this->id, $allChildFolders);
        foreach ($allChildFolders as $value) {
            $folders[] = $this->db->quoted($value);
        }
        $foldersToExcludeString = implode($folders, ', ');
        $clause = '';
        if (!empty($foldersToExcludeString)) {
            $clause = <<<SQL
 AND emails.id NOT IN (
 SELECT DISTINCT(folders_rel.polymorphic_id) FROM folders_rel
  WHERE folders_rel.polymorphic_module = 'Emails' AND folders_rel.folder_id IN ({$foldersToExcludeString})
  AND folders_rel.deleted = 0
 )
SQL;
        }
        return $clause;
    }

} // end class def
