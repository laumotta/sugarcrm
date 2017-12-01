<?php
// created: 2015-06-17 18:39:05
$dictionary["cstm_paquetes_cstm_products"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cstm_paquetes_cstm_products' => 
    array (
      'lhs_module' => 'cstm_Paquetes',
      'lhs_table' => 'cstm_paquetes',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_products',
      'rhs_table' => 'cstm_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_paquetstm_products_c',
      'join_key_lhs' => 'cstm_paquea136aquetes_ida',
      'join_key_rhs' => 'cstm_paque262broducts_idb',
    ),
  ),
  'table' => 'cstm_paquetstm_products_c',
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
      'name' => 'cstm_paquea136aquetes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_paque262broducts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_paquet_cstm_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_paquet_cstm_products_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_paquea136aquetes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_paquet_cstm_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cstm_paque262broducts_idb',
      ),
    ),
  ),
);
?>
