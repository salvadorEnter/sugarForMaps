<?php
 // created: 2018-12-05 18:17:34
$dictionary['Opportunity']['fields']['tct_sin_prod_financiero_ddw_c']['labelValue'] = '¿Qué producto?';
$dictionary['Opportunity']['fields']['tct_sin_prod_financiero_ddw_c']['dependency'] = 'and(
equal($tct_razon_op_perdida_ddw_c,"NPR"),
equal($tct_oportunidad_perdida_chk_c,true))';
$dictionary['Opportunity']['fields']['tct_sin_prod_financiero_ddw_c']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['tct_sin_prod_financiero_ddw_c']['full_text_search']['boost'] = 1;

