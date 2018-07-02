<?php
//Variables globales
global $current_user;
global $app_list_strings;
$admin=$current_user->is_admin;
$cac = $current_user->cac_c;
$id = $app_list_strings['tct_persona_generica_list']['accid'];

//Dependencia Edición
$dependencies['Accounts']['readOnly'] = array
(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('id'),
            'onload' => true,
            'actions' => array
	    (
                array
		(
                    'name' => 'ReadOnly',
                    'params' => array
		    (
                        'target' => 'edit_button',
                        'label' => 'LBL_EDIT_BUTTON_LABEL',
                        'value' => 'and(equal($id,"'.$id.'"),equal('.$admin.',0))',
                    ),
                ),
            ),
            'notActions' => array(),
);

//Dependencia CAC - Nivel de satisfacción Leasing
$dependencies['Accounts']['nivel_satisfaccion_c'] = array
(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('cac'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'ReadOnly',
                    'params' => array(
                        'target' => 'nivel_satisfaccion_c',
                        'label' => 'LBL_NIVEL_SATISFACCION',
                        'value' => 'equal('.$cac.',0)',
                    ),
                ),
            ),
            'notActions' => array(),
);

//Dependencia CAC - Nivel de satisfacción Factoraje
$dependencies['Accounts']['nivel_satisfaccion_factoring_c'] = array
(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('cac'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'ReadOnly',
                    'params' => array(
                        'target' => 'nivel_satisfaccion_factoring_c',
                        'label' => 'LBL_NIVEL_SATISFACCION_FACTORING',
                        'value' => 'equal('.$cac.',0)',
                    ),
                ),
            ),
            'notActions' => array(),
);

//Dependencia CAC - Nivel de satisfacción CA
$dependencies['Accounts']['nivel_satisfaccion_ca_c'] = array
(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('cac'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'ReadOnly',
                    'params' => array(
                        'target' => 'nivel_satisfaccion_ca_c',
                        'label' => 'LBL_NIVEL_SATISFACCION_CA',
                        'value' => 'equal('.$cac.',0)',
                    ),
                ),
            ),
            'notActions' => array(),
);
