<?php

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

$dictionary['tct02_Resumen'] = array(
    'table' => 'tct02_resumen',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'id_persona' => 
  array (
    'required' => false,
    'name' => 'id_persona',
    'vname' => 'LBL_ID_PERSONA',
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
    'unified_search' => true,
    'merge_filter' => 'disabled',
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => true,
      'boost' => '1.9',
      'searchable' => true,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'leasing_fecha_pago' => 
  array (
    'required' => false,
    'name' => 'leasing_fecha_pago',
    'vname' => 'LBL_LEASING_FECHA_PAGO',
    'type' => 'date',
    'massupdate' => true,
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
    'enable_range_search' => false,
  ),
  'leasing_anexos_activos' => 
  array (
    'required' => false,
    'name' => 'leasing_anexos_activos',
    'vname' => 'LBL_LEASING_ANEXOS_ACTIVOS',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'leasing_anexos_historicos' => 
  array (
    'required' => false,
    'name' => 'leasing_anexos_historicos',
    'vname' => 'LBL_LEASING_ANEXOS_HISTORICOS',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'factoring_fecha_pago' => 
  array (
    'required' => false,
    'name' => 'factoring_fecha_pago',
    'vname' => 'LBL_FACTORING_FECHA_PAGO',
    'type' => 'date',
    'massupdate' => true,
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
    'enable_range_search' => false,
  ),
  'factoring_anexos_activos' => 
  array (
    'required' => false,
    'name' => 'factoring_anexos_activos',
    'vname' => 'LBL_FACTORING_ANEXOS_ACTIVOS',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'factoring_anexos_historicos' => 
  array (
    'required' => false,
    'name' => 'factoring_anexos_historicos',
    'vname' => 'LBL_FACTORING_ANEXOS_HISTORICOS',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'cauto_fecha_pago' => 
  array (
    'required' => false,
    'name' => 'cauto_fecha_pago',
    'vname' => 'LBL_CAUTO_FECHA_PAGO',
    'type' => 'date',
    'massupdate' => true,
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
    'enable_range_search' => false,
  ),
  'cauto_anexos_activos' => 
  array (
    'required' => false,
    'name' => 'cauto_anexos_activos',
    'vname' => 'LBL_CAUTO_ANEXOS_ACTIVOS',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'cauto_anexos_historicos' => 
  array (
    'required' => false,
    'name' => 'cauto_anexos_historicos',
    'vname' => 'LBL_CAUTO_ANEXOS_HISTORICOS',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
}
VardefManager::createVardef('tct02_Resumen','tct02_Resumen', array('basic','assignable','taggable'));