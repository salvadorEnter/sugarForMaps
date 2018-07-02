<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Den impoterte filen ble lest vellykket',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'Den importerte posten er en del av en prosess og kan ikke redigeres siden noen av feltene er låst for redigering av prosessen.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Postene ble hoppet over på grunn av feil',
    'LBL_UPDATE_SUCCESSFULLY' => 'Postene ble vellykket opprettet eller oppdatert',
    'LBL_SUCCESSFULLY_IMPORTED' => 'Postene ble vellykket opprettet',
    'LBL_STEP_4_TITLE' => 'Trinn 4: Importer fil',
    'LBL_STEP_5_TITLE' => 'Trinn 5: Vis resultater',
    'LBL_CUSTOM_ENCLOSURE' => 'Felt kvalifisert av:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Kan ikke publiseres. Det finnes en annen publisert import-mappe med samme navn.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Kan ikke avpublisere en mappe eid av en annen bruker. Du eier en import- mappe med det samme navnet.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importering er ikke satt opp for denne modultypen',
    'LBL_IMPORT_TYPE' => 'Importerte handlinger',
    'LBL_IMPORT_BUTTON' => 'Opprett Poster',
    'LBL_UPDATE_BUTTON' => 'Opprett og oppdater Poster',
    'LBL_CREATE_BUTTON_HELP' => 'Bruk dette valget til å opprette nye oppføringer. Merk: Rader i importfilen som inneholder verdier som matcher ID-ene til eksisterende oppføringer vil ikke bli importert dersom verdiene er knyttet til ID-feltet.',
    'LBL_UPDATE_BUTTON_HELP' => 'Bruk dette valget til å opprette nye oppføringer. Dataene i importfilen vil matches med eksisterende oppføringer basert på oppførings-ID-en i importfilen.',
    'LBL_NO_ID' => 'ID kreves',
    'LBL_PRE_CHECK_SKIPPED' => 'Før-sjekk hoppet over',
    'LBL_NOLOCALE_NEEDED' => 'Ingen lokal konvertering nødvendig',
    'LBL_FIELD_NAME' => 'Feltnavn',
    'LBL_VALUE' => 'Verdi',
    'LBL_ROW_NUMBER' => 'Rekke nummer',
    'LBL_NONE' => 'Ingen',
    'LBL_REQUIRED_VALUE' => 'Påkrevd verdi mangler',
    'LBL_ERROR_SYNC_USERS' => 'Ugyldig verdi for synkronisering mot Outlook:',
    'LBL_ID_EXISTS_ALREADY' => 'ID eksisterer allerede i denne tabellen',
    'LBL_ASSIGNED_USER' => 'Hvis brukeren ikke eksisterer, bruk den gjeldende brukeren',
    'LBL_SHOW_HIDDEN' => 'Vis felt som normalt ikke er importerbare',
    'LBL_UPDATE_RECORDS' => 'Oppdater eksisterende oppføringer istedet for å importere dem (Ikke angre)',
    'LBL_TEST'=> 'Test import ( ikke lagre eller forandre data)',
    'LBL_TRUNCATE_TABLE' => 'Tøm tabellen før import (slett alle oppføringer)',
    'LBL_RELATED_ACCOUNTS' => 'Ikke opprett beslektede kontoer',
    'LBL_NO_DATECHECK' => 'Hopp over informasjonssjekk (raskere, men vil feile dersom noe av informasjonen er feil)',
    'LBL_NO_WORKFLOW' => 'Ikke kjør workflow i løpet av denne importeringen',
    'LBL_NO_EMAILS' => 'Ikke send ut e-post varsler i løpet av denne importeringen',
    'LBL_NO_PRECHECK' => 'Enhetlig modus format',
    'LBL_STRICT_CHECKS' => 'Bruk nøyaktige regelsett (Sjekk også e-post adresser og telefonnummer)',
    'LBL_ERROR_SELECTING_RECORD' => 'Feil under valg av oppføring:',
    'LBL_ERROR_DELETING_RECORD' => 'Feil under sletting av oppføring:',
    'LBL_NOT_SET_UP' => 'Import er ikke installert for denne modultypen',
    'LBL_ARE_YOU_SURE' => 'Er du sikker? Dette vil slette all data i denne modulen.',
    'LBL_NO_RECORD' => 'Ingen oppføringer med denne ID å oppdatere',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Import er ikke installert for denne modultypen.',
    'LBL_DEBUG_MODE' => 'Aktiver feilsøkingsmodus',
    'LBL_ERROR_INVALID_ID' => 'Oppgitt ID er for langt til å passe inn i feltet (maksimum lengde er 36 tegn)',
    'LBL_ERROR_INVALID_PHONE' => 'Ugyldig telefonnummer',
    'LBL_ERROR_INVALID_NAME' => 'Tekst for lang til å passe inn i feltet',
    'LBL_ERROR_INVALID_VARCHAR' => 'Tekst for lang til å passe inn i feltet',
    'LBL_ERROR_INVALID_DATETIME' => 'Ugyldig datotid',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Ugyldig datotid',
    'LBL_ERROR_INVALID_INT' => 'Ugyldig heltallsverdi',
    'LBL_ERROR_INVALID_NUM' => 'Ugyldig  numerisk verdi',
    'LBL_ERROR_INVALID_TIME' => 'Ugyldig tid',
    'LBL_ERROR_INVALID_EMAIL'=>'Ugyldig e-post adresse',
    'LBL_ERROR_INVALID_BOOL'=>'Ugyldig verdi (skal väre 1 eller 0)',
    'LBL_ERROR_INVALID_DATE'=>'Ugyldig dato',
    'LBL_ERROR_INVALID_USER'=>'Ugyldig brukernavn eller ID',
    'LBL_ERROR_INVALID_TEAM' => 'Ugyldig gruppenavn eller ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Ugyldig kontonavn eller ID',
    'LBL_ERROR_INVALID_RELATE' => 'Ugyldig relasjonsfelt',
    'LBL_ERROR_INVALID_CURRENCY' => 'Ugyldig valutaverdi',
    'LBL_ERROR_INVALID_FLOAT' => 'Ugyldig desimaltall',
    'LBL_ERROR_NOT_IN_ENUM' => 'Verdi finnes ikke i dropDown listen. Tillatte verdier er:',
    'LBL_ERROR_ENUM_EMPTY' => 'Value not in dropDown list. dropDown list is empty',
    'LBL_NOT_MULTIENUM' => 'Ikke et multienum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Import er ikke installert for denne modultypen',
    'LBL_IMPORT_MODULE_NO_USERS' => 'Advarsel: Du har ingen angitte brukere på ditt system. Hvis du importerer uten å legge til brukere først, vil alle oppføringer eies av administratoren.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Kan ikke publiseres. Det er allerede publisert en annen import-mappe med samme navn.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Kan ikke avpublisere en mappe eid av en annen bruker. Du eier en import- mappe med det samme navnet.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Katalogen',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'finnes ikke eller kan ikke redigeres',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Filen ble ikke lastet opp. Det kan hende din php.ini-fil har for lav  &#39;upload_max_filesize&#39;-verdi.',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Filen er for stor. Maksimum:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'bytes. Endre $sugar_config[&#39;upload_maxsize&#39;] in config.php',
    'LBL_MODULE_NAME' => 'Importer',
    'LBL_MODULE_NAME_SINGULAR' => 'Importer',
    'LBL_TRY_AGAIN' => 'Prøv igjen',
    'LBL_START_OVER' => 'Start på nytt',
    'LBL_ERROR' => 'Feil:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Importfilens inneholder {0} rader. Det optimale antall rader er {1}. Flere rader kan forsinke importprosessen. Klikk OK for å fortsette importen. Klikk Avbryt for å gjøre om og gjenopplaste importfilen.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Du kan ikke importere en system administrator bruker',
    'ERR_REPORT_LOOP' => 'Systemet oppdaget en rapporteringsløkke. En bruker kan ikke rapportere til seg selv, ei heller kan brukerens leder rapportere til brukeren selv.',
    'ERR_MULTIPLE' => 'Det er definert flere kolonner med samme feltnavn.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Mangler påkrevede felt::',
    'ERR_MISSING_MAP_NAME' => 'Savner tilpassede mapping- navn',
    'ERR_SELECT_FULL_NAME' => 'Du kan ikke velge Fullstendig navn når fornavn og etternavn er valgt.',
    'ERR_SELECT_FILE' => 'Velg fil som skal lastes opp.',
    'LBL_SELECT_FILE' => 'Velg fil:',
    'LBL_CUSTOM' => 'Spesialfelt',
    'LBL_CUSTOM_CSV' => 'Fil med komma som skilletegn',
    'LBL_CSV' => 'Fil med komma som avgrenser',
    'LBL_EXTERNAL_SOURCE' => 'en ekstern applikasjon eller tjeneste',
    'LBL_TAB' => 'Fil med tab som avgrenser',
    'LBL_CUSTOM_DELIMITED' => 'Tilpasset avgrenset fil',
    'LBL_CUSTOM_DELIMITER' => 'Felt avgrenset av:',
    'LBL_FILE_OPTIONS' => 'Fil innstillinger',
    'LBL_CUSTOM_TAB' => 'Fil med tab som avgrenser',
    'LBL_DONT_MAP' => '-- Ikke bruk dette feltet --',
    'LBL_STEP_MODULE' => 'Hvilken modul ønsker du å importere data inn i?',
    'LBL_STEP_1_TITLE' => 'Trinn 1: Velg datakilden',
    'LBL_CONFIRM_TITLE' => 'Steg {0}: Bekreft Importfil-Egenskaper',
    'LBL_CONFIRM_EXT_TITLE' => 'Steg {0}: Bekreft Ekstern Kilde-Egenskaper',
    'LBL_WHAT_IS' => 'Hva er datakilden?',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Koblingene for Microsoft Office er avhengige av at importfilen er kommaseparert (.csv). Om din importfil er tab-separert, så vil ikke koblingene bli som forventet.',
    'LBL_ACT' => 'Kjør!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Mine lagrede kilder:',
    'LBL_PUBLISH' => 'publisér',
    'LBL_DELETE' => 'slett',
    'LBL_PUBLISHED_SOURCES' => 'Publiserte kilder:',
    'LBL_UNPUBLISH' => 'opphev publisering',
    'LBL_NEXT' => 'neste >',
    'LBL_BACK' => '< Tilbake',
    'LBL_STEP_2_TITLE' => 'Trinn 2: Last opp importfilen',
    'LBL_HAS_HEADER' => 'Har kolonneoverskrift:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Notater:',
    'LBL_NOW_CHOOSE' => 'Velg filen som skal importeres.',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 og 2000 kan eksportere data i formatet  <b>Kommaadskilte verdier</b> som kan brukes til å importere data til systemet. Følg oppskriften nedenfor for å eksportere data fra Outlook:',
    'LBL_OUTLOOK_NUM_1' => 'Start <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Velg menyvalget <b>Import og Eksport ...</b> på <b>Fil</b>-menyen.',
    'LBL_OUTLOOK_NUM_3' => 'Velg <b>Eksporter til fil</b> og klikk Neste.',
    'LBL_OUTLOOK_NUM_4' => 'Velg <b>Kommadskilte verdier (Windows)</b> og klikk <b>Neste</b>.<br> Merk: Du kan bli bedt om å installere den eksporterte komponenten',
    'LBL_OUTLOOK_NUM_5' => 'Velg<b>Kontakter</b> mappen og klikk <b>Neste</b>. <Du kan velge ulike kontakt- mapper hvis dine kontakter er lagret i flere mapper.',
    'LBL_OUTLOOK_NUM_6' => 'Velg et filnavn og klikk <b>Next</b>',
    'LBL_OUTLOOK_NUM_7' => 'Klikk <b>Ferdig</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com kan eksportere data i formatet <b>Kommaadskilte verdier</b>, som kan brukes til å importere data til systemet ditt. Følg oppskriften nedenfor for å eksportere data fra Salesforce.com:',
    'LBL_SF_NUM_1' => 'Åpne din browser, gå til http://www.salesforce.com, og log inn med din e-post adresse og passord.',
    'LBL_SF_NUM_2' => 'Klikk på taben <b>Rapporter </b> i den øverste menyen',
    'LBL_SF_NUM_3' => '<b>For å eksportere kontoer:</b> Klikk på linken <b>Aktive kontoer</b> <br><b>For å eksportere kontakter:</b> Klikk på linken <b>Adresseliste</b>',
    'LBL_SF_NUM_4' => 'På <b>Trinn 1: Velg din rapporttype</b>,velg <b>Tabellrapport</b> klikk <b>Neste</b>',
    'LBL_SF_NUM_5' => 'På <b>Trinn 2: Velg rapportkolonnen</b>, velg kolonnene du vil eksportere og klikk <b>Neste</b>',
    'LBL_SF_NUM_6' => 'På <b>Trinn 3: Velg informasjonen som skal oppsummeres</b>, bare klikk<b>Neste</b>',
    'LBL_SF_NUM_7' => 'På <b>Trinn 4: Ordne rapportkolonnene</b>, bare klikk <b>Neste</b>',
    'LBL_SF_NUM_8' => 'På <b>Trinn 5: Velg dine rapportkriterier</b>, under <b>Startdato</b>, velg en dato langt nok i framtiden til å inkludere alle dine kontoer. Du kan også eksportere en bedrift-undergruppe ved å bruke mer avanserte kriterier . Når du er ferdig, klikk <b>Kjør rapport</b>',
    'LBL_SF_NUM_9' => 'En rapport vil ble generert, og siden vil komme opp <b> Rapport generasjonsstatus: Ferdig. <b> Klikk nå <b> Eksporter for å avslutte </b>',
    'LBL_SF_NUM_10' => 'På <b>Eksporter rapport:</b>, for <b>Eksporter filformat:</b>, velg<b>komma som avgrenser.csv</b>. Klikk <b>Eksport</b>.',
    'LBL_SF_NUM_11' => 'En dialog vil komme opp, slik at du kan lagre eksportfilen på dataen din.',
    'LBL_IMPORT_ACT_TITLE' => 'Kjør! kan eksportere data i formatet <b>Kommaadskilte verdier </b>, som kan brukes til å importere informasjon inn til systemet. For å eksportere din informasjon fra Kjør! gjør følgende:',
    'LBL_ACT_NUM_1' => 'Start <b> KJØR!</b>',
    'LBL_ACT_NUM_2' => 'velg menyen <b>Fil</b>, menyvalget <b>datautveksling</b>, så menyvalget <b>Eksporter...</b>',
    'LBL_ACT_NUM_3' => 'Velg filtypen <b> tekstavgrenset </b>',
    'LBL_ACT_NUM_4' => 'Velg filnavn og plassering for den eksporterte dataen og klikk<b>Neste</b>',
    'LBL_ACT_NUM_5' => 'Velg <b>Kun kontakoppføringer</b>',
    'LBL_ACT_NUM_6' => 'Klikk på <b>Valg...</b> knappen',
    'LBL_ACT_NUM_7' => 'Velg <b>Komma</b> som feltets skilletegn',
    'LBL_ACT_NUM_8' => 'Sjekk <b>Ja, eksporter feltnavn</b> sjekkboks og klikk <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Klikk <b>Neste</b>',
    'LBL_ACT_NUM_10' => 'Velg <b>Alle oppføringer</b> og klikk <b>Ferdig</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Mange programmer tillater å eksportere data inn til en <b> Kommaadskilt tekstfil(.csv)</b> ved å følge disse generelle trinnene:',
    'LBL_CUSTOM_NUM_1' => 'Start programmet og åpne datafilen.',
    'LBL_CUSTOM_NUM_2' => 'Velg<b>Lagre som...</b> or <b>Eksport...</b>menyvalg',
    'LBL_CUSTOM_NUM_3' => 'Lagre filen i en <b>CSV</b> eller <b>Verdier adskilt med komma</b> format',
    'LBL_IMPORT_TAB_TITLE' => 'Mange programmer tillater deg å eksportere data inn til en <b> tekstfil med tab som avgrenser(.tsv or .tab)</b> ved å følge disse generelle trinnene:',
    'LBL_TAB_NUM_1' => 'Start programmet og åpne datafilen',
    'LBL_TAB_NUM_2' => 'Velg <b>Lagre som...</b> eller <b>Eksport...</b> menyvalg',
    'LBL_TAB_NUM_3' => 'lagre filen i et <b>TSV</b> eller <b>tab-delte verdier</b> format',
    'LBL_STEP_3_TITLE' => 'Trinn 3: Bekreft felt og import',
    'LBL_STEP_DUP_TITLE' => 'Steg {0}: Se Etter Mulige Duplikater',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Fra listen under, velg feltene i import- filen som skal importeres til hvert felt i systemet. Når du er ferdig, klikk <b> Importer nå </b>',
    'LBL_DATABASE_FIELD' => 'Databasefelt',
    'LBL_HEADER_ROW' => 'Overskriftsrad',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Velg dersom toppraden i importfilen er en "overskriftsrad" som inneholder feltnavn.',
    'LBL_ROW' => 'Rad',
    'LBL_SAVE_AS_CUSTOM' => 'Lagre som tilpasset mapping:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Tilpasset mapping-navn:',
    'LBL_CONTACTS_NOTE_1' => 'Enten etternavn eller hele navnet må bli kartlagt.',
    'LBL_CONTACTS_NOTE_2' => 'Hvis fullt navn er kartlagt vil fornavn og etternavn bli oversett.',
    'LBL_CONTACTS_NOTE_3' => 'Hvis fullt navn er kartlagt, vil informasjonen i hele navnet deles inn i et fornavn og et etternavn når det legges inn i databasen.',
    'LBL_CONTACTS_NOTE_4' => 'Felt som slutter i adressegate 2 og adressegate 3 er lenket sammen med hovedgateadresse- feltet når det legges inn i databasen.',
    'LBL_ACCOUNTS_NOTE_1' => 'Felt som slutter i adressegate 2 og adressegate 3 er lenket sammen med hovedgateadresse- feltet når det legges inn i databasen.',
    'LBL_REQUIRED_NOTE' => 'Nødvendige felt:',
    'LBL_IMPORT_NOW' => 'Importer nå:',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Kan ikke åpne den importerte filen for lesing',
    'LBL_NOT_SAME_NUMBER' => 'Det var ikke det samme antall felt per linje i filen',
    'LBL_NO_LINES' => 'Det var ingen linjer i din importerte fil.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Den impoterte filen har allerede blitt behandlet, eller så eksisterer den ikke.',
    'LBL_SUCCESS' => 'Framgang',
	'LBL_FAILURE' => 'Import mislyktes:',
    'LBL_SUCCESSFULLY' => 'Impotert vellykket',
    'LBL_LAST_IMPORT_UNDONE' => 'Din siste importering ble ikke ferdig.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Det var ingen importeringer å åpne',
    'LBL_FAIL' => 'Mislykkes:',
    'LBL_RECORDS_SKIPPED' => 'Oppføringer hoppet over fordi det manglet en eller flere påkrevde felt.',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Oppføringer hoppet over fordi ID`ene enten har eksistert eller er lengre enn 36 tegn.',
    'LBL_RESULTS' => 'Resultater:',
    'LBL_CREATED_TAB' => 'Opprettet Oppføringer',
    'LBL_DUPLICATE_TAB' => 'Duplikater',
    'LBL_ERROR_TAB' => 'Feil',
    'LBL_IMPORT_MORE' => 'Importer mer',
    'LBL_FINISHED' => 'Gå tilbake til',
    'LBL_UNDO_LAST_IMPORT' => 'Åpne siste importering:',
    'LBL_LAST_IMPORTED'=>'Sist impotert',
    'ERR_MULTIPLE_PARENTS' => 'Du kan bare ha ett overordned ID angitt.',
    'LBL_DUPLICATES' => 'Duplikater funnet',
    'LNK_DUPLICATE_LIST' => 'Last ned liste over duplikater',
    'LNK_ERROR_LIST' => 'Last ned liste over feil',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Last ned oppføringer som ikke kan importeres',
    'LBL_UNIQUE_INDEX' => 'Velg indeks for duplikatsammenligning',
    'LBL_VERIFY_DUPS' => 'Bekreft duplikatoppføringer mot valgte indekser',
    'LBL_INDEX_USED' => 'Indeks(er) brukt:',
    'LBL_INDEX_NOT_USED' => 'Ikke brukt indeks(er):',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Filen ble ikke vellykket opplastet. Sjekk filtillatelser i din Sugar cache innstalasjonskatalog.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Entydig ID nummer',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Navn eller ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefonnummer',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Gruppenavn eller ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Tekst:',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Tekst:',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Tekst:',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Tid',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Dato',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datotid',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Brukernavn eller ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; eller &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Liste',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-post adresse',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numerisk (Ingen desimaler)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numerisk (Ingen desimaler)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numerisk (Ingen desimaler)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numerisk (Desimaler tillatt)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numerisk (Desimaler tilatt)',
    'LBL_DATE_FORMAT' => 'Datoformat:',
    'LBL_TIME_FORMAT' => 'Tidsformat:',
    'LBL_TIMEZONE' => 'Tidssone:',
    'LBL_ADD_ROW' => 'Legg til felt',
    'LBL_REMOVE_ROW' => 'Fjern felt',
    'LBL_DEFAULT_VALUE' => 'Startverdi',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Vis avanserte valg',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Skjul avanserte valg',
    'LBL_SHOW_NOTES' => 'Vis Notater',
    'LBL_HIDE_NOTES' => 'Skjul Notater',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Vis forhåndsviste kolonner',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Skjul forhåndsviste kolonner',
    'LBL_SAVE_MAPPING_AS' => 'Lagre mapping som',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Singel anførselstegn(&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dobbel anførselstegn (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Ingen',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Annet:',
    'LBL_IMPORT_COMPLETE' => 'Importering ferdig',
    'LBL_IMPORT_COMPLETED' => 'Import Fullført',
    'LBL_IMPORT_ERROR' => 'Det oppstod en feil ved imporen',
    'LBL_IMPORT_RECORDS' => 'Importerer oppføringer',
    'LBL_IMPORT_RECORDS_OF' => 'av',
    'LBL_IMPORT_RECORDS_TO' => 'til',
    'LBL_CURRENCY' => 'Valuta',
    'LBL_SYSTEM_SIG_DIGITS' => 'Betydelige systemsiffer',
    'LBL_NUMBER_GROUPING_SEP' => 'Tusendels separator',
    'LBL_DECIMAL_SEP' => 'Desimaltegn',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Format for navnvisning',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Eksempel',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Hilsen, "f" Fornavn, "l" Etternavn</i>',
    'LBL_CHARSET' => 'Filkoding',
    'LBL_MY_SAVED_HELP' => 'En lagret mapping spesifiserer en tidligere brukt kombinasjon av en spesifikk datakilde og et sett med databasefelt for å kartlegge feltene i den importerte filen.<br> Klikk <b>publiser</b> for å lage mappingen tilgjengelig for andre brukere. <br> Klikk <b>Avpubliser</b> for å lage mappingen utilgjengelig for andre brukere.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Bruk dette valget for å velge dine allerede definerte importvalg, inkludert importegenskaper, koblinger, og eventuelle duplikatsjekker, for denne importen. <br><br>Klikk <b>Publisér</b> for å gjøre koblingen tilgjengelig for andre brukere.<br>Klikk <b>Av-Publisér</b> for å gjøre koblingen utilgjengelig for andre brukere. <br>Klikk <b>Slett</b> for å slette en kobling for alle brukere.',
    'LBL_MY_PUBLISHED_HELP' => 'En publisert mapping spesifiserer en tidligere brukt kombinasjon av en spesifikk datakilde og et sett med databasefelt for å kartlegge feltene i importertfilen.',
    'LBL_ENCLOSURE_HELP' => '<p> <b>Markeringstegn</b> er brukt til å legge ved innholdet til det planlagte feltet, inkludert tegn som er brukt som skilletegn. <br><br>Eksempel: Hvis skilletegnet er et komma (,) og markeringen er et anførselstegn ("), er <br><b>"Cupertino, California"</b> importert til et felt i programmet, og vises som<b>Cupertino, California</b>.<br> Hvis det ikke er noe markeringstegn, eller hvis et annet tegn er markeringen, vil <br><b>"Cupertino, California"</b> väre importert til närliggende felt som<b>"Cupertino</b> og<b>Texas"</b>.<br><br>. Merk: Importfilen kan ikke inneholde noen markeringstegn. <br>. Standard markeringstegn for komma og tab- delte filer opprettet i Excel er et anførselstegn.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Velg dette valget dersom tegnet som skiller feltetene i importfilen er et <b>komma</b>, eller hvis filtypen er .csv.',
    'LBL_DELIMITER_TAB_HELP' => 'Velg dette valget dersom tegnet som skiller feltetene i importfilen er et <b>TAB</b>, og filtypen er .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Velg dette valget dersom tegnet som skiller feltene i importfilen verken er et komma, eller en TAB, og  skriv inn type tegn i feltet ved siden av.',
    'LBL_DATABASE_FIELD_HELP' => 'Velg et felt fra feltlisten som fins i databasen for moduler.',
    'LBL_HEADER_ROW_HELP' => 'Dette er felttitlene i overskriftsraden av importerte filer.',
    'LBL_DEFAULT_VALUE_HELP' => 'Indiker en verdi til å bruke i feltet i den opprettede eller oppdaterte posten, hvis feltet i importfilen ikke inneholder noe data.',
    'LBL_ROW_HELP' => 'Dette er dataen i den første ikke-overskriftsraden av importfilen.',
    'LBL_SAVE_MAPPING_HELP' => 'Skriv inn et navn for settet med databasefelt brukt ovenfor, for  å tilordne feltene i importfil-feltene.<br> Settet med felt, inkludert rekkefølgen av felt og data-souce valgt i Import-trinn 1, vil bli lagret under importeringsforsøket. <br> Den lagrede tilordningen kan deretter bli valgt i Import-trinn 1 for annen importering.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Spesifiser innstillingene i importfilen for å forsikre at dataen er riktig impotert <br>. Disse innstillingene vil ikke overstyre dine preferanser. De opprettede eller oppdaterte oppføringene vil inneholde innstillinger spesifisert i din Min konto side.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Velg felt i importfilen som skal brukes til duplikat sjekk.<br> Hvis dataen i de valgte feltene samsvarer med dataen i felt i eksisterende poster, vil det ikke opprettes nye poster for rader som inneholder det duplikate feltdataen.<br> Radene som inneholder duplikate feltdata vil bli identifisert i importresultatene.',
    'LBL_IMPORT_STARTED' => 'Importering ble startet:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Importfil innstillinger',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Postene kunne ikke oppdateres på grunn av et tilgangsproblem.',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Er du sikker på at du vil slette denne mappingen?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Dersom importfildataene var eksportert fra en av følgende kilder, velg hvilken.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Velg kilden for automatisk å anvende tilpassende koblinger slik at koblingsprosessen kan forenkles (neste steg)',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Bruk dette valget for å importere data direkte fra en ekstern applikasjon eller tjeneste, slik som Gmail.',
    'LBL_EXAMPLE_FILE' => 'Last Ned Importfil-Mal',
    'LBL_CONFIRM_IMPORT' => 'Du har valgt å oppdatere oppføringer under importprosessen. Oppdateringer på eksisterende oppføringer kan ikke omgjøres. Men, oppføringer opprettet under importprosessen kan omgjøres (slettes), hvis man ønsker. Klikk Kansellér for å velge å opprette kun nye oppføringer, eller OK for å fortsette.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Advarsel: Du har allerede valgt en tilpasset kobling for denne importen, vil du fortsette?',
    'LBL_EXTERNAL_FIELD' => 'Eksternt Felt',
    'LBL_SAMPLE_URL_HELP' => 'Last ned en eksempel-importfil som inneholder en overskriftsrad med modulfeltene. Denne filen kan benyttes som mal for å opprette en importfil inneholdende de data du ønsker å importere.',
    'LBL_AUTO_DETECT_ERROR' => 'Skilletegnene i importfilen ble ikke gjenkjent. Vennligst se over innstillingene i Importfil-egenskapene.',
    'LBL_MIME_TYPE_ERROR_1' => 'Den valgte filen ser ikke ut til å inneholde noen adskilt liste. Vennligst sjekk filtypen. Vi anbefaler kommaseparerte filer (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'For å fortsette importen av den valgte filen, klikk OK. For å laste opp en ny/annen fil, klikk Forsøk Igjen',
    'LBL_FIELD_DELIMETED_HELP' => 'Skilletegnet angir tegnet som skal skille mellom feltkolonnene.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Velg en fil som inneholder data som igjen er adskilt av et skilletegn, slik som en komma- eller tabulator-separert fil. .csv-filer er hva vi anbefaler.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Klarte ikke å hente kildeadapter, vennligst forsøk på nytt.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Klarte ikke å hente ekstern kilde, vennligst forsøk på nytt.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Mellomlagringskatalogen for import er ikke skrivbar.',
    'LBL_ADD_FIELD_HELP' => 'Bruk dette valget for å legge en verdi til et felt for alle oppføringer som er opprettet og/eller oppdatert. Velg først feltet og skriv inn/velg så en verdi for det feltet i Standard Felt-kolonnen.',
    'LBL_MISSING_HEADER_ROW' => 'Ingen Overskriftsrad Funnet',
    'LBL_CANCEL' => 'Avbryt',
    'LBL_SELECT_DS_INSTRUCTION' => 'Klar til å starte importen? Velg datakilden du ønsker å importere fra.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Velg en fil på din datamaskin som inneholder dataene du ønsker å importere, eller last ned malen for å få en tjuvstart på det å skape en importfil.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Her ser du hvordan de første radene i importfilen ser ut med de gjenkjente filegenskapene. Dersom en overskriftsrad ble gjenkjent så vises denne på den øverste raden i tabellen. Se på importfil-egenskapene for å endre de gjenkjente egenskapene og for å sette andre egenskaper. Ved å oppdatere oppsettet så vil visningen av dataene i tabellen også oppdatere seg.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Tabellen nedenfor inneholder alle feltene i modulen som kan tilordnes til dataene i importfilen. Hvis filen inneholder en overskriftsrad, har kolonnene i filen blitt tilordnet samsvarende felt. Sjekk tilordningene for å sørge for at de er hva du forventer, og foreta endringer etter behov. For å hjelpe deg å sjekke tilordningene, viser rad 1 dataene i filen. Sørg for å tilordne alle de nødvendige feltene (merket med en stjerne).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'For å unngå å skape duplikate poster, velg hvilke av de tilordnede feltene du ønsker å bruke til å utføre en duplikatsjekk mens data blir importert. Verdier innenfor eksisterende poster i de utvalgte områdene vil bli sjekket mot dataene i importfilen. Hvis samsvarende data blir funnet, vil radene i importfilen som inneholder dataene bli vist sammen med importresultatene (neste side). Du vil da kunne velge hvilke av disse radene du ønsker å fortsette å importere.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Logg Inn',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Logg av',
    'LBL_DUP_HELP' => 'Her er radene i importfilen som ikke ble importert fordi de inneholder data som samsvarer med verdiene i eksisterende poster basert på duplikatsjekken. Dataene som samsvarer er uthevet. For å re-importere disse radene, last ned listen, foreta endringer og klikk på <b>Importer På Nytt</b>.',
    'LBL_DESELECT' => 'fjern markering',
    'LBL_SUMMARY' => 'Oppsummering',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Her er radene i importfilen som ikke ble importert grunnet feil. For å re-importere disse radene, last ned listen, gjør endringene og klikk <b>Importér På Nytt</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'Tabellen nedenfor inneholder feltene i den eksterne kilden og modulfeltene som de er mappet mot. Sjekk mappingene for å sørge for at de er hva du forventer, og foreta endringer etter behov. Sørg for å map&#39;e alle de nødvendige feltene (merket med en stjerne).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Importen vil bli forsøkt utført på kontakter fra alle Google Contacts-grupper.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Brukernavnene til de nyopprettede brukere vil som standard være det fulle navnet fra Google Contact. Brukernavnene kan endres etter at brukerne er opprettet.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Klikk <b>Importer nå</b> for å starte importen. Oppføringer vil kun bli opprettet for poster som inneholder etternavn. Oppføringer vil ikke bli opprettet for data som er identifisert som duplikater basert på navn og/eller epostadresser som matcher eksisterende poster.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Denne kolonnen inneholder feltene i den eksterne kilden som inneholder data som vil bli brukt for å skape nye oppføringer.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Angi en verdi som skal brukes for feltet i den skapte oppføringen hvis feltet i den eksterne kilden ikke inneholder data.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Hvis du vil tildele de nye postene til en annen bruker enn deg selv, bruk Standardverdi-kolonnen for å velge en annen bruker.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Hvis du vil tildele de nye postene til et team annet enn dine standard teams, bruk Standardverdi-kolonnen for å velge andre teams.',
    'LBL_SIGN_IN_HELP' => 'For å aktivere denne tjenesten må du logge inn under Eksterne Kontoer-fanen på siden for brukerinnstillinger.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Prøver å håndtere e-postadresser i en Bean som ikke støtter det.",
);
