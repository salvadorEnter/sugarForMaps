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

$dictionary['tct_PLD'] = array(
    'table' => 'tct_pld',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'tct_pld_campo1_txt' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo1_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO1_TXT',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '30',
    'size' => '20',
  ),
  'tct_pld_campo2_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo2_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO2_DDW',
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
    'options' => 'ctpldidproveedorrecursosclie_list',
    'dependency' => false,
  ),
  'account_id_c' => 
  array (
    'required' => false,
    'name' => 'account_id_c',
    'vname' => 'LBL_TCT_PLD_CAMPO3_REL_ACCOUNT_ID',
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
  'tct_pld_campo3_rel' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'tct_pld_campo3_rel',
    'vname' => 'LBL_TCT_PLD_CAMPO3_REL',
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
    'dependency' => 'equal($tct_pld_campo2_ddw,"2")',
    'len' => '255',
    'size' => '20',
    'id_name' => 'account_id_c',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'tct_pld_campo4_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo4_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO4_DDW',
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
    'options' => 'ctpldidproveedorrecursosson_list',
    'dependency' => false,
  ),
  'account_id1_c' => 
  array (
    'required' => false,
    'name' => 'account_id1_c',
    'vname' => 'LBL_TCT_PLD_CAMPO5_REL_ACCOUNT_ID',
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
  'tct_pld_campo5_rel' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'tct_pld_campo5_rel',
    'vname' => 'LBL_TCT_PLD_CAMPO5_REL',
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
    'dependency' => 'equal($tct_pld_campo4_ddw,"2")',
    'len' => '255',
    'size' => '20',
    'id_name' => 'account_id1_c',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'tct_pld_campo6_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo6_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO6_DDW',
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
    'default' => 'Si',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tct_pagoanticipado_list',
    'dependency' => false,
  ),
  'tct_pld_campo7_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo7_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO7_DDW',
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
    'default' => 'Si',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tct_cpld_pregunta_u1_ddw_list',
    'dependency' => false,
  ),
  'tct_pld_campo8_txt' => 
  array (
    'required' => true,
    'name' => 'tct_pld_campo8_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO8_TXT',
    'type' => 'varchar',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
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
    'dependency' => 'equal($tct_pld_campo7_ddw,"Si")',
    'len' => '255',
    'size' => '20',
  ),
  'tct_pld_campo9_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo9_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO9_DDW',
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
    'default' => 'Si',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tct_cpld_pregunta_u3_ddw_list',
    'dependency' => false,
  ),
  'tct_pld_campo10_txt' => 
  array (
    'required' => true,
    'name' => 'tct_pld_campo10_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO10_TXT',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'dependency' => 'equal($tct_pld_campo9_ddw,"Si")',
    'len' => '255',
    'size' => '20',
  ),
  'tct_pld_campo11_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo11_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO11_DDW',
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
    'default' => 'Si',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tct_cpld_pregunta9_desp_list',
    'dependency' => false,
  ),
  'tct_pld_campo12_txt' => 
  array (
    'required' => true,
    'name' => 'tct_pld_campo12_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO12_TXT',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'dependency' => 'equal($tct_pld_campo11_ddw,"No")',
    'len' => '255',
    'size' => '20',
  ),
  'tct_pld_campo13_chk' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo13_chk',
    'vname' => 'LBL_TCT_PLD_CAMPO13_CHK',
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
  'tct_pld_campo14_chk' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo14_chk',
    'vname' => 'LBL_TCT_PLD_CAMPO14_CHK',
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
  'tct_pld_campo15_txt' => 
  array (
    'required' => true,
    'name' => 'tct_pld_campo15_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO15_TXT',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'dependency' => 'equal($tct_pld_campo14_chk,true)',
    'len' => '200',
    'size' => '20',
  ),
  'tct_pld_campo16_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo16_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO16_DDW',
    'type' => 'multienum',
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
    'options' => 'tct_inst_monetario_ddw_list',
    'default' => '',
    'dependency' => '',
    'isMultiSelect' => true,
  ),
  'tct_pld_campo17_txt' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo17_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO17_TXT',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '200',
    'size' => '20',
  ),
  'tct_pld_campo18_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo18_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO18_DDW',
    'type' => 'multienum',
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
    'options' => 'tct_instmonetario_csddw_list',
    'default' => '',
    'dependency' => '',
    'isMultiSelect' => true,
  ),
  'tct_pld_campo19_txt' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo19_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO19_TXT',
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
  ),
  'tct_pld_campo20_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo20_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO20_DDW',
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
    'options' => 'tct_destinorecursos_csddw_list',
    'dependency' => false,
  ),
  'tct_pld_campo21_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo21_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO21_DDW',
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
    'options' => 'tct_pldcampo1_ff_ddw_list',
    'dependency' => false,
  ),
  'tct_pld_campo22_int' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo22_int',
    'vname' => 'LBL_TCT_PLD_CAMPO22_INT',
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
    'default' => '0',
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
    'min' => 0,
    'max' => false,
    'validation' => 
    array (
      'type' => 'range',
      'min' => 0,
      'max' => false,
    ),
  ),
  'tct_pld_campo23_dec' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo23_dec',
    'vname' => 'LBL_TCT_PLD_CAMPO23_DEC',
    'type' => 'currency',
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
    'default' => 0,
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'currency_id' => 
  array (
    'required' => false,
    'name' => 'currency_id',
    'vname' => 'LBL_CURRENCY_ID',
    'type' => 'currency_id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
    'dbType' => 'id',
    'studio' => false,
    'function' => 'getCurrencies',
    'function_bean' => 'Currencies',
  ),
  'base_rate' => 
  array (
    'required' => false,
    'name' => 'base_rate',
    'vname' => 'LBL_CURRENCY_RATE',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'label' => 'LBL_CURRENCY_RATE',
    'studio' => false,
  ),
  'tct_pld_campo24_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo24_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO24_DDW',
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
    'options' => 'tct_plddestinorecursos_ff_ddw_list',
    'dependency' => false,
  ),
  'tct_pld_campo25_ddw' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo25_ddw',
    'vname' => 'LBL_TCT_PLD_CAMPO25_DDW',
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
    'options' => 'tct_cpld_pregunta10_desp_list',
    'dependency' => false,
  ),
  'tct_pld_campo26_txt' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo26_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO26_TXT',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'dependency' => 'equal($tct_pld_campo25_ddw,"2")',
    'len' => '255',
    'size' => '20',
  ),
  'tct_pld_campo27_txt' => 
  array (
    'required' => false,
    'name' => 'tct_pld_campo27_txt',
    'vname' => 'LBL_TCT_PLD_CAMPO27_TXT',
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
    'default' => '',
    'full_text_search' => 
    array (
      'enabled' => '0',
      'boost' => '1',
      'searchable' => false,
    ),
    'calculated' => false,
    'len' => '200',
    'size' => '20',
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
VardefManager::createVardef('tct_PLD','tct_PLD', array('basic','team_security','assignable','taggable'));