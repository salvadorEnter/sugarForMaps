<?php
 // created: 2019-04-15 17:19:11
$dictionary['Opportunity']['fields']['ri_instrumento_moratorio_c']['labelValue'] = 'Instrumento interés moratorio (Ratificación)';
$dictionary['Opportunity']['fields']['ri_instrumento_moratorio_c']['dependency'] = 'and(equal($tipo_operacion_c,"2"),equal($ratificacion_incremento_c,"1"),equal($tipo_producto_c,"4"))';
$dictionary['Opportunity']['fields']['ri_instrumento_moratorio_c']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['ri_instrumento_moratorio_c']['full_text_search']['boost'] = 1;

