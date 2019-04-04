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
    'no_viable_leasing_chk_c' => 
    array (
      'required' => false,
      'name' => 'no_viable_leasing_chk_c',
      'vname' => 'LBL_NO_VIABLE_LEASING_CHK_C',
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
      'pii' => false,
      'default' => false,
      'calculated' => false,
      'size' => '20',
    ),
    'no_viable_factoraje_chk_c' => 
    array (
      'required' => false,
      'name' => 'no_viable_factoraje_chk_c',
      'vname' => 'LBL_NO_VIABLE_FACTORAJE_CHK_C',
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
      'pii' => false,
      'default' => false,
      'calculated' => false,
      'size' => '20',
    ),
    'no_viable_ca_chk_c' => 
    array (
      'required' => false,
      'name' => 'no_viable_ca_chk_c',
      'vname' => 'LBL_NO_VIABLE_CA_CHK_C',
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
      'pii' => false,
      'default' => false,
      'calculated' => false,
      'size' => '20',
    ),
    'razones_leasing_ddw_c' => 
    array (
      'required' => false,
      'name' => 'razones_leasing_ddw_c',
      'vname' => 'LBL_RAZONES_LEASING_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'razones_ddw_list',
      'dependency' => false,
    ),
    'razones_factoraje_ddw_c' => 
    array (
      'required' => false,
      'name' => 'razones_factoraje_ddw_c',
      'vname' => 'LBL_RAZONES_FACTORAJE_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'razones_ddw_list',
      'dependency' => false,
    ),
    'razones_ca_ddw_c' => 
    array (
      'required' => false,
      'name' => 'razones_ca_ddw_c',
      'vname' => 'LBL_RAZONES_CA_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'razones_ddw_list',
      'dependency' => false,
    ),
    'fuera_perfil_l_ddw_c' => 
    array (
      'required' => false,
      'name' => 'fuera_perfil_l_ddw_c',
      'vname' => 'LBL_FUERA_PERFIL_L_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'fuera_de_perfil_ddw_list',
      'dependency' => false,
    ),
    'fuera_perfil_f_ddw_c' => 
    array (
      'required' => false,
      'name' => 'fuera_perfil_f_ddw_c',
      'vname' => 'LBL_FUERA_PERFIL_F_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'fuera_de_perfil_ddw_list',
      'dependency' => false,
    ),
    'fuera_perfil_ca_ddw_c' => 
    array (
      'required' => false,
      'name' => 'fuera_perfil_ca_ddw_c',
      'vname' => 'LBL_FUERA_PERFIL_CA_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'fuera_de_perfil_ddw_list',
      'dependency' => false,
    ),
    'tct_competencia_quien_l_txf_c' => 
    array (
      'required' => false,
      'name' => 'tct_competencia_quien_l_txf_c',
      'vname' => 'LBL_TCT_COMPETENCIA_QUIEN_L_TXF_C',
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
      'pii' => false,
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'tct_competencia_porque_l_txf_c' => 
    array (
      'required' => false,
      'name' => 'tct_competencia_porque_l_txf_c',
      'vname' => 'LBL_TCT_COMPETENCIA_PORQUE_L_TXF_C',
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
      'pii' => false,
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
    'no_producto_requiere_l_ddw_c' => 
    array (
      'required' => false,
      'name' => 'no_producto_requiere_l_ddw_c',
      'vname' => 'LBL_NO_PRODUCTO_REQUIERE_L_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'no_producto_requiere_list',
      'dependency' => false,
    ),
    'tct_competencia_quien_f_txf_c' => 
    array (
      'required' => false,
      'name' => 'tct_competencia_quien_f_txf_c',
      'vname' => 'LBL_TCT_COMPETENCIA_QUIEN_F_TXF_C',
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
      'pii' => false,
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'tct_competencia_porque_f_txf_c' => 
    array (
      'required' => false,
      'name' => 'tct_competencia_porque_f_txf_c',
      'vname' => 'LBL_TCT_COMPETENCIA_PORQUE_F_TXF_C',
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
      'pii' => false,
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
    'no_producto_requiere_f_ddw_c' => 
    array (
      'required' => false,
      'name' => 'no_producto_requiere_f_ddw_c',
      'vname' => 'LBL_NO_PRODUCTO_REQUIERE_F_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'no_producto_requiere_list',
      'dependency' => false,
    ),
    'tct_competencia_quien_ca_txf_c' => 
    array (
      'required' => false,
      'name' => 'tct_competencia_quien_ca_txf_c',
      'vname' => 'LBL_TCT_COMPETENCIA_QUIEN_CA_TXF_C',
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
      'pii' => false,
      'default' => '',
      'full_text_search' => 
      array (
        'enabled' => '0',
        'boost' => '1',
        'searchable' => false,
      ),
      'calculated' => false,
      'len' => '100',
      'size' => '20',
    ),
    'tct_competencia_porque_ca_txf_c' =>
    array (
      'required' => false,
      'name' => 'tct_competencia_porque_ca_txf_c',
      'vname' => 'LBL_TCT_COMPETENCIA_PORQUE_CA_TXF_C',
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
      'pii' => false,
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
    'no_producto_requiere_ca_ddw_c' => 
    array (
      'required' => false,
      'name' => 'no_producto_requiere_ca_ddw_c',
      'vname' => 'LBL_NO_PRODUCTO_REQUIERE_CA_DDW_C',
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
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'no_producto_requiere_list',
      'dependency' => false,
    ),
    'user_id_c' => 
    array (
      'required' => false,
      'name' => 'user_id_c',
      'vname' => 'LBL_TCT_PROMOTORNVLEASING_C_USER_ID',
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
      'pii' => false,
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'tct_promotornvleasing_c' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'tct_promotornvleasing_c',
      'vname' => 'LBL_TCT_PROMOTORNVLEASING_C',
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
      'pii' => false,
      'calculated' => false,
      'len' => 255,
      'size' => '20',
      'id_name' => 'user_id_c',
      'ext2' => 'Users',
      'module' => 'Users',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'user_id1_c' => 
    array (
      'required' => false,
      'name' => 'user_id1_c',
      'vname' => 'LBL_TCT_PROMOTORNVFACTORAJE_C_USER_ID',
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
      'pii' => false,
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'tct_promotornvfactoraje_c' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'tct_promotornvfactoraje_c',
      'vname' => 'LBL_TCT_PROMOTORNVFACTORAJE_C',
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
      'pii' => false,
      'calculated' => false,
      'len' => 255,
      'size' => '20',
      'id_name' => 'user_id1_c',
      'ext2' => 'Users',
      'module' => 'Users',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'user_id2_c' => 
    array (
      'required' => false,
      'name' => 'user_id2_c',
      'vname' => 'LBL_TCT_PROMOTORNVCA_C_USER_ID',
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
      'pii' => false,
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'tct_promotornvca_c' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'tct_promotornvca_c',
      'vname' => 'LBL_TCT_PROMOTORNVCA_C',
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
      'pii' => false,
      'calculated' => false,
      'len' => 255,
      'size' => '20',
      'id_name' => 'user_id2_c',
      'ext2' => 'Users',
      'module' => 'Users',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
  ),
  'relationships' => 
  array (
  ),
);