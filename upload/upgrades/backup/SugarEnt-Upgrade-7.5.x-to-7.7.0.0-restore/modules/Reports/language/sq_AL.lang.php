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
  'CHART_COUNT_PATTERN' => '{count} {module} ku {group_label} është {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} është {numerical_value}{thousands} ku {group_label} është {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} i {currency_symbol}{numerical_value}{thousands} ku {group_label} është {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Parashikimi aktual semestral',
  'DEFAULT_REPORT_TITLE_10' => 'Raste të reja mujore',
  'DEFAULT_REPORT_TITLE_11' => 'Tubacioni nga lloji i Ekipit',
  'DEFAULT_REPORT_TITLE_12' => 'Tubacioni nga Ekipi i Përdoruesit',
  'DEFAULT_REPORT_TITLE_13' => 'Detyrat sipas grupit të përdoruesve',
  'DEFAULT_REPORT_TITLE_14' => 'Thirjet nga grupi për nga përdoruesi',
  'DEFAULT_REPORT_TITLE_15' => 'Mbledhjet për nga grupi për nga përdoruesi',
  'DEFAULT_REPORT_TITLE_16' => 'Llogaritë për nga  lloji për nga industria',
  'DEFAULT_REPORT_TITLE_17' => 'Mundësitë e fituara sipas burimit udhëheqës',
  'DEFAULT_REPORT_TITLE_18' => 'Udhëheqjet për nga burimi udhëheqës',
  'DEFAULT_REPORT_TITLE_19' => 'Përdorimi im i Parametrave (Sot)',
  'DEFAULT_REPORT_TITLE_2' => 'parashikime të detajuara',
  'DEFAULT_REPORT_TITLE_20' => 'Përdorimi im i Parametrave (Fund 7 ditëve)',
  'DEFAULT_REPORT_TITLE_21' => 'Përdorimi im i Parametrave (Fund 30 ditëve)',
  'DEFAULT_REPORT_TITLE_22' => 'Përdorimi i moduleve të mia (sot)',
  'DEFAULT_REPORT_TITLE_23' => 'Përdorimi i moduleve të mia (7 ditëve të fundit)',
  'DEFAULT_REPORT_TITLE_24' => 'Përdorimi i moduleve të mia (30 ditët e fundit)',
  'DEFAULT_REPORT_TITLE_25' => 'Përdorimi im i Parametrave (Fund 7 ditëve)',
  'DEFAULT_REPORT_TITLE_26' => 'Përdorimi i Përdoruesve të parametrave (Fund 30 ditëve)',
  'DEFAULT_REPORT_TITLE_27' => 'Modulet e përdorura nga raportet e mia Direkte (30 Ditët e Fundit)',
  'DEFAULT_REPORT_TITLE_28' => 'Pyetjet e ngadalshme',
  'DEFAULT_REPORT_TITLE_29' => 'Regjistrimet e mia të modifikuara (7 ditët e fundit)',
  'DEFAULT_REPORT_TITLE_3' => 'Lista e llogarive të partnerëve',
  'DEFAULT_REPORT_TITLE_31' => 'Regjistrimet e mia të Modifikuara së fundi (30 Ditët e Fundit)',
  'DEFAULT_REPORT_TITLE_32' => 'Regjistrimet e Modifikuara nga raportet e mia direkte (30 Ditët e Fundit)',
  'DEFAULT_REPORT_TITLE_4' => 'Lista e llogarive të konsumatorëve',
  'DEFAULT_REPORT_TITLE_41' => 'Sesionet Aktivë të përdoruesve (7 Ditët e Fundit)',
  'DEFAULT_REPORT_TITLE_42' => 'Përmbledhja e Sesionit të Përdoruesit  (7 Ditët e Fundit)',
  'DEFAULT_REPORT_TITLE_43' => 'Pronarët e llogarisë së klientit',
  'DEFAULT_REPORT_TITLE_44' => 'Llogaritë e konsumatorëve të mi të ri',
  'DEFAULT_REPORT_TITLE_45' => 'Mundësitë për nga faza e shitjes',
  'DEFAULT_REPORT_TITLE_46' => 'Mundësitë për nga lloji',
  'DEFAULT_REPORT_TITLE_47' => 'Thirjet e hapura',
  'DEFAULT_REPORT_TITLE_48' => 'Hap mbledhjet',
  'DEFAULT_REPORT_TITLE_49' => 'Detyrat e hapura',
  'DEFAULT_REPORT_TITLE_5' => 'Lista e thirjeve sipas datës së fundit të konektimit',
  'DEFAULT_REPORT_TITLE_50' => 'mundësitë e fituara për nga llogaria',
  'DEFAULT_REPORT_TITLE_51' => 'Mundësitë e fituara për nga përdoruesi',
  'DEFAULT_REPORT_TITLE_52' => 'Të gjitha mundsitë e hapura',
  'DEFAULT_REPORT_TITLE_53' => 'Të gjitha mundësitë e mbyllura',
  'DEFAULT_REPORT_TITLE_56' => 'mundësitë e analizave te produktit Për të kaluara, aktuale, periudh e re kohore nga Muaji',
  'DEFAULT_REPORT_TITLE_57' => 'mundësitë e fazës së shitjes për të kaluarën, akutuale, periudh e re kohore nga muaj',
  'DEFAULT_REPORT_TITLE_58' => 'parashikimi i fundit/aktual/tremujorit tjetër',
  'DEFAULT_REPORT_TITLE_59' => 'mundësitë nga faza e shitjes për reportues në kohën e tashme',
  'DEFAULT_REPORT_TITLE_6' => 'Mundësitë nga burimet udhëheqëse',
  'DEFAULT_REPORT_TITLE_7' => 'Rastet e hapura sipas statusit të përdoruesve',
  'DEFAULT_REPORT_TITLE_8' => 'Rastet e hapura mujore sipas përdoruesve',
  'DEFAULT_REPORT_TITLE_9' => 'Rastet e hapura sipas prioritet të përdoruesve',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Për orrë',
    21600 => 'Çdo 6 orë',
    43200 => 'Çdo 12 orë',
    86400 => 'Për ditë',
    604800 => 'Për javë',
    1209600 => 'Çdo 2 javë',
    2419200 => 'Çdo 4 javë',
  ),
  'ERR_REPORT_DEACTIVATED' => 'Raporti i skeduluar "{0}" është deaktivizuar',
  'ERR_REPORT_DEACTIVATED_SUBJECT' => 'Raporti i skeduluar është deaktivizuar',
  'ERR_REPORT_INVALID' => 'Definimi i raportit "{0}" përmban fushat jovalide: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Raporti është jovalid',
  'ERR_SELECT_COLUMN' => 'Ju lutemi selektoni kolonën e parë të shfaqjes.',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Raporto në',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtër',
  'LBL_3_CHOOSE' => '3. Zgjidh shfaqje të kolonave',
  'LBL_3_GROUP' => '3. Group',
  'LBL_4_CHOOSE' => '4.Zgjidh shfaqje të kolonave',
  'LBL_5_CHART_OPTIONS' => 'Opcionet e grafikut',
  'LBL_ACCOUNT' => 'Llogari',
  'LBL_ACCOUNTS' => 'llogaritë',
  'LBL_ACCOUNT_REPORTS' => 'raportet e llogarive',
  'LBL_ACTIVITIES_REPORTS' => 'Raportet e aktiviteteve',
  'LBL_ADDED_FAVORITES' => 'raporti(et) i shtuar në Raportet e mia favorite',
  'LBL_ADD_BTN_HELP' => 'Kliko për të shtuar grupin e ri Filtër. Përdorni grupe për të aplikuar logjikën e DHE/OSE të grupëve filtruese.',
  'LBL_ADD_COLUMN' => 'Shto kolonë',
  'LBL_ADD_FILTER_TO' => 'Shto filter në',
  'LBL_ADD_GROUP' => 'Shto grup filtrash',
  'LBL_ADD_NEW_FILTER' => 'shto filtër të ri',
  'LBL_ADD_RELATE' => 'shto në lidhje me',
  'LBL_ADVANCED_FILTERS' => 'Filtra të avancuar',
  'LBL_AFTER' => 'pas',
  'LBL_ALERT_CANT_ADD' => 'Ju nuk mund të shtoni lidhjen e modulit derisa të selektoni tabelën nga lidhja.\\nSelektoni modulin në  lëshimin e majtë nga butoni i "Lidhjes së shtuar" që ju klikuat.',
  'LBL_ALL' => 'Më së paku',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Të gjitha raportet e publikuara',
  'LBL_ALL_REPORTS' => 'Shiko raportet',
  'LBL_ALT_INFORMATION' => 'Informacioni',
  'LBL_ALT_SHOW' => 'trego',
  'LBL_AND' => 'Dhe',
  'LBL_ANY' => 'Çdonjë',
  'LBL_ANY_ONE_OF' => 'çdonjë nga',
  'LBL_ASCENDING' => 'Ngritje',
  'LBL_ASSIGNED_TO_NAME' => 'Drejtuar:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Selekto së paku një kolonë të shfaqur.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Së paku një kolonë përmbledhëse',
  'LBL_AVAILABLE_FIELDS' => 'Fushat në dipozicion',
  'LBL_AVG' => 'mestarja',
  'LBL_BASIC_FILTERS' => 'Filtra bazik',
  'LBL_BEFORE' => 'para',
  'LBL_BUG_REPORTS' => 'raportet e gabimeve',
  'LBL_BY_DAY' => 'Ditore',
  'LBL_BY_FISCAL_QUARTER' => 'Nga kuartali fiskal',
  'LBL_BY_FISCAL_YEAR' => 'Nga viti fiskal',
  'LBL_BY_MONTH' => 'Nga muaji',
  'LBL_BY_QUARTER' => 'semesrale',
  'LBL_BY_YEAR' => 'vjetore',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Lista e thirjeve sipas datës së fundit të kontaktimit',
  'LBL_CALL_REPORTS' => 'raportet e thirjeve',
  'LBL_CANCEL' => 'Anulo',
  'LBL_CANNOT_BE_EMPTY' => 'nuk mund të jetë bosh.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'Tabela nuk mund të shfaqet për shkak të konfiguracionit të saj.',
  'LBL_CASE_REPORTS' => 'raportet e rasteve',
  'LBL_CHANGE' => 'ndrysho',
  'LBL_CHART_DATA_HELP' => 'Selekto përmbledhjen e cila do të shfaqet në grafikun.',
  'LBL_CHART_DESCRIPTION' => 'Përshkrimi',
  'LBL_CHART_OPTIONS' => 'Opcionet e grafikut',
  'LBL_CHART_TYPE' => 'lloji i grafikut',
  'LBL_CHOOSE_COLUMNS' => 'zgjidh kolona për të shfaqur',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Zgjidh shfaqjen e kolonave',
  'LBL_CHOOSE_SUMMARIES' => 'zgjidh mbledhje për të shfaqur',
  'LBL_CLEAR' => 'Fshi',
  'LBL_COLUMN_NAME' => 'Emri i kolonën',
  'LBL_COMBO_TYPE_AHEAD' => 'kërkim për fushë',
  'LBL_CONTACT' => 'Kontakt:',
  'LBL_CONTACTS' => 'Kontaktet',
  'LBL_CONTACT_REPORTS' => 'raportet e kontakteve',
  'LBL_CONTAINS' => 'Përmban',
  'LBL_CONTENT' => 'Përmbatja',
  'LBL_CONTRACT_REPORTS' => 'raportet e kontratave',
  'LBL_COUNT' => 'Numro',
  'LBL_CREATE_CUSTOM_REPORT' => 'Raporti wizardi',
  'LBL_CREATE_REPORT' => 'Krijo raport',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_CURRENT_FISCAL_QUARTER' => 'Kuartali aktual fiskal',
  'LBL_CURRENT_FISCAL_YEAR' => 'Viti aktual fiskal',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Marrëveshjet e kryera të tremujorit aktual',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Parashikimi aktual semestral',
  'LBL_CURRENT_USER' => 'Përdorues aktua',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Lista e llogarive të konsumatorëve',
  'LBL_DATE' => 'data e fillimit',
  'LBL_DATE_BASED_FILTERS' => 'Data e Filtrave është relative me zonën kohore të raportit që është caktuar për përdoruesin',
  'LBL_DAY' => 'dita',
  'LBL_DEFINE_FILTERS' => 'Defino filtrat',
  'LBL_DELETE' => 'Fshi',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Fusha vijuese në këtë raport nuk është më valide.',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Ju lutemi redaktoni raportin dhe kontrolloni për t&#39;u siguruar se parametrat tjera janë ende relevante.',
  'LBL_DELETE_ERROR' => 'Vetëm pronarët e raporteve apo administratorët mund të fshinë raportet',
  'LBL_DEL_THIS' => 'Largo',
  'LBL_DESCENDING' => 'Zbritje',
  'LBL_DETAILED_FORECAST' => 'parashikime të detajuara',
  'LBL_DISPLAY_COLS_HELP_DESC' => 'Hapat për të zgjedhur Kolonat e shfaqjes: <br />1) Klikoni mbi modulin e panelin të Moduleve të ngjashme që ju dëshironi t$#39;i përdorni për të shfaqur të dhënat në raportin tuaj. Nga parazgjedhja, moduli primar (nyja e lartë në pamjen e drurit) që ju keni zgjedhur gjatë hapit të $#39;Modulit të Selektuar$#39; është selektuar.<br /><br /> Ju mund të selektoni fushat nga moduli i ngjashëm (nyja e fëmijës në pamje të drurit) duke klikuar në modul. Modulet e ngjashme me modulet e ngjashme në modulin primar gjithashtu mund të selektohen .Moduli që ju keni selektuar përcakton se cilat fusha raportuese do të shfaqet në panelin e fushave të disponueshme. 2) Kliko në fushën e panelit të Fushave në dispozicion për të shfaqur fushat e të dhënave në regjistrimet e raportit tuaj. Ju gjithashtu mund të kërkoni fushën duke shkruar në kutinë e tekstit në panel. <br /><br />Pas selektimit çdo numër i fushave nga moduli i selektuar në panelin e moduleve të ngjashme, ju mund të zgjidhni module të ndryshme nga të cilat ju mund të selektoni fushat plotësuese. Ju mund të selektoni çdo numër të fushave, por raporti është gjeneruar shumë ngadalë dhe bëhet më pak i lexueshëm kur ju shtoni më tepër fusha të nevojshme në raport. <br /><br />Ju mund të ndryshoni fushat me qëllim duke i tërhequr dhe duke i lëshuar ato në pozicionin e dëshiruar. Ndryshimi i fushave me qëllim ndryshon qëllimin në të cilin kolonat janë të shfaqur në rezultatet.',
  'LBL_DISPLAY_COLUMNS' => 'shfaq kolonat',
  'LBL_DISPLAY_SUMMARIES' => 'Zgjidh Shfaqjen e përmbledhjeve',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => 'Hapat për të zgjedhur përmbledhjen e shfaqjes: <br /><br />1) Kliko në Modulin e panelit të Moduleve të ngjashme që ju dëshironi të përdorni për përmbledhjet në raportin tuaj. Nga parazgjedhja, moduli primar (nyja e lartë në pamje të drurit) është selektuar. <br /><br />Ju mund të selektoni modulin e ngjashëm (nyjen e fëmijës në pamje të drurit) duke klikuar në modul. Zgjero nyjen për të parë modulet shtesë që lidhen me modulin e ngjashëm.Moduli që ju selektoni përcakton se cilat fusha raportuese do të shfaqen në panelin e fushave të disponueshme. <br /> 2) Kliko në fushën e panelit të Fushave në dispozicion  për të selektuar përmbledhjet për raportin tuaj. Ju gjithashtu mund të kërkoni fushën duke shkruar në kutinë e tekstit të panelit. <br /><br />Pas selektimit çdo numër i fushave nga moduli i selektuar në panelin e fushave të ngjashme, ju mund të zgjidhni modulin e ndryshëm nga të cilat ju mund të selektoni fushat shtesë për përmbledhjet në raportin tuaj. <br /><br />Për Raportet Matrix, ju mund të selektoni më shumë se një fushë për të shfaqur vlerat e shumëfishta brenda një qelizë e vetme në raportin tuaj.',
  'LBL_DOES_NOT_CONTAIN' => 'nuk përmban',
  'LBL_DOES_NOT_EQUAL' => 'Nuk është e barabrtë',
  'LBL_DOWN' => 'Poshtë',
  'LBL_DO_ROUND' => 'Numra të plotë mbi 100000',
  'LBL_DO_ROUND_HELP' => 'Numrat mbi 100.000 do të rrumbullakohet në grafikët.<br />Shembull: 350.000 do të shprehen si 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Si matricë',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Si lloj origjinal',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Si reshtat dhe kolonat',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'si mbledhje me detaje',
  'LBL_DUPLICATE_AS_SUMMATON' => 'si mbledhje',
  'LBL_EDIT' => 'Ndrysho',
  'LBL_EDITLAYOUT' => 'Ndrysho formatin',
  'LBL_EMAIL_REPORTS' => 'raportet e emaileve',
  'LBL_ENDS_WITH' => 'mbaron me',
  'LBL_END_DATE' => 'Data e përfundimit',
  'LBL_EQUALS' => 'Është i barabrtë',
  'LBL_EXACT' => 'sakt',
  'LBL_EXPORT' => 'Eksporto',
  'LBL_FAILURE_REPORT' => 'Dështim: raporto',
  'LBL_FAVORITE' => 'Favoritë',
  'LBL_FAVORITES_TITLE' => 'raportet e mia të favorizuara',
  'LBL_FAVORITE_REPORTS' => 'raportet e favoriteve të mia',
  'LBL_FAVORITE_REPORTS_TITLE' => 'raportet e favoriteve të mia',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Të gjitha fushat raportuese nga moduli i selektuar në modulet përkatëse shfaqen këtu. Selekto fushën.',
  'LBL_FIELD_NAME' => 'Emri i fushës',
  'LBL_FILTER' => 'filteri',
  'LBL_FILTERS' => 'filterë',
  'LBL_FILTERS_END' => 'nga filtrat në vijim',
  'LBL_FILTERS_HELP_DESC' => 'Hapat për definimin e Filtrave: <br /><br />1) Klikoni në Modulin e panelin të Moduleve të ngjashme që ju dëshironi të përdorni për të përcaktuar filtrat. Nga parazgjedhja, moduli primar (nyja e lartë në pamje të drurit) është selektuar. <br /><br />Ju mund të selektoni modulin e ngjashëm (nyjen e fëmijës në pamje të drurit) duke klikuar në modul. Zgjero nyjen për të parë modulet shtesë që lidhen me modulin e ngjashëm.Moduli që ju keni selektuar përcakton se cilat fusha raportuese do të shfaqen në panelin e fushave të disponueshme.<br /><br />2) Klikoni në fushën e panelit të Fushave në Dispozicion për të shtuar filtrat. Ju gjithashtu mund të kërkoni fushën duke shkruar në kutinë e tekstit të panelit. <br /><br />Pas selektimit çdo numër i fushave nga moduli i selektuar në panelin e fushave të ngjashme, ju mund të zgjidhni module të ndryshme nga të cilat ju mund të zgjidhni çdo numër të fushave për të përdorur si filtra. <br /><br />3) Zgjidhni DHE apo OSE për të caktuar nëse të gjitha filtrat ose ndonjë filter, përkatësisht, janë përdorur për të gjetur rezultate për raportin. <br /><br />4) [Opsionale] Kliko mbi Shtesën e Grupit të Filterit për të krijuar grupët e filtrave. Ju mund të keni çdo numër të grupëve filtër dhe çdo numër të filtrave në grup për të krijuar filtra të mbivendosur. <br /><br />5) [Opsionale] Selektoni opsionin Drejtimi-kohës për Filtërin për të lejuar përdoruesin të përdore filtëra të mëtutjeshme të përshtate rezultatet e raporteve duke shikuar raportin.',
  'LBL_FILTER_AND' => 'dhe',
  'LBL_FILTER_BY_MODULE' => 'Nga moduli',
  'LBL_FILTER_CONDITIONS' => 'selekto operatorin',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'deri',
  'LBL_FILTER_DATE_RANGE_START' => 'nga',
  'LBL_FILTER_OR' => 'ose',
  'LBL_FISCAL_QUARTER' => 'Kuartali fiskal',
  'LBL_FISCAL_YEAR' => 'Viti fiskal',
  'LBL_FORECAST_REPORTS' => 'raportet e parashikimeve',
  'LBL_FUNNEL' => 'Drejtoj',
  'LBL_GRAND_TOTAL' => 'Totali kryesor',
  'LBL_GREATER_THAN' => 'Më i madh se',
  'LBL_GREATER_THAN_EQUAL' => 'më shumë se sa e barabartë me',
  'LBL_GROUP_BY' => 'grup nga',
  'LBL_GROUP_BY_HELP_DESC' => 'Hapat për të definuar Grupin Nga: <br /><br />1) Klikoni mbi modulin në panelin e Moduleve të ngjashme që ju dëshironi t$#39;i përdorni për regjistrimet e grupit në raportin tuaj. Nga parazgjedhja, moduli primar (nyja e lartë në pamje të drurit) është selektuar. Ju mund të selektoni modulin e ngjashëm (nyjen e fëmijës në pamje të drurit) duke klikuar në module. Zgjero nyjen për të parë modulet shtesë që lidhen me modulin e ngjashëm.Moduli që ju keni selektuar përcakton se cilat fusha raportuese do të shfaqet në panelin e fushave të disponueshme.<br /><br /> 2) Klikoni në fushën e panelit të Fushave në Dispozicion të regjistrimeve të grupit nga fusha në raportin tuaj. Ju gjithashtu mund të kërkoni fushën duke shkruar në kutinë e tekstit në panelin. <br /><br />Pas selektimit çdo numër i fushave nga moduli i selektuar në panelin e moduleve të ngjashme, ju mund të zgjidhni module të ndryshme nga të cilat ju mund të selektoni çdo numër të fushave në regjistrimet e grupit. Megjithatë, raporti bëhet më pak i lexueshëm, kur  grupi juaj ka më tepër se disa fusha. Ju mund të ndryshoni rendin e fushave duke i tërhequr dhe duke i lëshuar ato në pozicionin e dëshiruar. Ndryshimi i rendit ndikon në mënyrën e  rezultateve që janë shfaqur. <br /><br />Për Raportet Matrix, ju mund të përdorni maksimalisht tre fusha për regjistrimet e grupit.',
  'LBL_GROUP_BY_REQUIRED' => 'Së paku nga një Grup dhe një Përmbledhje të kolonës janë të detyruar të bëjnë grafikun.',
  'LBL_HELLO' => 'përshëndetje',
  'LBL_HELP' => 'ndihmë',
  'LBL_HIDE_COLUMNS' => 'fsheh kolonat',
  'LBL_HIDE_SUMMARIES' => 'Fsheh përbledhjet',
  'LBL_HORIZ_BAR' => 'Shirit horizontal',
  'LBL_IS' => 'është',
  'LBL_IS_BETWEEN' => 'është mes',
  'LBL_IS_EMPTY' => 'është bosh',
  'LBL_IS_NOT' => 'nuk është',
  'LBL_IS_NOT_EMPTY' => 'nuk është bosh',
  'LBL_IS_NOT_ONE_OF' => 'nuk është një nga',
  'LBL_IS_PUBLISHED' => 'Është publikuar',
  'LBL_LABEL' => 'kalsifikim',
  'LBL_LAST_30_DAYS' => '30 ditët e fundit',
  'LBL_LAST_7_DAYS' => '7 ditët e fundit',
  'LBL_LAST_MONTH' => 'Muajin e kaluar',
  'LBL_LAST_N_DAYS' => 'Ditët e #fundit',
  'LBL_LAST_QUARTER' => 'Semestrin e kaluar',
  'LBL_LAST_WEEK' => 'Javën e kaluar',
  'LBL_LAST_YEAR' => 'Vitin e kaluar',
  'LBL_LEAD' => 'udhëheqje',
  'LBL_LEADS' => 'udhëheqjet',
  'LBL_LEAD_REPORTS' => 'raportet e udhëheqjeve',
  'LBL_LEFT' => 'Majt',
  'LBL_LESS_THAN' => 'Më i vogël se',
  'LBL_LESS_THAN_EQUAL' => 'më pak se sa e barabartë me',
  'LBL_LINE' => 'Drejtëzë',
  'LBL_LIST_FORM_TITLE' => 'Raportet',
  'LBL_LIST_PUBLISHED' => 'publikuar',
  'LBL_MATRIX_LAYOUT' => 'Opcionet e formatit:',
  'LBL_MATRIX_REPORT' => 'Raport matrice',
  'LBL_MATRIX_REPORT_DESC' => 'Krijo raport përmbledhës që tregon rezultate në formë rrjeti dhe të grupuara nga maksimum tre fusha.',
  'LBL_MAX' => 'maksimumi',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Raporti Matrix nuk mund të ketë më shumë se 3 grupe-nga dispozitat.',
  'LBL_MEETING_REPORTS' => 'raportet e mbledhjeve',
  'LBL_MIN' => 'minimumi',
  'LBL_MINIMUM_2_GROUP_BY' => 'RaportI Matrix duhet të ketë të paktën 2 grupe-nga dispozitat.',
  'LBL_MISSING_FIELDS' => 'fushat që mungojnë',
  'LBL_MISSING_INPUT_VALUE' => 'vlerat hyrëse që mungojnë',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'mungon vlera e dytë e të dhënave.',
  'LBL_MODULE' => 'Moduli',
  'LBL_MODULE_CHANGE_PROMPT' => 'Ndryshimi i modulit të selektuar do të rezultojë humbjen e filtrave, shfaqjen e kolonave, etj.  A dëshironi akoma të vazhdoni?',
  'LBL_MODULE_NAME' => 'Raportet',
  'LBL_MODULE_NAME_SAVED' => 'Emri i modulës',
  'LBL_MODULE_NAME_SINGULAR' => 'raport',
  'LBL_MODULE_TITLE' => 'Raportet: Ballina',
  'LBL_MODULE_VIEWER_TITLE' => 'Shikuesi i Raporteve: Ballina',
  'LBL_MONTH' => 'Muaji',
  'LBL_MORE' => 'Më tepër...',
  'LBL_MY_ACCOUNT_REPORTS' => 'Rapotet e llogarive të mia',
  'LBL_MY_BUG_REPORTS' => 'Raportet e gabimeve të mia',
  'LBL_MY_CALL_REPORTS' => 'raportete e thirjeve të mia',
  'LBL_MY_CASE_REPORTS' => 'raportet e rasteve të mia',
  'LBL_MY_CONTACT_REPORTS' => 'Raportet e kontakteve të mia',
  'LBL_MY_CONTRACT_REPORTS' => 'raportet e kontratave të mia',
  'LBL_MY_EMAIL_REPORTS' => 'Raportet e emaileve të mia',
  'LBL_MY_FORECAST_REPORTS' => 'Raportet e parashikimeve të mia',
  'LBL_MY_LEAD_REPORTS' => 'Raportet e udhëheqjeve të mia',
  'LBL_MY_MEETING_REPORTS' => 'raportet e mbledhjeve të mia',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Raportet e mundësive të mia',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'raportet e detyrave të projekteve të mia',
  'LBL_MY_PROSPECT_REPORTS' => 'Raportet e synimeve të mia',
  'LBL_MY_QUOTE_REPORTS' => 'raportet e kuotave të mia',
  'LBL_MY_REPORTS' => 'raportet e mia',
  'LBL_MY_SAVED_REPORTS' => 'Raportet e mia të ruajtura',
  'LBL_MY_TASK_REPORTS' => 'Raportet e detyrave të mia',
  'LBL_MY_TEAMS_REPORTS' => 'Raportet e grupeve të mia',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Raportet e llogarive të grupeve të mia',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Raportet e gabimeve të grupeve të mia',
  'LBL_MY_TEAM_CALL_REPORTS' => 'raportet e thirjeve të grupeve të mia',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Raportet e rasteve të grupeve të mia',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Raportet e kontakteve të grupeve të mia',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'raportet e kontratave të grupeve të mia',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'raportet e emaileve të grupeve të mia',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Raportet e parashikimeve të grupit tim',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'raportet e udhëheqjeve të grupeve të mia',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Raportet e mbledhjeve të grupeve të mia',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Raportet e mundësive të grupeve të mia',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'raportet e detyrave projektuese të grupeve të mia',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'raportet e parashikimeve të grupeve të mia',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Raportet e kuotave të grupit tim',
  'LBL_MY_TEAM_TASK_REPORTS' => 'raportet e detyrave të grupeve të mia',
  'LBL_NEXT' => 'Vijim',
  'LBL_NEXT_30_DAYS' => '30 ditët e ardhëshme',
  'LBL_NEXT_7_DAYS' => '7 ditët e ardhëshme',
  'LBL_NEXT_FISCAL_QUARTER' => 'Kuartali i ardhshëm fiskal',
  'LBL_NEXT_FISCAL_YEAR' => 'Viti i ardhshëm fiskal',
  'LBL_NEXT_MONTH' => 'Muajin e ardhshëm',
  'LBL_NEXT_N_DAYS' => 'Ditët e #ardhshme',
  'LBL_NEXT_QUARTER' => 'semestrin e ardhshëm',
  'LBL_NEXT_RUN' => 'emaili vijues',
  'LBL_NEXT_WEEK' => 'Javën e ardhëshme',
  'LBL_NEXT_YEAR' => 'Vitin e ardhshëm',
  'LBL_NONE' => 'asnjëra',
  'LBL_NONE_STRING' => 'Asnjëra',
  'LBL_NOTHING_WAS_SELECTED' => 'asgjë nuk është selktuar',
  'LBL_NOT_ON' => 'nuk është',
  'LBL_NO_ACCESS' => 'Nuk keni qasje për të hyrë në këtë raport përshkak të kufizimeve të autorizuara.',
  'LBL_NO_CHART' => 'nuk ka grafik',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Nuk mund të vizatohen për shkak të të dhënave të pamjaftueshme',
  'LBL_NO_EXPORT_ACCESS' => 'Paaftësimi i eksporteve',
  'LBL_NO_FILTERS' => 'Nuk ka filtra',
  'LBL_NO_IMAGE' => 'Pa fotografi',
  'LBL_NO_REPORTS' => 'nuk ka rezultate',
  'LBL_OF' => 'nga',
  'LBL_ON' => 'në',
  'LBL_ONE_OF' => 'është një nga',
  'LBL_OPPORTUNITIES' => 'Mundësite',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Mundësitë për nga burimi udhëheqës',
  'LBL_OPPORTUNITY' => 'Mundësi:',
  'LBL_OPPORTUNITY_REPORTS' => 'raportet e mundësive',
  'LBL_OPTIONAL_HELP' => 'Selekto kutitë për të shfaqur regjistrimet primare të modulit edhe në qoftë se regjistrimet e lidhjes së modulit nuk ekzistojnë. Kur kutia nuk është selektuar, regjistrimet primare të modulit do të shfaqen vetëm nëse ata kanë një ose më shumë regjistrime të lidhura në module.',
  'LBL_OPTIONAL_MODULES' => 'Modula fakultative',
  'LBL_ORDER_BY' => 'Rëndit për nga',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Modulet opsinale të lidhjes',
  'LBL_OWNER' => 'Drejtuar:',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Lista e llogarive të partnerëve',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_PIE' => 'Rreth',
  'LBL_PREVIEW_REPORT' => 'Mëparshëm',
  'LBL_PREVIOUS' => 'Kthe',
  'LBL_PREVIOUS_FISCAL_QUARTER' => 'Kuartali paraprak fiskal',
  'LBL_PREVIOUS_FISCAL_YEAR' => 'Viti paraprak fiskal',
  'LBL_PROJECT_TASK_REPORTS' => 'Raportet e detyrave projektuese',
  'LBL_PROSPECT_REPORTS' => 'Raportet e synimeve',
  'LBL_PUBLISH' => 'Publiko',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Raportet e publikuara të llogarive',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Raportet e publikuara të gabimeve',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Raportet e publikuara të thirjeve',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Raportet e publikuara të rasteve',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Raportet e publikuara të kontakteve',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Raportet e publikuara të kontratës',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Raportet e publikuara të emaileve',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Raportet e publikuara të parashikimeve',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Raportet e publikuara të udhëheqjeve',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Raportet e publikuara të mbledhjeve',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Raportet e publikuara të mundësive',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Raportet e publikuara të detyrave projektuese',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Raportet e publikuara të synimeve',
  'LBL_PUBLISHED_QUOTA_REPORTS' => 'raportet e publikuara te kuotave',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Raportet e publikuara të kuotave',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Raportet e publikuara të detyrës',
  'LBL_QUARTER' => 'Semestri',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'pyetje',
  'LBL_QUOTE_REPORTS' => 'raportet e pyetjeve',
  'LBL_RELATED' => 'në lidhje me',
  'LBL_RELATED_MODULES' => 'Modulet lidhëse',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Moduli primar dhe të gjitha modulet që lidhen me modulin primar të shfaqen këtu. Selekto modulin.',
  'LBL_RELATED_TABLE_BLANK' => 'Ju lutemi selektoni një modulë me të cilën do të lidheni.',
  'LBL_REMOVE' => 'Heq',
  'LBL_REMOVED_FAVORITES' => 'raporti(et) i larguar nga Raportet e mia favorite',
  'LBL_REMOVE_BTN_HELP' => 'Shtyp të largosh këtë grup filtrash',
  'LBL_REMOVE_GROUP' => 'Largo grup filtrash',
  'LBL_REPORTS' => 'Raportet',
  'LBL_REPORTS_TO' => 'I reporton',
  'LBL_REPORT_ATT_MODULES' => 'Modulet',
  'LBL_REPORT_ATT_NAME' => 'Emri',
  'LBL_REPORT_COLLAPSE_ALL' => 'shemb të gjitha',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Ky raport përmban të dhëna në kolonat vijuese:',
  'LBL_REPORT_DETAILS' => 'Detajet e raportit',
  'LBL_REPORT_EXPAND_ALL' => 'Zgjero të gjitha',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Filtrat e raporteve janë modifikuar nga drejtimi i fundit.',
  'LBL_REPORT_GRAND_TOTAL' => 'Totali kryesor',
  'LBL_REPORT_GROUP_BY' => 'Grup për nga',
  'LBL_REPORT_HIDE_CHART' => 'fsheh grafikun',
  'LBL_REPORT_HIDE_DETAILS' => 'fsheh detalet',
  'LBL_REPORT_LAST_RUN_DATE' => 'Qasja në',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Raporti është modifikuar që nga drejtimi i fundit.',
  'LBL_REPORT_MODULES' => 'Modulat e raportit',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Shikuesi i Raporteve',
  'LBL_REPORT_NAME' => 'Emri i raportit',
  'LBL_REPORT_RESET_FILTER' => 'Rivendos',
  'LBL_REPORT_RESULTS' => 'rezultate',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Shtyp në Drejto raportet për të shikuar rezultatet.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Apliko',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Planifiko',
  'LBL_REPORT_SHOW_CHART' => 'trego grafikun',
  'LBL_REPORT_SHOW_DETAILS' => 'trego detalet',
  'LBL_REPORT_TYPE' => 'lloji i raportit',
  'LBL_REPORT__ATT_TYPE' => 'Lloji',
  'LBL_RIGHT' => 'Djathtë',
  'LBL_ROLLOVER' => 'Mbështjell një shtyll për detaje.',
  'LBL_ROLLOVER_SQUARE' => 'Mbështjell një katror për detaje.',
  'LBL_ROLLOVER_WEDGE' => 'Mbështjell një pykë për detaje.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Raporti i reshtave dhe kolonave',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Krojo raport tabelor që përmban vlerat e fushave të shfaqura të selektuara për regjistrime në përputhje me kriteriumet e përcaktuara.',
  'LBL_RUNTIME_FILTERS' => 'Drejto-kohën e filtrave',
  'LBL_RUNTIME_HELP' => 'Selekto këtë kuti për të lejuar përdoruesit të ndryshojnë vlerën e filterit para drejtimit të raportit.',
  'LBL_RUN_BUTTON_TITLE' => 'Drejto raportin [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Drejto raportin',
  'LBL_RUN_TIME_LABEL' => 'koha e drejtimit',
  'LBL_SAVED_SEARCH' => 'kërkimet dhe formatet e ruajtura',
  'LBL_SAVE_AS' => 'ruaj si',
  'LBL_SAVE_RUN' => 'ruaj dhe drejto',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'dhe ruajtur me emrin "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Në qoftë se dëshironi të ndryshoni parametrat e raportit, hyni në aplikacionin e Sugar dhe shtypni në butonin "Reportet".',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Bashkangjitur është një raport i gjenerimit-automatik dërguar juve nga aplikacioni Sugar. Ky raport është krijuar në',
  'LBL_SCHEDULE_ACTIVE' => 'aktive',
  'LBL_SCHEDULE_EMAIL' => 'planifiko raport',
  'LBL_SCHEDULE_REPORT' => 'planifiko raport',
  'LBL_SCHEDULE_TYPE' => 'Lloji i planifikimit',
  'LBL_SEARCH_FORM_TITLE' => 'Lista e raporteve',
  'LBL_SELECT' => 'Selekto',
  'LBL_SELECT_GROUP_BY' => 'Defino grupin për nga',
  'LBL_SELECT_MODULE' => 'Selekto modulin',
  'LBL_SELECT_MODULE_BUTTON' => 'Shtypni në ikonë për të selektuar Modulin.',
  'LBL_SELECT_RECORD' => 'regjistrimi i selektuar',
  'LBL_SELECT_REPORT_TYPE' => 'Shtypni në ikonë për të selektuar Llojin e raportit.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Selekto llojin e raportit',
  'LBL_SHOW' => 'trego',
  'LBL_SHOW_DETAILS' => 'trego detajet',
  'LBL_SHOW_QUERY' => 'Trego pyetje',
  'LBL_SORT' => 'Lloj',
  'LBL_STARTS_WITH' => 'fillon me',
  'LBL_START_DATE' => 'Data e nisjes',
  'LBL_STATUS' => 'Statusi',
  'LBL_SUBJECT' => 'subjekti',
  'LBL_SUBMIT_QUERY' => 'Paraqit pyetjen',
  'LBL_SUCCESS_REPORT' => 'Sukses: Raporto',
  'LBL_SUM' => 'shuma',
  'LBL_SUMMARY_COLUMNS' => 'Kolonat përmbledhëse',
  'LBL_SUMMATION_REPORT' => 'Raporti i sumuar',
  'LBL_SUMMATION_REPORT_DESC' => 'Krijo raport tabelor që mundëson të dhënat e llogaritura për regjistrimet e përputhjeve të kriteriumeve të përcaktuara. Të dhënat mund të paraqiten edhe në grafik.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Raport përmledhës me detaje',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Krijo raport përmbledhës që tregon të dhëna plotësuese në lidhje me regjistrimet në rezultate.',
  'LBL_SUMMATION_WITH_DETAILS' => 'mbledhje me detaje',
  'LBL_TABLE_CHANGED' => 'Lista e modulit është modifikuar, ju lutemi kontrolloni dyfishtë kriteret e futura në skedën e Grupit.',
  'LBL_TASK_REPORTS' => 'raportet e detyrave',
  'LBL_TEAM' => 'Grupet',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Nuk ka raporte të këtij lloji.',
  'LBL_THIS_MONTH' => 'Këtë muaj',
  'LBL_THIS_QUARTER' => 'Këtë semestër',
  'LBL_THIS_WEEK' => 'këtë javë',
  'LBL_THIS_YEAR' => 'Këtë vit',
  'LBL_TIME_INTERVAL' => 'intervali kohor',
  'LBL_TITLE' => 'Titulli',
  'LBL_TODAY' => 'Sot',
  'LBL_TOMORROW' => 'Nesër',
  'LBL_TOTAL' => 'totali',
  'LBL_TOTAL_IS' => 'Totali është',
  'LBL_TO_PDF' => 'ruajtur si PDF',
  'LBL_TYPE' => 'Lloji',
  'LBL_UNTITLED' => 'E patitulluar',
  'LBL_UN_PUBLISH' => 'mos publiko',
  'LBL_UP' => 'lart',
  'LBL_UPDATE_SCHEDULE' => 'rinovo planifikim',
  'LBL_USER_EMPTY_HELP' => 'Mënyra për të parë regjistrimet që nuk janë caktuar për çdo përdorues, kontrolloni kutinë e &#39;Moduleve opsionale të lidhura në hapin e &#39;detajeve të raporteve&#39; përveç duke përdorur opsionin "është zbrazët" për përdoruesin e filtrave të caktuar. Kjo do të shfaq të gjitha regjistrimet që nuk janë të lidhura me asnjë Perdorues.',
  'LBL_USE_COLUMN_FOR' => 'seri e të dhënave',
  'LBL_VERT_BAR' => 'Shirit vertikal',
  'LBL_VIEW' => 'Pikëpamje',
  'LBL_VIEWER_RUNTIME_HELP' => 'Specifikoni vlerat për Drejtimin kohor të filtrave dhe klikoni butonin Aplikoni Filtrat për të ri-drejtuar raportin.',
  'LBL_WAS_NOT_SAVED' => 'nuk është ruajtur',
  'LBL_WAS_SAVED' => 'është e ruajtur',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'sasia mesatare e matur',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Peshimi i shumës së sasisë',
  'LBL_WHOSE_MAXIMUM' => 'maksimumi i të cilit',
  'LBL_WHOSE_MINIMUM' => 'minimumi i të cilit',
  'LBL_WITH_AN_AVERAGE' => 'me mesatare',
  'LBL_WITH_A_TOTAL' => 'me total',
  'LBL_WITH_DETAILS' => 'me detaje',
  'LBL_YEAR' => 'Viti',
  'LBL_YESTERDAY' => 'Dje',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'nuk keni raporte të ruajtura',
  'LNK_ADVANCED_REPORTING' => 'Menaxho raportet e avancuara',
  'LNK_NEW_ACCOUNT' => 'krijo llogari',
  'LNK_NEW_CALL' => 'Thirje identifikuese',
  'LNK_NEW_CASE' => 'Krijo rast',
  'LNK_NEW_CONTACT' => 'krijo kontaktet',
  'LNK_NEW_EMAIL' => 'Emaili i arkivuar',
  'LNK_NEW_MEETING' => 'Cakto mbledhje',
  'LNK_NEW_NOTE' => 'Krijo shënim ose bashkëngjitje',
  'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
  'LNK_NEW_TASK' => 'Krijo detyrë',
  'MSG_NO_PERMISSIONS' => 'Nuk keni leje për të ndryshuar këtë raport',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'e pamundur të publikohet. Ekziston Raport tjetër i publikuar me emër të njejtë',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Në pamundësi për të ri-publikuar raportin në pronësi nga përdoruesi tjetër. Ju posedoni një raport me të njëjtin emër.',
);

