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
  'ERR_FORECAST_AMOUNT' => 'Le montant soumis est requis et doit être un nombre.',
  'LBL_ACCOUNT_NAME' => 'Nom du Compte :',
  'LBL_AMOUNT' => 'Montant',
  'LBL_BASE_RATE' => 'Taux par défaut',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Montant calculé des lignes',
  'LBL_CATEGORY_NAME' => 'Catégorie',
  'LBL_COMMIT_HEADER' => 'Soumettre prévision',
  'LBL_COMMIT_MESSAGE' => 'Voulez-vous soumettre ces montants ?',
  'LBL_COMMIT_NOTE' => 'Renseigner les montants que vous souhaitez soumettre pour la période sélectionnée:',
  'LBL_COMMIT_STAGE' => 'Etape de soumission',
  'LBL_COST_PRICE' => 'Prix de revient',
  'LBL_CREATED_BY' => 'Créé par',
  'LBL_CURRENCY' => 'Devise',
  'LBL_CURRENCY_ID' => 'ID Devise',
  'LBL_CURRENCY_RATE' => 'Taux de change',
  'LBL_DATE_CLOSED' => 'Date de clôture attendue',
  'LBL_DATE_COMMITTED' => 'Date de soumission',
  'LBL_DATE_ENTERED' => 'Date de création',
  'LBL_DATE_MODIFIED' => 'Date de modification',
  'LBL_DELETED' => 'Supprimé',
  'LBL_DISCOUNT_PRICE' => 'Prix unitaire',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Affaires de la Prévision',
  'LBL_DV_FORECAST_PERIOD' => 'Période de la prévision',
  'LBL_DV_FORECAST_ROLLUP' => 'Consolidation Prévision',
  'LBL_DV_HEADER' => 'Prévisions:Tableau',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Derniers montants soumis:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Date dernière soumission:',
  'LBL_DV_MY_FORECASTS' => 'Mes Prévisions',
  'LBL_DV_MY_TEAM' => 'Les Prévisions de mon équipe',
  'LBL_DV_TIMEPERIOD' => 'Période:',
  'LBL_DV_TIMEPERIODS' => 'Périodes:',
  'LBL_DV_TIMPERIOD_DATES' => 'Plage de date:',
  'LBL_EDITABLE_INVALID' => 'Valeur invalide pour {{field_name}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'La valeur doit être entre {{min}} et {{max}}',
  'LBL_FC_START_DATE' => 'Date de début',
  'LBL_FC_USER' => 'Planifiée pour',
  'LBL_FDR_ADJ_AMOUNT' => 'Montant ajusté',
  'LBL_FDR_COMMIT' => 'Montant soumis',
  'LBL_FDR_DATE_COMMIT' => 'Date de soumission',
  'LBL_FDR_OPPORTUNITIES' => 'Affaires dans la Prévision:',
  'LBL_FDR_USER_NAME' => 'Rend compte à',
  'LBL_FDR_WEIGH' => 'Montant pondéré des affaires:',
  'LBL_FORECAST' => 'Prévision',
  'LBL_FORECAST_HISTORY' => 'Prévisions: Historique',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historique',
  'LBL_FORECAST_ID' => 'ID Prévision',
  'LBL_FORECAST_OPP_COUNT' => 'Nbre total Affaires',
  'LBL_FORECAST_OPP_WEIGH' => 'Montant pondéré',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Nbre Affaires en portefeuille',
  'LBL_FORECAST_TIME_ID' => 'ID Période',
  'LBL_FORECAST_TYPE' => 'Type de Prévision',
  'LBL_FORECAST_USER' => 'Assigné à',
  'LBL_FS_CASCADE' => 'En Cascade ?',
  'LBL_FS_CREATED_BY' => 'Créé par',
  'LBL_FS_DATE_ENTERED' => 'Date de création',
  'LBL_FS_DATE_MODIFIED' => 'Date de modification',
  'LBL_FS_DELETED' => 'Supprimé',
  'LBL_FS_END_DATE' => 'Date de fin',
  'LBL_FS_FORECAST_FOR' => 'Planifiée pour:',
  'LBL_FS_FORECAST_START_DATE' => 'Date début Prévision',
  'LBL_FS_MODULE_NAME' => 'Planification Prévisions',
  'LBL_FS_START_DATE' => 'Date de début',
  'LBL_FS_STATUS' => 'Statut',
  'LBL_FS_TIMEPERIOD' => 'Période',
  'LBL_FS_TIMEPERIOD_ID' => 'ID Période',
  'LBL_FS_USER_ID' => 'ID Utilisateur',
  'LBL_LEAD_SOURCE' => 'Origine principale',
  'LBL_LIST_FORM_TITLE' => 'Prévisions soumises',
  'LBL_LIST_PRICE' => 'Prix Public',
  'LBL_LOADING_COMMIT_HISTORY' => 'Chargement historique des soumissions...',
  'LBL_LV_COMMIT' => 'Montant soumis',
  'LBL_LV_COMMIT_DATE' => 'Date de soumission',
  'LBL_LV_OPPORTUNITIES' => 'Affaires',
  'LBL_LV_TIMPERIOD' => 'Période',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Date de fin',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Date de début',
  'LBL_LV_TYPE' => 'Type de Prévision',
  'LBL_LV_WEIGH' => 'Montant pondéré',
  'LBL_MANAGER_NOTIFY' => 'L&#39;élément suivant {0} {1} n&#39;a pas été inclus dans la dernière soumission bien que inclus dans la précédente',
  'LBL_MODIFIED_USER_ID' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Tableau des Prévisions',
  'LBL_MODULE_NAME_SINGULAR' => 'Tableau des Prévisions',
  'LBL_MODULE_TITLE' => 'Tableau des Prévisions',
  'LBL_NEXT_STEP' => 'Etape suivante',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Pas de périodes actives pour la Prévision.',
  'LBL_OW_ACCOUNTNAME' => 'Compte',
  'LBL_OW_DESCRIPTION' => 'Description',
  'LBL_OW_MODULE_TITLE' => 'Tableau Affaire',
  'LBL_OW_NEXT_STEP' => 'Etape suivante',
  'LBL_OW_OPPORTUNITIES' => 'Affaire',
  'LBL_OW_PROBABILITY' => 'Probabilité',
  'LBL_OW_REVENUE' => 'Montant',
  'LBL_OW_TYPE' => 'Type',
  'LBL_OW_WEIGHTED' => 'Montant pondéré',
  'LBL_PERCENT' => 'Pourcentage',
  'LBL_PRODUCT' => 'Produit',
  'LBL_PRODUCT_ID' => 'Produit (ID):',
  'LBL_QC_COMMIT_BUTTON' => 'Soumettre',
  'LBL_QC_COMMIT_VALUE' => 'Soumettre montant',
  'LBL_QC_DIRECT_FORECAST' => 'Ma prévision personnelle:',
  'LBL_QC_HEADER_DELIM' => 'A',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Dernier montant soumis:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Date dernière soumission:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Nombre Affaires:',
  'LBL_QC_ROLLUP_FORECAST' => 'Prévision pour mon groupe:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Montant soumis consolidé:',
  'LBL_QC_TIME_PERIOD' => 'Période:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mes prévisions',
  'LBL_QC_WEIGHT_VALUE' => 'Montant pondéré:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Tableau',
  'LBL_QUANTITY' => 'Quantité',
  'LBL_QUOTA' => 'Objectif',
  'LBL_QUOTA_ID' => 'Objectif (ID)',
  'LBL_REPORTS_TO_USER_NAME' => 'Rend compte à',
  'LBL_RESET_CHECK' => 'Tous les tableaux de données pour la période sélectionnée et cet utilisateur seront supprimés, continuer ?',
  'LBL_RESET_WOKSHEET' => 'Réinitialiser Tableau',
  'LBL_REVENUELINEITEM_NAME' => 'Nom de la ligne de revenu',
  'LBL_SALES_STAGE' => 'Etape',
  'LBL_SALES_STATUS' => 'Statut',
  'LBL_SAVE_WOKSHEET' => 'Sauvegarder Tableau',
  'LBL_SEARCH' => 'Sélectionner',
  'LBL_SEARCH_LABEL' => 'Sélectionner',
  'LBL_SHOW_CHART' => 'Voir le graphique',
  'LBL_SVFS_CASCADE' => 'Cascade to Reports?',
  'LBL_SVFS_FORECASTDATE' => 'Planifier date de début',
  'LBL_SVFS_HEADER' => 'Planification Prévisions:',
  'LBL_SVFS_STATUS' => 'Statut',
  'LBL_SVFS_USER' => 'Pour',
  'LBL_TIMEPERIOD_NAME' => 'Période',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => 'Montant total de la remise',
  'LBL_TYPE' => 'Type',
  'LBL_USER_NAME' => 'Nom Utilisateur',
  'LBL_VERSION' => 'Version',
  'LBL_WK_REVISION' => 'Révision',
  'LBL_WK_VERSION' => 'Version',
  'LB_FS_KEY' => 'ID',
  'LNK_ACCOUNTS' => 'Compte',
  'LNK_FORECAST_LIST' => 'Historique Prévisions',
  'LNK_NEW_OPPORTUNITY' => 'Créer une Affaire',
  'LNK_NEW_TIMEPERIOD' => 'Créer Période',
  'LNK_OPPORTUNITY' => 'Affaire',
  'LNK_QUOTA' => 'Voir Objectifs',
  'LNK_TIMEPERIOD_LIST' => 'Voir Périodes',
  'LNK_UPD_FORECAST' => 'Tableau des Prévisions',
);

