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
  'LBL_BUCKET' => 'Блок',
  'LBL_ERROR' => 'Ошибка',
  'LBL_FLAG' => 'Признак',
  'LBL_LOGFILE' => 'Лог-файл',
  'LBL_LOGMETA' => 'Лог мета',
  'LBL_MODULE_NAME' => 'Проверка готовности',
  'LBL_MODULE_NAME_SINGULAR' => 'Проверка готовности',
  'LBL_MODULE_TITLE' => 'Проверка готовности',
  'LBL_SCAN_101_DESCR' => 'На Вашем экземпляре были обнаружены настройки Студии. Мы не предвидим каких-либо проблем с этими настройками и Ваши настройки обновлены до Sugar7.',
  'LBL_SCAN_101_LOG' => '%s имеет историю студии',
  'LBL_SCAN_101_TITLE' => '%s имеет историю студии',
  'LBL_SCAN_102_DESCR' => 'На Вашем экземпляре были обнаружены настройки Студии. Мы не предвидим каких-либо проблем с этими настройками и Ваши настройки обновлены до Sugar7.',
  'LBL_SCAN_102_LOG' => '%s имеет расширения: %s',
  'LBL_SCAN_102_TITLE' => '%s имеет расширения: %s',
  'LBL_SCAN_103_DESCR' => 'На Вашем экземпляре были обнаружены настройки Студии. Мы не предвидим каких-либо проблем с этими настройками и Ваши настройки обновлены до Sugar7.',
  'LBL_SCAN_103_LOG' => '%s имеет кастомизированные vardefs',
  'LBL_SCAN_103_TITLE' => '%s имеет кастомизированные vardefs',
  'LBL_SCAN_104_DESCR' => 'На Вашем экземпляре были обнаружены настройки Студии. Мы не предвидим каких-либо проблем с этими настройками и Ваши настройки обновлены до Sugar7.',
  'LBL_SCAN_104_LOG' => '%s имеет кастомизированные layoutdefs',
  'LBL_SCAN_104_TITLE' => '%s имеет кастомизированные layoutdefs',
  'LBL_SCAN_105_DESCR' => 'На Вашем экземпляре были обнаружены настройки Студии. Мы не предвидим каких-либо проблем с этими настройками и Ваши настройки обновлены до Sugar7.',
  'LBL_SCAN_105_LOG' => '%s имеет кастомизированные viewdefs',
  'LBL_SCAN_105_TITLE' => '%s имеет кастомизированные viewdefs',
  'LBL_SCAN_201_DESCR' => 'На Вашем экземпляре были обнаружены настройки Студии. Мы не предвидим каких-либо проблем с этими настройками и Ваши настройки обновлены до Sugar7.',
  'LBL_SCAN_201_LOG' => '%s не основной модуль',
  'LBL_SCAN_201_TITLE' => '%s не основной модуль',
  'LBL_SCAN_301_DESCR' => 'Некоторые настройки были обнаружены и не были мигрированы в Sugar7. Этот модуль (%s) будет по-прежнему доступен, но он будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_301_LOG' => '%s выполнять как BWC',
  'LBL_SCAN_301_TITLE' => '%s выполнять как BWC',
  'LBL_SCAN_302_DESCR' => 'Были обнаружены неизвестные представления файлов и они не были мигрированы в Sugar7. Этот модуль (%s) будет по-прежнему доступен, но он будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_302_LOG' => 'Присутствуют неизвестные представления файла - %s не является модулем Конструктора модулей',
  'LBL_SCAN_302_TITLE' => 'Присутствуют неизвестные представления файла - %s не является модулем Конструктора модулей',
  'LBL_SCAN_303_DESCR' => 'Были обнаружены непустые формы файлов и они не были мигрированы в Sugar7.  Этот модуль (%s) будет по-прежнему доступен, но он будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_303_LOG' => 'Непустая форма файла %s - %s не является модулем Конструктора модулей',
  'LBL_SCAN_303_TITLE' => 'Непустая форма файла %s - %s не является модулем Конструктора модулей',
  'LBL_SCAN_304_DESCR' => 'Были обнаружены неизвестные файлы (%s) и они не были мигрированы в Sugar7.  Этот модуль (%s) будет по-прежнему доступен, но он будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_304_LOG' => 'Неизвестный файл %s - %s не является модулем Конструктора модулей',
  'LBL_SCAN_304_TITLE' => 'Неизвестный файл %s - %s не является модулем Конструктора модулей',
  'LBL_SCAN_305_DESCR' => 'Некорректные vardefs(%s: %s) были обнаружены и не были мигрированы в Sugar7. Эта настройка будет по-прежнему доступна, но она будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_305_LOG' => 'Некорректные vardefs - ключ %s, имя %s',
  'LBL_SCAN_305_TITLE' => 'Некорректные vardefs - ключ %s, имя %s',
  'LBL_SCAN_306_DESCR' => 'Были обнаружены некорректные vardefs и они не были мигрированы в Sugar7.  У связанного поля (%s) есть пустой `модуль`). Эта настройка будет по-прежнему доступна, но она будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_306_LOG' => 'Некорректные vardefs - у связанного поля %s есть пустой `модуль`',
  'LBL_SCAN_306_TITLE' => 'Некорректные vardefs - у связанного поля %s есть пустой `модуль`',
  'LBL_SCAN_307_DESCR' => 'Некорректные vardefs(%s: %s) были обнаружены и не были мигрированы в Sugar7. Связь (%s) относится к недействительной связи. Эта настройка будет по-прежнему доступна, но она будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_307_LOG' => 'Некорректные vardefs - связь %s относится к недействительной связи',
  'LBL_SCAN_307_TITLE' => 'Некорректные vardefs - связь %s относится к недействительной связи',
  'LBL_SCAN_308_DESCR' => 'Некоторые настройки были обнаружены и не были мигрированы в Sugar7. Этот модуль (%s) будет по-прежнему доступен, но он будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_308_LOG' => 'Функция Vardef HTML в %s',
  'LBL_SCAN_308_TITLE' => 'Функция Vardef HTML в %s',
  'LBL_SCAN_309_DESCR' => 'md5 hash для %s не соответствует готовому файлу. Возможно, этот файл был изменен и больше не будет обновлен до Sugar7',
  'LBL_SCAN_309_LOG' => 'Некорректный md5 для %s',
  'LBL_SCAN_309_TITLE' => 'Некорректный md5 для %s',
  'LBL_SCAN_310_DESCR' => 'Были обнаружены неизвестные файлы базы данных (%s) и они не были мигрированы в Sugar7.  Этот модуль (%s) будет по-прежнему доступен, но он будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_310_LOG' => 'Неизвестный файл %s/%s',
  'LBL_SCAN_310_TITLE' => 'Неизвестный файл %s/%s',
  'LBL_SCAN_311_DESCR' => 'Были обнаружены определенные настройки (%s) и они не были мигрированы в Sugar7.  Этот модуль (%s) будет по-прежнему доступен, но он будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_311_LOG' => 'Функция vardef HTML %s в $модуле модуль для поля %s',
  'LBL_SCAN_311_TITLE' => 'Функция vardef HTML %s в $модуле модуль для поля %s',
  'LBL_SCAN_312_DESCR' => 'Были обнаружены некорректные vardefs и они не были мигрированы в Sugar7. Некорректные vardefs: &#39;название&#39; типа поля некорректно &#39;%s&#39; для модуля &#39;%s&#39;.  Данная настройка будет по-прежнему доступна, но она будет работать в режиме обратной совместимости в Sugar7.',
  'LBL_SCAN_312_LOG' => 'Некорректные vardefs - тип поля &#39;имя&#39; недопустимо &#39;%s&#39;, модуль - &#39;%s&#39;',
  'LBL_SCAN_312_TITLE' => 'Некорректные vardefs - тип поля &#39;имя&#39; недопустимо &#39;%s&#39;, модуль - &#39;%s&#39;',
  'LBL_SCAN_313_DESCR' => 'Была обнаружена директория Расширений (Extensions) - %s не является модулем Конструктора модулей. Этот модуль будет по-прежнему доступен, но только в режиме обратной совместимости.',
  'LBL_SCAN_313_LOG' => 'Обнаружено расширение dir %s  - %s не является модулем Конструктора модулей',
  'LBL_SCAN_313_TITLE' => 'Обнаружено расширение dir %s  - %s не является модулем Конструктора модулей',
  'LBL_SCAN_314_LOG' => 'Некорректные vardefs - поле multienum&#39;%s&#39; со списком опций &#39;%s&#39; ключи содержат несовместимые символы - &#39;{%s}&#39;',
  'LBL_SCAN_401_DESCR' => 'Кастомизированный файл содержит файл, который был перемещен в директорию вендора. Мы попытались принять меры по устранению последствий, и никакие дальнейшие действия не требуются.',
  'LBL_SCAN_401_LOG' => 'Найдено включение файлов поставщика, для файлов, которые были перемещены в vendor/:\\r\\n%s',
  'LBL_SCAN_401_TITLE' => 'Найдено включение файлов поставщика, для файлов, которые были перемещены в vendor/:\\r\\n%s',
  'LBL_SCAN_402_DESCR' => 'Некорректный модуль %s - не находится в beanList и файловой системе',
  'LBL_SCAN_402_LOG' => 'Некорректный модуль %s - не находится в beanList и файловой системе',
  'LBL_SCAN_402_TITLE' => 'Некорректный модуль %s - не находится в beanList и файловой системе',
  'LBL_SCAN_403_DESCR' => 'Некоторые файлы Sugar изменили свое местоположение в Sugar 7. Мы должны исправить их пути подключения.',
  'LBL_SCAN_403_LOG' => 'Определенное включение файлов Sugar найдено для:<br />%s',
  'LBL_SCAN_403_TITLE' => 'Определенное включение файлов Sugar найдено для:<br />%s',
  'LBL_SCAN_406_DESCR' => 'У основного модуля Sugar есть пользовательские представления в custom/modules/%s/views',
  'LBL_SCAN_406_LOG' => '%s имеет пользовательские представления',
  'LBL_SCAN_406_TITLE' => '%s имеет пользовательские представления',
  'LBL_SCAN_407_DESCR' => 'У основного модуля Sugar есть пользовательские представления в modules/%s/views',
  'LBL_SCAN_407_LOG' => '%s имеет пользовательские представления в модуле dir',
  'LBL_SCAN_407_TITLE' => '%s имеет пользовательские представления в модуле dir',
  'LBL_SCAN_410_DESCR' => 'Слишком много полей в представлении',
  'LBL_SCAN_410_LOG' => 'Максимальное количество полей - Обнаружено более, чем %s полей (%s) в %s',
  'LBL_SCAN_410_TITLE' => 'Максимальное количество полей - Обнаружено более, чем %s полей (%s) в %s',
  'LBL_SCAN_412_DESCR' => 'Субпанель относится к связи, которая не существует или должным образом не определена',
  'LBL_SCAN_412_LOG' => 'Некорректная связь субпанели %s в %s',
  'LBL_SCAN_412_TITLE' => 'Некорректная связь субпанели %s в %s',
  'LBL_SCAN_413_DESCR' => 'Поле относится к имени класса виджета, у которого нет соответствующего файла класса виджета',
  'LBL_SCAN_413_LOG' => 'Обнаружен неизвестный класс виджета: %s for %s',
  'LBL_SCAN_413_TITLE' => 'Обнаружен неизвестный класс виджета: %s for %s',
  'LBL_SCAN_414_DESCR' => 'Неизвестные поля обрабатываются CRYS-36, так что здесь больше нет проверок',
  'LBL_SCAN_414_LOG' => 'Неизвестные поля обрабатываются CRYS-36, так что здесь больше нет проверок',
  'LBL_SCAN_414_TITLE' => 'Неизвестные поля обрабатываются CRYS-36, так что здесь больше нет проверок',
  'LBL_SCAN_415_DESCR' => 'Расширение логики модулей (logic hook) относится к несуществующему файлу',
  'LBL_SCAN_415_LOG' => 'Некорректный хук файл в %s: %s',
  'LBL_SCAN_415_TITLE' => 'Некорректный хук файл в %s: %s',
  'LBL_SCAN_417_DESCR' => 'Обнаружен модуль Feeds или iFrames, который более не должен существовать',
  'LBL_SCAN_417_LOG' => 'Несовместимый модуль %s',
  'LBL_SCAN_417_TITLE' => 'Несовместимый модуль %s',
  'LBL_SCAN_418_DESCR' => 'Субпанель относится к несуществующему модулю',
  'LBL_SCAN_418_LOG' => 'Найдена субпанель со ссылкой на несуществующий модуль: %s',
  'LBL_SCAN_418_TITLE' => 'Найдена субпанель со ссылкой на несуществующий модуль: %s',
  'LBL_SCAN_419_DESCR' => 'Vardef ключ не соответствует vardef имени',
  'LBL_SCAN_419_LOG' => 'Некорректные vardefs - ключ %s, имя %s',
  'LBL_SCAN_419_TITLE' => 'Некорректные vardefs - ключ %s, имя %s',
  'LBL_SCAN_420_DESCR' => 'Vardef содержит связанные поля, относящиеся к связи которая не может быть должным образом загружена',
  'LBL_SCAN_420_LOG' => 'Некорректные vardefs - у связанного поля %s есть пустой `модуль`',
  'LBL_SCAN_420_TITLE' => 'Некорректные vardefs - у связанного поля %s есть пустой `модуль`',
  'LBL_SCAN_421_DESCR' => 'Vardef содержит поле Ссылка, которое не может быть загружено правильно',
  'LBL_SCAN_421_LOG' => 'Некорректные vardefs - связь %s относится к недействительной связи',
  'LBL_SCAN_421_TITLE' => 'Некорректные vardefs - связь %s относится к недействительной связи',
  'LBL_SCAN_423_DESCR' => 'Vardef определен как составные поля, содержащие подполя, и одно из этих подполей фактически не существует',
  'LBL_SCAN_423_LOG' => 'Некорректные vardefs - %s относятся к некорректному субполю %s',
  'LBL_SCAN_423_TITLE' => 'Некорректные vardefs - %s относятся к некорректному субполю %s',
  'LBL_SCAN_424_DESCR' => 'Файл содержит встроенный HTML',
  'LBL_SCAN_424_LOG' => 'Встроенный HTML найден в %s в строке %s',
  'LBL_SCAN_424_TITLE' => 'Файл содержит встроенный HTML',
  'LBL_SCAN_425_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_425_LOG' => 'Найдено "echo" в %s в строке %s',
  'LBL_SCAN_425_TITLE' => 'Найдено "echo" в %s в строке %s',
  'LBL_SCAN_426_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_426_LOG' => 'Найдено "print" в %s в строке %s',
  'LBL_SCAN_426_TITLE' => 'Найдено "print" в %s в строке %s',
  'LBL_SCAN_427_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_427_LOG' => 'Найдено "die/exit" в %s в строке %s',
  'LBL_SCAN_427_TITLE' => 'Найдено "die/exit" в %s в строке %s',
  'LBL_SCAN_428_DESCR' => 'В коде содержится выходная производственная функция. Обратите внимание, что разрешено print_r(..., true).',
  'LBL_SCAN_428_LOG' => 'Найдено "print_r" в %s в строке %s',
  'LBL_SCAN_428_TITLE' => 'Найдено "print_r" в %s в строке %s',
  'LBL_SCAN_429_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_429_LOG' => 'Найдено "var_dump" в %s в строке %s',
  'LBL_SCAN_429_TITLE' => 'Найдено "var_dump" в %s в строке %s',
  'LBL_SCAN_430_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_430_LOG' => 'Обнаружена буферизация вывода (%s) в %s в строке %s',
  'LBL_SCAN_430_TITLE' => 'Обнаружена буферизация вывода (%s) в %s в строке %s',
  'LBL_SCAN_432_DESCR' => 'Тип поля &#39;имя (name)&#39; отличный от типа поля имя (name), полное имя (fullname), varchar or id',
  'LBL_SCAN_432_LOG' => 'Некорректные vardefs - тип поля &#39;имя&#39; недопустимо &#39;%s&#39;, модуль - &#39;%s&#39;',
  'LBL_SCAN_432_TITLE' => 'Некорректные vardefs - тип поля &#39;имя&#39; недопустимо &#39;%s&#39;, модуль - &#39;%s&#39;',
  'LBL_SCAN_501_DESCR' => 'Один из основных файлов не присутствует в экземпляре',
  'LBL_SCAN_501_LOG' => 'Отсутствует файл: %s',
  'LBL_SCAN_501_TITLE' => 'Отсутствует файл: %s',
  'LBL_SCAN_502_DESCR' => 'Один из основных файлов был изменен в этой установке',
  'LBL_SCAN_502_LOG' => 'md5 несовпадает с %s, ожидаемо %s',
  'LBL_SCAN_502_TITLE' => 'md5 несовпадает с %s, ожидаемо %s',
  'LBL_SCAN_503_DESCR' => 'У кастомного модуля такое же название, как и у одного из новых модулей Sugar',
  'LBL_SCAN_503_LOG' => 'Кастомный модуль с таким же названием, как новый модуль Sugar7: %s',
  'LBL_SCAN_503_TITLE' => 'Кастомный модуль с таким же названием, как новый модуль Sugar7: %s',
  'LBL_SCAN_504_DESCR' => 'Определение поля vardef исключает тип',
  'LBL_SCAN_504_LOG' => 'Тип поля, отсутствующего в модуле %s: %s',
  'LBL_SCAN_504_TITLE' => 'Тип поля, отсутствующего в модуле %s: %s',
  'LBL_SCAN_505_DESCR' => 'Тип поля non-blob изменен на тип поля blob. Это недопустимо, потому что типы blob не могут быть индексированы и у нас могут быть фильтры, ссылающиеся на это индексированное поле.',
  'LBL_SCAN_505_LOG' => 'Тип изменения %s для поля %s: с %s на %s',
  'LBL_SCAN_505_TITLE' => 'Тип изменения %s для поля %s: с %s на %s',
  'LBL_SCAN_506_DESCR' => '$это используется в файле метаданных. Поскольку файл метаданных загружен в различном контексте в Sugar7, это не сработает.',
  'LBL_SCAN_506_LOG' => 'Использование $this в %s',
  'LBL_SCAN_506_TITLE' => 'Использование $this в %s',
  'LBL_SCAN_507_DESCR' => 'Vardef определен как составные поля, содержащие подполя, и одно из этих подполей фактически не существует',
  'LBL_SCAN_507_LOG' => 'Некорректные vardefs - %s относятся к некорректному субполю %s',
  'LBL_SCAN_507_TITLE' => 'Некорректные vardefs - %s относятся к некорректному субполю %s',
  'LBL_SCAN_508_DESCR' => 'Файл содержит встроенный HTML',
  'LBL_SCAN_508_LOG' => 'Файл содержит встроенный HTML',
  'LBL_SCAN_508_TITLE' => 'Встроенный HTML найден в %s в строке %s',
  'LBL_SCAN_509_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_509_LOG' => 'Найдено "echo" в %s в строке %s',
  'LBL_SCAN_509_TITLE' => 'Найдено "echo" в %s в строке %s',
  'LBL_SCAN_510_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_510_LOG' => 'Найдено "print" в %s в строке %s',
  'LBL_SCAN_510_TITLE' => 'Найдено "print" в %s в строке %s',
  'LBL_SCAN_511_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_511_LOG' => 'Найдено "die/exit" в %s в строке %s',
  'LBL_SCAN_511_TITLE' => 'Найдено "die/exit" в %s в строке %s',
  'LBL_SCAN_512_DESCR' => 'В коде содержится выходная производственная функция. Обратите внимание, что разрешено print_r(..., true).',
  'LBL_SCAN_512_LOG' => 'Найдено "print_r" в %s в строке %s',
  'LBL_SCAN_512_TITLE' => 'Найдено "print_r" в %s в строке %s',
  'LBL_SCAN_513_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_513_LOG' => 'Найдено "var_dump" в %s в строке %s',
  'LBL_SCAN_513_TITLE' => 'Найдено "var_dump" в %s в строке %s',
  'LBL_SCAN_514_DESCR' => 'В коде содержится выходная производственная функция',
  'LBL_SCAN_514_LOG' => 'Обнаружена буферизация вывода (%s) в %s в строке %s',
  'LBL_SCAN_514_TITLE' => 'Обнаружена буферизация вывода (%s) в %s в строке %s',
  'LBL_SCAN_515_DESCR' => 'Сценарий проверки не выполнен, это означает, что instaScannerMeta.phpnce, вероятно, содержит некорректный PHP-код, который и пытался загрузить сценарий.',
  'LBL_SCAN_515_LOG' => 'Сценарий проверки перестал работать, что означает, что instaScannerMeta.phpnce, вероятно, содержит плохой PHP-код, который  попытался загрузить сценарий.',
  'LBL_SCAN_515_TITLE' => 'Ошибка сценария: %s',
  'LBL_SCAN_516_LOG' => 'Ранее удаленные файлы найдены в: %s',
  'LBL_SCAN_517_DESCR' => 'Обнаружен модуль, который был помещен в черный список как неподдерживаемый в Sugar 7',
  'LBL_SCAN_517_LOG' => 'Несовместимая интеграция - %s %s',
  'LBL_SCAN_517_TITLE' => 'Несовместимая интеграция - %s %s',
  'LBL_SCAN_518_DESCR' => 'Vardefs включают в себя определения customCode пользователя, которые мы не знаем, как конвертировать',
  'LBL_SCAN_518_LOG' => 'Несовместимый модуль %s',
  'LBL_SCAN_518_TITLE' => 'Несовместимый модуль %s',
  'LBL_SCAN_519_DESCR' => 'У основного модуля Sugar есть одно из расширений, которое не поддерживается для обновления, как, например, кастомизированная маршрутизация, контроль доступа, Javascript, и т.д.',
  'LBL_SCAN_519_LOG' => 'Обнаружено расширение dir %s',
  'LBL_SCAN_519_TITLE' => 'Обнаружено расширение dir %s',
  'LBL_SCAN_520_DESCR' => 'Данное расширение логики модулей (logic hook) более не поддерживается в Sugar 7',
  'LBL_SCAN_520_LOG' => 'Обнаружено расширение логики модулей (logic hook)  after_ui_frame',
  'LBL_SCAN_520_TITLE' => 'Обнаружено расширение логики модулей (logic hook) after_ui_frame',
  'LBL_SCAN_521_DESCR' => 'Данное расширение логики модулей (logic hook) более не поддерживается в Sugar 7',
  'LBL_SCAN_521_LOG' => 'Обнаружено расширение логики модулей (logic hook) after_ui_footer',
  'LBL_SCAN_521_TITLE' => 'Обнаружено расширение логики модулей (logic hook) after_ui_footer',
  'LBL_SCAN_522_DESCR' => 'Данные субпанели извлекаются с помощью функции, обновление данной функции еще не поддерживается.',
  'LBL_SCAN_522_LOG' => 'Найдено &#39;get_subpanel_data&#39; с функцией:&#39; значение в %s',
  'LBL_SCAN_522_TITLE' => 'Найдено &#39;get_subpanel_data&#39; с функцией:&#39; значение в %s',
  'LBL_SCAN_523_DESCR' => 'Устаревший файл расширения логики модулей (logic hook file) использует передачу параметров по ссылке, что может привести к выводимым на экран сообщениям об ошибке (и, таким образом, негативно повлиять на REST)',
  'LBL_SCAN_523_LOG' => 'Передача параметра по ссылке в расширении логики модулей (hook file) %s функция %s',
  'LBL_SCAN_523_TITLE' => 'Передача параметра по ссылке в расширении логики модулей (hook file) %s функция %s',
  'LBL_SCAN_524_DESCR' => 'Поле определено как функция HTML-кода и не может быть автоматически конвертировано (мы знаем, как конвертировать основные поля, такие как emails и валюта)',
  'LBL_SCAN_524_LOG' => 'Функция vardef HTML %s в $модуле модуль для поля %s',
  'LBL_SCAN_524_TITLE' => 'Функция vardef HTML %s в $модуле модуль для поля %s',
  'LBL_SCAN_525_DESCR' => 'Vardef определяет enum, что является результатом функции HTML, которая не поддерживается для Sugar7',
  'LBL_SCAN_525_LOG' => 'Функция Vardef HTML в %s',
  'LBL_SCAN_525_TITLE' => 'Функция Vardef HTML в %s',
  'LBL_SCAN_526_DESCR' => 'Этот Список содержит значения Наименования товара, которые предотвращают обновление.',
  'LBL_SCAN_526_LOG' => 'Некорректные vardefs - поле multienum &#39;%s&#39; со списком опций &#39;%s&#39; ключи содержат несовместимые символы - &#39;%s&#39;',
  'LBL_SCAN_526_TITLE' => 'Некорректные vardefs - поле multienum &#39;%s&#39; со списком опций &#39;%s&#39; ключи содержат несовместимые символы - &#39;%s&#39;',
  'LBL_SCAN_527_LOG' => 'Название таблицы в bean %s не соответствует атрибуту таблицы в %s/vardefs.php',
  'LBL_SCAN_528_DESCR' => 'Поля Date/Datetime/Time с некорректным значением display_default, как например, -не определен-',
  'LBL_SCAN_528_LOG' => 'У поля %s модуля %s  есть неправильное значение display_default',
  'LBL_SCAN_528_TITLE' => 'У поля %s модуля %s  есть неправильное значение display_default',
  'LBL_SCAN_529_DESCR' => 'Ошибки PHP могут быть вызваны программой-интерпретатором, когда найдены некорректный php-синтаксис или определенные проблемы с кодом во время выполнения.',
  'LBL_SCAN_529_LOG' => '%s: %s в файле %s на строке %s',
  'LBL_SCAN_529_TITLE' => '%s: %s в файле %s на строке %s',
  'LBL_SCAN_530_DESCR' => 'Одного из пользовательских файлов нет в экземпляре, но он используется пользовательским кодом.',
  'LBL_SCAN_530_LOG' => 'Отсутствует пользовательский файл: %s',
  'LBL_SCAN_530_TITLE' => 'Отсутствует пользовательский файл: %s',
  'LBL_SCAN_901_DESCR' => 'Экземпляр уже обновлен до Sugar 7',
  'LBL_SCAN_901_LOG' => 'Экземпляр уже обновлен до Sugar 7',
  'LBL_SCAN_901_TITLE' => 'Экземпляр уже обновлен до Sugar 7',
  'LBL_SCAN_999_DESCR' => 'Неизвестная ошибка, пожалуйста, обратитесь в службу поддержки',
  'LBL_SCAN_999_LOG' => 'Неизвестная ошибка, пожалуйста, обратитесь в службу поддержки',
  'LBL_SCAN_999_TITLE' => 'Неизвестная ошибка, пожалуйста, обратитесь в службу поддержки',
);

