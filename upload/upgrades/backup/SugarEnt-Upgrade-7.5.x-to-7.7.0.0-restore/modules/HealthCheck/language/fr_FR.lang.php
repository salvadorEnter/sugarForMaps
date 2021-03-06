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
  'LBL_BUCKET' => 'Bucket',
  'LBL_ERROR' => 'Erreur',
  'LBL_FLAG' => 'Flag',
  'LBL_LOGFILE' => 'Fichier de log',
  'LBL_LOGMETA' => 'Log meta',
  'LBL_MODULE_NAME' => 'Statut de l&#39;application',
  'LBL_MODULE_NAME_SINGULAR' => 'Statut de l&#39;application',
  'LBL_MODULE_TITLE' => 'Statut de l&#39;application',
  'LBL_SCAN_101_DESCR' => 'Des modifications Studio ont été détectées sur votre instance. Nous n&#39;anticipons pas de problèmes avec ces modifications donc vos modifications ont été migrées en Sugar7.',
  'LBL_SCAN_101_LOG' => '%s a un historique studio',
  'LBL_SCAN_101_TITLE' => '%s a un historique studio',
  'LBL_SCAN_102_DESCR' => 'Des modifications Studio ont été détectées sur votre instance. Nous n&#39;anticipons pas de problèmes avec ces modifications donc vos modifications ont été migrées en Sugar7.',
  'LBL_SCAN_102_LOG' => '%s a des extensions: %s',
  'LBL_SCAN_102_TITLE' => '%s a des extensions: %s',
  'LBL_SCAN_103_DESCR' => 'Des modifications Studio ont été détectées sur votre instance. Nous n&#39;anticipons pas de problèmes avec ces modifications donc vos modifications ont été migrées en Sugar7.',
  'LBL_SCAN_103_LOG' => '%s a des vardefs custom',
  'LBL_SCAN_103_TITLE' => '%s a des vardefs custom',
  'LBL_SCAN_104_DESCR' => 'Des modifications Studio ont été détecté sur votre instance. Nous n&#39;anticipons pas des problèmes avec ces modifications et vos modifications ont été migrés en Sugar7.',
  'LBL_SCAN_104_LOG' => '%s a des layoutdefs custom',
  'LBL_SCAN_104_TITLE' => '%s a des layoutdefs custom',
  'LBL_SCAN_105_DESCR' => 'Des modifications Studio ont été détectées sur votre instance. Nous n&#39;anticipons pas de problèmes avec ces modifications donc vos modifications ont été migrées en Sugar7.',
  'LBL_SCAN_105_LOG' => '%s a des viewdefs custom',
  'LBL_SCAN_105_TITLE' => '%s a des viewdefs custom',
  'LBL_SCAN_201_DESCR' => 'Des modifications Studio ont été détecté sur votre instance. Nous n&#39;anticipons pas des problèmes avec ces modifications et vos modifications ont été migrés en Sugar7.',
  'LBL_SCAN_201_LOG' => '%s n&#39;est pas un module standard',
  'LBL_SCAN_201_TITLE' => '%s n&#39;est pas un module standard',
  'LBL_SCAN_301_DESCR' => 'Certaines modifications Studio ont été détectées et n&#39;ont pas été migrées. Ce module (%s) reste disponible mais il sera en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_301_LOG' => '%s va fonctionner en BWC',
  'LBL_SCAN_301_TITLE' => '%s va fonctionner en BWC',
  'LBL_SCAN_302_DESCR' => 'Des fichiers de vues inconnus ont été détectés et n&#39;ont pas été migrés vers Sugar 7.Ce module (%s) reste disponible mais il sera en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_302_LOG' => 'Fichiers de vues présents inconnus - %s n&#39;est pas un module MB',
  'LBL_SCAN_302_TITLE' => 'Fichiers de vues présents inconnus - %s n&#39;est pas un module MB',
  'LBL_SCAN_303_DESCR' => 'Des fichiers de vues inconnus ont été détectés et n&#39;ont pas été migrés vers Sugar 7.Ce module (%s) reste disponible mais il sera en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_303_LOG' => 'Formulaire fichier non vide %s - %s n&#39;est pas un module MB',
  'LBL_SCAN_303_TITLE' => 'Fichier formulaire non vide %s - %s n&#39;est pas un module MB',
  'LBL_SCAN_304_DESCR' => 'Des fichiers inconnus (%s) ont été détectés et n&#39;ont pas été migrés vers Sugar 7. Ce module (%s) reste disponible mais il sera disponible en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_304_LOG' => 'Fichier inconnu %s - %s n&#39;est pas un module MB',
  'LBL_SCAN_304_TITLE' => 'Fichier inconnu %s - %s n&#39;est pas un module MB',
  'LBL_SCAN_305_DESCR' => 'De mauvais vardefs(%s: %s) ont été détectés et n&#39;ont pas été migrés vers Sugar 7. Cette modification va rester disponible mais seulement en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_305_LOG' => 'Mauvais vardefs - clé %s, nom %s',
  'LBL_SCAN_305_TITLE' => 'Mauvais vardefs - clé %s, nom %s',
  'LBL_SCAN_306_DESCR' => 'Mauvais vardefs ont été détectés et n&#39;ont pas été migrés vers Sugar 7. Le champ relatif (%s) a un `module` vide. Cette modification va rester disponible mais seulement en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_306_LOG' => 'Mauvais vardefs - champ relatif %s contient un `module` vide',
  'LBL_SCAN_306_TITLE' => 'Mauvais vardefs - champ relatif %s contient un `module` vide',
  'LBL_SCAN_307_DESCR' => 'De mauvais vardefs ont été détectés et n&#39;ont pas été migrés vers Sugar 7. Le link (%s) fait référence a une relation invalide. Cette modification va rester disponible mais seulement en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_307_LOG' => 'Mauvais vardefs - link %s fait référence à une relation invalide',
  'LBL_SCAN_307_TITLE' => 'Mauvais vardefs - link %s fait référence à une relation invalide',
  'LBL_SCAN_308_DESCR' => 'Certaines modifications ont été détectées et n&#39;ont pas été migrées. Ce module (%s) reste disponible mais il sera disponible en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_308_LOG' => 'Fonction vardef HTML dans %s',
  'LBL_SCAN_308_TITLE' => 'Fonction vardef HTML dans %s',
  'LBL_SCAN_309_DESCR' => 'Un hash md5 pour %s ne correspond pas au fichier d&#39;origine. Ce fichier a dû être modifié et ne sera pas migré en Sugar7.',
  'LBL_SCAN_309_LOG' => 'Mauvais md5 pour %s',
  'LBL_SCAN_309_TITLE' => 'Mauvais md5 pour %s',
  'LBL_SCAN_310_DESCR' => 'Des fichiers de vues inconnus (%s) ont été détectés et n&#39;ont pas été migrés vers Sugar7. Ce module (%s) reste disponible mais il sera disponible en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_310_LOG' => 'Fichier inconnu %s/%s',
  'LBL_SCAN_310_TITLE' => 'Fichier inconnu %s/%s',
  'LBL_SCAN_311_DESCR' => 'Certaines modifications ont été détectées et n&#39;ont pas été migrées vers Sugar7. Ce module (%s) reste disponible mais il sera disponible en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_311_LOG' => 'Fonction HTML dans le Vardef %s dans le module $module pour le champ %s',
  'LBL_SCAN_311_TITLE' => 'Fonction HTML dans le Vardef %s dans le module $module pour le champ %s',
  'LBL_SCAN_312_DESCR' => 'De mauvais vardefs ont été détectés et n&#39;ont pas été migrés vers Sugar7. Mauvais vardefs: &#39;name&#39; le type de champ &#39;%s&#39; est invalide pour le module &#39;%s&#39;. Cette modification va rester disponible mais seulement en mode compatibilité (BWC) dans Sugar 7.',
  'LBL_SCAN_312_LOG' => 'Mauvais vardefs - le type de champ &#39;name&#39; est invalide &#39;%s&#39;, module - &#39;%s&#39;',
  'LBL_SCAN_312_TITLE' => 'Mauvais vardefs - le type de champ &#39;name&#39; est invalide &#39;%s&#39;, module - &#39;%s&#39;',
  'LBL_SCAN_313_DESCR' => 'Un répertoire d&#39;extensions a été détecté - %s n&#39;est pas un module crée avec Module Buider.  Ce module sera disponible en mode compatibilité seulement (BWC).',
  'LBL_SCAN_313_LOG' => 'Répertoire extension %s détecté - %s n&#39;est pas un module MB',
  'LBL_SCAN_313_TITLE' => 'Répertoire extension %s détecté - %s n&#39;est pas un module MB',
  'LBL_SCAN_314_LOG' => 'Mauvais vardefs - champ à choix multiple &#39;%s&#39; avec la liste des options &#39;%s&#39; contient des clefs avec des caractères incompatibles - &#39;{%s}&#39;',
  'LBL_SCAN_401_DESCR' => 'Les fichiers custom contient une inclusion d&#39;un fichier qui a été déplacé dans le répertoire vendor.Nous avons essayé de corriger le fichier et aucune autre action n&#39;est nécessaire.',
  'LBL_SCAN_401_LOG' => 'Inclusion des fichiers Vendor trouvée, pour les fichiers qui ont été déplacés dans vendor/:\\r\\n%s',
  'LBL_SCAN_401_TITLE' => 'Inclusion des fichiers Vendor trouvé, pour les fichiers qui ont été déplacés dans vendor/:\\r\\n%s',
  'LBL_SCAN_402_DESCR' => 'Mauvais module %s - n&#39;est pas dans beanList ni dans le filesystem',
  'LBL_SCAN_402_LOG' => 'Mauvais module %s - n&#39;est pas dans beanList ni dans le filesystem',
  'LBL_SCAN_402_TITLE' => 'Mauvais module %s - n&#39;est pas dans beanList ni dans le filesystem',
  'LBL_SCAN_403_DESCR' => 'Certain fichier Sugar on changé d&#39;emplacement avec Sugar 7. Nous devons corriger les chemins de fichiers.',
  'LBL_SCAN_403_LOG' => 'Inclusion de fichier Sugar spécifique trouvé :<br />%s',
  'LBL_SCAN_403_TITLE' => 'Inclusion de fichier Sugar spécifique trouvé :<br />%s',
  'LBL_SCAN_406_DESCR' => 'Module standard Sugar a des vues custom dans custom/modules/%s/views',
  'LBL_SCAN_406_LOG' => '%s a des vues custom',
  'LBL_SCAN_406_TITLE' => '%s a des vues custom',
  'LBL_SCAN_407_DESCR' => 'Module standard Sugar a des vues custom dans modules/%s/views',
  'LBL_SCAN_407_LOG' => '%s a des vues custom dans le répertoire du module',
  'LBL_SCAN_407_TITLE' => '%s a des vues custom dans le répertoire du module',
  'LBL_SCAN_410_DESCR' => 'Trop de champs dans la vue',
  'LBL_SCAN_410_LOG' => 'Nbre max de champs - Trouvé plus de %s champs (%s) dans %s',
  'LBL_SCAN_410_TITLE' => 'Nbre max de champs - Trouvé plus de %s champs (%s) dans %s',
  'LBL_SCAN_412_DESCR' => 'Le sous panel fait référence a un link qui n&#39;existe pas ou n&#39;est pas défini correctement.',
  'LBL_SCAN_412_LOG' => 'Mauvais subpanel link %s dans %s',
  'LBL_SCAN_412_TITLE' => 'Mauvais subpanel link %s dans %s',
  'LBL_SCAN_413_DESCR' => 'Le champ fait référence à un nom de classe widget qui n&#39;a pas de fichier de classe widget correspondant.',
  'LBL_SCAN_413_LOG' => 'Widget class inconnu détecté: %s pour %s',
  'LBL_SCAN_413_TITLE' => 'Widget class inconnu détecté: %s pour %s',
  'LBL_SCAN_414_DESCR' => 'Champs inconnus traités par CRYS-36, plus aucun autre traitement ici',
  'LBL_SCAN_414_LOG' => 'Champs inconnus traités par CRYS-36, plus aucun autre traitement ici',
  'LBL_SCAN_414_TITLE' => 'Champs inconnus traités par CRYS-36, plus aucun autre traitement ici',
  'LBL_SCAN_415_DESCR' => 'Le logic hook fait référence a un fichier qui n&#39;existe pas.',
  'LBL_SCAN_415_LOG' => 'Mauvais fichier hook dans %s: %s',
  'LBL_SCAN_415_TITLE' => 'Mauvais fichier hook dans %s: %s',
  'LBL_SCAN_417_DESCR' => 'Les modules Feeds et iFrames ont été détectés et ne devrait plus exister',
  'LBL_SCAN_417_LOG' => 'Module incompatible %s',
  'LBL_SCAN_417_TITLE' => 'Module incompatible %s',
  'LBL_SCAN_418_DESCR' => 'Le sous panel fait référence à un module qui n&#39;existe pas',
  'LBL_SCAN_418_LOG' => 'Trouvé subpanel avec link vers module non existant: %s',
  'LBL_SCAN_418_TITLE' => 'Trouvé subpanel avec link vers module non existant: %s',
  'LBL_SCAN_419_DESCR' => 'La clé de vardef ne correspond pas au vardef name',
  'LBL_SCAN_419_LOG' => 'Mauvais vardefs - clé %s, nom %s',
  'LBL_SCAN_419_TITLE' => 'Mauvais vardefs - clé %s, nom %s',
  'LBL_SCAN_420_DESCR' => 'Le vardef contient des champs relatifs qui font référence au relations qui ne peuvent pas être chargés correctement',
  'LBL_SCAN_420_LOG' => 'Mauvais vardefs - champ relatif %s contient un `module` vide',
  'LBL_SCAN_420_TITLE' => 'Mauvais vardefs - champ relatif %s contient un `module` vide',
  'LBL_SCAN_421_DESCR' => 'Le vardef contient des champs link qui ne peuvent pas être chargés correctement',
  'LBL_SCAN_421_LOG' => 'Mauvais vardefs - link %s fait référence à une relation invalide',
  'LBL_SCAN_421_TITLE' => 'Mauvais vardefs - link %s fait référence à une relation invalide',
  'LBL_SCAN_423_DESCR' => 'Le vardefs contient des champs composés contenant des sous-champs et un de ces sous-champs n&#39;existe pas',
  'LBL_SCAN_423_LOG' => 'Mauvais vardefs - %s fait référence à un mauvais sous-champ %s',
  'LBL_SCAN_423_TITLE' => 'Mauvais vardefs - %s fait référence à un mauvais sous-champ %s',
  'LBL_SCAN_424_DESCR' => 'Le fichier contient du HTML inline',
  'LBL_SCAN_424_LOG' => 'HTML Inline trouvé dans %s à la ligne %s',
  'LBL_SCAN_424_TITLE' => 'HTML Inline trouvé dans %s à la ligne %s',
  'LBL_SCAN_425_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_425_LOG' => 'Trouvé "echo" dans %s à la ligne %s',
  'LBL_SCAN_425_TITLE' => 'Trouvé "echo" dans %s à la ligne %s',
  'LBL_SCAN_426_DESCR' => 'Le code contient cette fonction affichant de l&#39;information',
  'LBL_SCAN_426_LOG' => 'Trouvé "print" dans %s à la ligne %s',
  'LBL_SCAN_426_TITLE' => 'Trouvé "print" dans %s à la ligne %s',
  'LBL_SCAN_427_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_427_LOG' => 'Trouvé "die/exit" dans %s à la ligne %s',
  'LBL_SCAN_427_TITLE' => 'Trouvé "die/exit" dans %s à la ligne %s',
  'LBL_SCAN_428_DESCR' => 'Le code contient une fonction affichant de l&#39;information. Notez que print_r(...,true) est autorisé.',
  'LBL_SCAN_428_LOG' => 'Trouvé "print_r" dans %s à la ligne %s',
  'LBL_SCAN_428_TITLE' => 'Trouvé "print_r" dans %s à la ligne %s',
  'LBL_SCAN_429_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_429_LOG' => 'Trouvé "var_dump" dans %s à la ligne %s',
  'LBL_SCAN_429_TITLE' => 'Trouvé "var_dump" dans %s à la ligne %s',
  'LBL_SCAN_430_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_430_LOG' => 'Trouvé output buffering (%s) dans %s à la ligne %s',
  'LBL_SCAN_430_TITLE' => 'Trouvé output buffering (%s) dans %s à la ligne %s',
  'LBL_SCAN_432_DESCR' => 'Le champ &#39;name&#39; a un type autre que name, fullname, varchar ou id',
  'LBL_SCAN_432_LOG' => 'Mauvais vardefs - le type de champ &#39;name&#39; est invalide &#39;%s&#39;, module - &#39;%s&#39;',
  'LBL_SCAN_432_TITLE' => 'Mauvais vardefs - le type de champ &#39;name&#39; est invalide &#39;%s&#39;, module - &#39;%s&#39;',
  'LBL_SCAN_501_DESCR' => 'Un des fichiers standard n&#39;existe pas dans l&#39;instance',
  'LBL_SCAN_501_LOG' => 'Fichier manquant: %s',
  'LBL_SCAN_501_TITLE' => 'Fichier manquant: %s',
  'LBL_SCAN_502_DESCR' => 'Un des fichiers standard a été modifie dans cette installation',
  'LBL_SCAN_502_LOG' => 'md5 mismatch pour %s, attendu %s',
  'LBL_SCAN_502_TITLE' => 'Le md5 ne correspondant pas pour %s, attendu %s',
  'LBL_SCAN_503_DESCR' => 'Le module custom a le meme nom qu&#39;un des nouveaux modules Sugar',
  'LBL_SCAN_503_LOG' => 'Module custom avec le même nom que le nouveau module Sugar7: %s',
  'LBL_SCAN_503_TITLE' => 'Module custom avec le même nom que le nouveau module Sugar7: %s',
  'LBL_SCAN_504_DESCR' => 'La définition vardef du champ ne spécifie pas le type',
  'LBL_SCAN_504_LOG' => 'Type de champ manquant dans le module %s: %s',
  'LBL_SCAN_504_TITLE' => 'Type de champ manquant dans le module %s: %s',
  'LBL_SCAN_505_DESCR' => 'Champ de type non-blob est changé en type blob. Ceci n&#39;est pas autorisé parce que les champs de type blob ne peuvent pas être indexés et nous pouvons avoir des filtres qui se basent sur le fait que ce champs est indexé.',
  'LBL_SCAN_505_LOG' => 'Changement de type dans %s pour le champ %s: de %s vers %s',
  'LBL_SCAN_505_TITLE' => 'Changement de type dans %s pour le champ %s: de %s vers %s',
  'LBL_SCAN_506_DESCR' => '$this est utilisé dans le fichier metadata. Vu que le fichier metadata est chargé dans un autre contexte dans Sugar 7, ceci va échouer.',
  'LBL_SCAN_506_LOG' => '$this utilisé dans %s',
  'LBL_SCAN_506_TITLE' => '$this utilisé dans %s',
  'LBL_SCAN_507_DESCR' => 'Le vardefs contient des champs composés contenant des sous-champs et un de ces sous-champs n&#39;existe pas',
  'LBL_SCAN_507_LOG' => 'Mauvais vardefs - %s fait référence à un mauvais sous-champ %s',
  'LBL_SCAN_507_TITLE' => 'Mauvais vardefs - %s fait référence à un mauvais sous-champ %s',
  'LBL_SCAN_508_DESCR' => 'Le fichier contient du HTML inline',
  'LBL_SCAN_508_LOG' => 'HTML Inline trouvé dans %s à la ligne %s',
  'LBL_SCAN_508_TITLE' => 'HTML Inline trouvé dans %s à la ligne %s',
  'LBL_SCAN_509_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_509_LOG' => 'Trouvé "echo" dans %s à la ligne %s',
  'LBL_SCAN_509_TITLE' => 'Trouvé "echo" dans %s à la ligne %s',
  'LBL_SCAN_510_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_510_LOG' => 'Trouvé "print" dans %s à la ligne %s',
  'LBL_SCAN_510_TITLE' => 'Trouvé "print" dans %s à la ligne %s',
  'LBL_SCAN_511_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_511_LOG' => 'Trouvé "die/exit" dans %s à la ligne %s',
  'LBL_SCAN_511_TITLE' => 'Trouvé "die/exit" dans %s à la ligne %s',
  'LBL_SCAN_512_DESCR' => 'Le code contient une fonction affichant de l&#39;information. Notez que print_r(...,true) est autorisé.',
  'LBL_SCAN_512_LOG' => 'Trouvé "print_r" dans %s à la ligne %s',
  'LBL_SCAN_512_TITLE' => 'Trouvé "print_r" dans %s à la ligne %s',
  'LBL_SCAN_513_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_513_LOG' => 'Trouvé "var_dump" dans %s à la ligne %s',
  'LBL_SCAN_513_TITLE' => 'Trouvé "var_dump" dans %s à la ligne %s',
  'LBL_SCAN_514_DESCR' => 'Le code contient une fonction affichant de l&#39;information',
  'LBL_SCAN_514_LOG' => 'Trouvé output buffering (%s) dans %s à la ligne %s',
  'LBL_SCAN_514_TITLE' => 'Trouvé output buffering (%s) dans %s à la ligne %s',
  'LBL_SCAN_515_DESCR' => 'Le script de validation a échoué, ce qui signifie que instaScannerMeta.php contient probablement du mauvais code PHP que le script a essayé de charger.',
  'LBL_SCAN_515_LOG' => 'Échec script: %s',
  'LBL_SCAN_515_TITLE' => 'Échec script: %s',
  'LBL_SCAN_516_LOG' => 'Référence vers des fichiers précédemment supprimés trouvé dans: %s',
  'LBL_SCAN_517_DESCR' => 'Package détecté et qui a été marqué comme non supporté par Sugar 7',
  'LBL_SCAN_517_LOG' => 'Intégration incompatible - %s %s',
  'LBL_SCAN_517_TITLE' => 'Intégration incompatible - %s %s',
  'LBL_SCAN_518_DESCR' => 'Les vardefs contient du customCode utilisateur que nous ne savons pas convertir.',
  'LBL_SCAN_518_LOG' => 'CustomCode trouvé %s dans %s',
  'LBL_SCAN_518_TITLE' => 'CustomCode trouvé %s dans %s',
  'LBL_SCAN_519_DESCR' => 'Module standard Sugar a une des extensions qui ne sont pas supportés par l&#39;upgrade, comme le routing custom, access control, Javascript, etc.',
  'LBL_SCAN_519_LOG' => 'Répertoire d&#39;extension %s détecté',
  'LBL_SCAN_519_TITLE' => 'Répertoire d&#39;extension %s détecté',
  'LBL_SCAN_520_DESCR' => 'Ce logic hook n&#39;est plus supporté dans Sugar 7',
  'LBL_SCAN_520_LOG' => 'Logic hook after_ui_frame détecté',
  'LBL_SCAN_520_TITLE' => 'Logic hook after_ui_frame détecté',
  'LBL_SCAN_521_DESCR' => 'Ce logic hook n&#39;est plus supporté dans Sugar 7',
  'LBL_SCAN_521_LOG' => 'Logic hook after_ui_footer détecté',
  'LBL_SCAN_521_TITLE' => 'Logic hook after_ui_footer détecté',
  'LBL_SCAN_522_DESCR' => 'Les données du sous panel sont récupérées avec une fonction, cette fonctionnalité ne peut pas être migrée actuellement.',
  'LBL_SCAN_522_LOG' => 'Trouvé &#39;get_subpanel_data&#39; avec la valeur &#39;function:&#39; dans %s',
  'LBL_SCAN_522_TITLE' => 'Trouvé &#39;get_subpanel_data&#39; avec la valeur &#39;function:&#39; dans %s',
  'LBL_SCAN_523_DESCR' => 'Les anciens fichiers logic hook utilisent des paramètres passés en référence, qui peuvent générer des messages d&#39;erreur à l&#39;affichage (et par conséquent provoquer des erreurs REST)',
  'LBL_SCAN_523_LOG' => 'Paramètre en référence dans le fichier hook %s fonction %s',
  'LBL_SCAN_523_TITLE' => 'Paramètre en référence dans le fichier hook %s fonction %s',
  'LBL_SCAN_524_DESCR' => 'Champ défini comme fonction générant du HTML et qui ne peut pas être convertie automatiquement (nous savons comment convertir certains champs standard comme email ou devise)',
  'LBL_SCAN_524_LOG' => 'Fonction HTML dans le Vardef %s dans le module $module pour le champ %s',
  'LBL_SCAN_524_TITLE' => 'Fonction HTML dans le Vardef %s dans le module $module pour le champ %s',
  'LBL_SCAN_525_DESCR' => 'Le vardef défini que enum est le résultat d&#39;une fonction HTML, ceci n&#39;est plus supporté dans Sugar 7',
  'LBL_SCAN_525_LOG' => 'Fonction vardef HTML dans %s',
  'LBL_SCAN_525_TITLE' => 'Fonction vardef HTML dans %s',
  'LBL_SCAN_526_DESCR' => 'Cette liste contient des options qui empêchent la mise à jour.',
  'LBL_SCAN_526_LOG' => 'Mauvais vardefs - champ à choix multiple &#39;%s&#39; avec la liste des options &#39;%s&#39; contient des clefs avec des caractères incompatibles - &#39;{%s}&#39;',
  'LBL_SCAN_526_TITLE' => 'Mauvais vardefs - champ à choix multiple &#39;%s&#39; avec la liste des options &#39;%s&#39; contient des clefs avec des caractères incompatibles - &#39;{%s}&#39;',
  'LBL_SCAN_527_LOG' => 'Nom de table dans bean %s ne correspond pas au paramètre table dans %s/vardefs.php',
  'LBL_SCAN_528_DESCR' => 'Le champ de type Date/Datetime/Time a la valeur incorrecte -none- pour le paramètre display_default',
  'LBL_SCAN_528_LOG' => 'Le champ %s du module %s a une valeur incorrecte pour le paramètre display_default',
  'LBL_SCAN_528_TITLE' => 'Le champ %s du module %s a une valeur incorrecte pour le paramètre display_default',
  'LBL_SCAN_529_DESCR' => 'Les erreurs PHP peuvent être interceptées par l’interpréteur PHP lorsque une syntaxe PHP incorrectes est présente ou lorsqu&#39;un problème survient lors de l&#39;exécution.',
  'LBL_SCAN_529_LOG' => '%s: %s dans le fichier %s à la ligne %s',
  'LBL_SCAN_529_TITLE' => '%s: %s dans le fichier %s à la ligne %s',
  'LBL_SCAN_530_DESCR' => 'Un des fichiers customs n&#39;est pas présent sur l&#39;instance, cependant il est utilisé par du code custom.',
  'LBL_SCAN_530_LOG' => 'Fichier custom manquant: %s',
  'LBL_SCAN_530_TITLE' => 'Fichier custom manquant: %s',
  'LBL_SCAN_901_DESCR' => 'Instance déjà migrée en Sugar 7',
  'LBL_SCAN_901_LOG' => 'Instance déjà migrée en Sugar 7',
  'LBL_SCAN_901_TITLE' => 'Instance déjà migré en Sugar 7',
  'LBL_SCAN_999_DESCR' => 'Erreur inconnue, merci de consulter notre support',
  'LBL_SCAN_999_LOG' => 'Erreur inconnue, merci de consulter votre support',
  'LBL_SCAN_999_TITLE' => 'Erreur inconnue, merci de consulter le support',
);

