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
'LBL_NAME' => 'Job Name',
'LBL_EXECUTE_TIME'			=> 'Execute Time',
'LBL_SCHEDULER_ID' 	=> 'Scheduler',
'LBL_STATUS' 	=> 'Job Status',
'LBL_RESOLUTION' 	=> 'Result',
'LBL_MESSAGE' 	=> 'Messages',
'LBL_DATA' 	=> 'Job Data',
'LBL_REQUEUE' 	=> 'Retry on failure',
'LBL_RETRY_COUNT' 	=> 'Maximum retries',
'LBL_FAIL_COUNT' 	=> 'Failures',
'LBL_INTERVAL' 	=> 'Minimum interval between tries',
'LBL_CLIENT' 	=> 'Owning client',
'LBL_PERCENT'	=> 'Pecent complete',
'LBL_JOB_GROUP' => 'Job group',
// Errors
'ERR_CALL' 	=> "Cannot call function: %s",
'ERR_CURL' => "No CURL - cannot run URL jobs",
'ERR_FAILED' => "Unexpected failure, please check PHP logs and sugarcrm.log",
'ERR_PHP' => "%s [%d]: %s in %s on line %d",
'ERR_NOUSER' => "No User ID specified for the job",
'ERR_NOSUCHUSER' => "User ID %s not found",
'ERR_JOBTYPE' 	=> "Unknown job type: %s",
'ERR_TIMEOUT' => "Forced failure on timeout",
'ERR_JOB_FAILED_VERBOSE' => 'Job %1$s (%2$s) failed in CRON run',
);
