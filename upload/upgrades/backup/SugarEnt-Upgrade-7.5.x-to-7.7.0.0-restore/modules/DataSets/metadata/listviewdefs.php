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

$listViewDefs['DataSets'] = array(
	'NAME' => array(
		'width' => '30', 
		'label' => 'LBL_LIST_NAME', 
		'link' => true,
        'default' => true), 
	'QUERY_TYPE' => array(
		'width' => '25', 
		'label' => 'LBL_TYPE',
        'default' => true 
		),
	'QUERY_NAME' => array(
		'width' => '35', 
		'label' => 'LBL_QUERY_NAME',
        'default' => true 
		),
);
?>
