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
  'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => '不能导入系统管理员',
  'ERR_MISSING_MAP_NAME' => '丢失自定义映射名称',
  'ERR_MISSING_REQUIRED_FIELDS' => '缺少必填字段:',
  'ERR_MULTIPLE' => '多个字段使用同样的字段名称',
  'ERR_MULTIPLE_PARENTS' => '您只能定义一个父类ID',
  'ERR_SELECT_FILE' => '选择一个要上传的文件。',
  'ERR_SELECT_FULL_NAME' => '在选取姓或名后，您就无法选择全名了。',
  'LBL_' => '',
  'LBL_ACCOUNTS_NOTE_1' => '街道2与街道3字段在导入数据库时会与第一个街道字段合并。',
  'LBL_ACT' => 'Act!',
  'LBL_ACT_NUM_1' => '启动 <b>ACT!</b>',
  'LBL_ACT_NUM_10' => '选择<b>所有记录</b>然后单击<b>结束</b>',
  'LBL_ACT_NUM_2' => '选择<b>文件</b>菜单, <b>数据交换</b>选项, 然后<b>导出...</b>选项',
  'LBL_ACT_NUM_3' => '选择文件类型<b>文本定界</b>',
  'LBL_ACT_NUM_4' => '为导入数据选择文件名和位置然后点<b>下一步</b>',
  'LBL_ACT_NUM_5' => '仅选择<b>联系人记录</b>',
  'LBL_ACT_NUM_6' => '点击<b>选项</b>...按钮',
  'LBL_ACT_NUM_7' => '选择<b>逗号</b>为字段分隔符',
  'LBL_ACT_NUM_8' => '点选<b>是,导出字段名</b>选择框并单击<b>完成</b>',
  'LBL_ACT_NUM_9' => '点击<b>下一步</b>',
  'LBL_ADD_FIELD_HELP' => '用此选项在所有档案创建和/或更新里增加值到字符. 选择字符然后为默认值纵列的字符进入或选择值 .',
  'LBL_ADD_ROW' => '增加字段',
  'LBL_ARE_YOU_SURE' => '请确认?这将删除这个模块的所有记录.',
  'LBL_ASSIGNED_USER' => '如果用户不存在,使用当前用户',
  'LBL_AUTO_DETECT_ERROR' => '导入文件中的字段定界符和限定词是不能被删除的. 请核实导入文件属性的设置.',
  'LBL_BACK' => '< 上一步',
  'LBL_CANCEL' => '取消',
  'LBL_CANNOT_OPEN' => '不能打开读取导入的文件',
  'LBL_CHARSET' => '文件编码格式',
  'LBL_CONFIRM_EXT_TITLE' => 'Step {0}: 确认外部来源属性',
  'LBL_CONFIRM_IMPORT' => '你需要在导入过程中选定要更新的档案. 更新使现有的档案不能使之没完成. 尽管如此, 在导入过程中创建档案可以是未完成的(删除), 如需要. 点击取消来只选择创建新的档案, 或 点击好 继续.',
  'LBL_CONFIRM_MAP_OVERRIDE' => '警告: 你已经选了这个的导入自定义映射, 你想继续吗?',
  'LBL_CONFIRM_TITLE' => '步骤 {0}: 确认导入文件属性',
  'LBL_CONTACTS_NOTE_1' => '必须指定姓或名。',
  'LBL_CONTACTS_NOTE_2' => '如果指定了全名，姓与名字段则会忽略。',
  'LBL_CONTACTS_NOTE_3' => '如果指定了全名，该字段中的记录会自动被切割成姓与名两个个字段。',
  'LBL_CONTACTS_NOTE_4' => '街道2与街道3字段在导入数据库时会与第一个街道字段合并。',
  'LBL_CREATED_TAB' => '档案创建',
  'LBL_CREATE_BUTTON_HELP' => '用此选项建立新的档案，注意：导入文件里的行包含与现有档案相符的ID值将不会被导入如果值直接变换到Id字段',
  'LBL_CSV' => '逗号分隔符文件',
  'LBL_CURRENCY' => '货币',
  'LBL_CURRENCY_SIG_DIGITS' => '货币分隔符',
  'LBL_CUSTOM' => '自定义',
  'LBL_CUSTOM_CSV' => '自定义逗号分隔符文件',
  'LBL_CUSTOM_DELIMITED' => '自定义定界符文件',
  'LBL_CUSTOM_DELIMITER' => '字段定界符:',
  'LBL_CUSTOM_ENCLOSURE' => '字段有效:',
  'LBL_CUSTOM_NUM_1' => '运行应用程序，打开数据文件',
  'LBL_CUSTOM_NUM_2' => '选择<b>保存为...</b>或者<b>导出...</b>菜单选项',
  'LBL_CUSTOM_NUM_3' => '保存文件到一个<b>CSV</b>或者<b>逗号分隔符</b>的文件',
  'LBL_CUSTOM_TAB' => '自定义制表符分隔符文件',
  'LBL_DATABASE_FIELD' => '数据库字段',
  'LBL_DATABASE_FIELD_HELP' => '从模块的数据库表中选择一个存在字段S.',
  'LBL_DATE_FORMAT' => '日期格式:',
  'LBL_DEBUG_MODE' => '允许调试模块',
  'LBL_DECIMAL_SEP' => '数字标记',
  'LBL_DEFAULT_VALUE' => '默认值',
  'LBL_DEFAULT_VALUE_HELP' => '使用指定值,如果导入文件时创建或更新的记录没有数据.',
  'LBL_DELETE' => '删除',
  'LBL_DELETE_MAP_CONFIRMATION' => '您确定要删除此映射么？',
  'LBL_DELIMITER_COMMA_HELP' => '选择此项如果导入文件分隔符是逗号或者扩展名是.csv.',
  'LBL_DELIMITER_CUSTOM_HELP' => '选择此项如果导入文件分隔符既不是逗号也不是制表符,然后在旁边的输入框内输入分隔符.',
  'LBL_DELIMITER_TAB_HELP' => '如果使用标签来标示字段并且文件扩展名为.txt时，请使用这个选项。',
  'LBL_DESELECT' => '取消选定',
  'LBL_DONT_MAP' => '-- 不要对应这个字段 --',
  'LBL_DUPLICATES' => '查找重复记录',
  'LBL_DUPLICATE_TAB' => '副本',
  'LBL_DUP_HELP' => '这里是导入文件中没有被导入的列因为根据重复检查他们包含的数据与现有档案的值相符. 加亮的为相符的数据. 为了重新导入这些行, 下载列表做修改并点击 <b>重新导入</b>.',
  'LBL_ENCLOSURE_HELP' => '有效的<b>限定符</b>是用来定界数据内容的.<br/><br/>例如:如果分隔符是逗号(,)并且限定符是双引号("),<b>"Cupertino, California"</b>被导入到一个字段并显示为<b>Cupertino,California</b>.<br/>如果没有限定符或者限定符是其他,<b>"Cupertino,California"</b>会被导入为两个邻接的字段<b>"Cupertino</b>和<b>California"</b>.<br/><br/>注意:导入文件可能不包括任何限定符.<br/>在Excel总创建的逗号和制表符分隔的文件默认使用双引号做限定符.',
  'LBL_ERROR' => '错误:',
  'LBL_ERROR_DELETING_RECORD' => '删除记录错误:',
  'LBL_ERROR_HELP' => '这里是导入文件中一些行由于错误不能导入. 为了重新导入这下行, 下载列表做修改并点击 <b>重新导入</b>',
  'LBL_ERROR_IMPORTS_NOT_SET_UP' => '这个类型的模块没有导入设置',
  'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => '导入缓存目录不可写.',
  'LBL_ERROR_INVALID_ACCOUNT' => '无效账户名称或编号',
  'LBL_ERROR_INVALID_BOOL' => '无效的值 (有效范围1 或 0)',
  'LBL_ERROR_INVALID_CURRENCY' => '无效货币值',
  'LBL_ERROR_INVALID_DATE' => '无效日期字符串',
  'LBL_ERROR_INVALID_DATETIME' => '无效日期时间',
  'LBL_ERROR_INVALID_DATETIMECOMBO' => '无效日期时间',
  'LBL_ERROR_INVALID_EMAIL' => 'I无效电子邮件地址',
  'LBL_ERROR_INVALID_FLOAT' => '无效浮点数值',
  'LBL_ERROR_INVALID_ID' => '编号过长(最大36个字符)',
  'LBL_ERROR_INVALID_INT' => '无效整数值',
  'LBL_ERROR_INVALID_NAME' => '字符串过长',
  'LBL_ERROR_INVALID_NUM' => '无效数字值',
  'LBL_ERROR_INVALID_PHONE' => '无效电话号码',
  'LBL_ERROR_INVALID_RELATE' => '无效关联字段',
  'LBL_ERROR_INVALID_TEAM' => '无效组名或编号',
  'LBL_ERROR_INVALID_TIME' => '无效时间',
  'LBL_ERROR_INVALID_USER' => '无效用户名或编号',
  'LBL_ERROR_INVALID_VARCHAR' => '字符串过长',
  'LBL_ERROR_NOT_IN_ENUM' => '值不在下拉列表内. 允许的值是:',
  'LBL_ERROR_SELECTING_RECORD' => '选择记录错误:',
  'LBL_ERROR_SYNC_USERS' => '同步 Outlook无效值',
  'LBL_ERROR_TAB' => '出错',
  'LBL_ERROR_UNABLE_TO_PUBLISH' => '不能发布. 存在另一个同名的发布导入映射。',
  'LBL_ERROR_UNABLE_TO_UNPUBLISH' => '不能由另一个用户取消一个发布的映射. 你有一个同名的导入映射。',
  'LBL_EXAMPLE_FILE' => '下载导入文件模版',
  'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => '指派新的档案给除你之外的一个用户, 用默认值列选择一个不同用户.',
  'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => '指出一个用于字符的值建立档案如果字符外部资源的字符不含数据.',
  'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => '不能检索外部供给, 请待会再试.',
  'LBL_EXTERNAL_ERROR_NO_SOURCE' => '不能检索资源适配器, 请待会再试.',
  'LBL_EXTERNAL_FIELD' => '外部字段',
  'LBL_EXTERNAL_FIELD_TOOLTIP' => '这列显示的是含数据的外部资源的字符将被用来建立新的档案.',
  'LBL_EXTERNAL_MAP_HELP' => '下面的表格包含相映射的外部资源的字符和模块中的字符. 检查映射确保他们是你想要的, 按需作出修改. 确认映射所有所要求的字符(用星号标出).',
  'LBL_EXTERNAL_MAP_NOTE' => '所有Google联系组里的联系人将尝试被导入.',
  'LBL_EXTERNAL_MAP_NOTE_SUB' => '新建立的用户的用户名将默认是Google联系人中的全名. 用户名可以在用户档案建立后修改.',
  'LBL_EXTERNAL_MAP_SUB_HELP' => '点击 <b>现在导入</b> 开始导入. 档案只会被创建以含有姓的词目. 档案在数据以名字和/或邮件地址与现有档案相符确认为是重复的时候将不会被创建.',
  'LBL_EXTERNAL_SOURCE' => '外部运用程序或服务',
  'LBL_EXTERNAL_SOURCE_HELP' => '用此选项直接从外部程序或服务中导入数据,比如说 Gmail.',
  'LBL_EXTERNAL_TEAM_TOOLTIP' => '指派新的档案给除你默认组之外的组, 用默认值列选择一个不同组.',
  'LBL_EXT_SOURCE_SIGN_IN' => '登录',
  'LBL_FAIL' => '失败:',
  'LBL_FAILURE' => '导入失败:',
  'LBL_FIELD_DELIMETED_HELP' => '字段分隔符指定字符分割字符列.',
  'LBL_FIELD_NAME' => '字段名称',
  'LBL_FILE_ALREADY_BEEN_OR' => '导入的文件已经处理过或是不存在',
  'LBL_FILE_OPTIONS' => '文件选项',
  'LBL_FILE_UPLOAD_WIDGET_HELP' => '选定一个由分隔符分割的数据文件, 比如一个逗号- or 标记- 分割符文件.  推荐文件类型 .csv .',
  'LBL_FINISHED' => '回到',
  'LBL_GOOD_FILE' => '导入文件读取成功',
  'LBL_HAS_HEADER' => '有标题:',
  'LBL_HEADER_ROW' => '标题列',
  'LBL_HEADER_ROW_HELP' => '这是有字段名称的导入文件的第一行字段名称数据.',
  'LBL_HEADER_ROW_OPTION_HELP' => '选定如果导入文件最上行是含有字符段标示的标题行.',
  'LBL_HIDE_ADVANCED_OPTIONS' => '隐藏高级选项',
  'LBL_HIDE_NOTES' => '隐藏说明',
  'LBL_HIDE_PREVIEW_COLUMNS' => '隐藏预览列',
  'LBL_IDS_EXISTED_OR_LONGER' => '记录跳过，因为ID重复或是超过36个字符',
  'LBL_ID_EXISTS_ALREADY' => '编号已经存在于此表',
  'LBL_IMPORT_ACT_TITLE' => 'ACT! 系统可以导入<b>逗号分隔符</b>格式的数据. 要导出数据, 请按照以下步骤:',
  'LBL_IMPORT_BUTTON' => '创建记录',
  'LBL_IMPORT_COMPLETE' => '引进模板',
  'LBL_IMPORT_COMPLETED' => '导入完成',
  'LBL_IMPORT_CUSTOM_TITLE' => '大部分应用程序可以导出数据到一个<b>逗号分隔符的文件(.csv)</b>.大部分应用程序都是如此:',
  'LBL_IMPORT_ERROR' => '导入发生错误',
  'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => '导入文件包含 {0} 行. 最佳行数是 {1}. 行多会师导入过程缓慢.点击 好 继续导入. 点击 取消 来修改和重新上传需导入的文件.',
  'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => '用户名或编号',
  'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; 或者 &#39;1&#39;',
  'LBL_IMPORT_FIELDDEF_CURRENCY' => '数字 (允许十进制)',
  'LBL_IMPORT_FIELDDEF_DATE' => '日期',
  'LBL_IMPORT_FIELDDEF_DATETIME' => '时间日期',
  'LBL_IMPORT_FIELDDEF_DOUBLE' => '数字 (非十进制)',
  'LBL_IMPORT_FIELDDEF_EMAIL' => '电子邮件地址',
  'LBL_IMPORT_FIELDDEF_ENUM' => '列表',
  'LBL_IMPORT_FIELDDEF_FLOAT' => '数字 (允许十进制)',
  'LBL_IMPORT_FIELDDEF_ID' => '唯一编号',
  'LBL_IMPORT_FIELDDEF_INT' => '数字 (非十进制)',
  'LBL_IMPORT_FIELDDEF_NAME' => '任意文本',
  'LBL_IMPORT_FIELDDEF_NUM' => '数字 (非十进制)',
  'LBL_IMPORT_FIELDDEF_PHONE' => '电话号码',
  'LBL_IMPORT_FIELDDEF_RELATE' => '名字或编号',
  'LBL_IMPORT_FIELDDEF_TEAM_LIST' => '组名称或编号',
  'LBL_IMPORT_FIELDDEF_TEXT' => '任意文本',
  'LBL_IMPORT_FIELDDEF_TIME' => '时间',
  'LBL_IMPORT_FIELDDEF_VARCHAR' => '任意文本',
  'LBL_IMPORT_FILE_SETTINGS' => '导入文件设置',
  'LBL_IMPORT_FILE_SETTINGS_HELP' => '在导入文件中指定设置确保数据被正确导入.这些设置不会覆盖您的个人偏好.被创建或更新的记录会存有您我的帐号中的设置.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => '文件太大。最大值:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => '字节。可以在php.ini文件中修改变量upload_maxsize的值',
  'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => '文件未成功上传。在Sugar安装目录的缓存路径下，检查文件的读写属性。',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => '文件上传失败。很可能是php.ini文件中的变量upload_max_filesize的值设置太小。',
  'LBL_IMPORT_MODULE_MAP_ERROR' => '不能发布. 存在另一个同名的发布导入映射。',
  'LBL_IMPORT_MODULE_MAP_ERROR2' => '不能由另一个用户取消一个发布的映射。 你有一个同名的导入映射。',
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => '目录',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => '不存在或是无法写入',
  'LBL_IMPORT_MODULE_NO_TYPE' => '这个类型的模块没有导入设置',
  'LBL_IMPORT_MODULE_NO_USERS' => '警告: 你的系统里没有定义用户。如果导入前没有用户， 所有的记录默认在管理员名下。',
  'LBL_IMPORT_MORE' => '继续导入',
  'LBL_IMPORT_NOW' => '现在导入',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'MicrosoftOutlook98和2000可以将记录导出成<b>逗号分隔文件</b>，可以将它导入系统。要从Outlook导出记录，请参考下面步骤:',
  'LBL_IMPORT_RECORDS' => '导入记录',
  'LBL_IMPORT_RECORDS_OF' => '的',
  'LBL_IMPORT_RECORDS_TO' => '到',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com可以将记录导出成逗号分隔格式，您可以将这个格式的记录导入本系统。要将Salesforce.com的记录导出，请参考下面步骤:',
  'LBL_IMPORT_STARTED' => '开始导入:',
  'LBL_IMPORT_TAB_TITLE' => '大部分应用程序可以到处数据到一个<b>制表符分隔符的文件(.tsv或者.tab)</b>。大部分应用程序都是如此:',
  'LBL_IMPORT_TYPE' => '导入行为',
  'LBL_INDEX_NOT_USED' => '未使用的索引:',
  'LBL_INDEX_USED' => '已使用的索引:',
  'LBL_LAST_IMPORTED' => '上次导入',
  'LBL_LAST_IMPORT_UNDONE' => 'LBL_SUCCESSFULLY',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => '名字显示格式',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => '例如',
  'LBL_LOCALE_NAME_FORMAT_DESC' => '"s" 称呼, "f" 名, "l" 姓',
  'LBL_MICROSOFT_OUTLOOK' => '微软 Outlook',
  'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlook自定义映射取决于导入文件用逗号隔开(.csv). 如果你导入的文件时制表符隔开, 那映射将不能按所希望的应用.',
  'LBL_MIME_TYPE_ERROR_1' => '选择字符不出现不含分隔符清单. 请检查文件类型. 我们推荐以逗号分隔符的文件(.csv).',
  'LBL_MIME_TYPE_ERROR_2' => '处理导入选择的文件,点击 OK. 上传新文件，点击 Try Again',
  'LBL_MISSING_HEADER_ROW' => '没有发现标题行',
  'LBL_MODULE_NAME' => '导入',
  'LBL_MODULE_NAME_SINGULAR' => '导入',
  'LBL_MY_PUBLISHED_HELP' => '一个已发布的映射在导入文件中指定了一个过去使用的过的数据源到数据库的映射组合.',
  'LBL_MY_SAVED' => '我已保存的来源:',
  'LBL_MY_SAVED_ADMIN_HELP' => '使用该选项应用您预先设置的导入设置，包括导入属性，绘图，和其它重复的检查设置.<br><br>Click <b>Publish</b> 使绘图对于其他用户有效.<br>Click <b>Un-Publish</b> 使绘图对于其他用户无效.<br>Click <b>Delete</b> 为所有用户删除绘图.',
  'LBL_MY_SAVED_HELP' => '一个已保存的映射在导入文件中指定了一个过去使用的过的数据源到数据库的映射组合.<br/>单击发布使映射对其他用户可用.<br/>单击撤销发布是映射对其他用户不可用.',
  'LBL_NEXT' => '下一步 >',
  'LBL_NOLOCALE_NEEDED' => '无需本地转换',
  'LBL_NONE' => '无',
  'LBL_NOTES' => '备忘录:',
  'LBL_NOT_MULTIENUM' => '不是多选值',
  'LBL_NOT_SAME_NUMBER' => '您的文件中每行的字段数量不一致',
  'LBL_NOT_SET_UP' => '这个类型的模块没有导入设置',
  'LBL_NOT_SET_UP_FOR_IMPORTS' => '这个类型的模块没有导入设置',
  'LBL_NOW_CHOOSE' => '现在选择要导入的文件:',
  'LBL_NO_DATECHECK' => '跳过数据检查(快速非容错)',
  'LBL_NO_EMAILS' => '导入时不要发送邮件通知',
  'LBL_NO_EMAIL_DEFS_IN_MODULE' => '正在处理Bean中所有不支持的email地址。',
  'LBL_NO_ID' => '需要编号',
  'LBL_NO_IMPORT_TO_UNDO' => '沒有导入的记录可以还原。',
  'LBL_NO_LINES' => '您导入的文件沒有任何记录',
  'LBL_NO_PRECHECK' => '原格式模式',
  'LBL_NO_RECORD' => '没有这个编号的记录可以更新',
  'LBL_NO_WORKFLOW' => '导入时不要触发工作流',
  'LBL_NUMBER_GROUPING_SEP' => '千位分隔符',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_OK' => '好',
  'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => '双引号 (")',
  'LBL_OPTION_ENCLOSURE_NONE' => '无',
  'LBL_OPTION_ENCLOSURE_OTHER' => '其他:',
  'LBL_OPTION_ENCLOSURE_QUOTE' => '单引号 (&#39;)',
  'LBL_OUTLOOK_NUM_1' => '打开 <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => '选择<b>文件</b>选单，接着选择<b>导入与导出...</b>',
  'LBL_OUTLOOK_NUM_3' => '选择<b>导出成文件</b>后点击继续',
  'LBL_OUTLOOK_NUM_4' => '选择<b>逗号分隔文件(Windows)</b>后点击继续。<br>注意:系统也许会提示您安裝导出元件',
  'LBL_OUTLOOK_NUM_5' => '选择<b>联系人</b>文件夹后点击<b>下一步</b>，如果您将联系人信息保存在多个文件夹，您可以选择不同的项目',
  'LBL_OUTLOOK_NUM_6' => '选择文件名称后点击<b>下一步</b>',
  'LBL_OUTLOOK_NUM_7' => '点击<b>完成</b>',
  'LBL_PRE_CHECK_SKIPPED' => '跳过预检查',
  'LBL_PUBLISH' => '公布',
  'LBL_PUBLISHED_SOURCES' => '公布的来源:',
  'LBL_RECORDS_SKIPPED' => '记录跳过，因为缺少必填字段',
  'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => '由于错误跳过记录。',
  'LBL_RECORD_CANNOT_BE_UPDATED' => '由于权限问题，此记录不能被更新',
  'LBL_RELATED_ACCOUNTS' => '不要创建关联帐号',
  'LBL_REMOVE_ROW' => '移除字段',
  'LBL_REQUIRED_NOTE' => '必须的字段:',
  'LBL_REQUIRED_VALUE' => '丢失必须的值',
  'LBL_RESULTS' => '结果',
  'LBL_ROW' => '列',
  'LBL_ROW_HELP' => '这是没有字段名称的导入文件的第一行数据.',
  'LBL_ROW_NUMBER' => '行号',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_SAMPLE_URL_HELP' => '下载一个包含模块字符的标题行导入文件样本. 这个文件可以被用来创建作为你想要导入的含数据的导入文件的样本.',
  'LBL_SAVE_AS_CUSTOM' => '保存成自订义对应表:',
  'LBL_SAVE_AS_CUSTOM_NAME' => '自定义映射名称:',
  'LBL_SAVE_MAPPING_AS' => '保存映射为',
  'LBL_SAVE_MAPPING_HELP' => '为以上导入文件的数据库字段映射输入一个名字.<br/>这些字段包括字段顺序和在导入第一步中选择的数据源.<br/>保存的映射可以在下次导入第一步时被使用.',
  'LBL_SELECT_DS_INSTRUCTION' => '准备开始导入? 选择你想导入的数据来源.',
  'LBL_SELECT_DUPLICATE_INSTRUCTION' => '为了防止重复档案, 当数据被导入的时候，选择你想要用来执行重复检查的映射字段. 现有档案里的值在选定的字符里将用来核实导入文件夹里的数据. 如果匹配的数据找到,导入文件里含有数据的行将会与导入结果一起显示(下一页). 你将能选择哪些行继续导入.',
  'LBL_SELECT_FIELDS_TO_MAP' => '在下面的列表中，选择导入文件中包含的字段，完成后点击<b>现在导入</b>:',
  'LBL_SELECT_FILE' => '选择文件:',
  'LBL_SELECT_MAPPING_INSTRUCTION' => '下面的表格包含模块中所有的能和导入文件中的数据映射的字符. 如果文件含有标题行, 文件中的列和字符映射匹配. 检查映射确认他们是你想要的, 按需要进行修改. 为了帮助你检查映射,第 1 行显示了文件中的数据. 确认与所有需要的字符映射 (用星号标出).',
  'LBL_SELECT_PROPERTY_INSTRUCTION' => '这里是导入文件首要几行如何与检测到的文件属性一起出现. 如果标题行被检测, 将会被显示在表格最上面一行. 查看导入文件属性对检测到的属性做更改和设立额外的属性. 更新设置将更新表格里的数据.',
  'LBL_SELECT_UPLOAD_INSTRUCTION' => '选择你电脑上的你想要导入的含有数据的文件, 或下载模板提前开始创建导入文件.',
  'LBL_SF_NUM_1' => '启动浏览器，连接到http://www.salesforce.com，然后使用您注册的电子邮件地址与密码登录',
  'LBL_SF_NUM_10' => '<b>导出报告:</b>，<b>导出文件格式:</b>，选择<b>逗号分隔符的文件.csv</b>。点击<b>导出</b>。',
  'LBL_SF_NUM_11' => '一个对话框将出现，要求您保存导出的文件到电脑。',
  'LBL_SF_NUM_2' => '点击主菜单的<b>报告</b>标签',
  'LBL_SF_NUM_3' => '<b>导出客户:</b>点击连接<b>启用客户</b><br><b>导出联系人:</b>点击连接<b>邮件列表</b>',
  'LBL_SF_NUM_4' => '<b>步骤1:选择报告类型</b>，选择<b>表格式报表</b>点击<b>下一步</b>',
  'LBL_SF_NUM_5' => '<b>步骤2:选择报表项</b>，选择您想导出的报表项，点击<b>下一步</b>',
  'LBL_SF_NUM_6' => '<b>步骤3:选择信息总结</b>，点击<b>下一步</b>',
  'LBL_SF_NUM_7' => '<b>步骤4:排列报告列</b>，点击<b>下一步</b>',
  'LBL_SF_NUM_8' => '<b>步骤5:选择报表标准</b>，在<b>开始数据下</b>，选择一个数据足够导入您的客户，您也可以使用高级标准导出子客户。当您完成时，点击<b>运行报表</b>',
  'LBL_SF_NUM_9' => '报告将会产生，页面将显示<b>报表生成状态:完成。</b>现在点击<b>导出到Excel</b>',
  'LBL_SHOW_ADVANCED_OPTIONS' => '显示高级选项',
  'LBL_SHOW_HIDDEN' => '显示非正常导入字段',
  'LBL_SHOW_NOTES' => '查看说明',
  'LBL_SHOW_PREVIEW_COLUMNS' => '显示预览列',
  'LBL_SIGN_IN_HELP' => '为了能试用此服务, 请登入有你的用户设置页面的外部账户选项.',
  'LBL_START_OVER' => '重新开始',
  'LBL_STEP_1_TITLE' => '第一步:选择来源',
  'LBL_STEP_2_TITLE' => '第二步:上传导出的文件',
  'LBL_STEP_3_TITLE' => '第三步:确认字段与导入',
  'LBL_STEP_4_TITLE' => 'Step 4: 导入文件',
  'LBL_STEP_5_TITLE' => 'Step 5: 查看结果',
  'LBL_STEP_DUP_TITLE' => 'Step {0}: 检查有可能的重复',
  'LBL_STEP_MODULE' => '你想把数据导入哪个模块?',
  'LBL_STRICT_CHECKS' => '使用严格规则(同时检查邮件地址和电话)',
  'LBL_SUCCESS' => '成功:',
  'LBL_SUCCESSFULLY' => '导入成功',
  'LBL_SUCCESSFULLY_IMPORTED' => '记录创建成功',
  'LBL_SUMMARY' => '总结',
  'LBL_TAB' => '制表符分隔符文件',
  'LBL_TAB_NUM_1' => '运行应用程序，打开数据文件',
  'LBL_TAB_NUM_2' => '选择<b>保存为...</b>或者<b>导出...</b>菜单选项',
  'LBL_TAB_NUM_3' => 'S保存文件到<b>TSV</b>或者<b>制表符分隔符</b>格式',
  'LBL_TEST' => '测试导入(不要保存或更改)',
  'LBL_THIRD_PARTY_CSV_SOURCES' => '如果导入文件数据时从以下资源中导出，选择哪一个.',
  'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => '选择自动应用自定义映射的资源以便简化映射过程 (下一步).',
  'LBL_TIMEZONE' => '时区:',
  'LBL_TIME_FORMAT' => '时间格式:',
  'LBL_TRUNCATE_TABLE' => '导入前清空表(删除所有记录)',
  'LBL_TRY_AGAIN' => '重试',
  'LBL_UNDO_LAST_IMPORT' => '恢复上次导入',
  'LBL_UNIQUE_INDEX' => '选择索引进行重复比较',
  'LBL_UNPUBLISH' => '不公布',
  'LBL_UPDATE_BUTTON' => '创建和更新记录',
  'LBL_UPDATE_BUTTON_HELP' => '用此选项更新现有档案。导入文件里的数据将会在ID档案基础上与现有记录相符',
  'LBL_UPDATE_RECORDS' => '更新已存在记录而不是导入他们(不能逆操作)',
  'LBL_UPDATE_SUCCESSFULLY' => '记录更新成功',
  'LBL_VALUE' => '值',
  'LBL_VERIFY_DUPLCATES_HELP' => '为重复记录检查指定需要的字段.如果选择的字段已存在,新纪录不会被创建.重复记录会在导入结果中显示。',
  'LBL_VERIFY_DUPS' => '验证重复记录。',
  'LBL_WHAT_IS' => '来源是什么?',
  'LNK_DUPLICATE_LIST' => '下载重复记录列表',
  'LNK_ERROR_LIST' => '下载错误列表',
  'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => '下载不能导入的记录',
);

