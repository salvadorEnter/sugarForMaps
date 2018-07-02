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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if name}}{{str name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_ABOUT_TITLE' => 'О системе &raquo; {{appId}}',
  'LBL_MODULE_NAME' => 'Главная',
  'LBL_MODULE_NAME_SINGULAR' => 'Главная',
  'LBL_MODULES_TO_SEARCH' => 'Поиск в модулях',
  'LBL_NEW_FORM_TITLE' => 'Новый контакт',
  'LBL_FIRST_NAME' => 'Имя',
  'LBL_LAST_NAME' => 'Фамилия',
  'LBL_LIST_LAST_NAME' => 'Фамилия',
  'LBL_PHONE' => 'Тел. рабочий:',
  'LBL_EMAIL_ADDRESS' => 'E-mail-адрес:',
  'LBL_MY_PIPELINE_FORM_TITLE' => 'Диаграмма стадий моих продаж',
  'LBL_PIPELINE_FORM_TITLE' => 'Диаграмма стадий общих продаж',
  'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Рентабельность инвестиций',
  'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Объем моих успешно закрытых сделок',
  'LNK_NEW_CONTACT' => 'Новый контакт',
  'LNK_NEW_ACCOUNT' => 'Новый контрагент',
  'LNK_NEW_OPPORTUNITY' => 'Новая сделка',
  'LNK_NEW_QUOTE' => 'Создать ценовое предложение',
    'LBL_SOURCE_JQUERY' => 'jQuery - jQuery быстрая и сжатая JavaScript-библиотека, которая упрощает обход HTML-документов, работу с событиями, анимацию, и Ajax-интеракции для быстрой веб-разработки.',
    'LBL_SOURCE_PLACEHOLDER' => 'jQuery-Placeholder - плагин, который активирует поддержку заполнителя HTML5 для действубщих браузеров.',
    'LBL_SOURCE_JQUERYUI' => 'jQuery UI - официальная библиотека пользовательского интерфейса jQuery.',
    'LBL_SOURCE_LESSPHP' => 'lessphp - компилятор для LESS, написанный на PHP.',
    'LBL_SOURCE_BACKBONE' => 'Backbone.js - фреймворк MVC для "тяжелых"Javascript приложений.',
    'LBL_SOURCE_CHOSEN' => 'Chosen - библиотека, помогающая сделать длинные, громоздкие окна выбора более удобными.',
    'LBL_SOURCE_HANDLEBARS' => 'Handlebars - шаблон двигателя для эффективного построения семантических шаблонов.',
    'LBL_SOURCE_JASMINE' => 'Jasmine - фреймворк для разработки для тестирования JavaScript-кода',
    'LBL_SOURCE_JQUERY_IFRAME' => 'jquery.iframe-transport.js - jQuery Ajax плагин транспортировки, который поддерживает загрузки файла через скрытый iframe.',
    'LBL_SOURCE_SINON' => 'sinon.js - Автономные тестовые шпионы, заглушки и мок-объекты для JavaScript.',
    'LBL_SOURCE_STASH' => 'Stash - библиотека для JavaScript, которая облегчает использование автономного ЗУ.',
    'LBL_SOURCE_BOOTSTRAP' => 'Twitterbootstrap - HTML, CSS, и набор инструментов JS из Twitter.',
    'LBL_SOURCE_ASYNC' => 'Async - Async утилиты для узла и браузера.',
    'LBL_SOURCE_PHPEXCEL' => 'PHPExcel - чистая PHP библиотека для чтения и записи табличных файлов.', 
  'LNK_NEW_LEAD' => 'Новый предварительный контакт',
  'LNK_NEW_CASE' => 'Новое обращение',
  'LNK_NEW_NOTE' => 'Создать заметку или вложение',
  'LNK_NEW_CALL' => 'Журнал звонков',
  'LNK_NEW_EMAIL' => 'Отправить E-mail в архив',
  'LNK_COMPOSE_EMAIL' => 'Написать письмо',
  'LNK_NEW_MEETING' => 'Назначить встречу',
  'LNK_NEW_TASK' => 'Новая задача',
  'LNK_NEW_BUG' => 'Новая ошибка',
  'LBL_ADD_BUSINESSCARD' => 'Добавить визитную карточку',
  'ERR_ONE_CHAR' => 'Пожалуйста, введите по меньшей мере одну букву или цифру для поиска ...',
  'LBL_OPEN_TASKS' => 'Мои открытые задачи',
  'LBL_SEARCH_RESULTS_IN' => 'в',
  'LNK_NEW_SEND_EMAIL' => 'Написать письмо',
  'LBL_NO_ACCESS' => 'У Вас нет доступа к данной странице. Свяжитесь с вашим системным администратором для получения соответствующих прав.',
  'LBL_NO_RESULTS_IN_MODULE' => '-- Нет результатов --',
  'LBL_NO_RESULTS' => '<h2>Ничего не найдено. Пожалуйста, повторите поиск.</h2><br>',
  'LBL_NO_RESULTS_TIPS' => '<h3>Подсказка по поиску:</h3><ul><li>Убедитесь, что вы отметили необходимые категории.</li><li>Укажите более подробные условия поиска.</li><li>Если вы все еще ничего не нашли - попробуйте воспользоваться закладкой "Расширенный поиск" соответствующего модуля.</li></ul>',

  'LBL_RELOAD_PAGE' => 'Пожалуйста, <a href="javascript: window.location.reload()">обновите страницу</a>, чтобы увидеть добавленный раздел Sugar.',
  'LBL_ADD_DASHLETS' => 'Добавить разделы Sugar',
  'LBL_ADD_PAGE' => 'Добавить страницу',
  'LBL_DEL_PAGE' => 'Удалить страницу',
  'LBL_WEBSITE_TITLE' => 'Сайт',
  'LBL_RSS_TITLE' => 'Ленты новостей',
  'LBL_DELETE_PAGE' => 'Удалить страницу',
  'LBL_CHANGE_LAYOUT' => 'Изменить макет',
  'LBL_RENAME_PAGE' => 'Переименовать страницу',
  'LBL_CLOSE_DASHLETS' => 'Закрыть',
  'LBL_OPTIONS' => 'Опции',
  // dashlet search fields
  'LBL_TODAY'=>'Сегодня',
  'LBL_YESTERDAY' => 'Вчера',
  'LBL_TOMORROW'=>'Завтра',
  'LBL_LAST_WEEK'=>'Прошлая неделя',
  'LBL_NEXT_WEEK'=>'Следующая неделя',
  'LBL_LAST_7_DAYS'=>'Прошедшие 7 дней',
  'LBL_NEXT_7_DAYS'=>'Следующие 7 дней',
  'LBL_LAST_MONTH'=>'Прошлый месяц',
  'LBL_NEXT_MONTH'=>'Следующий месяц',
  'LBL_LAST_QUARTER'=>'Прошлый квартал',
  'LBL_THIS_QUARTER'=>'Этот квартал',
  'LBL_LAST_YEAR'=>'Прошлый год',
  'LBL_NEXT_YEAR'=>'Следующий год',
  'LBL_LAST_30_DAYS' => 'Прошедшие 30 дней',
  'LBL_NEXT_30_DAYS' => 'Следующие 30 дней',
  'LBL_THIS_MONTH' => 'Этот месяц',
  'LBL_THIS_YEAR' => 'Этот год',

  'LBL_MODULES' => 'Модули',
  'LBL_CHARTS' => 'Графики',
  'LBL_TOOLS' => 'Разное',
  'LBL_WEB' => 'Интернет',
  'LBL_SEARCH_RESULTS' => 'Результаты поиска',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Просмотры модуля',
      'Portal' => 'Портал',
      'Charts' => 'Графики',
      'Tools' => 'Разное',
      'Miscellaneous' => 'Разное'),
  'LBL_MAX_DASHLETS_REACHED' => 'Вы добавили максимальное количество разделов Sugar, установленное администратором. Пожалуйста, удалите один из существующих разделов для добавления нового.',
  'LBL_ADDING_DASHLET' => 'Добавление раздела ...',
  'LBL_ADDED_DASHLET' => 'Раздел добавлен',
  'LBL_DASHBOARD_LAYOUT_CONFIRM' => 'Дашлеты будут перекомпонированы, вы точно хотите изменить внешний вид колонки?',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Вы действительно хотите удалить этот раздел?',
  'LBL_REMOVING_DASHLET' => 'Удаление раздела ...',
  'LBL_REMOVED_DASHLET' => 'Раздел удален',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Основные настройки',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Фильтры',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Только мои записи',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Название',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Отображать строки',
  'LBL_NO_DASHBOARD_CONFIGURED' => 'Рабочий стол не настроен.',
  'LBL_CREATE_DASHBOARD_LINK' => 'Создать рабочий стол',

  'LBL_DASHLET_WEBPAGE_NAME' => 'Web-страница',
  'LBL_DASHLET_WEBPAGE_DESC' => 'Web-страница',
  'LBL_DASHLET_WEBPAGE_URL' => 'URL',
  'LBL_DASHLET_WEBPAGE_URL_HELP' => 'Некоторые сайты могут не загрузиться по причине опасного содержимого или политики безопасности.',

  'LBL_DASHLET_ADD' => 'Добавить дашлет',
  'LBL_DASHLET_DELETE' => 'Удалить раздел',
  'LBL_DASHLET_REFRESH' => 'Обновить раздел',
  'LBL_DASHLET_EDIT' => 'Настроить раздел',
  'LBL_DASHBOARD_TITLE' => 'Название дашборда',
  'LBL_CREATE_DASHBOARD_MENU' => 'Создать инф. панель',
  'LBL_DASHBOARD_EDIT' => 'Редактировать дашборд',
  'LBL_DASHBOARD_ADD_ROW' => 'Добавить строку',
  'LBL_DASHBOARD_ADD_1_COLUMN' => '+ 1 колонка',
  'LBL_DASHBOARD_ADD_2_COLUMNS' => '+ 2 колонки',
  'LBL_DASHBOARD_ADD_3_COLUMNS' => '+ 3 колонки',
  'LBL_DASHBOARD_1_COLUMN_LAYOUT' => 'внешний вид колонки 1',
  'LBL_DASHBOARD_2_COLUMN_LAYOUT' => 'внешний вид колонки 2',
  'LBL_DASHBOARD_3_COLUMN_LAYOUT' => 'внешний вид колонки 3',

  'LBL_TRAINING_TITLE' => 'Обучение',
  'LBL_SEARCH_DASHLET' => 'Поиск дашлетов',
  'LBL_CREATING_NEW_PAGE' => 'Создание новой страницы...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Вы создали новую страницу. Вы можете наполнить ее новым содержимым, воспользовавшись опцией добавить Разделы Sugar.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Вы действительно хотите удалить эту страницу?',
  'LBL_DELETE_DASHBOARD_CONFIRM' => 'Вы точно хотите удалить этот дашборд?',
  'LBL_DELETE_DASHBOARD_SUCCESS' => '"{{name}}" дашборд был удален.',
  'LBL_SAVING_PAGE_TITLE' => 'Сохранение заголовка страницы...',
  'LBL_RETRIEVING_PAGE' => 'Поиск страницы...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Моя страница Sugar',
  'LBL_HOME_PAGE_2_NAME' => 'Продажи',
  'LBL_HOME_PAGE_3_NAME' => 'Поддержка',
  'LBL_HOME_PAGE_6_NAME' => 'Маркетинговые кампании',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Трекер',
  'LBL_CLOSE_SITEMAP' =>'Закрыть',

  'LBL_SEARCH' => 'Поиск',
  'LBL_CLEAR' => 'Очистить',

  'LBL_BASIC_CHARTS' => 'Основные графики',
  'LBL_REPORT_CHARTS' => 'Графики отчетов',

  'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Мои избранные отчеты',
  'LBL_GLOBAL_REPORT_CHARTS' => 'Общие отчеты команды',
  'LBL_MY_TEAM_REPORT_CHARTS' => 'Отчеты моей команды',
  'LBL_MY_SAVED_REPORT_CHARTS' => 'Мои сохраненные отчеты',

  'LBL_DASHLET_SEARCH' => 'Найти раздел',

//ABOUT page
  'LBL_VERSION' => 'Версия',
  'LBL_BUILD' => 'Сборка',
    'TPL_ABOUT' => 'О {{product_name}}, Версия {{version}} (Построить {{build}}{{#if custom_version}} - {{custom_version}}{{/if}})',
    'LBL_RESOURCES' => 'Ресурсы',
    'LBL_RESOURCES_DOCUMENTATION' => 'Документация',
    'LBL_RESOURCES_DEVELOPERS' => 'Разработчики',
    'LBL_RESOURCES_SUGAR_INFO' => 'Информация о компании SugarCRM',
    'LBL_LANGUAGE_PACKS' => 'Языковые пакеты',
    'TPL_LANGUAGE_PACKS_PROVIDED_BY' => 'Предоставлено {{{link}}}',
    'LBL_SUGAR_VERSION' => 'версия',
    'LBL_SUGAR_SOURCECODE_DESC' => 'Приложение автоматизации Salesforce',
    'LBL_THIRD_PARTY_SOFTWARE_TITLE' => 'Внешнее программное обеспечение',
    'LBL_THIRD_PARTY_SOURCECODE' => 'Информация о стороннем коде, используемом в этом продукте, включая связанные условия лицензии, доступна на',
  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar Community Edition',
  'LBL_SUGAR_PROFESSIONAL' => "Sugar Professional",
  'LBL_SUGAR_ENTERPRISE' => "Sugar Enterprise",
  'LBL_AND' => "и",
  'LBL_ARE' => "являются",
  'LBL_TRADEMARKS' => 'торговыми марками',
  'LBL_OF' => 'из',
  'LBL_FOUNDERS' => 'Основатели',
  'LBL_DEVELOPERS' => 'Разработчики',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Присоединитесь к сообществу Sugar',
  'LBL_DETAILS_SUGARFORGE' => 'Сотрудничайте с другими и создавайте расширения Sugar',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Покупайте и продавайте сертифицированные расширения Sugar',
  'LBL_TRAINING' => 'Обучение',
  'LBL_DETAILS_TRAINING' => 'Узнайте больше об использовании Sugar в режиме онлайн и об интерактивных обучающих материалах',
  'LBL_FORUMS' => 'Форумы',
  'LBL_DETAILS_FORUMS' => 'Обсуждайте Sugar с сообществом экспертов - как с пользователями, так и с разработчиками',
  'LBL_WIKI' => 'Вики',
  'LBL_DETAILS_WIKI' => 'Используйте базу знаний для поиска тем пользователей и разработчиков',
  'LBL_DEVSITE' => 'Сайт разработчика',
  'LBL_DETAILS_DEVSITE' => 'Находите источники, руководства и полезные ссылки. чтобы быть в курсе последних разработок Sugar',
  'LBL_GET_SUGARCRM_RSS' => 'Подписаться на RSS SugarCRM',
  'LBL_SUGARCRM_NEWS' => 'Новсти SugarCRM',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'Новости обучения от SugarCRM',
  'LBL_SUGARCRM_FORUMS' => 'Форумы SugarCRM',
  'LBL_SUGARFORGE_NEWS' => 'Новости SugarForge',
  'LBL_ALL_NEWS' => 'Все новости',
  'LBL_LINK_CURRENT_CONTRIBUTORS' => 'Пройдите по этой ссылке и просмотрите текущий список принимающих участие в разработке и развитии SugarCRM!',
  'LBL_SOURCE_CODE' => 'Исходный код',
  'LBL_SOURCE_SUGAR' => 'SugarCRM - самое популярное в мире приложение по автоматизации процесса продаж, созданное компанией SugarCRM Inc.',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - движок шаблонов для PHP. автор: Barnabás Debreceni',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - Набор PHP классов, которые дают возможность разработчикам создавать и пользоваться веб-сервисами, автор: корпорация NuSphere и Dietrich Ayala',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calenda - Календарь для введения дат, автор:Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - библиотека для создания PDF-документов, автор: Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - Реализация сервера WebDAV в PHP.',
  'LBL_SOURCE_PCLZIP' => 'PclZip - библиотека, предлагающая сжатие и извлечение функций для архивов формата Zip, автор: Vincent Blavet',
  'LBL_SOURCE_SMARTY' => 'Smarty - шаблонный  двигатель  для PHP.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - Свойства UI Library облегчают применение широких возможностей клиентских свойств.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - Полнофункциональный класс пересылки e-mail для PHP',
  'LBL_SOURCE_JSHRINK' => 'JShrink - минимизатор Javascript, написанный на PHP',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Дает возможность быстрого двустороннего шифрования blowfish без запросов расширения MCrypt PHP.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - синтаксический анализатор SAX  для HTML и других плохо сформированных XML-документов',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Расширения к библиотеке пользовательского интерфейса, автор: Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - скрипт для обнаружения и остановки Javascript Flash Player.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - WYSIWYG editor control для веб-браузеров, который дает пользователю возможность редактировать состав HTML',
  'LBL_SOURCE_EXT' => 'Ext - клиентский JavaScript  фреймворк для создания веб-приложений.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - бесплатный сервис CAPTCHA , который помогает цифровать книги, газеты и старые выпуски радиопередач.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - PHP-класс для генерирования PDF-документов.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - css parser и minifier',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - Простой SAML-инструментарий для PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - Возможность overflow:scroll для мобильного инструментария. Родной скроллинг внутри элементов, фиксированных по длине/ширине.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - это библиотека JavaScript, добавляющая поддержку HTML5 Canvas в Internet Explorer. Рендерит формы и изображения при помощи Flash drawing API. Поддерживает большинство Canvas API и во многих случаях является более производительной, чем похожие библиотеки, использующие VML или Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - это инструментарий для создания интерактивных визуализаций данных для размещения в сети Интернет.',
  'LBL_SOURCE_ZEND' => 'Zend Framework -  фреймворк веб-приложения с открытым кодом для PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - парсер данных из CSV для PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Используйте функции PHP в JavaScript',
  'LBL_SOURCE_PHPSQL' => 'Парсер PHP SQL',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - Соответствующая стандартам библиотека фильтрации HTML.',
  'LBL_SOURCE_XHPROF' => 'XHProf - иерархический профайлер для PHP',
  'LBL_DASHLET_TITLE' => 'Мои сайты',
  'LBL_DASHLET_OPT_TITLE' => 'Название',
  'LBL_DASHLET_OPT_URL' => 'Адрес веб-сайта',
  'LBL_DASHLET_OPT_HEIGHT' => 'Высота раздела (в пикселях)',
  'LBL_DASHLET_SUGAR_NEWS' => 'Новости Sugar',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Откройте для себя Sugar',
	'LBL_POWERED_BY_SUGAR' => 'Разработано SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Детальнее' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Базовый поиск' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Расширенный поиск' /*for 508 compliance fix*/,

  'LBL_MOST_ACTIVE_COLLEAGUES' => 'Текущий',
  'LBL_MOST_ACTIVE_COLLEAGUES_DESC' => 'Отображает текущих пользователей',
  'LBL_MOST_CALLS_MADE' => '{{count}} совершенных звонков',
  'LBL_MOST_EMAILS_SENT' => '{{count}} отправленных e-mail',
  'LBL_MOST_EMAILS_RECEIVED' => '{{count}} полученных e-mail',
  'LBL_MOST_MEETING_HELD' => '{{count}} проведенных встреч',

    'LBL_SUGAR_CUBE_ALT' => 'SugarCRM',

    // Portal tour content
    'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'Вы в Портале Sugar. Используйте стрелки внизу для быстрого ознакомления с порталом.',
    'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Дашбоард показывает состояние недавно обновленных записей.',
    'LBL_PORTAL_TOUR_RECORDS_CASES' => 'Нажмите здесь, чтобы найти или оформить запрос в поддержку в модуле Обращений.',
    'LBL_PORTAL_TOUR_RECORDS_KB' => 'Нажмите здесь, чтобы прочесть статьи, опубликованные в модуле Базы Знаний.',
    'LBL_PORTAL_TOUR_RECORDS_BUGS' => 'Нажмите здесь, чтобы найти или оформить запрос об ошибке в модуле Ошибок.',
    'LBL_PORTAL_TOUR_RECORDS_GLOBAL_SEARCH' => 'Поиск записей по названию или номеру среди всех доступных модулей.',
    'LBL_PORTAL_TOUR_RECORDS_QUICK_CREATE' => 'Нажмите здесь для быстрого создания записи.',
    'LBL_PORTAL_TOUR_RECORDS_SEARCH' => 'Поиск записей в списке.',
    'LBL_PORTAL_TOUR_RECORDS_USER' => 'Доступ к профайлу и выход из него возможен в меню пользователя.',
    'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Для возврата в предыдущее окно в любое время нажмите здесь.',

    // Record View Help Text
    'LBL_HELP_RECORD_TITLE' => 'Добро пожаловать в Справочную панель Sugar 7',
    'LBL_HELP_RECORD' => 'Справка отображает конкретную просматриваемую информацию о модуле, предусматривает детальные шаги для выполнения некоторых действий в модуле и указывает путь для получения более полной информации и поддержки. Справочная панель остается открытой для того, чтобы Вы просматривали шаги тогда, когда Вы выполняете шаги в модуле. Справочная панель доступна для всех модулей Sugar 7 и может переключаться на "открытую" и "закрытую" нажатием на иконку "Помощь" в нижнем колонтитуле приложения.',

    'LBL_FACETS_DASHBOARD_TITLE' => 'Фильтр',
);
