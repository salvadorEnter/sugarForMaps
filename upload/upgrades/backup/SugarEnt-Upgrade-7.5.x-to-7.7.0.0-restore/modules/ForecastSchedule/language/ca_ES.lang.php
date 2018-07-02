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
  'ERR_FORECAST_AMOUNT' => 'La Quantitat Realitzada es un valor necessàri, i te que ser numéric.',
  'LBL_COMMIT_HEADER' => 'Realització d´Objectiu',
  'LBL_COMMIT_MESSAGE' => 'Vol introduïr aquestes quantitats com a realitzades?',
  'LBL_COMMIT_NOTE' => 'Introdueixi les quantitats que desitgi realitzar en el Període de Temps seleccionat:',
  'LBL_CREATED_BY' => 'Creat per',
  'LBL_CURRENCY' => 'Moneda',
  'LBL_CURRENCY_RATE' => 'Divisa',
  'LBL_DATE_COMMITTED' => 'Data Realització',
  'LBL_DATE_ENTERED' => 'Data Creación',
  'LBL_DATE_MODIFIED' => 'Data Modificació',
  'LBL_DELETED' => 'Eliminat',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Oportunitats del Objectiu',
  'LBL_DV_FORECAST_PERIOD' => 'Període de Temps del Objectiu',
  'LBL_DV_FORECAST_ROLLUP' => 'Previsión Dinàmica',
  'LBL_DV_HEADER' => 'Objectius: Full de càlcul',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Últimes Quantitats Realitzades:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Última Data de Realització:',
  'LBL_DV_MY_FORECASTS' => 'Els Meus Objectius',
  'LBL_DV_MY_TEAM' => 'Objectius del meu Equip',
  'LBL_DV_TIMEPERIOD' => 'Període de Temps:',
  'LBL_DV_TIMEPERIODS' => 'Períodes de Temps:',
  'LBL_DV_TIMPERIOD_DATES' => 'Rang de Dades:',
  'LBL_EDIT_LAYOUT' => 'Editar diseny',
  'LBL_EXPECTED_AMOUNT' => 'Quantitat que s&#39;espera',
  'LBL_EXPECTED_BEST_CASE' => 'Cas d&#39;espera el millor',
  'LBL_EXPECTED_LIKELY_CASE' => 'Cas probablement esperat',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Oportunitats esperats',
  'LBL_EXPECTED_WORST_CASE' => 'El pitjor del cas previst',
  'LBL_FC_START_DATE' => 'Data d´Inici',
  'LBL_FC_USER' => 'Programar Per a',
  'LBL_FDR_ADJ_AMOUNT' => 'Quantitat Ajustada',
  'LBL_FDR_COMMIT' => 'Quantitat Realitzada',
  'LBL_FDR_DATE_COMMIT' => 'Data de Realització',
  'LBL_FDR_OPPORTUNITIES' => 'Oportunitats en objectiu:',
  'LBL_FDR_USER_NAME' => 'Informador Directe',
  'LBL_FDR_WEIGH' => 'Quantitat Ponderada d´oportunitats:',
  'LBL_FORECAST_HISTORY' => 'Previsiones: Històrial',
  'LBL_FORECAST_HISTORY_TITLE' => 'Previsiones: Històrial',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_COMMIT' => 'Cas probable',
  'LBL_FORECAST_OPP_COUNT' => 'Oportunitats',
  'LBL_FORECAST_OPP_WEIGH' => 'Quantitat Ponderada',
  'LBL_FORECAST_TIME_ID' => 'ID Període de Temps',
  'LBL_FORECAST_TYPE' => 'Tipus de Previsión',
  'LBL_FORECAST_USER' => 'Usuari',
  'LBL_FS_CASCADE' => 'En cascada?',
  'LBL_FS_CREATED_BY' => 'Creat per',
  'LBL_FS_DATE_ENTERED' => 'Data Creació',
  'LBL_FS_DATE_MODIFIED' => 'Data Modificació',
  'LBL_FS_DELETED' => 'Eliminat',
  'LBL_FS_END_DATE' => 'Data Fi',
  'LBL_FS_FORECAST_FOR' => 'Planificar per a:',
  'LBL_FS_FORECAST_START_DATE' => 'Data d´Inici del Objectiu',
  'LBL_FS_MODULE_NAME' => 'Planificació d´Objectiu',
  'LBL_FS_START_DATE' => 'Data Inici',
  'LBL_FS_STATUS' => 'Estat',
  'LBL_FS_TIMEPERIOD' => 'Període de Temps',
  'LBL_FS_TIMEPERIOD_ID' => 'ID Període de Temps',
  'LBL_FS_USER_ID' => 'ID Usuari',
  'LBL_INCLUDE_EXPECTED' => 'Esperat inclòs',
  'LBL_LIST_FORM_TITLE' => 'Objectius Realitzats',
  'LBL_LV_COMMIT' => 'Quantitat Realitzada',
  'LBL_LV_COMMIT_DATE' => 'Data de Realització',
  'LBL_LV_OPPORTUNITIES' => 'Oportunitats',
  'LBL_LV_TIMPERIOD' => 'Període de Temps',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Data de Fi',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Data d´Inici',
  'LBL_LV_TYPE' => 'Tipus d´Objectiu',
  'LBL_LV_WEIGH' => 'Quantitat Ponderada',
  'LBL_MODULE_NAME' => 'Objectius',
  'LBL_MODULE_NAME_SINGULAR' => 'Pronòstic',
  'LBL_MODULE_TITLE' => 'Objectius',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'No hi ha cap període de temps Actiu per el Objectiu.',
  'LBL_OW_ACCOUNTNAME' => 'Compte',
  'LBL_OW_DESCRIPTION' => 'Descripció',
  'LBL_OW_MODULE_TITLE' => 'Full d´Oportunitat',
  'LBL_OW_NEXT_STEP' => 'Següent Pas',
  'LBL_OW_OPPORTUNITIES' => 'Oportunitat',
  'LBL_OW_PROBABILITY' => 'Probabilitat',
  'LBL_OW_REVENUE' => 'Quantitat',
  'LBL_OW_TYPE' => 'Tipus',
  'LBL_OW_WEIGHTED' => 'Quantitat Ponderada',
  'LBL_QC_COMMIT_BUTTON' => 'Realizar',
  'LBL_QC_COMMIT_VALUE' => 'Quantitat Realitzada:',
  'LBL_QC_DIRECT_FORECAST' => 'La Meva Previsió Directa:',
  'LBL_QC_HEADER_DELIM' => 'A',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Última Quantitat Realitzada:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Última Data de Realització:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Compte d´Oportunitats:',
  'LBL_QC_ROLLUP_FORECAST' => 'La Meva Previsió de Grup:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Quantitat Realitzada en Dinàmica:',
  'LBL_QC_TIME_PERIOD' => 'Període de Temps:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Els Meus Objectius',
  'LBL_QC_WEIGHT_VALUE' => 'Quantitat Ponderada:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Full de cáàcul',
  'LBL_REPORTS_TO_USER_NAME' => 'Informa A',
  'LBL_RESET_CHECK' => 'Totes les dades del full de càlcul per al període de temps seleccionat i per a l´usuari que ha iniciat la sessió s´eliminaran, desitja continuar?',
  'LBL_RESET_WOKSHEET' => 'Reiniciar Full de càlcul',
  'LBL_SAVE_WOKSHEET' => 'Guardar Full de càlcul',
  'LBL_SEARCH' => 'Seleccionar',
  'LBL_SEARCH_LABEL' => 'Seleccionar',
  'LBL_SVFS_CASCADE' => 'Propagar en cascada a Informes?',
  'LBL_SVFS_FORECASTDATE' => 'Data d´Inici de Planificació',
  'LBL_SVFS_HEADER' => 'Planificació del Objectiu:',
  'LBL_SVFS_STATUS' => 'Estat',
  'LBL_SVFS_USER' => 'Per a',
  'LBL_TIMEPERIOD_NAME' => 'Període de Temps',
  'LBL_USER_NAME' => 'Nom d´Usuari',
  'LB_FS_KEY' => 'ID',
  'LNK_FORECAST_LIST' => 'Històrial de Previsiones',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunitat',
  'LNK_NEW_TIMEPERIOD' => 'Crear Període de Temps',
  'LNK_QUOTA' => 'Quotes',
  'LNK_TIMEPERIOD_LIST' => 'Períodes de Temps',
  'LNK_UPD_FORECAST' => 'Full d´Objectiu',
);

