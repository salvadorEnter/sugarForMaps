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
/*********************************************************************************

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Campaigns module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/


require_once('include/MVC/View/views/view.detail.php');

class ProductsViewDetail extends ViewDetail {

 	function ProductsViewDetail(){
 		parent::ViewDetail();
 	}
 	
 	function display() {
	    
	    $currency = BeanFactory::getBean('Currencies');
	    if(isset($this->bean->currency_id) && !empty($this->bean->currency_id))
	    {
	    	$currency->retrieve($this->bean->currency_id);
	    	if( $currency->deleted != 1){
	    		$this->ss->assign('CURRENCY', $currency->iso4217 .' '.$currency->symbol);
	    	}else {
	    	    $this->ss->assign('CURRENCY', $currency->getDefaultISO4217() .' '.$currency->getDefaultCurrencySymbol());	
	    	}
	    }else{
	    	$this->ss->assign('CURRENCY', $currency->getDefaultISO4217() .' '.$currency->getDefaultCurrencySymbol());
	    }
	   	    
 		parent::display();
 	}
}
