<?php
// created: 2012-01-16 00:58:14
$dictionary["cstm_quotes_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cstm_quotes_opportunities' => 
    array (
      'lhs_module' => 'cstm_quotes',
      'lhs_table' => 'cstm_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_quotespportunities_c',
      'join_key_lhs' => 'cstm_quote000f_quotes_ida',
      'join_key_rhs' => 'cstm_quote38b0unities_idb',
    ),
  ),
  'table' => 'cstm_quotespportunities_c',
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
      'name' => 'cstm_quote000f_quotes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_quote38b0unities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_quotes_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_quotes_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_quote000f_quotes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_quotes_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cstm_quote38b0unities_idb',
      ),
    ),
  ),
);
?>
