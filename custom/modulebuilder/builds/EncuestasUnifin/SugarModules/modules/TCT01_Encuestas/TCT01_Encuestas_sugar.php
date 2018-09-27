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
 * PLACE ANY CUSTOMIZATIONS IN TCT01_Encuestas
 */


class TCT01_Encuestas_sugar extends Basic {
    public $new_schema = true;
    public $module_dir = 'TCT01_Encuestas';
    public $object_name = 'TCT01_Encuestas';
    public $table_name = 'tct01_encuestas';
    public $importable = true;
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
    public $tct_pregunta_1_txf;
    public $tct_pregunta_2_txf;
    public $tct_pregunta_3_txf;
    public $tct_pregunta_4_txf;
    public $tct_pregunta_5_txf;
    public $tct_pregunta_6_txf;
    public $tct_pregunta_7_txf;
    public $tct_pregunta_8_txf;
    public $tct_pregunta_9_txf;
    public $tct_pregunta_10_txf;
    public $tct_respuesta_1_txf;
    public $tct_respuesta_2_txf;
    public $tct_respuesta_3_txf;
    public $tct_respuesta_4_txf;
    public $tct_respuesta_5_txf;
    public $tct_respuesta_6_txf;
    public $tct_respuesta_7_txf;
    public $tct_respuesta_8_txf;
    public $tct_respuesta_9_txf;
    public $tct_respuesta_10_txf;
    public $tct_correo_txf;
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}