<?php
 // created: 2018-02-16 16:59:02
$dictionary['Account']['fields']['estatus_referenciador_c']['labelValue'] = 'Estatus de referenciador';
$dictionary['Account']['fields']['estatus_referenciador_c']['dependency'] = 'and(or(equal($tipo_registro_c,"Proveedor"),equal($esproveedor_c,true)),equal($es_referenciador_c,true))';
$dictionary['Account']['fields']['estatus_referenciador_c']['visibility_grid'] = '';
$dictionary['Account']['fields']['estatus_referenciador_c']['full_text_search']['boost'] = 1;

