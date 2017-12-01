<?php
// created: 2011-11-30 13:12:32
$dictionary["opportunities_cstm_quotes"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_cstm_quotes' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_quotes',
      'rhs_table' => 'cstm_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportuniti_cstm_quotes_c',
      'join_key_lhs' => 'opportunit993funities_ida',
      'join_key_rhs' => 'opportunit84a8_quotes_idb',
    ),
  ),
  'table' => 'opportuniti_cstm_quotes_c',
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
      'name' => 'opportunit993funities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunit84a8_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_cstm_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_cstm_quotes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunit993funities_ida',
        1 => 'opportunit84a8_quotes_idb',
      ),
    ),
  ),
);
?>
