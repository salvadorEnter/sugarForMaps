<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
$fields = array(
    array(
        'name' => 'name',
        'displayParams' => array(
            'required' => true,
            'wireless_edit_only' => true,
        )
    ),
    'amount',
    'account_name',
    'date_closed',
    array(
        'name' => 'sales_status',
        'readonly' => true,
    ),
    'assigned_user_name',
    'team_name',
);

// here we add `sales_stage` for `pro` and `corporate` flavors

$viewdefs['Opportunities']['mobile']['view']['edit'] = array(
    'templateMeta' => array(
        'maxColumns' => '1',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
        ),
    ),
    'panels' => array(
        array(
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => $fields
        )
    ),
);
?>