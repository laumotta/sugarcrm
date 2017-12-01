<?php
// created: 2012-10-05 17:49:23
$dictionary["cstm_contracts_cstm_contracts"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'cstm_contracts_cstm_contracts' => 
    array (
      'lhs_module' => 'cstm_contracts',
      'lhs_table' => 'cstm_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_contracts',
      'rhs_table' => 'cstm_contracts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_contratm_contracts_c',
      'join_key_lhs' => 'cstm_contr77cbntracts_ida',
      'join_key_rhs' => 'cstm_contread3ntracts_idb',
    ),
  ),
  'table' => 'cstm_contratm_contracts_c',
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
      'name' => 'cstm_contr77cbntracts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_contread3ntracts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_contracstm_contractsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_contracstm_contracts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_contr77cbntracts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_contracstm_contracts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_contread3ntracts_idb',
      ),
    ),
  ),
);
?>
