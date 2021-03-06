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
/*********************************************************************************

 * Description:
 ********************************************************************************/







// Shipper is used to store customer information.
class Shipper extends SugarBean {
	// Stored fields
	var $id;
	var $deleted;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $name;
	var $status;

	var $table_name = "shippers";
	var $rel_products = "product_templates";
	var $module_dir = 'Shippers';
	var $object_name = "Shipper";

	var $new_schema = true;

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array();

    /**
     * @deprecated Use __construct() instead
     */
    public function Shipper()
    {
        self::__construct();
    }

	public function __construct() {
		parent::__construct();
		$this->disable_row_level_security =true;
	}


	function get_summary_text()
	{
		return "$this->name";
	}

	function get_shippers($add_blank=false,$status='Active')
	{
		$query = "SELECT id, name FROM $this->table_name where deleted=0 ";
		if ($status=='Active') {
			$query .= " and status='Active' ";
		}
		elseif ($status=='Inactive') {
			$query .= " and status='Inactive' ";
		}
		elseif ($status=='All') {
		}
		$query .= " order by list_order asc";
		$result = $this->db->query($query, false);
		
        $GLOBALS['log']->debug("get_shippers: result is ".print_r($result, true));

		$list = array();
		if ($add_blank) {
			$list['']='';
		}
		//if($this->db->getRowCount($result) > 0){
			// We have some data.
			while (($row = $this->db->fetchByAssoc($result)) != null) {
			//while ($row = $this->db->fetchByAssoc($result)) {
				$list[$row['id']] = $row['name'];
				$GLOBALS['log']->debug("row id is:".$row['id']);
				$GLOBALS['log']->debug("row name is:".$row['name']);
			}
		//}
		return $list;
	}

    public function save_relationship_changes($is_update, $exclude = array())
    {

    }

	function clear_product_shipper_relationship($shipper_id)
	{
		//$query = "UPDATE $this->rel_products set shipper_id='' where (shipper_id='$shipper_id') and deleted=0";
		//$this->db->query($query,true,"Error clearing shipper to shipper relationship: ");
	}

	function mark_relationships_deleted($id)
	{
		$this->clear_product_shipper_relationship($id);
	}

	function fill_in_additional_list_fields()
	{
		$this->fill_in_additional_detail_fields();
	}

	function fill_in_additional_detail_fields()
	{
	}

	function get_list_view_data(){
		$temp_array = $this->get_list_view_array();

        $temp_array["ENCODED_NAME"]=$this->name;
//    	$temp_array["ENCODED_NAME"]=htmlspecialchars($this->name, ENT_QUOTES);
    	return $temp_array;

	}
	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string) {
	$where_clauses = Array();
	$the_query_string = $this->db->quote($the_query_string);
	array_push($where_clauses, "name like '$the_query_string%'");

	$the_where = "";
	foreach($where_clauses as $clause)
	{
		if($the_where != "") $the_where .= " or ";
		$the_where .= $clause;
	}


	return $the_where;
}


}

?>