<?php
 // created: 2019-04-15 17:19:11
$dictionary['Account']['fields']['primernombre_c']['labelValue'] = 'Primer Nombre';
$dictionary['Account']['fields']['primernombre_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['primernombre_c']['full_text_search']['searchable'] = true;
$dictionary['Account']['fields']['primernombre_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['primernombre_c']['enforced'] = 'false';
$dictionary['Account']['fields']['primernombre_c']['dependency'] = 'not(equal($tipodepersona_c,"Persona Moral"))';

