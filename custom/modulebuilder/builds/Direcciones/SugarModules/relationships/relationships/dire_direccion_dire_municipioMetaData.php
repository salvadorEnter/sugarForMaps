<?php
// created: 2015-06-23 20:29:51
$dictionary["dire_direccion_dire_municipio"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dire_direccion_dire_municipio' => 
    array (
      'lhs_module' => 'dire_Municipio',
      'lhs_table' => 'dire_municipio',
      'lhs_key' => 'id',
      'rhs_module' => 'dire_Direccion',
      'rhs_table' => 'dire_direccion',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dire_direccion_dire_municipio_c',
      'join_key_lhs' => 'dire_direccion_dire_municipiodire_municipio_ida',
      'join_key_rhs' => 'dire_direccion_dire_municipiodire_direccion_idb',
    ),
  ),
  'table' => 'dire_direccion_dire_municipio_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'dire_direccion_dire_municipiodire_municipio_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'dire_direccion_dire_municipiodire_direccion_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'dire_direccion_dire_municipiospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'dire_direccion_dire_municipio_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_municipiodire_municipio_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'dire_direccion_dire_municipio_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dire_direccion_dire_municipiodire_direccion_idb',
      ),
    ),
  ),
);