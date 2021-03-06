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

// $Id$

require_once("include/SugarCharts/JsChart.php");

class Jit extends JsChart {
	
	var $supports_image_export = true;
	var $print_html_legend_pdf = true;
	
	function __construct() {
		parent::__construct();
	}
	
	function getChartResources() {
		return '
		<script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/Jit/jit.js').'"></script>
		<script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/sugarCharts.js').'"></script>
		';
	}
	
	function getMySugarChartResources() {
		return '
		<script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/mySugarCharts.js').'"></script>
		';
	}
	

	function display($name, $xmlFile, $width='320', $height='480', $resize=false) {
	
		parent::display($name, $xmlFile, $width, $height, $resize);

		return $this->ss->fetch('include/SugarCharts/Jit/tpls/chart.tpl');	
	}
	

	function getDashletScript($id,$xmlFile="") {
		
		parent::getDashletScript($id,$xmlFile);
		return $this->ss->fetch('include/SugarCharts/Jit/tpls/DashletGenericChartScript.tpl');
	}
	
	

	
}

?>
