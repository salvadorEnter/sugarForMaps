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
$vardefs = array (
  'fields' => 
  array (
    'account_id_c' => 
    array (
      'required' => false,
      'name' => 'account_id_c',
      'vname' => 'LBL_TCT_RELACIONADO_CON_C_ACCOUNT_ID',
      'type' => 'id',
      'massupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => 1,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'tct_relacionado_con_c' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'tct_relacionado_con_c',
      'vname' => 'LBL_TCT_RELACIONADO_CON_C',
      'type' => 'relate',
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
      'id_name' => 'account_id_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'tct_cliente_no_interesado_chk' => 
    array (
      'required' => false,
      'name' => 'tct_cliente_no_interesado_chk',
      'vname' => 'LBL_TCT_CLIENTE_NO_INTERESADO_CHK',
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
      'default' => false,
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'tct_programa_nueva_reunion_chk' => 
    array (
      'required' => false,
      'name' => 'tct_programa_nueva_reunion_chk',
      'vname' => 'LBL_TCT_PROGRAMA_NUEVA_REUNION_CHK',
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
      'default' => false,
      'calculated' => false,
      'len' => '255',
      'size' => '20',
    ),
    'tct_motivo_c' => 
    array (
      'required' => false,
      'name' => 'tct_motivo_c',
      'vname' => 'LBL_TCT_MOTIVO_C',
      'type' => 'enum',
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
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'motivo_list',
      'dependency' => false,
    ),
    'fecha_y_hora_c' => 
    array (
      'required' => false,
      'name' => 'fecha_y_hora_c',
      'vname' => 'LBL_FECHA_Y_HORA_C',
      'type' => 'datetimecombo',
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
      'dbType' => 'datetime',
    ),
  ),
  'relationships' => 
  array (
  ),
);