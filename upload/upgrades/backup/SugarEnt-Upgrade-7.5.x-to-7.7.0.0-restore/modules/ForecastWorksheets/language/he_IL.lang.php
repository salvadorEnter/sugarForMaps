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
  'ERR_FORECAST_AMOUNT' => 'Commit Amount is required and must be a number.',
  'LBL_ACCOUNT_NAME' => 'שם החשבון',
  'LBL_AMOUNT' => 'כמות',
  'LBL_BASE_RATE' => 'שער בסיס',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'שורת כמות פריט מחושב',
  'LBL_CATEGORY_NAME' => 'קטגוריה',
  'LBL_COMMIT_HEADER' => 'Forecast Commit',
  'LBL_COMMIT_MESSAGE' => 'Do you want to commit these amounts?',
  'LBL_COMMIT_NOTE' => 'Enter amounts that you would like to commit for the selected Time Period:',
  'LBL_COMMIT_STAGE' => 'Commit Stage',
  'LBL_COST_PRICE' => 'מחיר',
  'LBL_CREATED_BY' => 'נוצר על ידי',
  'LBL_CURRENCY' => 'מטבע',
  'LBL_CURRENCY_ID' => 'מטבע ID',
  'LBL_CURRENCY_RATE' => 'שער מטבע',
  'LBL_DATE_CLOSED' => 'תאריך סגירה מצופה',
  'LBL_DATE_COMMITTED' => 'Date Committed',
  'LBL_DATE_ENTERED' => 'תאריך יצירה',
  'LBL_DATE_MODIFIED' => 'תאריך שינוי',
  'LBL_DELETED' => 'נמחק',
  'LBL_DISCOUNT_PRICE' => 'יחידת מחיר',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'תחזית הזדמנויות',
  'LBL_DV_FORECAST_PERIOD' => 'תחזית תקופת זמן',
  'LBL_DV_FORECAST_ROLLUP' => 'Forecast Rollup',
  'LBL_DV_HEADER' => 'תחזית: גליון',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Last Commit Amounts:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Last Commit Date:',
  'LBL_DV_MY_FORECASTS' => 'התחזיות שלי',
  'LBL_DV_MY_TEAM' => 'תחזיות הצוות שלי',
  'LBL_DV_TIMEPERIOD' => 'תקופת זמן',
  'LBL_DV_TIMEPERIODS' => 'תקופות זמן',
  'LBL_DV_TIMPERIOD_DATES' => 'תווח תאריכים',
  'LBL_EDITABLE_INVALID' => 'ערך שגוי עבור {{field_name}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'על הערך להיות בין {{min}} and {{max}}',
  'LBL_FC_START_DATE' => 'תאריך התחלה',
  'LBL_FC_USER' => 'לוח זמנים עבור',
  'LBL_FDR_ADJ_AMOUNT' => 'התאם כמות',
  'LBL_FDR_COMMIT' => 'Committed Amount',
  'LBL_FDR_DATE_COMMIT' => 'Commit Date',
  'LBL_FDR_OPPORTUNITIES' => 'הזדמנויות בתחזית',
  'LBL_FDR_USER_NAME' => 'דיווח ישיר',
  'LBL_FDR_WEIGH' => 'כמות ההזדמנויות שנשקלו',
  'LBL_FORECAST' => 'תחזית',
  'LBL_FORECAST_HISTORY' => 'תחזית: היסטוריה',
  'LBL_FORECAST_HISTORY_TITLE' => 'היסטוריה',
  'LBL_FORECAST_ID' => 'תחזית ID',
  'LBL_FORECAST_OPP_COUNT' => 'סך הכל הזדמנויות',
  'LBL_FORECAST_OPP_WEIGH' => 'כמות שנשקלה',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'סך הכל צינור הזדמנויות',
  'LBL_FORECAST_TIME_ID' => 'תקופת זמן ID',
  'LBL_FORECAST_TYPE' => 'סוג תחזית',
  'LBL_FORECAST_USER' => 'משתמש',
  'LBL_FS_CASCADE' => 'Cascade?',
  'LBL_FS_CREATED_BY' => 'נוצר על ידי',
  'LBL_FS_DATE_ENTERED' => 'תאריך יצירה',
  'LBL_FS_DATE_MODIFIED' => 'תאריך שינוי',
  'LBL_FS_DELETED' => 'נמחק',
  'LBL_FS_END_DATE' => 'תאריך סיום',
  'LBL_FS_FORECAST_FOR' => 'לוח זמנים עבור',
  'LBL_FS_FORECAST_START_DATE' => 'תאריך התחלת תחזית',
  'LBL_FS_MODULE_NAME' => 'לוח זמנים לתחזית',
  'LBL_FS_START_DATE' => 'תאריך התחלה',
  'LBL_FS_STATUS' => 'סטטוס',
  'LBL_FS_TIMEPERIOD' => 'תקופת זמן',
  'LBL_FS_TIMEPERIOD_ID' => 'תקופת זמן ID',
  'LBL_FS_USER_ID' => 'משתמש ID',
  'LBL_LEAD_SOURCE' => 'מקור הליד',
  'LBL_LIST_FORM_TITLE' => 'Committed Forecasts',
  'LBL_LIST_PRICE' => 'עלות',
  'LBL_LOADING_COMMIT_HISTORY' => 'Loading Commit History...',
  'LBL_LV_COMMIT' => 'Committed Amount',
  'LBL_LV_COMMIT_DATE' => 'Date Committed',
  'LBL_LV_OPPORTUNITIES' => 'הזדמנויות',
  'LBL_LV_TIMPERIOD' => 'תקופת זמן',
  'LBL_LV_TIMPERIOD_END_DATE' => 'תאריך סיום',
  'LBL_LV_TIMPERIOD_START_DATE' => 'תאריך התחלה',
  'LBL_LV_TYPE' => 'סוג תחזית',
  'LBL_LV_WEIGH' => 'כמות שנשקלה',
  'LBL_MANAGER_NOTIFY' => 'The following {0} {1} was not included in latest commit after it was included in the previous one',
  'LBL_MODIFIED_USER_ID' => 'שונה על ידי',
  'LBL_MODULE_NAME' => 'גליונות תחזית',
  'LBL_MODULE_NAME_SINGULAR' => 'גליון תחזית',
  'LBL_MODULE_TITLE' => 'גליונות תחזית',
  'LBL_NEXT_STEP' => 'שלב הבא',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'אין תקופות זמן פעילות עבור מודול תחזית.',
  'LBL_OW_ACCOUNTNAME' => 'חשבון',
  'LBL_OW_DESCRIPTION' => 'תאור',
  'LBL_OW_MODULE_TITLE' => 'גליון הזדמנויות',
  'LBL_OW_NEXT_STEP' => 'שלב הבא',
  'LBL_OW_OPPORTUNITIES' => 'הזדמנות',
  'LBL_OW_PROBABILITY' => 'הסתברות',
  'LBL_OW_REVENUE' => 'כמות',
  'LBL_OW_TYPE' => 'סוג',
  'LBL_OW_WEIGHTED' => 'כמות שנשקלה',
  'LBL_PERCENT' => 'אחוז',
  'LBL_PRODUCT' => 'מוצר',
  'LBL_PRODUCT_ID' => 'מוצר ID',
  'LBL_QC_COMMIT_BUTTON' => 'Commit',
  'LBL_QC_COMMIT_VALUE' => 'Commit Amount:',
  'LBL_QC_DIRECT_FORECAST' => 'תחזית ישירה שלי',
  'LBL_QC_HEADER_DELIM' => 'אל',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Last Commit Amount:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Last Commit Date:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'סך הכל הזדמנויות',
  'LBL_QC_ROLLUP_FORECAST' => 'תחזית קבוצה שלי',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Rollup Commit Amount:',
  'LBL_QC_TIME_PERIOD' => 'תקופת זמן',
  'LBL_QC_UPCOMING_FORECASTS' => 'התחזיות שלי',
  'LBL_QC_WEIGHT_VALUE' => 'כמות שנשקלה',
  'LBL_QC_WORKSHEET_BUTTON' => 'גליון',
  'LBL_QUANTITY' => 'כמות',
  'LBL_QUOTA' => 'ציטוט',
  'LBL_QUOTA_ID' => 'ציטוט ID',
  'LBL_REPORTS_TO_USER_NAME' => 'מדווח ל',
  'LBL_RESET_CHECK' => 'כל המידע שבתרשים עבור תקופת הזמן שנבחרה ימחקו עבור משתמש זה. האם להמשיך?',
  'LBL_RESET_WOKSHEET' => 'אפס גליון',
  'LBL_REVENUELINEITEM_NAME' => 'שם פריט שורת רווח',
  'LBL_SALES_STAGE' => 'שלב',
  'LBL_SALES_STATUS' => 'סטטוס',
  'LBL_SAVE_WOKSHEET' => 'שמור גליון',
  'LBL_SEARCH' => 'בחר',
  'LBL_SEARCH_LABEL' => 'בחר',
  'LBL_SHOW_CHART' => 'צפה בתרשים',
  'LBL_SVFS_CASCADE' => 'Cascade to Reports?',
  'LBL_SVFS_FORECASTDATE' => 'קבע תאריך התחלה',
  'LBL_SVFS_HEADER' => 'לוח זמנים לתחזית',
  'LBL_SVFS_STATUS' => 'סטטוס',
  'LBL_SVFS_USER' => 'עבור',
  'LBL_TIMEPERIOD_NAME' => 'תקופת זמן',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => 'סך הכל כמות להנחה',
  'LBL_TYPE' => 'סוג',
  'LBL_USER_NAME' => 'שם משתמש',
  'LBL_VERSION' => 'גירסה',
  'LBL_WK_REVISION' => 'Revision',
  'LBL_WK_VERSION' => 'גירסה',
  'LB_FS_KEY' => 'ID',
  'LNK_ACCOUNTS' => 'חשבון',
  'LNK_FORECAST_LIST' => 'צפה בהסטוריית תחזיות',
  'LNK_NEW_OPPORTUNITY' => 'צור הזדמנות',
  'LNK_NEW_TIMEPERIOD' => 'צור תקופת זמן',
  'LNK_OPPORTUNITY' => 'הזדמנות',
  'LNK_QUOTA' => 'צפה בהצעות מחיר',
  'LNK_TIMEPERIOD_LIST' => 'צפה בתקופות זמן',
  'LNK_UPD_FORECAST' => 'גליון תחזית',
);

