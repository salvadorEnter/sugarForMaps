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
//Caja
$viewdefs['base']['view']['list-headerpane'] = array(
    'fields' => array(
        array(
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_MODULE_NAME',
        ),
        array(
            'name' => 'collection-count',
            'type' => 'collection-count',
        ),
    ),
    'buttons' => array(
        array(
             'type' => 'button',
             'css_class' => 'btn tabla',
             'icon'=>'fa-table',
             'acl_action' => 'list',
             'events'=>array(
              'click'=>'button:map_hide_button:click'
             ),
           ),
        array(
         'type' => 'button',
         'css_class' => 'btn mapa',
         'icon'=>'fa-map-marker',
         'acl_action'=>'list',
         'events'=>array(
            'click'=>'button:show_mapa:click'
         ),
       ),
        array(
         'type' => 'button',
         'css_class' => 'btn mapatabla',
         'icon'=>'fa-globe',
         'acl_action'=>'list',
         'events'=>array(
          'click'=>'button:mapTableshow:click'
         ),
       ),
        array(
            'name'    => 'create_button',
            'type'    => 'button',
            'label'   => 'LBL_CREATE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'acl_action' => 'create',
            'route' => array(
                'action'=>'create'
            )
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);



/*
$viewdefs['Meetings'] = array(
  'fields'=>array(
    array(
      'name' => 'title',
      'type' => 'label',
      'default_value' => 'LBL_MODULE_NAME',
      ),
    array(
      'name' => 'collection-count',
      'type' => 'collection-count',
      ),
    ),
  'base' => array(
    'view' => array(
      'list-headerpane' => array(
        'template' => 'headerpane',
        'buttons' => array(
           array(
             'type' => 'button',
             'css_class' => 'btn tabla',
             'icon'=>'fa-table',
             'acl_action' => 'list',
             'events'=>array(
              'click'=>'button:map_hide_button:click'
             ),
           ),
           array(
             'type' => 'button',
             'css_class' => 'btn mapa',
             'icon'=>'fa-map-marker',
             'acl_action'=>'list',
             'events'=>array(
                'click'=>'button:show_mapa:click'
             ),
           ),
           array(
             'type' => 'button',
             'css_class' => 'btn mapatabla',
             'icon'=>'fa-globe',
             'acl_action'=>'list',
             'events'=>array(
              'click'=>'button:mapTableshow:click'
             ),
           ),
           array(
            'name' => 'create_button',
            'type' => 'button',
             'label' => 'LBL_CREATE_BUTTON_LABEL',
             'css_class' => 'btn-primary',
             'acl_action' => 'create',
             'route' => array(
               'action' => 'create'
             )
           ),
           array(
             'name' => 'sidebar_toggle',
             'type' => 'sidebartoggle',
           ),
        ),
      ),
    ),
  ),
);*/
/*
$viewdefs['Meetings']['view']['list-headerpane'] = array(
    'fields' => array(
        array(
            'name' => 'title',
            'type' => 'label',
            'default_value' => 'LBL_MODULE_NAME',
        ),
        array(
            'name' => 'collection-count',
            'type' => 'collection-count',
        ),
    ),
    'buttons' => array(
           
           array(
             'type' => 'button',
             'css_class' => 'btn tabla',
             'icon'=>'fa-table',
             'acl_action' => 'list',
             'events'=>array(
              'click'=>'button:map_hide_button:click'
             ),
           ),
           array(
             'type' => 'button',
             'css_class' => 'btn mapa',
             'icon'=>'fa-map-marker',
             'acl_action'=>'list',
             'events'=>array(
                'click'=>'button:show_mapa:click'
             ),
           ),
           array(
             'type' => 'button',
             'css_class' => 'btn mapatabla',
             'icon'=>'fa-globe',
             'acl_action'=>'list',
             'events'=>array(
              'click'=>'button:mapTableshow:click'
             ),
           ),
        array(
            'name'    => 'create_button',
            'type'    => 'button',
            'label'   => 'LBL_CREATE_BUTTON_LABEL',
            'css_class' => 'btn-primary',
            'acl_action' => 'create',
            'route' => array(
                'action'=>'create'
            )
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
);*/
/*
$viewdefs['Meetings']['views']['list-headerpane'] = array(
  'fields'=>array(
    array(
      'name' => 'title',
      'type' => 'label',
      'default_value' => 'LBL_MODULE_NAME',
      ),
    array(
      'name' => 'collection-count',
      'type' => 'collection-count',
      ),
    ),
  'base' => array(
    'view' => array(
      'list-headerpane' => array(
        'template' => 'headerpane',
        'buttons' => array(
           array(
             'type' => 'button',
             'css_class' => 'btn tabla',
             'icon'=>'fa-table',
             'acl_action' => 'list',
             'events'=>array(
              'click'=>'button:map_hide_button:click'
             ),
           ),
           array(
             'type' => 'button',
             'css_class' => 'btn mapa',
             'icon'=>'fa-map-marker',
             'acl_action'=>'list',
             'events'=>array(
                'click'=>'button:show_mapa:click'
             ),
           ),
           array(
             'type' => 'button',
             'css_class' => 'btn mapatabla',
             'icon'=>'fa-globe',
             'acl_action'=>'list',
             'events'=>array(
              'click'=>'button:mapTableshow:click'
             ),
           ),
           array(
            'name' => 'create_button',
            'type' => 'button',
             'label' => 'LBL_CREATE_BUTTON_LABEL',
             'css_class' => 'btn-primary',
             'acl_action' => 'create',
             'route' => array(
               'action' => 'create'
             )
           ),
           array(
             'name' => 'sidebar_toggle',
             'type' => 'sidebartoggle',
           ),
        ),
      ),
    ),
  ),
);*/