<?php
 // created: 2018-03-22 10:47:18
$layout_defs["Opportunities"]["subpanel_setup"]['tct2_notificaciones_opportunities'] = array (
  'order' => 100,
  'module' => 'TCT2_Notificaciones',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TCT2_NOTIFICACIONES_OPPORTUNITIES_FROM_TCT2_NOTIFICACIONES_TITLE',
  'get_subpanel_data' => 'tct2_notificaciones_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
