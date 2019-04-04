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
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN tct3_noviable
 */


class tct3_noviable_sugar extends Basic {
    public $new_schema = true;
    public $module_dir = 'tct3_noviable';
    public $object_name = 'tct3_noviable';
    public $table_name = 'tct3_noviable';
    public $importable = false;
    public $team_id;
    public $team_set_id;
    public $acl_team_set_id;
    public $team_count;
    public $team_name;
    public $acl_team_names;
    public $team_link;
    public $team_count_link;
    public $teams;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $tag;
    public $tag_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $activities;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
    public $locked_fields;
    public $locked_fields_link;
    public $no_viable_leasing_chk_c;
    public $no_viable_factoraje_chk_c;
    public $no_viable_ca_chk_c;
    public $razones_leasing_ddw_c;
    public $razones_factoraje_ddw_c;
    public $razones_ca_ddw_c;
    public $fuera_perfil_l_ddw_c;
    public $fuera_perfil_f_ddw_c;
    public $fuera_perfil_ca_ddw_c;
    public $tct_competencia_quien_l_txf_c;
    public $tct_competencia_porque_l_txf_c;
    public $no_producto_requiere_l_ddw_c;
    public $tct_competencia_quien_f_txf_c;
    public $tct_competencia_porque_f_txf_c;
    public $no_producto_requiere_f_ddw_c;
    public $tct_competencia_quien_ca_txf_c;
    public $tct_competencia_porque_ca_txf_c;
    public $no_producto_requiere_ca_ddw_c;
    public $user_id_c;
    public $tct_promotornvleasing_c;
    public $user_id1_c;
    public $tct_promotornvfactoraje_c;
    public $user_id2_c;
    public $tct_promotornvca_c;
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}