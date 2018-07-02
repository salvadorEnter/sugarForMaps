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
  'ERR_BAD_LOGIN_PASSWORD' => 'Käyttäjätunnus tai salasana väärin',
  'ERR_BODY_TOO_LONG' => 'Leipäteksti liian pitkä KOKO sähköpostin kaappaukseen. Trimmattiin.',
  'ERR_DELETE_FOLDER' => 'Kansiota ei voitu poistaa.',
  'ERR_INI_ZLIB' => 'Ei voitu tilapäisesti sammuttaa Zlib-pakkausta. ‘Testaa asetukset’ saattaa epäonnistua.',
  'ERR_MAILBOX_FAIL' => 'Ei voitu hakea sähköpostitilejä.',
  'ERR_NO_IMAP' => 'Ei löydetty IMAP-kirjastoa. Korjaa tämä ongelma, ennen kuin jatkat saapuvan sähköpostin käyttöä.',
  'ERR_NO_OPTS_SAVED' => 'Optimeita ei tallennettu sisääntulevan sähköpostin tilin kanssa. Tarkista asetukset',
  'ERR_TEST_MAILBOX' => 'Tarkista asetukset ja yritä uudelleen.',
  'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Kansion tilausta ei voitu purkaa ennen poistoa.',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Salli käyttäjien lähettää sähköposteja käyttäen ‘Lähettäjä’ -nimeä ja -osoitetta ‘Vastaa osoitteeseen’ -osoitteena.',
  'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kun tämä on valittu, tähän ryhmäviestitiliin liitetyt Lähettäjän nimi ja Lähettäjän osoite näkyvät valintana Lähettäjä-kentässä, kun kirjoitetaan viestejä käyttäjillä, joilla on pääsy ryhmäviestitiliin.',
  'LBL_APPLY_OPTIMUMS' => 'Ota käyttöön optimit',
  'LBL_ASSIGN_TEAM' => 'Aseta tiimeille',
  'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Liitä ryhmäkansioon',
  'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Valitse tämä, jos haluat luoda automaattisesti sähköpostitietueet kaikelle Sugariin tulevalle sähköpostille.',
  'LBL_ASSIGN_TO_TEAM_DESC' => 'Valitulla tiimillä on pääsy viestipalvelimelle.',
  'LBL_ASSIGN_TO_USER' => 'Määritä vastuukäyttäjä',
  'LBL_AUTOREPLY' => 'Automaattisen vastauksen malli',
  'LBL_AUTOREPLY_HELP' => 'Valitse automaattinen asetus, jolla ilmoitetaan sähköpostin lähettäjille, että heidän viestinsä on vastaanotettu.',
  'LBL_AUTOREPLY_OPTIONS' => 'Automaattisen vastauksen asetukset',
  'LBL_BASIC' => 'Perusasetukset',
  'LBL_BOUNCE_MODULE_NAME' => 'Palautuneiden viestien käsittelypostilaatikko',
  'LBL_CASE_MACRO' => 'Asiamakro',
  'LBL_CASE_MACRO_DESC' => 'Aseta makro, joka jäsennetään ja jota käytetään tuotujen sähköpostien linkittämiseen asiaan.',
  'LBL_CASE_MACRO_DESC2' => 'Aseta tämä mihin tahansa arvoon, mutta säilytä <b>‘%1’</b>.',
  'LBL_CERT' => 'Vahvista varmenne',
  'LBL_CERT_DESC' => 'Pakota postipalvelimen varmenteen vahvistaminen - älä käytä, jos varmenne on itsemyönnetty.',
  'LBL_CLOSE_POPUP' => 'Sulje ikkuna',
  'LBL_CREATE_CASE' => 'Luo palvelupyyntö',
  'LBL_CREATE_CASE_HELP' => 'Valitse tämä luodaksesi automaattisesti asiatietueita Sugariin saapuvista sähköposteista.',
  'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Uusi asia automaattisen vastauksen malli',
  'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Valitse automaattinen vastaus, joka lähetetään lähettäjälle ilmoituksena asian luomisesta. Sähköposti sisältää asian numeron asiamakroasetusta noudattavalla Aihe-rivillä. Tämä vastaus lähetetään ainoastaan silloin, kun ensimmäinen sähköposti saadaan lähettäjältä.',
  'LBL_CREATE_NEW_GROUP' => '—Luo ryhmä tallennuksen yhteydessä—',
  'LBL_CREATE_TEMPLATE' => 'Luo',
  'LBL_DEFAULT_FROM_ADDR' => 'Oletus:',
  'LBL_DEFAULT_FROM_NAME' => 'Oletus:',
  'LBL_DELETED_FOLDERS_LIST' => 'Seuraava(t) kansio(t) %s joko ei(vät) ole olemassa tai poistettiin palvelimelta',
  'LBL_DELETE_SEEN' => 'Poista luetut sähköpostit tuonnin jälkeen',
  'LBL_DISTRIBUTION_METHOD' => 'Jakelumenetelmä',
  'LBL_EDIT_LAYOUT' => 'Muokkaa asettelua',
  'LBL_EDIT_TEMPLATE' => 'Muokkaa',
  'LBL_EMAIL_BOUNCE_OPTIONS' => 'Palautettujen viestien käsittelyasetukset',
  'LBL_EMAIL_OPTIONS' => 'Valinnat',
  'LBL_ENABLE_AUTO_IMPORT' => 'Tuo sähköpostit automaattisesti',
  'LBL_FILTER_DOMAIN' => 'Ei automaattista vastausta tähän verkkotunnukseen',
  'LBL_FILTER_DOMAIN_DESC' => 'Määritä verkkotunnus, johon ei lähetetä automaattisia vastauksia.',
  'LBL_FIND_OPTIMUM_KEY' => 'F',
  'LBL_FIND_OPTIMUM_MSG' => '<br/>Etsitään optimeita yhteysmuuttujia.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Etsi optimaalinen konfiguraatio',
  'LBL_FIND_SSL_WARN' => '<br/>SSL:n testaus saattaa kestää kauan. Ole kärsivällinen.<br/>',
  'LBL_FORCE' => 'Pakota käänteinen',
  'LBL_FORCE_DESC' => 'Jotkin IMAP/POP3 -palvelimet vaativat erikoisia kytkimiä. Valitse pakottaaksesi käänteinen kytkin kun yhdistetään (/notls)',
  'LBL_FOUND_MAILBOXES' => 'Löytyi seuraavat käytettävät kansiot.<br/>Klikkaa yhtä valitaksesi sen:',
  'LBL_FOUND_OPTIMUM_MSG' => '<br/>Löytyi optimit asetukset. Paina alla olevaa painiketta käyttääksesi niitä sähköpostitililläsi.',
  'LBL_FROM_ADDR' => 'Lähettäjän osoite',
  'LBL_FROM_ADDR_DESC' => 'Tässä annettu sähköpostiosoite ei välttämättä näy viestin &quot;Lähettäjä&quot; -sarakkeessa postipalvelun tarjoajan rajoitusten vuoksi. Näissä tilanteissa näytetään lähtevän postin palvelimen asetuksissa määritetty osoite.',
  'LBL_FROM_NAME' => '‘Lähettäjän’ nimi',
  'LBL_FROM_NAME_ADDR' => 'Lähettäjän nimi/sähköposti',
  'LBL_GETTING_FOLDERS_LIST' => 'Haetaan kansiolistaa',
  'LBL_GET_SENT_FOLDER' => 'Hanki Lähetetyt-kansio',
  'LBL_GET_TRASH_FOLDER' => 'Hanki roskakorikansio',
  'LBL_GROUPFOLDER_ID' => 'Ryhmäkansion tunnus',
  'LBL_GROUP_QUEUE' => 'Liitä ryhmään',
  'LBL_HOME' => 'Etusivu',
  'LBL_IS_GROUP' => 'Ryhmä',
  'LBL_IS_PERSONAL' => 'Henkilökohtainen',
  'LBL_LIST_GLOBAL_PERSONAL' => 'Tyyppi',
  'LBL_LIST_MAILBOX_TYPE' => 'Sähköpostitilin käyttö',
  'LBL_LIST_NAME' => 'Nimi',
  'LBL_LIST_SERVER_URL' => 'Sähköpostipalvelin',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LOGIN' => 'Käyttäjänimi',
  'LBL_MAILBOX' => 'Valvotut kansiot',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_SSL' => 'Käytä SSL:ää',
  'LBL_MAILBOX_SSL_DESC' => 'Käytä SSLää yhdistettäessä. Jos tämä ei toimi, tarkista, että PHP-asennukseen sisältyy ‘--with-imap-ssl’ kääntämisen konfigurointivaiheessa.',
  'LBL_MAILBOX_TYPE' => 'Mahdolliset toimet',
  'LBL_MARK_READ' => 'Jätä viestit palvelimelle',
  'LBL_MARK_READ_DESC' => 'Merkitse viestit luetuksi viestipalvelimella tuodessa; älä poista.',
  'LBL_MARK_READ_NO' => 'Merkityt sähköpostit poistetaan tuonnin jälkeen',
  'LBL_MARK_READ_YES' => 'Sähköposti jätetään palvelimelle tuonnin jälkeen',
  'LBL_MAX_AUTO_REPLIES' => 'Automaattisten vastausten lukumäärä',
  'LBL_MAX_AUTO_REPLIES_DESC' => 'Aseta maksimimäärä vuorokauden aikana lähetetyille automaattisille vastausviesteille uniikkia sähköpostiosoitetta kohden.',
  'LBL_MODULE_NAME' => 'Saapuva sähköposti',
  'LBL_MODULE_NAME_SINGULAR' => 'Saapuva sähköposti',
  'LBL_MODULE_TITLE' => 'Saapuvat sähköpostit',
  'LBL_NAME' => 'Nimi',
  'LBL_NONE' => 'Tyhjä',
  'LBL_NO_OPTIMUMS' => 'Ei löydetty optimeita. Varmista asetukset ja yritä uudestaan.',
  'LBL_ONLY_SINCE' => 'Tuo vain edellisestä tarkistuksesta:',
  'LBL_ONLY_SINCE_DESC' => 'Käytettäessä POP3:a, PHP ei voi suodattaa uusia/lukemattomia viestejä. Tämä asetus sallii uusien viestien tarkistuspyynnön edellisestä pyynnöstä. Tämä huomattavasti parantaa suorituskykyä jos viestipalvelimesi ei tue IMAP:a.',
  'LBL_ONLY_SINCE_NO' => 'Ei. Tarkista kaikkia palvelimella olevia viestejä vastaan.',
  'LBL_ONLY_SINCE_YES' => 'Kyllä.',
  'LBL_OUTBOUND_SERVER' => 'Lähtevän postin palvelin',
  'LBL_PASSWORD' => 'Salasana',
  'LBL_PASSWORD_CHECK' => 'Salasanan tarkistus',
  'LBL_PERSONAL_MODULE_NAME' => 'Henkilökohtainen sähköpostitili',
  'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Henkilökohtainen sähköpostitili',
  'LBL_POP3_SUCCESS' => 'POP3-testiyhteys onnistui.',
  'LBL_POPUP_FAILURE' => 'Testiyhteys epäonnistui. Virhe näytetään alla.',
  'LBL_POPUP_SUCCESS' => 'Testiyhteys onnistui. Asetuksesi toimivat.',
  'LBL_POPUP_TITLE' => 'Testiasetukset',
  'LBL_PORT' => 'Postipalvelimen portti',
  'LBL_POSSIBLE_ACTION_DESC' => 'Luo Asia -vaihtoehdolle pitää valita ryhmäkansio.',
  'LBL_QUEUE' => 'Sähköpostitilijono',
  'LBL_RE' => 'RE:',
  'LBL_REPLY_NAME_ADDR' => 'Vastausnimi/-sähköposti',
  'LBL_REPLY_TO_ADDR' => '‘Vastaa osoitteseen’ -osoite',
  'LBL_REPLY_TO_NAME' => '‘Vastaa osoitteeseen’ -nimi',
  'LBL_SAME_AS_ABOVE' => 'Käytetään Lähettäjän nimi/-osoite',
  'LBL_SAVE_RAW' => 'Tallenna raaka lähde',
  'LBL_SAVE_RAW_DESC_1' => 'Valitse ‘Kyllä’ jos haluaisit säilyttää jokaisen sähköpostin raa&#39;an lähteen.',
  'LBL_SAVE_RAW_DESC_2' => 'Suuret liitetiedostot voi aiheuttaa vikoja konservatiivisesti tai väärin konfiguroiduissa tietokannoissa.',
  'LBL_SELECT' => 'Valitse',
  'LBL_SELECT_SENT_FOLDERS' => 'Valitse lähetetyt-kansio',
  'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Valitse tilatut kansiot',
  'LBL_SELECT_TRASH_FOLDERS' => 'Valitse roskakorikansio',
  'LBL_SENT_FOLDER' => 'Lähetetyt-kansio',
  'LBL_SERVER_OPTIONS' => 'Lisäasetukset',
  'LBL_SERVER_TYPE' => 'Viestipalvelimen protokolla',
  'LBL_SERVER_URL' => 'Viestipalvelimen osoite',
  'LBL_SSL' => 'Käytä SSL:ää',
  'LBL_SSL_DESC' => 'Jos postipalvelin tukee Secure Socket -yhteyksiä, tämän päälle laittaminen pakottaa käyttämään SSL-yhteyttä kun tuodaan sähköposteja.',
  'LBL_STATUS' => 'Tila:',
  'LBL_STATUS_ACTIVE' => 'Aktiivinen',
  'LBL_STATUS_INACTIVE' => 'Epäaktiivinen',
  'LBL_SUBSCRIBE_FOLDERS' => 'Tilauskansiot',
  'LBL_SYSTEM_DEFAULT' => 'Järjestelmän oletus',
  'LBL_TEST_BUTTON_KEY' => 'T',
  'LBL_TEST_BUTTON_TITLE' => 'Testi',
  'LBL_TEST_SETTINGS' => 'Testiasetukset',
  'LBL_TEST_SUCCESSFUL' => 'Yhteys onnistui.',
  'LBL_TEST_WAIT_MESSAGE' => 'Pieni hetki, kiitos',
  'LBL_TLS' => 'Käytä TLS:ää',
  'LBL_TLS_DESC' => 'Käytä Transport Layer Securitya muodostettaessa yhteys sähköpostipalvelimeen - käytä tätä vain, jos viestipalvelin tukee tätä protokollaa.',
  'LBL_TRASH_FOLDER' => 'Roskakorikansio',
  'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Varoitus: Olet muokkaamassa automaattisen tuonnin asetuksia, joka saattaa johtaa tietojen katoamiseen.',
  'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Varoitus: Automaattisen tuonnin pitää olla käytössä, kun luodaan automaattisesti asioita.',
  'LBL_WARN_IMAP' => 'Varoitukset:',
  'LBL_WARN_IMAP_TITLE' => 'Saapuva sähköposti poistettu käytöstä',
  'LBL_WARN_NO_IMAP' => 'Saapuva sähköposti <b>ei voi</b> toimia ilman IMAP c-client -kirjastoja käytössä tai käännettynä PHP-moduuliin. Ota yhteyttä järjestelmänvalvojaan tämän ongelman ratkaisemiseksi.',
  'LNK_CREATE_GROUP' => 'Luo uusi ryhmä',
  'LNK_LIST_CREATE_NEW_BOUNCE' => 'Uusi palautuneiden viestien käsittelytili',
  'LNK_LIST_CREATE_NEW_GROUP' => 'Uusi ryhmä viestitili',
  'LNK_LIST_MAILBOXES' => 'Kaikki sähköpostitilit',
  'LNK_LIST_QUEUES' => 'Kaikki jonot',
  'LNK_LIST_SCHEDULER' => 'Ajoitusohjelmat',
  'LNK_LIST_TEST_IMPORT' => 'Testaa sähköpostin tuontia',
  'LNK_NEW_QUEUES' => 'Luo uusi jono',
  'LNK_SEED_QUEUES' => 'Alusta jonot tiimeistä',
);

