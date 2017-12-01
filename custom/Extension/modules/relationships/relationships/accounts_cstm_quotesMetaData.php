<?php
// created: 2012-01-17 10:46:03
$dictionary["accounts_cstm_quotes"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_cstm_quotes' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_quotes',
      'rhs_table' => 'cstm_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_cstm_quotes_c',
      'join_key_lhs' => 'accounts_cbda7ccounts_ida',
      'join_key_rhs' => 'accounts_c8a01_quotes_idb',
    ),
  ),
  'table' => 'accounts_cstm_quotes_c',
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
      'name' => 'accounts_cbda7ccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_c8a01_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_cstm_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_cstm_quotes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_cbda7ccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_cstm_quotes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_c8a01_quotes_idb',
      ),
    ),
  ),
);
?>
