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

$viewdefs['base']['layout']['record'] = array(
    'components' => array(
        array(
            'layout' => array(
                'components' => array(
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'view' => 'record',
                                    'primary' => true,
                                ),
                                array(
                                    'layout' => 'extra-info',
                                ),
                                array(
                                    'layout' => array(
                                        'name' => 'filterpanel',
                                        'span' => 12,
                                        'last_state' => array(
                                            'id' => 'record-filterpanel',
                                            'defaults' => array(
                                                'toggle-view' => 'subpanels',
                                            ),
                                        ),
                                        'availableToggles' => array(
                                            array(
                                                'name' => 'subpanels',
                                                'icon' => 'icon-table',
                                                'label' => 'LBL_DATA_VIEW',
                                            ),
                                            array(
                                                'name' => 'list',
                                                'icon' => 'icon-table',
                                                'label' => 'LBL_LISTVIEW',
                                            ),
                                            array(
                                                'name' => 'activitystream',
                                                'icon' => 'icon-time',
                                                'label' => 'LBL_ACTIVITY_STREAM',
                                            ),
                                        ),
                                        'components' => array(
                                            array(
                                                'layout' => 'filter',
                                                'targetEl' => '.filter',
                                                'position' => 'prepend'
                                            ),
                                            array(
                                                'view' => 'filter-rows',
                                                "targetEl" => '.filter-options'
                                            ),
                                            array(
                                                'view' => 'filter-actions',
                                                "targetEl" => '.filter-options'
                                            ),
                                            array(
                                                'layout' => 'activitystream',
                                                'context' =>
                                                array(
                                                    'module' => 'Activities',
                                                ),
                                            ),
                                            array(
                                                'layout' => 'subpanels',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'main-pane',
                            'span' => 8,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => 'sidebar',
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'side-pane',
                            'span' => 4,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => array(
                                        'type' => 'dashboard',
                                        'last_state' => array(
                                            'id' => 'last-visit',
                                        )
                                    ),
                                    'context' => array(
                                        'forceNew' => true,
                                        'module' => 'Home',
                                    ),
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'dashboard-pane',
                            'span' => 4,
                        ),
                    ),
                    array(
                        'layout' => array(
                            'components' => array(
                                array(
                                    'layout' => 'preview',
                                ),
                            ),
                            'type' => 'simple',
                            'name' => 'preview-pane',
                            'span' => 8,
                        ),
                    ),
                ),
                'type' => 'default',
                'name' => 'sidebar',
                'span' => 12,
            ),
        ),
    ),
    'type' => 'record',
    'name' => 'base',
    'span' => 12,
);
