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

$mod_strings = array(

    'LBL_ADD_MODULE' => 'Toevoegen',
    'LBL_ADDRCITY' => 'Plaats',
    'LBL_ADDRCOUNTRY' => 'Land',
    'LBL_ADDRCOUNTRY_ID' => 'Land ID',
    'LBL_ADDRSTATEPROV' => 'Provincie',
    'LBL_ADMINISTRATION' => 'Connector beheer',
    'LBL_ADMINISTRATION_MAIN' => 'Connector instellingen',
    'LBL_AVAILABLE' => 'Beschikbaar',
    'LBL_BACK' => '< Terug',
    'LBL_COMPANY_ID' => 'Organisatie ID',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Enkele verplichte velden zijn nog leeg. Wijzigingen toch opslaan?',
    'LBL_CONNECTOR' => 'Connector',
    'LBL_CONNECTOR_FIELDS' => 'Connector velden',
    'LBL_DATA' => 'Gegevens',
    'LBL_DEFAULT' => 'Standaard',
    'LBL_DELETE_MAPPING_ENTRY' => 'Weet u zeker dat u deze input wilt verwijderen?',
    'LBL_DISABLED' => 'Uitgeschakeld',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'Geen resultaten gevonden met de huidige zoekcriteria',
    'LBL_ENABLED' => 'Ingeschakeld',
    'LBL_EXTERNAL' => 'Stel gebruikers in staat externe accounts aan te maken in deze connector. De eigenschappen moeten ook worden ingesteld in de "Connector eigenschappen instellen" pagina.',
    'LBL_EXTERNAL_SET_PROPERTIES' => 'Om deze connector te gebruiken dienen ook de eigenschappen worden ingesteld in de "Connector eigenschappen instellen" pagina.',
    'LBL_FINSALES' => 'Finsales',
    'LBL_MARKET_CAP' => 'Marktwaarde',
    'LBL_MERGE' => 'Samenvoegen',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Connectoren inschakelen',
    'LBL_MODIFY_DISPLAY_DESC' => 'Bepaal welke modules ingeschakeld zijn per connector.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Connector instellingen: Inschakelen connectoren',
    'LBL_MODULE_FIELDS' => 'Module velden',
    'LBL_MODIFY_MAPPING_TITLE' => 'In kaart brengen van connector velden',
    'LBL_MODIFY_MAPPING_DESC' => 'In kaart brengen welke connect velden gekoppeld zijn aan welke module velden om te bepalen welke connector data kan worden bekeken en samengevoegd in de module records.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Connector instellingen: Connector velden in kaart brengen',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Connector eigenschappen instellen',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Configureer de eigenschappen per connector, inclusief URL&#39;s en API keys.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Connector instellingen: Connector eigenschappen instellen',
    'LBL_MODIFY_SEARCH_TITLE' => 'Beheer Connector zoekfunctie',
    'LBL_MODIFY_SEARCH' => 'Zoeken',
    'LBL_MODIFY_SEARCH_DESC' => 'Selecteer welke connector velden gebruikt worden bij zoekopdrachten per module.',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Connector instellingen: Beheer connector zoekfunctie',
    'LBL_MODULE_NAME' => 'Connectoren',
    'LBL_MODULE_NAME_SINGULAR' => 'Connector',
    'LBL_NO_PROPERTIES' => 'Er zijn geen configureerbare eigenschappen bij deze connector.',
    'LBL_PARENT_DUNS' => 'Bovenliggende DUNS',
    'LBL_PREVIOUS' => '< Terug',
    'LBL_QUOTE' => 'Offerte',
    'LBL_RECNAME' => 'Organisatienaam',
    'LBL_RESET_TO_DEFAULT' => 'Terug naar standaardwaarde',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Weet u zeker dat u terug wilt gaan naar de standaard configuratie?',
    'LBL_RESET_BUTTON_TITLE' => 'Resetten',
    'LBL_RESULT_LIST' => 'Data lijst',
    'LBL_RUN_WIZARD' => 'Start wizard',
    'LBL_SAVE' => 'Opslaan',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Zoeken...',
    'LBL_SHOW_IN_LISTVIEW' => 'Toon samenvoegen lijstweergave',
    'LBL_SMART_COPY' => 'Smart copy',
    'LBL_SUMMARY' => 'Samenvatting',
    'LBL_STEP1' => 'Doorzoek en bekijk data',
    'LBL_STEP2' => 'Voeg records samen met',
    'LBL_TEST_SOURCE' => 'Test connector',
    'LBL_TEST_SOURCE_FAILED' => 'Test mislukt',
    'LBL_TEST_SOURCE_RUNNING' => 'Test uitvoeren...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Test was succesvol',
    'LBL_TITLE' => 'Data samenvoegen',
    'LBL_ULTIMATE_PARENT_DUNS' => 'Uiteindelijke bovenliggende DUNS',
    'ERROR_RECORD_NOT_SELECTED' => 'Fout: Selecteer een record in de lijst.',
    'ERROR_EMPTY_WRAPPER' => 'Fout: ophalen wrapper-exemplaar mislukt voor de bron [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => 'Fout: bron-Id niet gespecificeerd of leeg.',
    'ERROR_EMPTY_RECORD_ID' => 'Fout: record-Id niet gespecificeerd of leeg.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Fout: Er zijn geen aanvullende gegevens gevonden voor het record.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Er zijn geen modules ingeschakeld voor deze connector. Selecteer een module voor deze connector op de pagina Connectors inschakelen.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Error: There are no connectors enabled that have search fields defined.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Fout: Er kom geen sourcedefs.php bestand worden gevonden.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Fout: Er zijn geen bronnen gespecificeerd van waaruit gegevens kunnen worden opgehaald.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Fout: Er zijn geen connectors toegewezen aan deze module.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Fout: Er zijn geen zoekvelden gedefinieerd voor de module en connector. Neem contact op met de systeembeheerder.',
    'ERROR_NO_FIELDS_MAPPED' => 'Fout: U moet voor elke modulevermelding ten minste één connectorveld toewijzen aan een moduleveld.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Fout: Er zijn geen modulevelden toegewezen voor weergave in de resultaten. Neem contact op met de systeembeheerder.',
    'LBL_INFO_INLINE' => 'Info' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Sluiten' /*for 508 compliance fix*/,
);

