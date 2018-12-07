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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LISTA_NUME_DE_FAMILIE',
    'db_first_name' => 'LBL_LISTA_PRENUME',
    'db_title' => 'LBL_LISTA_TITLU',
    'db_email1' => 'LBL_LISTA_EMAIL_ADRESA',
    'db_account_name' => 'LBL_LISTA_NUME_CONT',
    'db_email2' => 'LBL_LISTA_ALT_EMAIL_ADRESA',

    //END DON'T CONVERT

    // Dashboard Names
    'LBL_LEADS_LIST_DASHBOARD' => 'Tabloul de bord Listă clienți potențiali',
    'LBL_LEADS_RECORD_DASHBOARD' => 'Tabloul de bord Înregistrare clienți potențiali',

    'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie specificat pentru a șterge antetul.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Descrierea Contului',
    'LBL_ACCOUNT_ID'=>'Identitate Cont',
    'LBL_ACCOUNT_NAME' => 'Nume Cont:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activitati',
    'LBL_ADD_BUSINESSCARD' => 'Introduce Carte de Vizita',
    'LBL_ADDRESS_INFORMATION' => 'Informatii Adresa',
    'LBL_ALT_ADDRESS_CITY' => 'Oraşul Adresei Alternative',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Tara Adresei Alternative:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Codul Postal al Adresei Alternative:',
    'LBL_ALT_ADDRESS_STATE' => 'Statul Adresei Alternative:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Strada 2 a Adresei Alternative:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Strada 3 a Adresei Alternative:',
    'LBL_ALT_ADDRESS_STREET' => 'Strada Adresei Alternative:',
    'LBL_ALTERNATE_ADDRESS' => 'Alta Adresa:',
    'LBL_ANY_ADDRESS' => 'Orice Adresa:',
    'LBL_ANY_EMAIL' => 'Orice Email:',
    'LBL_ANY_PHONE' => 'Orice Telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_ASSIGNED_TO_ID' => 'Utilizator Atribuit:',
    'LBL_BACKTOLEADS' => 'Inapoi la Prospecte',
    'LBL_BUSINESSCARD' => 'Converteste Prospect',
    'LBL_CITY' => 'Oraş:',
    'LBL_CONTACT_ID' => 'Identificare Contact',
    'LBL_CONTACT_INFORMATION' => 'Vedere generala Prospect',
    'LBL_CONTACT_NAME' => 'Nume Prospect:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Prospect-Oportunitate:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Prospect:',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convertire',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => 'Salvare şi convertire',
    'LBL_CONVERT_PANEL_OPTIONAL' => '(opţional)',
    'LBL_CONVERT_ACCESS_DENIED' => 'Nu aveţi acces de editare pentru modulele necesare pentru convertirea unei piste:  {{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => 'Căutare duplicate...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => 'Ignoră şi creează nou',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => 'Înapoi la duplicate',
    'LBL_CONVERT_SWITCH_TO_CREATE' => 'Creează nou',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => 'Cautare',
    'LBL_CONVERT_DUPLICATES_FOUND' => 'S-au găsit {{duplicateCount}} duplicate',
    'LBL_CONVERT_CREATE_NEW' => '{{moduleName}} nou',
    'LBL_CONVERT_SELECT_MODULE' => 'Selectaţi {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => 'Se selectează {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => 'Creaţi {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => 'Se creează {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => 'Resetare',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => 'Copiaţi activităţile conexe în',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => 'Mutaţi activităţile conexe în',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => 'Mutaţi activităţile conexe în înregistrarea contactului',
    'LBL_CONVERTED_ACCOUNT'=>'Cont Convertit:',
    'LBL_CONVERTED_CONTACT' => 'Contact Convertit:',
    'LBL_CONVERTED_OPP'=>'Oportunitate Convertita:',
    'LBL_CONVERTED'=> 'Convertit',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Converteste Prospect [Alt+V]',
    'LBL_CONVERTLEAD' => 'Converteste Prospect',
    'LBL_CONVERTLEAD_WARNING' => 'Atentionare: Statutul Calauzei pe care doriti s-o convertiti este "Convertita". Este posibil ca inregistrari de Contacte si/sau Conturi sa fi fost deja create din aceasta Calauza. Daca doriti sa continuati convertirea Calauzei, dati click pe Salvare. Pentru a va reintoarce la Calauza fara a o converti, dati click pe Revocare.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'Contact Posibil:',
    'LBL_CONVERTLEAD_ERROR' => 'Nu s-a putut converti pista',
    'LBL_CONVERTLEAD_FILE_WARN' => 'Aţi convertit cu succes pista {{leadName}}, dar s-a produs o eroare la încărcarea ataşamentelor la una sau mai multe înregistrări',
    'LBL_CONVERTLEAD_SUCCESS' => 'Aţi convertit cu succes pista {{leadName}}',
    'LBL_COUNTRY' => 'Tara:',
    'LBL_CREATED_NEW' => 'S-a creat un nou',
	'LBL_CREATED_ACCOUNT' => 'S-a creat un cont nou',
    'LBL_CREATED_CALL' => 'S-a creat un apel nou',
    'LBL_CREATED_CONTACT' => 'S-a creat un contact nou',
    'LBL_CREATED_MEETING' => 'S-a creat o întâlnire nouă',
    'LBL_CREATED_OPPORTUNITY' => 'S-a creat o oportunitate nouă',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospecte',
    'LBL_DEPARTMENT' => 'Departament:',
    'LBL_DESCRIPTION_INFORMATION' => 'Descriere Informatie',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DO_NOT_CALL' => 'Nu Sunati:',
    'LBL_DUPLICATE' => 'Prospecte Similare',
    'LBL_EMAIL_ADDRESS' => 'Adresa Email:',
    'LBL_EMAIL_OPT_OUT' => 'Optiune Email Respinsa:',
    'LBL_EXISTING_ACCOUNT' => 'Utilizat un cont existent',
    'LBL_EXISTING_CONTACT' => 'Utilizat un contact existent',
    'LBL_EXISTING_OPPORTUNITY' => 'Utilizata o oportunitate existenta',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Prenume:',
    'LBL_FULL_NAME' => 'Nume intreg:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Istoric',
    'LBL_HOME_PHONE' => 'Telefon Acasa:',
    'LBL_IMPORT_VCARD' => 'Importa vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => 'Pista de la vCard creată cu succes',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Creează automat un nou antet prin importarea unui vCard din sistemul dumneavoastră de fişiere.',
    'LBL_INVALID_EMAIL'=>'Email Invalid:',
    'LBL_INVITEE' => 'Rapoarte Directe',
    'LBL_LAST_NAME' => 'Nume de Familie:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrierea Sursei Prospectului:',
    'LBL_LEAD_SOURCE' => 'Sursa Prospect',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_CONTACT_NAME' => 'Nume Prospect',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Data creării',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Prenume',
    'LBL_VIEW_FORM_TITLE' => 'Vizualizare Propsecte',
    'LBL_LIST_FORM_TITLE' => 'Lista Prospecte',
    'LBL_LIST_LAST_NAME' => 'Nume de Familie',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrierea Sursei Prospectului',
    'LBL_LIST_LEAD_SOURCE' => 'Sursa Prospectului',
    'LBL_LIST_MY_LEADS' => 'Prospectele Mele',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_LIST_PHONE' => 'Telefon Birou',
    'LBL_LIST_REFERED_BY' => 'Mentionat De',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Titlu',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODULE_NAME' => 'Prospecte',
    'LBL_MODULE_NAME_SINGULAR' => 'Client potențial',
    'LBL_MODULE_TITLE' => 'Prospecte: Acasa',
    'LBL_NAME' => 'Nume:',
    'LBL_NEW_FORM_TITLE' => 'Prospect Nou',
    'LBL_NEW_PORTAL_PASSWORD' => 'Parola de Portal Noua',
    'LBL_OFFICE_PHONE' => 'Telefon Birou:',
    'LBL_OPP_NAME' => 'Nume Oportunitate:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Cantitate Oportunitate:',
    'LBL_OPPORTUNITY_ID'=>'Identificare Oportunitate',
    'LBL_OPPORTUNITY_NAME' => 'Nume Oportunitate:',
    'LBL_CONVERTED_OPPORTUNITY_NAME' => 'Converted Opportunity Name',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alt Email:',
    'LBL_OTHER_PHONE' => 'Alt Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_ACTIVE' => 'Portal Activ:',
    'LBL_PORTAL_APP'=> 'Aplicatie Portal',
    'LBL_PORTAL_INFORMATION' => 'Informatie Portal',
    'LBL_PORTAL_NAME' => 'Nume Portal:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Parola Portal este Setata:',
    'LBL_POSTAL_CODE' => 'Cod Postal:',
    'LBL_STREET' => 'Strada',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Oraşul Adresei Principale',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Tara Adresei Principale',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Cod postal al Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Statul Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Strada 2 a Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Strada 3 a Adresei Principale',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Strada Adresei Principale',
    'LBL_PRIMARY_ADDRESS' => 'Adresa Primara:',
    'LBL_RECORD_SAVED_SUCCESS' => 'Aţi creat cu succes {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>.',
    'LBL_REFERED_BY' => 'Mentionat De:',
    'LBL_REPORTS_TO_ID'=>'Raporteaza la ID',
    'LBL_REPORTS_TO' => 'Raporteaza Catre:',
    'LBL_REPORTS_FROM' => 'Rapoarte din:',
    'LBL_SALUTATION' => 'Formula de salut',
    'LBL_MODIFIED'=>'Modificat de',
	'LBL_MODIFIED_ID'=>'Modificat după Id',
	'LBL_CREATED'=>'Creat de',
	'LBL_CREATED_ID'=>'Creat de Id',
    'LBL_SEARCH_FORM_TITLE' => 'Cauta Prospecte',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecteaza Tintele Marcate',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecteaza Tintele Marcate',
    'LBL_STATE' => 'Stat:',
    'LBL_STATUS_DESCRIPTION' => 'Descrierea Statusului:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Titlu:',
    'LBL_UNCONVERTED'=> 'Neconvertit',
    'LNK_IMPORT_VCARD' => 'Creeaza din vCard',
    'LNK_LEAD_LIST' => 'Vizualizare Prospecte',
    'LNK_NEW_ACCOUNT' => 'Creeaza Cont',
    'LNK_NEW_APPOINTMENT' => 'Creeaza Intalnire',
    'LNK_NEW_CONTACT' => 'Creează Contact',
    'LNK_NEW_LEAD' => 'Creeaza Prospect',
    'LNK_NEW_NOTE' => 'Creeaza Nota',
    'LNK_NEW_TASK' => 'Creează sarcina',
    'LNK_NEW_CASE' => 'Creează Caz',
    'LNK_NEW_CALL' => 'Jurnal Apeluri',
    'LNK_NEW_MEETING' => 'Orar Intalniri',
    'LNK_NEW_OPPORTUNITY' => 'Creeaza Oportunitate',
	'LNK_SELECT_ACCOUNTS' => 'SAU Selecteaza Cont',
    'LNK_SELECT_CONTACTS' => 'SAU Selectați Contact',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiaza adresa alternativa la adresa principala',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copiaza adresa principala la adresa alternativa',
    'NTC_DELETE_CONFIRMATION' => 'Sunteti sigur ca doriti sa stergeti aceasta inregistrare?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Crearea unei oportunitati necesita un cont.\\n Va rugam, fie sa creati un cont nou, fie sa selectati unul deja existent.',
    'NTC_REMOVE_CONFIRMATION' => 'Sunteţi sigur că doriţi să inlaturati acest contact din caz?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Sunteţi sigur că doriţi să inlaturati aceasta inregistrare ca un raport direct?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Campanii',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Campanii de Succes:',
    'LBL_TARGET_BUTTON_LABEL'=>'Orientate',
    'LBL_TARGET_BUTTON_TITLE'=>'Orientate',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => 'Campanie:',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator Atribuit',
    'LBL_PROSPECT_LIST' => 'Lista Prospect',
    'LBL_PROSPECT' => 'Tinta:',
    'LBL_CAMPAIGN_LEAD' => 'Campanii',
	'LNK_LEAD_REPORTS' => 'Vizualizeaza Rapoarte Antete',
    'LBL_BIRTHDATE' => 'Data nasterii:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'Va Multumim Pentru Inregistrare.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'Ne pare rau, serverul nu este disponibil momentan, va rugam incercati din nou mai tarziu.',
    'LBL_ASSISTANT_PHONE' => 'Telefon Asistent:',
    'LBL_ASSISTANT' => 'Asistent',
    'LBL_REGISTRATION' => 'Inregistrare',
    'LBL_MESSAGE' => 'Va rugam sa introduceti datele dumneavoastra mai jos. Datele si/sau un cont vor fi create pentru dumneavoastra, in asteptarea aprobarii.',
    'LBL_SAVED' => 'Va multumim pentru inregistrare. Contul dumneavoastrava fi creat si cineva va va contacta in curand.',
    'LBL_CLICK_TO_RETURN' => 'Intoarcere la Portal',
    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_MODIFIED_USER' => 'Utilizator Modificat',
    'LBL_CAMPAIGNS' => 'Campanii',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campanii',
    'LBL_CONVERT_MODULE_NAME' => 'Modul',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'modul',
    'LBL_CONVERT_REQUIRED' => 'Necesar',
    'LBL_CONVERT_SELECT' => 'Permite Selectia',
    'LBL_CONVERT_COPY' => 'Copiaza Datele',
    'LBL_CONVERT_EDIT' => 'Modifica',
    'LBL_CONVERT_DELETE' => 'Ștergere',
    'LBL_CONVERT_ADD_MODULE' => 'Adauga Modul',
    'LBL_CONVERT_EDIT_LAYOUT' => 'Editeaza Coverteste Sablon',
    'LBL_CREATE' => 'Creează',
    'LBL_SELECT' => 'SAU Selecteaza',
	'LBL_WEBSITE' => 'Site web',
	'LNK_IMPORT_LEADS' => 'Importa Antete',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Nota: Ecranul Converteste Calauza curent contine campuri particularizate. Cand particularizati ecranul Converteste Calauza pentru prima oara, va fi necesar sa adaugati campuri particularizate la sablon, dupa cum este necesar.',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> 'Modulul in care se creeaza o noua inregistrare.',
	'LBL_REQUIRED_TIP' 	=> 'Modulele necesare trebuie create sau selectate inainte ca antetul sa poate fi convertit.',
	'LBL_COPY_TIP'		=> 'Daca sunt marcate, campurile din antet vor fi copiate in campurile cu acelasi nume din inregistrarile nou create.',
	'LBL_SELECTION_TIP' => 'Module cu un camp relationat in Contacte pot fi selectate mai degraba decat create pe timpul procesului de conversie al calauzei.',
	'LBL_EDIT_TIP'		=> 'Modifica schema de conversie pentru acest modul.',
	'LBL_DELETE_TIP'	=> 'Inlatura acest modul din schema convertita.',

    'LBL_ACTIVITIES_MOVE'   => 'Mutai Activitati',
    'LBL_ACTIVITIES_COPY'   => 'Copiaţi Activităţi de',
    'LBL_ACTIVITIES_MOVE_HELP'   => "Selectaţi înregistrare la care să se mute activităţile. Activităţi, Apeluri, întâlniri, Note şi e-mailurile vor fi mutate la înregistrarea selectată (e).",
    'LBL_ACTIVITIES_COPY_HELP'   => "Selectaţi înregistrarea (ile), pentru care a crea copii ale activităţilor . Sarcini noi, Apeluri, reuniuni şi note vor fi create pentru fiecare înregistrarea selectată (e). E-mailurile vor fi legate de înregistrarea selectată (e).",
    //For export labels
    'LBL_PHONE_HOME' => 'Telefon acasa',
    'LBL_PHONE_MOBILE' => 'Telefon mobil',
    'LBL_PHONE_WORK' => 'Telefon munca',
    'LBL_PHONE_OTHER' => 'Alt telefon',
    'LBL_PHONE_FAX' => 'Telefon fax',
    'LBL_CAMPAIGN_ID' => 'Identitatea Campaniei',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Alocat utilizatorului',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Alocat utilizatorului ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificat după ID',
    'LBL_EXPORT_CREATED_BY' => 'Creat de ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'Mobil:',
    'LBL_EXPORT_EMAIL2'=>'Alta adresa de email',
	'LBL_EDITLAYOUT' => 'Editeaza Plan General' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => 'Introduceti Date' /*for 508 compliance fix*/,
	'LBL_LOADING' => 'Incarcare...Va rugam asteptati' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => 'Editeaza' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'ID principal D&B',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunităţi',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Note',

    'LBL_HELP_CONVERT_TITLE' => 'Converteşte un {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Modulul {{plural_module_name}} este format din posibili clienţi individuali ce pot fi interesaţi în produsele sau serviciile oferite de organizaţia dvs. O dată ce {{module_name}} este calificat drept {{opportunities_singular_module}} de vânzări, {{plural_module_name}} poate fi convertit în {{contacts_module}}, {{opportunities_module}} şi {{accounts_module}}. Există mai multe modalităţi prin care puteţi crea {{plural_module_name}} în Sugar, cum ar fi prin modulul {{plural_module_name}}, prin duplicare, prin import de {{plural_module_name}} etc. După crearea înregistrării {{module_name}}, puteţi vizualiza şi edita informaţiile asociate cu {{module_name}} prin fereastra de vizualizare a înregistrării {{plural_module_name}}.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Modulul {{plural_module_name}} este format din posibili clienţi individuali ce pot fi interesaţi în produsele sau serviciile oferite de organizaţia dvs. - Editează câmpurile acestei înregistrări apăsând pe fiecare câmp individual sau pe butonul Editare. - Vizualizează sau modifică linkuri către alte înregistrări in panourile secundare, trecând fereastra din stânga jos în stadiul "Vizualizare Date". - Creează şi vizualizează comentariile altor utilizatori şi istoricul modificărilor în {{activitystream_singular_module}} trecând fereastra din stânga jos în stadiul "Flux de activitate". - Urmăreşte sau marchează ca favorit această înregistrare folosind pictogramele din dreapta numelui înregistrării. - Sunt disponibile acţiuni suplimentare în meniul cu listă derulantă Acţiuni din dreapta butonului Editare.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Modulul {{plural_module_name}} este format din posibili clienţi individuali ce pot fi interesaţi de un produs sau serviciu oferit de organizaţia dvs. O dată ce {{module_name}} este calificat drept {{opportunities_singular_module}} de vânzări, poate fi convertit în {{contacts_singular_module}}, {{accounts_singular_module}}, {{opportunities_singular_module}} sau alte înregistrări.

Pentru a crea {{module_name}}:
1. Introduceţi valori pentru câmpuri după cum doriţi.
- Câmpurile marcate cu "Obligatoriu" trebuie să fie completate înainte de a salva.
- Faceţi clic pe "Afişare mai multe" pentru a afişa câmpuri suplimentare, dacă este necesar.
2. Faceţi clic pe "Salvare" pentru a finaliza noua înregistrare şi pentru a reveni la pagina anterioară.',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => 'Sugar vă permite convertirea {{plural_module_name}} în {{contacts_module}}, {{accounts_module}} şi alte module o dată ce {{module_name}} îndeplineşte criteriile dvs. de calificare.

Treceţi prin fiecare modul modificând câmpurile, apoi confirmând valorile noii înregistrări prin apăsarea fiecărui buton Asociat.

Dacă Sugar detectează o înregistrare existentă care se potriveşte cu informaţiile din {{module_name}} dvs., aveţi opţiunea de a alege un duplicat şi de a confirma selecţia prin butonul Asociat sau de a face clic pe "Ignoră şi creează nou", procedând ca de obicei.

După confirmarea fiecărui modul solicitat şi dorit, faceţi clic pe butonul Salvare şi convertire din partea de sus pentru a finaliza conversia.',

    //Marketo
    'LBL_MKTO_SYNC' => 'Sincronizare către Marketo®',
    'LBL_MKTO_ID' => 'ID pistă Marketo',
    'LBL_MKTO_LEAD_SCORE' => 'Punctaj pistă',

    'LBL_FILTER_LEADS_REPORTS' => 'Rapoarte piste',
    'LBL_DATAPRIVACY_BUSINESS_PURPOSE' => 'Scopuri comerciale permise pentru',
    'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED' => 'Ultima actualizare a consimțământului',
);
