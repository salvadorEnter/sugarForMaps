<?php
 // created: 2019-04-15 17:19:11
$dictionary['Opportunity']['fields']['amount']['required'] = false;
$dictionary['Opportunity']['fields']['amount']['audited'] = false;
$dictionary['Opportunity']['fields']['amount']['massupdate'] = false;
$dictionary['Opportunity']['fields']['amount']['type'] = 'currency';
$dictionary['Opportunity']['fields']['amount']['dbType'] = 'currency';
$dictionary['Opportunity']['fields']['amount']['comments'] = 'Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge'] = 'enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value'] = '1';
$dictionary['Opportunity']['fields']['amount']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['amount']['calculated'] = true;
$dictionary['Opportunity']['fields']['amount']['formula'] = 'rollupConditionalSum($revenuelineitems, "likely_case", "sales_stage", forecastSalesStages(true, false))';
$dictionary['Opportunity']['fields']['amount']['enforced'] = '';
$dictionary['Opportunity']['fields']['amount']['related_fields'][0] = 'currency_id';
$dictionary['Opportunity']['fields']['amount']['related_fields'][1] = 'base_rate';
$dictionary['Opportunity']['fields']['amount']['validation']['type'] = 'range';
$dictionary['Opportunity']['fields']['amount']['validation']['min'] = 0;
$dictionary['Opportunity']['fields']['amount']['validation']['max'] = 1.0E+18;

