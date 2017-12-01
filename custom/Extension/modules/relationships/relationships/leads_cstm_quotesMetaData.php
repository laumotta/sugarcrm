<?php
// created: 2015-05-26 13:37:44
$dictionary["leads_cstm_quotes"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'leads_cstm_quotes' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_quotes',
      'rhs_table' => 'cstm_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'leads_cstm_quotes_c',
      'join_key_lhs' => 'leads_cstmacf5esleads_ida',
      'join_key_rhs' => 'leads_cstmceba_quotes_idb',
    ),
  ),
  'table' => 'leads_cstm_quotes_c',
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
      'name' => 'leads_cstmacf5esleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'leads_cstmceba_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'leads_cstm_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'leads_cstm_quotes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'leads_cstmacf5esleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'leads_cstm_quotes_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'leads_cstmceba_quotes_idb',
      ),
    ),
  ),
);
?>
