<?php

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

require_once('include/resource/Observers/ResourceObserver.php');

class SoapResourceObserver extends ResourceObserver {

private $soapServer;

    /**
     * @deprecated Use __construct() instead
     */
    public function SoapResourceObserver($module)
    {
        self::__construct($module);
    }

    public function __construct($module)
    {
        parent::__construct($module);
    }

/**
 * set_soap_server
 * This method accepts an instance of the nusoap soap server so that a proper
 * response can be returned when the notify method is triggered.
 * @param $server The instance of the nusoap soap server
 */
function set_soap_server(& $server) {
   $this->soapServer = $server;
}


/**
 * notify
 * Soap implementation to notify the soap clients of a resource management error
 * @param msg String message to possibly display
 */
public function notify($msg = '') {

header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error');
header('Content-Type: text/xml; charset="ISO-8859-1"');
$error = new SoapError();
$error->set_error('resource_management_error');
//Override the description
$error->description = $msg;
$this->soapServer->methodreturn = array('result'=>$msg, 'error'=>$error->get_soap_array());
$this->soapServer->serialize_return();	
$this->soapServer->send_response();
sugar_cleanup(true);

}	
	
}
