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
    'LBL_GOOD_FILE' => 'インポートファイルの読み込みに成功しました',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'インポートされたレコードはプロセスに参加中で、一部のフィールドが編集中のためプロセスによりロックされているので編集できません。',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'エラーが発生したためいくつかの行がインポートされませんでした',
    'LBL_UPDATE_SUCCESSFULLY' => 'レコードの更新に成功しました',
    'LBL_SUCCESSFULLY_IMPORTED' => 'レコードが作成されました',
    'LBL_STEP_4_TITLE' => 'ステップ {0}: ファイルのインポート',
    'LBL_STEP_5_TITLE' => 'ステップ {0}: インポート結果の表示',
    'LBL_CUSTOM_ENCLOSURE' => 'フィールドの囲み文字:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => '公開できません。同じ名前で公開された別のインポートマップがあります。',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => '別のユーザが所有するマップの公開を取り消すことはできません。同じ名前のインポートマップを所有してください。',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'このモジュールではインポートが利用できません',
    'LBL_IMPORT_TYPE' => 'インポートアクション',
    'LBL_IMPORT_BUTTON' => 'レコード作成',
    'LBL_UPDATE_BUTTON' => 'レコード作成＆更新',
    'LBL_CREATE_BUTTON_HELP' => '新規でレコードを作成するにはこのオプションを使用してください。注: マッピング対象にIDを指定した場合、既存のIDと同じ値が含まれているインポートファイルの行はインポートされません。',
    'LBL_UPDATE_BUTTON_HELP' => '既存のレコードを更新するにはこのオプションを使用してください。インポートファイルのデータはレコードのIDに基づいて既存のレコードを更新します。',
    'LBL_NO_ID' => 'IDは必須です',
    'LBL_PRE_CHECK_SKIPPED' => '先行チェックがスキップされました',
    'LBL_NOLOCALE_NEEDED' => 'ロケールの変換は必要ありません',
    'LBL_FIELD_NAME' => 'フィールド名',
    'LBL_VALUE' => '値',
    'LBL_ROW_NUMBER' => '行番号',
    'LBL_NONE' => 'なし',
    'LBL_REQUIRED_VALUE' => '必須な値が欠けています',
    'LBL_ERROR_SYNC_USERS' => '不正な値のためOutlookに同期できません:',
    'LBL_ID_EXISTS_ALREADY' => 'テーブルにIDがすでに存在しています',
    'LBL_ASSIGNED_USER' => 'もしユーザが存在しなければ現在のユーザが利用されます',
    'LBL_SHOW_HIDDEN' => '通常ではインポートできないフィールドの表示',
    'LBL_UPDATE_RECORDS' => 'インポートする代わりに既存のレコードを更新する (Undoできません)',
    'LBL_TEST'=> 'テストインポート (保存および日付の変更は行われません)',
    'LBL_TRUNCATE_TABLE' => 'インポート前にテーブルを空にする (すべてのレコードの削除)',
    'LBL_RELATED_ACCOUNTS' => '関連する取引先を作成しない',
    'LBL_NO_DATECHECK' => 'データチェックをスキップする(処理は早くなりますが、不正なデータが含まれていた場合処理に失敗します)',
    'LBL_NO_WORKFLOW' => 'インポート中はワークフローを実行しないでください',
    'LBL_NO_EMAILS' => 'インポート中はEメールによる通知全般を実行しないでくだい',
    'LBL_NO_PRECHECK' => 'ネィティブフォーマットモード',
    'LBL_STRICT_CHECKS' => '厳密なルールセットの利用 (Eメールアドレスと電話番号のチェックも含む)',
    'LBL_ERROR_SELECTING_RECORD' => 'エラー レコードの選択:',
    'LBL_ERROR_DELETING_RECORD' => 'エラー レコードの削除:',
    'LBL_NOT_SET_UP' => 'インポートはこのモジュールタイプでは構成されていません',
    'LBL_ARE_YOU_SURE' => '本当に行いますか？このモジュールのすべてのデータを消去します。',
    'LBL_NO_RECORD' => 'このIDによって更新されるレコードがありません',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'インポートはこのモジュールタイプでは構成されていません',
    'LBL_DEBUG_MODE' => 'デバッグモードを有効にする',
    'LBL_ERROR_INVALID_ID' => '与えられたIDはこのフィールドには長すぎます (最大36文字)',
    'LBL_ERROR_INVALID_PHONE' => '不正な電話番号',
    'LBL_ERROR_INVALID_NAME' => '文字列はこのフィールドには長すぎます',
    'LBL_ERROR_INVALID_VARCHAR' => '文字列はこのフィールドには長すぎます',
    'LBL_ERROR_INVALID_DATETIME' => '不正な日時',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => '不正な日時',
    'LBL_ERROR_INVALID_INT' => '無効なinteger値',
    'LBL_ERROR_INVALID_NUM' => '無効なnumeric値',
    'LBL_ERROR_INVALID_TIME' => '無効なtime値',
    'LBL_ERROR_INVALID_EMAIL'=>'無効なEメールアドレス',
    'LBL_ERROR_INVALID_BOOL'=>'無効な値 (値には 1 か 0 のみが有効です)',
    'LBL_ERROR_INVALID_DATE'=>'不正な日付文字列',
    'LBL_ERROR_INVALID_USER'=>'無効なユーザ名/ID',
    'LBL_ERROR_INVALID_TEAM' => '無効なチーム名/ID',
    'LBL_ERROR_INVALID_ACCOUNT' => '不正な取引先名/ID',
    'LBL_ERROR_INVALID_RELATE' => '無効な関連フィールド',
    'LBL_ERROR_INVALID_CURRENCY' => '無効な通貨の値',
    'LBL_ERROR_INVALID_FLOAT' => '不正な浮動小数点値',
    'LBL_ERROR_NOT_IN_ENUM' => '値がドロップダウンリストに存在しません。 有効な値は:',
    'LBL_ERROR_ENUM_EMPTY' => 'ドロップダウンリストに値がありません。ドロップダウンリストが空です。',
    'LBL_NOT_MULTIENUM' => '複数選択可能な列挙型ではありません',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'このモジュールではインポートが利用できません',
    'LBL_IMPORT_MODULE_NO_USERS' => '警告:システムにユーザが１人も定義されていません。先にユーザを追加せずにインポートすると、すべてのレコードは管理者の所有になります。',
    'LBL_IMPORT_MODULE_MAP_ERROR' => '公開できません。同じ名前のインポートマップが既に存在します。',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => '別のユーザが所有するマップの公開の取り消しはできません。同じ名前でインポートマップを所有してください。',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'ディレクトリ「',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => '」が存在しないか書き込み権限がありません。',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'ファイルが正常にアップロードされませんでした。php.iniのupload_max_filesizeで、アップロードファイルサイズの設定が小さすぎる可能性があります。',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'ファイルが大きすぎます。最大:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'バイト数です。config.php の$sugar_config[&#39;upload_maxsize&#39;] 設定を変更してください。',
    'LBL_MODULE_NAME' => 'インポート',
    'LBL_MODULE_NAME_SINGULAR' => 'インポート',
    'LBL_TRY_AGAIN' => '再度試す',
    'LBL_START_OVER' => 'やりなおす',
    'LBL_ERROR' => 'エラー:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'インポートファイルには{0}行が含まれています。最適な行数は{1}行です。より多くの行をインポートする場合、実行に時間がかかる場合があります。インポートを実行するにはOKをクリックしてください。インポートファイルを修正してファイルを再アップロードする場合はキャンセルをクリックしてください。',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'システム管理者ユーザはインポートできません。',
    'ERR_REPORT_LOOP' => 'システムは報告ルートがループしていることを検出しました。ユーザは自身を上司にすることはできません。また、上司がユーザを報告先にすることもできません。',
    'ERR_MULTIPLE' => '複数行が同じフィールド名で定義されています。',
    'ERR_MISSING_REQUIRED_FIELDS' => '必要なフィールドが存在しません:',
    'ERR_MISSING_MAP_NAME' => 'カスタムマッピング名が存在しません',
    'ERR_SELECT_FULL_NAME' => '姓と名が選択されている場合はフルネームを選択できません。',
    'ERR_SELECT_FILE' => 'アップロードするファイルの選択',
    'LBL_SELECT_FILE' => 'ファイル選択:',
    'LBL_CUSTOM' => 'カスタム',
    'LBL_CUSTOM_CSV' => 'CSVテキスト',
    'LBL_CSV' => 'CSVファイル',
    'LBL_EXTERNAL_SOURCE' => '外部のアプリケーションまたはサービス',
    'LBL_TAB' => 'タブ区切りファイル',
    'LBL_CUSTOM_DELIMITED' => 'カスタム区切り文字',
    'LBL_CUSTOM_DELIMITER' => 'フィールドの区切り文字:',
    'LBL_FILE_OPTIONS' => 'ファイルオプション',
    'LBL_CUSTOM_TAB' => 'タブ区切りテキスト',
    'LBL_DONT_MAP' => '-- このフィールドはマップしない --',
    'LBL_STEP_MODULE' => 'どのモジュールにデータをインポートしますか？',
    'LBL_STEP_1_TITLE' => 'ステップ 1: ソースの選択',
    'LBL_CONFIRM_TITLE' => 'ステップ {0}: インポートファイルプロパティの確認',
    'LBL_CONFIRM_EXT_TITLE' => 'ステップ {0}: 外部ソースプロパティの確認',
    'LBL_WHAT_IS' => 'データソースは何ですか？',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlook用のカスタムマッピングはCSVファイル（.csv）により行なうことができます。インポートファイルがタブ区切りの場合、意図したようにマッピングされません。',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => '保存済みソース:',
    'LBL_PUBLISH' => '公開',
    'LBL_DELETE' => '削除',
    'LBL_PUBLISHED_SOURCES' => '公開済みソース:',
    'LBL_UNPUBLISH' => '非公開',
    'LBL_NEXT' => '次へ >',
    'LBL_BACK' => '< 戻る',
    'LBL_STEP_2_TITLE' => 'ステップ {0}: インポートファイルのアップロード',
    'LBL_HAS_HEADER' => 'ヘッダあり:',
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
    'LBL_NOTES' => '備考:',
    'LBL_NOW_CHOOSE' => 'インポートするファイルを選択してください:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98、2000 はSugar Suiteにインポート可能な<b>CSVテキストファイル</b>（CSVファイル）をエクスポートできます。<br>Outlookからデータをエクスポートするには、以下の手順に従ってください。',
    'LBL_OUTLOOK_NUM_1' => '<b>Outlook</b>を起動してください。',
    'LBL_OUTLOOK_NUM_2' => '<b>ファイル</b>メニューから<b>インポートとエクスポート</b>を選択してください。',
    'LBL_OUTLOOK_NUM_3' => '<b>ファイルへエクスポート</b>を選択し、<b>次へ</b>をクリックしてください。',
    'LBL_OUTLOOK_NUM_4' => '<b>テキストファイル（Windows、CSV）</b>を選択し、<b>次へ</b>をクリックしてください。<br>  注: エクスポートコンポーネントをインストールするようメッセージが表示される場合があります。',
    'LBL_OUTLOOK_NUM_5' => '<b>連絡先</b>フォルダを選択し、<b>次へ</b>をクリックしてください。複数の連絡先フォルダを設定している場合は、エクスポートしたいフォルダを選択してください。',
    'LBL_OUTLOOK_NUM_6' => 'ファイル名を選択し、<b>次へ</b>をクリックしてください。',
    'LBL_OUTLOOK_NUM_7' => '<b>完了</b>をクリックしてください。',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com はSugar Suiteにインポート可能な<b>CSVテキストファイル</b>（CSVファイル）をエクスポートできます。<br>Salesforce.comからデータをエクスポートするには、以下の手順に従ってください。',
    'LBL_SF_NUM_1' => 'ブラウザを起動してhttp://www.salesforce.comにアクセスし、Eメールアドレスとパスワードでログインしてください。',
    'LBL_SF_NUM_2' => 'トップメニューから<b>レポート</b>タブをクリックしてください。',
    'LBL_SF_NUM_3' => '<b>取引先をエクスポートするには:</b><br><b>取引先</b>をクリックしてください。<br><b>取引先担当者をエクスポートするには:</b><br><b>取引先責任者</b>をクリックしてください。',
    'LBL_SF_NUM_4' => '<b>ステップ 1: レポート種類の選択</b><br><b>レポート種類の選択</b>、<b>表形式レポート</b>を選択し、<b>次へ</b>をクリックしてください。',
    'LBL_SF_NUM_5' => '<b>ステップ 2: 項目の選択</b><br>エクスポートしたい項目を選択し、<b>次へ</b>をクリックしてください。',
    'LBL_SF_NUM_6' => '<b>ステップ 3: 統計項目の選択</b><br>何もせずに<b>次へ</b>をクリックしてください。',
    'LBL_SF_NUM_7' => '<b>ステップ 4: 項目の並び替え</b><br>何もせずに<b>次へ</b>をクリックしてください。',
    'LBL_SF_NUM_8' => '<b>ステップ 5: 条件の選択</b><br><b>開始日</b>から、取引先すべてが含まれるような開始日を選択してください。ここではさらに詳細な設定をすることもできます。 設定がよければ<b>レポート実行</b>をクリックしてください。',
    'LBL_SF_NUM_9' => 'レポートが生成され、<b>レポート生成ステータス: 完了</b>と表示されます。 次に<b>Excelにエクスポート</b>をクリックしてください。',
    'LBL_SF_NUM_10' => '<b>レポートのエクスポートでファイル形式を選択するには:</b><br><b>CSVフォーマット（csv）</b>. を選択し、<b>エクスポート</b>をクリックしてください。',
    'LBL_SF_NUM_11' => '保存ダイアログが表示されますので、エクスポートファイルを保存します。',
    'LBL_IMPORT_ACT_TITLE' => '実行! は<b>CSV</b>フォーマットでデータをエクスポートでき、このシステムにインポートすることができます。実行! からデータをエクスポートするには、以下のステップを実行してください。',
    'LBL_ACT_NUM_1' => '<b>ACT!</b>を起動してください',
    'LBL_ACT_NUM_2' => '<b>ファイル</b>メニュー、<b>データ変換</b>メニューオプション、<b>エクスポート...</b>メニューオプションを選択してください',
    'LBL_ACT_NUM_3' => 'ファイルタイプとして<b>テキスト区切り</b>してください',
    'LBL_ACT_NUM_4' => 'でーたをエクスポートするファイル名と場所を選択し、<b>次へ</b>をクリックしてください',
    'LBL_ACT_NUM_5' => '<b>取引先担当者のレコードのみ</b>を選択してください',
    'LBL_ACT_NUM_6' => '<b>オプション...</b>ボタンをクリックしてください',
    'LBL_ACT_NUM_7' => 'フィールドを区切る文字として<b>カンマ</b>を選択してください',
    'LBL_ACT_NUM_8' => '<b>フィールド名をエクスポートする</b>チェックボックスをチェックして、<b>OK</b>をクリックする',
    'LBL_ACT_NUM_9' => '<b>次へ</b>をクリックしてください',
    'LBL_ACT_NUM_10' => '<b>すべてのレコード</b>を選択し、<b>終了</b>をクリックしてください',
    'LBL_IMPORT_CUSTOM_TITLE' => 'アプリケーションの多くは、データを<b>CSVテキストファイル(CSV形式 .csv)</b>でエクスポートすることができます。<br>通常は以下のような手順でエクスポートします。',
    'LBL_CUSTOM_NUM_1' => 'アプリケーションを起動しエクスポートしたいファイルを開きます。',
    'LBL_CUSTOM_NUM_2' => '<b>名前を付けて保存する</b>や<b>エクスポート</b>といったメニューを選択します。',
    'LBL_CUSTOM_NUM_3' => 'ファイルを<b>CSV</b>もしくは<b>CSV</b>形式で保存します。',
    'LBL_IMPORT_TAB_TITLE' => 'アプリケーションの多くは、データを<b>タブ区切りテキストファイル(.tsv や .tab)</b>でエクスポートすることができます。<br>通常は以下のような手順でエクスポートします。',
    'LBL_TAB_NUM_1' => 'アプリケーションを起動しエクスポートしたいファイルを開きます。',
    'LBL_TAB_NUM_2' => '<b>名前を付けて保存する</b>や<b>エクスポート</b>といったメニューを選択します。',
    'LBL_TAB_NUM_3' => 'ファイルを<b>TSV</b>もしくは<b>タブ区切り</b>形式で保存します。',
    'LBL_STEP_3_TITLE' => 'ステップ {0}: マッピングの確認',
    'LBL_STEP_DUP_TITLE' => 'ステップ {0}: 重複の確認',
    'LBL_SELECT_FIELDS_TO_MAP' => '以下のリストからインポートしたいフィールドを選択し、<b>インポート</b>をクリックしてください。:',
    'LBL_DATABASE_FIELD' => 'データベース項目',
    'LBL_HEADER_ROW' => 'ヘッダ行',
    'LBL_HEADER_ROW_OPTION_HELP' => 'インポートの１行目がフィールドラベルを含むヘッダ行の場合に選択してください。',
    'LBL_ROW' => '行',
    'LBL_SAVE_AS_CUSTOM' => 'カスタムマッピング保存:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'カスタムマッピング名:',
    'LBL_CONTACTS_NOTE_1' => '姓もしくはフルネームをマップする必要があります。',
    'LBL_CONTACTS_NOTE_2' => 'フルネームをマップした場合、姓と名のデータは無視されます。',
    'LBL_CONTACTS_NOTE_3' => 'フルネームをマップした場合、フルネームの姓と名は分けてデータベースに格納されます。',
    'LBL_CONTACTS_NOTE_4' => '住所２と３のデータは住所データに連結された状態でデータベースに格納されます。',
    'LBL_ACCOUNTS_NOTE_1' => '取引先をマップする必要があります。',
    'LBL_REQUIRED_NOTE' => '必須フィールド:',
    'LBL_IMPORT_NOW' => 'インポート',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'インポートされたファイルを開けません',
    'LBL_NOT_SAME_NUMBER' => '項目の数が合いません',
    'LBL_NO_LINES' => 'インポートファイルにデータがありません',
    'LBL_FILE_ALREADY_BEEN_OR' => 'インポートファイルはすでにインポートされているか、存在しません',
    'LBL_SUCCESS' => '成功:',
	'LBL_FAILURE' => 'インポート失敗:',
    'LBL_SUCCESSFULLY' => 'インポートが完了しました。',
    'LBL_LAST_IMPORT_UNDONE' => '最後のインポートは実施されませんでした',
    'LBL_NO_IMPORT_TO_UNDO' => '元に戻すインポートはありません',
    'LBL_FAIL' => '失敗:',
    'LBL_RECORDS_SKIPPED' => '１つ以上のフィールドが存在しないためレコードがスキップされました。',
    'LBL_IDS_EXISTED_OR_LONGER' => 'IDが既に存在するか、36桁より長いため、レコードはスキップされました。',
    'LBL_RESULTS' => '結果',
    'LBL_CREATED_TAB' => '作成済みレコード',
    'LBL_DUPLICATE_TAB' => '重複',
    'LBL_ERROR_TAB' => 'エラー',
    'LBL_IMPORT_MORE' => 'さらにインポート',
    'LBL_FINISHED' => 'へ戻る',
    'LBL_UNDO_LAST_IMPORT' => '最後のインポートを元に戻す',
    'LBL_LAST_IMPORTED'=>'インポートされた',
    'ERR_MULTIPLE_PARENTS' => '親IDは規定のID１つしか設定できません',
    'LBL_DUPLICATES' => '重複が見つかりました。',
    'LNK_DUPLICATE_LIST' => '重複リストのダウンロード',
    'LNK_ERROR_LIST' => 'エラーリストのダウンロード',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'ここをクリックし、インポートできなかったレコードをダウンロードします',
    'LBL_UNIQUE_INDEX' => '重複を比較するインデックスを選択してください。',
    'LBL_VERIFY_DUPS' => '選択したフィールドについて重複の有無をチェック',
    'LBL_INDEX_USED' => '選択フィールド',
    'LBL_INDEX_NOT_USED' => '未選択フィールド',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'ファイルのアップロードに失敗しました。インストールしたSugarのcacheディレクトリの権限を確認してください。',
    'LBL_IMPORT_FIELDDEF_ID' => '一意なID番号',
    'LBL_IMPORT_FIELDDEF_RELATE' => '名前かID',
    'LBL_IMPORT_FIELDDEF_PHONE' => '電話番号',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'チーム名/ID',
    'LBL_IMPORT_FIELDDEF_NAME' => '任意の文字列',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => '任意の文字列',
    'LBL_IMPORT_FIELDDEF_TEXT' => '任意の文字列',
    'LBL_IMPORT_FIELDDEF_TIME' => '時間',
    'LBL_IMPORT_FIELDDEF_DATE' => '日付',
    'LBL_IMPORT_FIELDDEF_DATETIME' => '日時',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'ユーザ名/ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&amp;amp;#39;0&amp;amp;#39; または &amp;amp;#39;1&amp;amp;#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'リスト',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'Eメールアドレス',
    'LBL_IMPORT_FIELDDEF_INT' => '数値 (整数)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => '数値 (整数)',
    'LBL_IMPORT_FIELDDEF_NUM' => '数値 (整数)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => '数値 (小数も可)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => '数値 (小数も可)',
    'LBL_DATE_FORMAT' => '日付フォーマット:',
    'LBL_TIME_FORMAT' => '時間フォーマット:',
    'LBL_TIMEZONE' => 'タイムゾーン:',
    'LBL_ADD_ROW' => 'フィールドの追加',
    'LBL_REMOVE_ROW' => 'フィールドの削除',
    'LBL_DEFAULT_VALUE' => 'デフォルト値',
    'LBL_SHOW_ADVANCED_OPTIONS' => '詳細オプションを表示',
    'LBL_HIDE_ADVANCED_OPTIONS' => '詳細オプションを隠す',
    'LBL_SHOW_NOTES' => 'メモを表示',
    'LBL_HIDE_NOTES' => 'メモを非表示',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'プレビュー列の表示',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'プレビュー列の非表示',
    'LBL_SAVE_MAPPING_AS' => '以下にマッピングを保存',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'シングルクォート(&amp;amp;#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'ダブルクォート(")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'なし',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'その他:',
    'LBL_IMPORT_COMPLETE' => 'インポート完了',
    'LBL_IMPORT_COMPLETED' => 'インポート完了',
    'LBL_IMPORT_ERROR' => 'インポートエラーが発生しました',
    'LBL_IMPORT_RECORDS' => 'インポート中...',
    'LBL_IMPORT_RECORDS_OF' => '/',
    'LBL_IMPORT_RECORDS_TO' => '-',
    'LBL_CURRENCY' => '通貨',
    'LBL_SYSTEM_SIG_DIGITS' => 'システムの重要な数字',
    'LBL_NUMBER_GROUPING_SEP' => '千単位の桁区切り:',
    'LBL_DECIMAL_SEP' => '小数点シンボル',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => '名前フォーマット',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => '例',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"l" 姓, "f" 名, "s" 敬称</i>',
    'LBL_CHARSET' => 'ファイルエンコーディング',
    'LBL_MY_SAVED_HELP' => '保存されたマッピングにより、以前利用した特定のデータソースとデータベースフィールドとインポートファイルのフィールドのセットを特定します。<br><b>公開</b>をクリックするとこのマッピングを他のユーザからも利用できるようになります。<br><b>公開取り消し</b>をクリックするとこのマッピングが他のユーザから利用できなくなります。',
    'LBL_MY_SAVED_ADMIN_HELP' => 'インポートプロパティ、マッピング、重複チェックを含むプリセットのインポート設定をこのインポートに適用する場合はこのオプションを使用してください。<br><br>他のユーザがこのマッピングを利用できるようにするには<b>公開</b>をクリックしてください。<br>他のユーザがこのマッピングを利用できないようにするには<b>非公開</b> をクリックしてください。<br>全てのユーザからマッピングを削除するには<b>削除</b>をクリックしてください。',
    'LBL_MY_PUBLISHED_HELP' => '公開されたマッピングにより、以前利用した特定のデータソースとデータベースフィールドとインポートファイルのフィールドのセットを特定します。',
    'LBL_ENCLOSURE_HELP' => '<p><b>フィールドを囲う文字</b>はフィールドの中身を囲うために利用されます。このフィールドを囲う文字の間であれば、区切り文字として利用される文字を含めることもできます。<br><br>例: 区切り文字がカンマ(,)でフィールドを囲う文字がクオーテーションマーク(")なら<br><b>"Cupertino, California"</b>は１つのフィールドとしてアプリケーションにインポートされ、<b>Cupertino, California</b>と表示されます。<br>もしフィールドを囲う文字がない場合やその他の文字なら、<br><b>"Cupertino, California"</b>は二つの隣接したフィールドとしてインポートされ、<b>"Cupertino</b>と<b>California"</b>になります。<br><br>メモ: インポートファイルには任意のフィールドを囲う文字が含まれます。<br>Excelで生成されるCSVおよびタブ区切りのファイルのデフォルトのフィールドを囲う文字列はクオーテーションマークです。</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'インポートするファイルのフィールドが<b>カンマ</b>で区切られていて、拡張子が.csvなら、このオプションを選択してください。',
    'LBL_DELIMITER_TAB_HELP' => 'インポートするファイルのフィールドが<b>タブ</b>で区切られていて、拡張子が.txtなら、このオプションを選択してください。',
    'LBL_DELIMITER_CUSTOM_HELP' => 'インポートするファイルのフィールドがカンマもしくはタブで区切られているなら、このオプションを選択し、隣接するフィールドを区切る文字を入力してください。',
    'LBL_DATABASE_FIELD_HELP' => 'このモジュールのデータベースに存在するすべてのフィールドのリストからフィールドを選択してください。',
    'LBL_HEADER_ROW_HELP' => 'インポートするファイルのヘッダ行にフィールドのタイトルがある。',
    'LBL_DEFAULT_VALUE_HELP' => 'インポートするファイルのフィールドに値が含まれない場合に作成もしくは更新されるレコードに格納される値を指定してください。',
    'LBL_ROW_HELP' => 'これがインポートするファイルのヘッダ行ではない行のデータです。',
    'LBL_SAVE_MAPPING_HELP' => 'インポートするファイルのフィールドとデータベースフィールドのマッピングのセットの名前を入力してください。<br>フィールドのセットには、フィールドの順番とインポートステップ1で選択されたデータソースも保存されます。<br>保存されたマッピングは別のインポート時のインポートステップ1で選択できます。',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'データが正しくインポートされるためにインポートファイルのセッティングを設定してください。<br>これらのセッティングはユーザ設定を上書きしません。<br>作成/更新時に利用されるセッティングは、My Accountページで設定されたセッティングを含みます。',
    'LBL_VERIFY_DUPLCATES_HELP' => '重複チェックで利用するインポートファイルのフィールドを選択してください。<br>既存のレコードのフィールドのデータと選択したフィールドのデータがマッチしたら、重複するフィールドのデータを含む行の新しいレコードは作成されません。<br>重複するフィールドのデータを含む行は、インポートの結果で分別されます。',
    'LBL_IMPORT_STARTED' => 'インポート開始:',
    'LBL_IMPORT_FILE_SETTINGS' => 'インポートファイルの設定',
    'LBL_RECORD_CANNOT_BE_UPDATED' => '権限が無いため、レコードを更新できません。',
    'LBL_DELETE_MAP_CONFIRMATION' => '本当にこのマッピングを削除してよいですか？',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'インポートファイルのデータが以下のソースからエクスポートされた場合は以下の中から選択してください。',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'マッピングプロセスを単純化するには自動的にカスタムマッピングを適用するソースを選択してください（次のステップ）。',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Gmailのような外部アプリケーションまたはサービスから直接データをインポートするにはこのオプションを使用してください。',
    'LBL_EXAMPLE_FILE' => 'インポートファイルテンプレートをダウンロード',
    'LBL_CONFIRM_IMPORT' => 'インポート時にレコードを更新することを選択しました。既存レコードの更新は元に戻せません。新規で作成されたレコードについてはインポートしない（削除する）ことが可能です。新規レコードの実行のみを実施したい場合はキャンセルをクリックし、続ける場合は次へをクリックしてください。',
    'LBL_CONFIRM_MAP_OVERRIDE' => '警告: 既にカスタムマッピングを選択済みです。続けてよいですか？',
    'LBL_EXTERNAL_FIELD' => '外部フィールド',
    'LBL_SAMPLE_URL_HELP' => 'モジュールのフィールドをヘッダに含むサンプルインポートファイルをダウンロードします。このファイルはインポートしたいデータを含むテンプレートとして使用することができます。',
    'LBL_AUTO_DETECT_ERROR' => 'フィールドの区切り文字と囲み文字が検出できません。インポートファイルプロパティの設定を確認してください。',
    'LBL_MIME_TYPE_ERROR_1' => '選択されたファイルには区切り文字がないようです。ファイルタイプを確認してください。推奨はCSVファイル（.csv）です。',
    'LBL_MIME_TYPE_ERROR_2' => '選択したファイルでインポートを実行するにはOKをクリックしてください。新しいファイルをアップロードするには再度試すをクリックしてください。',
    'LBL_FIELD_DELIMETED_HELP' => 'フィールドの区切り文字はフィールドの列を区切るために使用される文字のことです。',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'CSVやタブ区切りなどの区切り文字で区切られたデータが含まれているファイルを選択してください。推奨はCSVファイル（.csv）です。',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'ソースアダプタが見つかりません。後で再度実施してみてください。',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => '外部フィードが見つかりません。後で再度実施してみてください。',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'インポート用のキャッシュディレクトリが書き込み不可です。',
    'LBL_ADD_FIELD_HELP' => '作成/更新されるすべてのレコードのフィールドに値を追加するにはこのオプションを使用してください。フィールドを選択し、そのフィールドに設定する値を入力するかデフォルト値カラムから値を選択してください。',
    'LBL_MISSING_HEADER_ROW' => 'ヘッダ行が見つかりません。',
    'LBL_CANCEL' => 'キャンセル',
    'LBL_SELECT_DS_INSTRUCTION' => 'インポートの準備ができましたか？インポートしたいデータソースを選択してください。',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'インポートしたいデータが含まれたファイルをローカルPCから選択するか、インポートファイルを作成するためにテンプレートをダウンロードしてください。',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'ここでは、検出されたファイルプロパティでインポートファイルの最初の数行を表示しています。ヘッダ行が検出された場合、テーブルの一番上に表示されます。検出されたプロパティを変更して追加のプロパティを設定するには、インポートファイルのプロパティを確認してください。設定を更新するとテーブルのデータ表示も更新されます。',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'モジュールでインポートファイルとマッピングすることが可能なすべてのフィールドが以下のテーブルに含まれています。ファイルにヘッダ行が含まれる場合、ファイルの列はマッチするフィールドにマッピングされます。マッピングが正しいかどうかを確認し、必要な場合は変更してください。マッピングを確認するためにファイルの１行目が表示されます。必須フィールド（アスタリスクで表示）がすべてマッピングされているかを確認してください。',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => '重複レコードの作成を防ぐには、マッピングされたフィールドからデータのインポート中に重複チェックを実施したいフィールドを選択してください。選択されたフィールドの既存値は、インポートファイルの値と照らし合わせてチェックされます。マッチする値が見つかった場合、インポート結果とともにデータが含まれるインポートの行が次のページで表示されるので、インポートを実施したい行を選択することができます。',
    'LBL_EXT_SOURCE_SIGN_IN' => 'サインイン',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'サインアウト',
    'LBL_DUP_HELP' => 'これらは重複チェックの結果既存レコードに値がマッチしたためにインポートされなかった行です。マッチしたデータはハイライトされています。これらの行をインポートするには、リストをダウンロードし、データを編集後に<b>さらにインポート</b>をクリックしてください。',
    'LBL_DESELECT' => '選択解除',
    'LBL_SUMMARY' => 'インポートの概要',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'これらはエラーが発生したためにインポートされなかった行です。これらの行をインポートするには、リストをダウンロードし、データを編集後に<b>さらにインポート</b>をクリックしてください。',
    'LBL_EXTERNAL_MAP_HELP' => '外部ソースとマッピングされたフィールドが以下のテーブルに含まれています。マッピングが正しいかどうかを確認し、必要な場合は変更してください。必須フィールド（アスタリスクで表示）がすべてマッピングされているかを確認してください。',
    'LBL_EXTERNAL_MAP_NOTE' => 'Google Contactsグループすべてのコンタクト先をインポートしようとしています。',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => '新しく作成されたユーザ名はデフォルトではGoogle Contactのフルネームとなります。ユーザ名はレコード作成後に変更することができます。',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'インポートを開始するには<b>インポート</b>をクリックしてください。姓を含むレコードのみが作成されます。名前やEメールアドレスが既存レコードとマッチする場合は重複と判断され、データは作成されません。',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'このカラムでは、新しいレコードを作成するために使用するデータを含む外部ソースのフィールドが表示されています。',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => '外部ソースのフィールドに何も含まれていない場合に作成されるレコードのフィールドに使用する値を示しています。',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'To assign the new records to a user other than yourself, use the Default Value column to select a different user.<br />新規レコードにあなた以外のユーザをアサインするにはデフォルト値を使用して設定したいユーザを選択してください。',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => '新規レコードにデフォルトチーム以外のチームをアサインするにはデフォルト値を使用して設定したいチームを選択してください。',
    'LBL_SIGN_IN_HELP' => 'このサービスを有効にするにはユーザ設定ページの外部アカウントタブでサインインしてください。',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Bean内のサポートしないEメールアドレスを処理しようとしています",
);
