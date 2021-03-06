<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

global $mod_strings;
$popupMeta = array('moduleMain' => 'ACLRole',
	'varName' => 'ROLE',
	'listTitle' => $mod_strings['LBL_ROLE'],
	'orderBy' => 'name',
	'whereClauses' => array('name' => 'acl_roles.name'),
	'searchInputs' => array('name'),
	'searchdefs'   => array('name' => array('name' => 'name', 'label' => 'LBL_NAME',),)		
);
?>
 
 