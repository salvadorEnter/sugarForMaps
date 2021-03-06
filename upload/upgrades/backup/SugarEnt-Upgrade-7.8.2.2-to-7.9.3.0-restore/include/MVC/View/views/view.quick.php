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

require_once('include/MVC/View/views/view.detail.php');

class ViewQuick extends ViewDetail{
	var $type ='detail';

    /**
     * @deprecated Use __construct() instead
     */
    public function ViewQuick()
    {
        self::__construct();
    }

    public function __construct()
    {
        parent::__construct();
 		$this->options['show_subpanels'] = false;
 		$this->options['show_title'] = false;
		$this->options['show_header'] = false;
		$this->options['show_footer'] = false; 
		$this->options['show_javascript'] = false; 
 	}
 	
 	function display(){
 		 $this->dv->showVCRControl = false;
 		 $this->dv->th->ss->assign('hideHeader', true);
 		 if(empty($this->bean->id)){
			global $app_strings;
			sugar_die($app_strings['ERROR_NO_RECORD']);
		}				
		$this->dv->process();
		ob_clean();
		echo json_encode(array('title'=> $this->bean->name, 'url'=>'index.php?module=' . $this->bean->module_dir . '&action=DetailView&record=' . $this->bean->id ,'html'=> $this->dv->display(false)));	
 	}
}
