<?php
// created: 2012-02-04 13:19:43
$dictionary["cstm_commissions_opportunities"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'cstm_commissions_opportunities' => 
    array (
      'lhs_module' => 'cstm_commissions',
      'lhs_table' => 'cstm_commissions',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_commispportunities_c',
      'join_key_lhs' => 'cstm_commi141cissions_ida',
      'join_key_rhs' => 'cstm_commie7a1unities_idb',
    ),
  ),
  'table' => 'cstm_commispportunities_c',
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
      'name' => 'cstm_commi141cissions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_commie7a1unities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_commis_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_commis_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_commi141cissions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_commis_opportunities_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_commie7a1unities_idb',
      ),
    ),
  ),
);
?>
