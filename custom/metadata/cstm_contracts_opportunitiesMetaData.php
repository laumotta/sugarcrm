<?php
// created: 2012-10-08 18:41:24
$dictionary["cstm_contracts_opportunities"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'cstm_contracts_opportunities' => 
    array (
      'lhs_module' => 'cstm_contracts',
      'lhs_table' => 'cstm_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_contrapportunities_c',
      'join_key_lhs' => 'cstm_contrdd87ntracts_ida',
      'join_key_rhs' => 'cstm_contr5745unities_idb',
    ),
  ),
  'table' => 'cstm_contrapportunities_c',
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
      'name' => 'cstm_contrdd87ntracts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_contr5745unities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_contra_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_contra_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_contrdd87ntracts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_contra_opportunities_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_contr5745unities_idb',
      ),
    ),
  ),
);
?>
