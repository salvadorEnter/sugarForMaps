<?php
 // created: 2018-02-16 16:59:02
$dictionary['Account']['fields']['tct_nombre_pm_c']['labelValue'] = 'Nombre de la persona que ocupa el puesto';
$dictionary['Account']['fields']['tct_nombre_pm_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['tct_nombre_pm_c']['full_text_search']['searchable'] = false;
$dictionary['Account']['fields']['tct_nombre_pm_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['tct_nombre_pm_c']['enforced'] = '';
$dictionary['Account']['fields']['tct_nombre_pm_c']['dependency'] = 'equal($ctpldaccionistasconyuge_c,true)';

