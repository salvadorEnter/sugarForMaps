<?php
 // created: 2019-04-15 17:19:11
$dictionary['Account']['fields']['curp_c']['labelValue'] = 'CURP';
$dictionary['Account']['fields']['curp_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['curp_c']['full_text_search']['searchable'] = true;
$dictionary['Account']['fields']['curp_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['curp_c']['enforced'] = '';
$dictionary['Account']['fields']['curp_c']['dependency'] = 'not(equal($tipodepersona_c,"Persona Moral"))';

