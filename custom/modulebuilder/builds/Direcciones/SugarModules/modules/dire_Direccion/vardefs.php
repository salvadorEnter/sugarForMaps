<?php

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

$dictionary['dire_Direccion'] = array(
    'table' => 'dire_direccion',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'calle' => 
  array (
    'required' => false,
    'name' => 'calle',
    'vname' => 'LBL_CALLE',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '100',
    'size' => '20',
  ),
  'numext' => 
  array (
    'required' => false,
    'name' => 'numext',
    'vname' => 'LBL_NUMEXT',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '50',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'numint' => 
  array (
    'required' => false,
    'name' => 'numint',
    'vname' => 'LBL_NUMINT',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '50',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'inactivo' => 
  array (
    'required' => false,
    'name' => 'inactivo',
    'vname' => 'LBL_INACTIVO',
    'type' => 'bool',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'tipodedireccion' => 
  array (
    'required' => false,
    'name' => 'tipodedireccion',
    'vname' => 'LBL_TIPODEDIRECCION',
    'type' => 'multienum',
    'massupdate' => true,
    'default' => '^^',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'size' => '20',
    'options' => 'Parentesco_list',
    'studio' => 'visible',
    'dependency' => '',
    'isMultiSelect' => true,
  ),
  'principal' => 
  array (
    'required' => false,
    'name' => 'principal',
    'vname' => 'LBL_PRINCIPAL',
    'type' => 'bool',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'secuencia' => 
  array (
    'required' => false,
    'name' => 'secuencia',
    'vname' => 'LBL_SECUENCIA',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'indicador' => 
  array (
    'required' => false,
    'name' => 'indicador',
    'vname' => 'LBL_INDICADOR',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '0',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'dir_Indicador_list',
    'studio' => 'visible',
    'dependency' => false,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager')){
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('dire_Direccion','dire_Direccion', array('basic','team_security','assignable'));