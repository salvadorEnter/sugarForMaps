<?php
 // created: 2019-04-15 17:19:11
$dictionary['Account']['fields']['idcliente_c']['labelValue'] = 'ID Cliente';
$dictionary['Account']['fields']['idcliente_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['idcliente_c']['full_text_search']['searchable'] = true;
$dictionary['Account']['fields']['idcliente_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['idcliente_c']['enforced'] = '';
$dictionary['Account']['fields']['idcliente_c']['dependency'] = 'or(equal($tipo_registro_c,"Cliente"),equal($tipo_registro_c,"Proveedor"),equal($tipo_registro_c,"Persona"),equal($estatus_c,"Interesado"))';

