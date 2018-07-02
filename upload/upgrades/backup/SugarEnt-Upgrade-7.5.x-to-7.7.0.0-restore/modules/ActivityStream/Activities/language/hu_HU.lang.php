<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


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
	

$mod_strings = array (
  'TPL_ACTIVITY_ATTACH' => 'Fájl hozzáadva <a class="dragoff" target="sugar_attach" href="{{url}}" data-note-id="{{noteId}}">{{filename}}</a>{{{str "TPL_ACTIVITY_ON" "Activities" this}}}',
  'TPL_ACTIVITY_CREATE' => 'Létrehozva: {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{str "LBL_MODULE_NAME_SINGULAR" object.module}}.',
  'TPL_ACTIVITY_DELETE' => 'Törölve: {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{str "LBL_MODULE_NAME_SINGULAR" object.module}}.',
  'TPL_ACTIVITY_LINK' => 'Kapcsolódik {{{str "TPL_ACTIVITY_RECORD" "Activities" subject}}} ehhez {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.',
  'TPL_ACTIVITY_ON' => '{{#if object}} ekkor {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.{{/if}}{{#if module}} ekkor {{str "LBL_MODULE_NAME_SINGULAR" module}}.{{else}} {{/if}}',
  'TPL_ACTIVITY_POST' => '{{{value}}}{{{str "TPL_ACTIVITY_ON" "Activities" this}}}',
  'TPL_ACTIVITY_RECORD' => '<a href="#{{buildRoute module=module id=id}}">{{name}}</a>',
  'TPL_ACTIVITY_UNDELETE' => 'Visszaállítva: {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}} {{str "LBL_MODULE_NAME_SINGULAR" object.module}}.',
  'TPL_ACTIVITY_UNLINK' => 'Nem kapcsolódik {{{str "TPL_ACTIVITY_RECORD" "Activities" subject}}} ehhez {{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.',
  'TPL_ACTIVITY_UPDATE' => 'Frissítve {{#if updateStr}}{{{updateStr}}} ekkor {{/if}}{{{str "TPL_ACTIVITY_RECORD" "Activities" object}}}.',
  'TPL_ACTIVITY_UPDATE_FIELD' => '<a rel="tooltip" title="Changed: {{before}} To: {{after}}">{{field_label}}</a>',
  'TPL_COMMENT' => '{{{value}}}',
  'TPL_MORE_COMMENT' => '{{this}} több megjegyzés...',
  'TPL_MORE_COMMENTS' => '{{this}} több megjegyzés...',
  'TPL_SHOW_MORE_MODULE' => 'Még több hozzászólás...',
);

