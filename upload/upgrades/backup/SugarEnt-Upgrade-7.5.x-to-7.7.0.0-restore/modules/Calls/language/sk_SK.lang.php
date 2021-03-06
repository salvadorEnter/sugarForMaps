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
  'ERR_DELETE_RECORD' => 'K odstráneniu účtu, musíte zadať číslo účtu.',
  'LBL_ACCEPT_LINK' => 'Prijať link',
  'LBL_ACCEPT_STATUS' => 'Prijať status',
  'LBL_ACCOUNT_NAME' => 'Účet',
  'LBL_ACTIVITIES_REPORTS' => 'Výkaz o ativitách',
  'LBL_ADD_BUTTON' => 'Pridať',
  'LBL_ADD_INVITEE' => 'Pridať pozvánky',
  'LBL_ASSIGNED_TO_ID' => 'Pridelený uživateľ',
  'LBL_ASSIGNED_TO_NAME' => 'Pridelený k',
  'LBL_BLANK' => '-čistý-',
  'LBL_CALL' => 'Volanie:',
  'LBL_CALL_INFORMATION' => 'Prehľad',
  'LBL_CANCEL_CREATE_INVITEE' => 'Zrušiť',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Ste si istí, že chcete odstrániť všetky opakujúce sa záznamy?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATE_AND_ADD' => 'vytvoriť & pridať',
  'LBL_CREATE_CONTACT' => 'ako kontakt',
  'LBL_CREATE_INVITEE' => 'Vytvoriť pozvaný',
  'LBL_CREATE_LEAD' => 'ako príležitosť',
  'LBL_CREATE_MODULE' => 'Záznam volania',
  'LBL_DATE' => 'Dátum začiatku:',
  'LBL_DATE_END' => 'Dátum ukončenia',
  'LBL_DATE_END_ERROR' => 'Dátum ukončenia je pred dátumom začatia',
  'LBL_DATE_TIME' => 'Dátum a čas zahájenia:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Volania',
  'LBL_DEL' => 'Výmaz',
  'LBL_DESCRIPTION' => 'Popis:',
  'LBL_DESCRIPTION_INFORMATION' => 'Popis informácie',
  'LBL_DIRECTION' => 'Zoradenie:',
  'LBL_DURATION' => 'Trvanie:',
  'LBL_DURATION_HOURS' => 'Trvanie v hodinách:',
  'LBL_DURATION_MINUTES' => 'Trvanie v minútach:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editovat všetky opakovania',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAIL_REMINDER' => 'pripomienkový email',
  'LBL_EMAIL_REMINDER_SENT' => 'odoslaný pripomienkový emali',
  'LBL_EMAIL_REMINDER_TIME' => 'čas pripomienkového emailu',
  'LBL_EMPTY_SEARCH_RESULT' => 'Je nám ľúto, neboli nájdené žiadne výsledky. Prosím, vytvorte si pozvaný nižšie.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Pridelené užívateľské ID',
  'LBL_EXPORT_CREATED_BY' => 'Vytvorené podľa ID',
  'LBL_EXPORT_DATE_START' => 'Dátum a čas začiatku',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Upravené podľa ID',
  'LBL_EXPORT_PARENT_TYPE' => 'Viazané na modul',
  'LBL_EXPORT_REMINDER_TIME' => 'Čas pripomenutia (v minútach)',
  'LBL_FIRST_NAME' => 'Meno',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINUTES' => '(hodín/munút)',
  'LBL_INVITEE' => 'Pozvaní',
  'LBL_LAST_NAME' => 'Priezvisko',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Príležitosti',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Pridelený k',
  'LBL_LIST_CLOSE' => 'Zavrieť',
  'LBL_LIST_CONTACT' => 'Kontakt:',
  'LBL_LIST_DATE' => 'Dátum začiatku:',
  'LBL_LIST_DIRECTION' => 'Zoradenie',
  'LBL_LIST_DURATION' => 'Trvanie',
  'LBL_LIST_FORM_TITLE' => 'Zoznam volaní',
  'LBL_LIST_MY_CALLS' => 'Moje volania',
  'LBL_LIST_RELATED_TO' => 'Nadriadený',
  'LBL_LIST_RELATED_TO_ID' => 'Súvisiaci s ID',
  'LBL_LIST_SUBJECT' => 'Predmet',
  'LBL_LIST_TIME' => 'Čas začiatku:',
  'LBL_LOG_CALL' => 'Záznam volania',
  'LBL_MEMBER_OF' => 'Člen v',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Volania',
  'LBL_MODULE_NAME_SINGULAR' => 'Volanie',
  'LBL_MODULE_TITLE' => 'Volania: Hlavná stránka',
  'LBL_NAME' => 'Názov',
  'LBL_NEW_FORM_TITLE' => 'Vytvoriť plánovanú činnosť',
  'LBL_NO_ACCESS' => 'Nemáte prístup k vytváraniu $ modul',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'ID rodiča:',
  'LBL_PHONE' => 'Telefón',
  'LBL_RECURRENCE' => 'opakovanie',
  'LBL_RECURRING_LIMIT_ERROR' => 'Toto opakované stretnutie nemožno naplánovať, pretože prekračuje maximálne povolené opakovanie $ limitu.',
  'LBL_RECURRING_SOURCE' => 'opakovaný zdroj',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Volal s {{{this}}}',
  'LBL_RELATED_TO' => 'Vzťahuje sa na:',
  'LBL_REMINDER' => 'Upozornenie',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email všetkým pozvaným',
  'LBL_REMINDER_POPUP' => 'vztahovaný',
  'LBL_REMINDER_TIME' => 'Čas upozornenia',
  'LBL_REMINDER_TITLE' => 'Hovor:',
  'LBL_REMOVE' => 'Odstrániť',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Odstrániť všetky opakovania',
  'LBL_REPEAT_COUNT' => 'počet opakovania',
  'LBL_REPEAT_DOW' => 'opakovanie',
  'LBL_REPEAT_END' => 'Ukončenie',
  'LBL_REPEAT_END_AFTER' => 'Za',
  'LBL_REPEAT_END_BY' => 'podľa',
  'LBL_REPEAT_INTERVAL' => 'interval opakovania',
  'LBL_REPEAT_OCCURRENCES' => 'opakovanie',
  'LBL_REPEAT_PARENT_ID' => 'opakovať materské ID',
  'LBL_REPEAT_TYPE' => 'Typ opakovania',
  'LBL_REPEAT_UNTIL' => 'opakujte kým',
  'LBL_SCHEDULING_FORM_TITLE' => 'Plánovanie',
  'LBL_SEARCH_BUTTON' => 'Vyhľadávanie',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhľadávanie volania',
  'LBL_SELECT_FROM_DROPDOWN' => 'Prosím, vyberte si najprv z rozbaľovacieho zoznamu "Pridelený k"',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Poslať výzvu',
  'LBL_SEND_BUTTON_TITLE' => 'Poslať výzvu',
  'LBL_SEND_INVITES' => 'Poslať pozvánky',
  'LBL_STATUS' => 'Stav:',
  'LBL_SUBJECT' => 'Predmet',
  'LBL_SYNCED_RECURRING_MSG' => 'Táto výzva vznikla v inom systéme a bol synchronizovaný zo Sugar. Ak chcete vykonať zmeny, choďte k pôvodnému hovoru v rámci iného systému. Zmeny v inom systéme môžu byť synchronizované tymto záznamom.',
  'LBL_TIME' => 'Čas začiatku:',
  'LBL_TIME_END' => 'Čas ukončenia',
  'LBL_USERS_SUBPANEL_TITLE' => 'Užívatelia',
  'LNK_CALL_LIST' => 'Zobrazenie volaní',
  'LNK_IMPORT_CALLS' => 'Import volaní',
  'LNK_NEW_ACCOUNT' => 'Nový účet',
  'LNK_NEW_APPOINTMENT' => 'Vytvoriť plánovanú činnosť',
  'LNK_NEW_CALL' => 'Záznam volania',
  'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
  'LNK_NEW_OPPORTUNITY' => 'Nová obchodná príležitosť',
  'LNK_SELECT_ACCOUNT' => 'Výber účtu',
  'NOTICE_DURATION_TIME' => 'Čas trvania musí byť väčší ako 0',
  'NTC_REMOVE_INVITEE' => 'Skutočne, chcete odstrániť túto pozvánku na telefonát?',
);

