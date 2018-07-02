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
  'ERR_BAD_LOGIN_PASSWORD' => 'Conectare sau Parola Incorecta',
  'ERR_BODY_TOO_LONG' => '\\rCorpul textului prea mare pentru a captura INTREGUL email. Echilibrat.',
  'ERR_INI_ZLIB' => 'Nu se poate deconecta temporar compresia Zlib. "Testual Setarilor" poate esua.',
  'ERR_MAILBOX_FAIL' => 'Nu s-a putut recupera niciun cont de email.',
  'ERR_NO_IMAP' => 'Nu s-au gasit biblioteci IMAP. Va rugam sa rezolvati aceasta inainte de a continua cu Emailurile de Intrare.',
  'ERR_NO_OPTS_SAVED' => 'Nu au fost salvate optime cu contul dumneavoastra de Email de Intrare. Va rugam sa revedeti setarile',
  'ERR_TEST_MAILBOX' => 'Va rugam sa va verificati setarile si sa incercati din nou.',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permite utilizatorilor sa expedieze emailuri utilizand Numele si Adresele "De la" in calitate de raspuns la adresa',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Cand aceasta optiune este selectata, De La Nume si De La Adresa Email asociate cu acest  cont email de grup vor aparea ca o optiune pentru campul De La, atunci cand se compun emailuri pentru utilizatori care au acces la contul email de grup.',
  'LBL_APPLY_OPTIMUMS' => 'Aplica Optime',
  'LBL_ASSIGN_TEAM' => 'Alocare la Echipe',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Aloca la Grup Folder',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Selectati crearea automata a inregsitrarilor de email in Sugar pentru toate emailurile de intrare.',
  'LBL_ASSIGN_TO_TEAM_DESC' => 'Echipa selectata are acces la contul de mail',
  'LBL_ASSIGN_TO_USER' => 'Aloca la Utilizator',
  'LBL_AUTOREPLY' => 'Sablon Auto-Raspuns',
  'LBL_AUTOREPLY_HELP' => 'Selectati un raspuns automatizat pentru a notifica expeditorii de email ca raspunsul lor a fost primit.',
  'LBL_AUTOREPLY_OPTIONS' => 'Optiuni de Auto-Raspuns',
  'LBL_BASIC' => 'Informatii Cont Email',
  'LBL_BOUNCE_MODULE_NAME' => 'Returneaza Manipulare Mailbox',
  'LBL_CASE_MACRO' => 'Caz Macro',
  'LBL_CASE_MACRO_DESC' => 'Setati macro-ul care va fi inserat si utilizat pentru a lega emailuri importate la Caz.',
  'LBL_CASE_MACRO_DESC2' => 'Setati aceasta la orice valoare, dar pastrati acel "1%".',
  'LBL_CERT' => 'Valideaza Certificat',
  'LBL_CERT_DESC' => 'Validare fortata a Certificatului de Securitate a serverului de mail -  a nu se utiliza daca se foloseste auto-semnatura',
  'LBL_CLOSE_POPUP' => 'Inchide Fereastra',
  'LBL_CREATE_CASE' => 'Creaza Caz din Email',
  'LBL_CREATE_CASE_HELP' => 'Selecteaza crearea automata a inregistrarilor de caz in Sugar din emailurile de intrare.',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Sablon Auto-Raspuns pentru Caz Nou',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selectati un raspuns automat pentru  a notifica expeditorii de emailuri ca un caz a fost creat. Emailul contine numarul cazului in linia Subiect care adera la setarea Caz Macro. Acest raspuns este transmis numai numai cand primul mesaj de la destinatar este primit.',
  'LBL_CREATE_NEW_GROUP' => '--Creaza Grup la Salvare--',
  'LBL_CREATE_TEMPLATE' => 'Creeaza',
  'LBL_DEFAULT_FROM_ADDR' => 'Implicit:',
  'LBL_DEFAULT_FROM_NAME' => 'Implicit:',
  'LBL_DELETED_FOLDERS_LIST' => 'Urmatoarele foldere % fie nu exista fie au fost sterse de pe server',
  'LBL_DELETE_SEEN' => 'Sterge Email-urile Citite dupa Importare',
  'LBL_DISTRIBUTION_METHOD' => 'Metoda de Distributie',
  'LBL_EDIT_LAYOUT' => 'Editeaza Plan General',
  'LBL_EDIT_TEMPLATE' => 'Editeaza',
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Optiuni Manuire Returnare',
  'LBL_EMAIL_OPTIONS' => 'Optiuni Manuire Email',
  'LBL_ENABLE_AUTO_IMPORT' => 'Importa Emailuri Automat',
  'LBL_FILTER_DOMAIN' => 'Fara Auto-Raspuns la acest Domeniu',
  'LBL_FILTER_DOMAIN_DESC' => 'Specificati un domeniu la care nu se vor transmite auto-raspunsuri.',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => 'Cautare variabile de conexiune optima.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Cauta Configurare Optima',
  'LBL_FIND_SSL_WARN' => 'Testarea SSL poate sa dureze mai mult. Va rugam sa aveti rabdare.',
  'LBL_FORCE' => 'Fortare Negativ',
  'LBL_FORCE_DESC' => 'Unele servere IMAP/POP3 necesita comutatoare speciale. Verificati daca fortati un comutator negativ atunci cand va conectati (adica, /notls)',
  'LBL_FOUND_MAILBOXES' => 'S-au gasit urmatoarele foldere utilizabile.<br />Dati click pe unul pentru a-l alege:',
  'LBL_FOUND_OPTIMUM_MSG' => 'S-au gasit setarile optime. Apasati butonul de mai jos pentru a le aplica la contul dumneavoastra de email.',
  'LBL_FROM_ADDR' => '"De La " Adresa:',
  'LBL_FROM_ADDR_DESC' => 'Adresa de e-mail de aici s-ar putea să nu apară în "De la" secţiunea adresa de e-mail trimis ca urmare a restricţiilor impuse de către furnizorul de servicii e-mail. În aceste condiţii, adresa de e-mail definită în serverul de mail de ieşire va fi utilizată.',
  'LBL_FROM_NAME' => '"De La " Nume:',
  'LBL_FROM_NAME_ADDR' => 'De la Nume/Email',
  'LBL_GETTING_FOLDERS_LIST' => 'Obtinere Lista Foldere',
  'LBL_GET_SENT_FOLDER' => 'Obtine Folder Expediat',
  'LBL_GET_TRASH_FOLDER' => 'Obtine Folder Rebut',
  'LBL_GROUPFOLDER_ID' => 'Grupeaza ID Folder',
  'LBL_GROUP_QUEUE' => 'Alocare la Grup',
  'LBL_HOME' => 'Acasa',
  'LBL_IS_GROUP' => 'grup',
  'LBL_IS_PERSONAL' => 'personal',
  'LBL_LIST_GLOBAL_PERSONAL' => 'Tip',
  'LBL_LIST_MAILBOX_TYPE' => 'Utilizare Cont Mail',
  'LBL_LIST_NAME' => 'Nume',
  'LBL_LIST_SERVER_URL' => 'Server de Mail',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LOGIN' => 'Nume Utilizator',
  'LBL_MAILBOX' => 'Foldere Monitorizate',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_SSL' => 'Utilizati SSL',
  'LBL_MAILBOX_SSL_DESC' => 'Utilizati SSL atunci cand va conectati. Daca aceasta nu functioneaza, verificati daca instalarea PHP dumneavoastra include "--with-imap-ssl" in configuratie.',
  'LBL_MAILBOX_TYPE' => 'Actiuni Posibile',
  'LBL_MARK_READ' => 'Lasa Mesaje pe Server',
  'LBL_MARK_READ_DESC' => 'Marcheaza mesajele citite pe serverul de email la importare; a nu se sterge.',
  'LBL_MARK_READ_NO' => 'Emailurile marcate sters dupa importare',
  'LBL_MARK_READ_YES' => 'Emailuri lasate pe server dupa importare',
  'LBL_MAX_AUTO_REPLIES' => 'Numar de Auto-raspunsuri',
  'LBL_MAX_AUTO_REPLIES_DESC' => 'Seteaza numarul maxim de auto-raspunsuri de transmis la o adresa unica de email de-a lungul unei perioade de 24 de ore.',
  'LBL_MODULE_NAME' => 'Grup Cont Email',
  'LBL_MODULE_NAME_SINGULAR' => 'Grup Cont Email',
  'LBL_MODULE_TITLE' => 'Email de Intrare',
  'LBL_NAME' => 'Nume',
  'LBL_NONE' => 'Niciunul',
  'LBL_NO_OPTIMUMS' => 'Nu au putut fi gasite optime. Va rugam sa verificati setarile si sa incercati din nou.',
  'LBL_ONLY_SINCE' => 'Importa Numai de la Ultima Verificare:',
  'LBL_ONLY_SINCE_DESC' => 'Cand se utilizeaza POP3, PHP nu poate filtra mesajele Noi/Necitite. Acest steag permite cererea de verificare a mesajelor incepand cu ultima data cand contul de mail a fost verificat. Aceasta va imbunatati in mod semnificativ performanta daca serverul dumneavoastra de email nu suporta IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Nu. Verifica in opozitie cu toate emailurile de pe serverul de mail.',
  'LBL_ONLY_SINCE_YES' => 'Da.',
  'LBL_OUTBOUND_SERVER' => 'Server Mailuri de Iesire',
  'LBL_PASSWORD' => 'Parola:',
  'LBL_PASSWORD_CHECK' => 'Verificare Parola',
  'LBL_PERSONAL_MODULE_NAME' => 'Cont de Mail Personal',
  'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Cont de Mail Personal',
  'LBL_POP3_SUCCESS' => 'Testul conexiunii dumneavoastra POP3 a fost incununat de succes.',
  'LBL_POPUP_FAILURE' => 'Testul conexiunii a esuat. Eroarea este afisata mai jos.',
  'LBL_POPUP_SUCCESS' => 'Testul conexiunii a fost incununat de succes. Setarile dumneavoastra functioneaza.',
  'LBL_POPUP_TITLE' => 'Testare Setari',
  'LBL_PORT' => 'Portul Server de Mail',
  'LBL_POSSIBLE_ACTION_DESC' => 'Pentru optiunea Creaza Caz, trebuie selectat un Grup Folder',
  'LBL_QUEUE' => 'Coada Conturi de Mail',
  'LBL_RE' => 'RE:',
  'LBL_REPLY_NAME_ADDR' => 'Raspuns Nume/Email',
  'LBL_REPLY_TO_ADDR' => '"Raspunde la" Adresa',
  'LBL_REPLY_TO_NAME' => '"Raspunde la" Nume',
  'LBL_SAME_AS_ABOVE' => 'Utilizat din Nume/Adresa',
  'LBL_SAVE_RAW' => 'Salveaza Sursa Bruta',
  'LBL_SAVE_RAW_DESC_1' => 'Selecteaza "DA" daca doriti sa pastrati sursa bruta pentru fiecare email importat.',
  'LBL_SAVE_RAW_DESC_2' => 'Atasamentele mari pot cauza esecuri cu bazele conservatoare sau incorect configurate.',
  'LBL_SELECT' => 'Selecteaza',
  'LBL_SELECT_SENT_FOLDERS' => 'Selecteaza Folder Transmis',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Selecteaza Foldere Abonate',
  'LBL_SELECT_TRASH_FOLDERS' => 'Selecteaza Folder Rebut',
  'LBL_SENT_FOLDER' => 'Folder Expediat',
  'LBL_SERVER_OPTIONS' => 'Setari Avansate',
  'LBL_SERVER_TYPE' => 'Protocol Server de Mail',
  'LBL_SERVER_URL' => 'Adresa Server de Mail',
  'LBL_SSL' => 'Utilizati SSL',
  'LBL_SSL_DESC' => 'Daca serverul dumneavoastra de mail suport conexiuni soclu securizate, activarea acestuia va forta conexiunile SSL atunci cand se importa emailuri.',
  'LBL_STATUS' => 'Statut',
  'LBL_STATUS_ACTIVE' => 'Activ',
  'LBL_STATUS_INACTIVE' => 'Inactiv',
  'LBL_SUBSCRIBE_FOLDERS' => 'Aboneaza Foldere',
  'LBL_SYSTEM_DEFAULT' => 'Sistem implicit',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Test [Alt+T]',
  'LBL_TEST_SETTINGS' => 'Testare Setari',
  'LBL_TEST_SUCCESSFUL' => 'Conexiunea s-a realizat cu succes.',
  'LBL_TEST_WAIT_MESSAGE' => 'Un moment va rog...',
  'LBL_TLS' => 'Utilizeaza TLS',
  'LBL_TLS_DESC' => 'Utilizeaza Stratul de Transport Securizat atunci cand va conectati la serverul de mail - a se utiliza numai daca serverul dumneavoastra de mail suporta acest protocol.',
  'LBL_TRASH_FOLDER' => 'Folder Rebut',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Atentie: Modificati setarile de import automat, care poate duce la pierderi de date.',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Atentie: Importul Auto trebuie sa fie activat atunci cand creati cazuri automat.',
  'LBL_WARN_IMAP' => 'Atentionari:',
  'LBL_WARN_IMAP_TITLE' => 'Email de Intrare Dezactivat',
  'LBL_WARN_NO_IMAP' => 'Emailul de Intrare nu poate functiona fara bibliotecile c-client IMAP activate/compilate cu modulul PHP. Va rugam sa va contactati administratorul pentru rezolvarea acestei probleme.',
  'LNK_CREATE_GROUP' => 'Creeaza Grup Nou',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'Cont Returnare Manipulare Nou',
  'LNK_LIST_CREATE_NEW_GROUP' => 'Cont Mail Grup Nou',
  'LNK_LIST_MAILBOXES' => 'Toate Conturile Mail',
  'LNK_LIST_QUEUES' => 'Toate Cozile',
  'LNK_LIST_SCHEDULER' => 'Programatori',
  'LNK_LIST_TEST_IMPORT' => 'Verifica Importul Email',
  'LNK_NEW_QUEUES' => 'Creaza Coada Noua',
  'LNK_SEED_QUEUES' => 'Insamanteaza Cozi din Echipe',
);

