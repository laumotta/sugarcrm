<?php
// created: 2012-01-02 12:43:40
$dictionary["cstm_quotes_activities_calls"] = array (
  'relationships' => 
  array (
    'cstm_quotes_activities_calls' => 
    array (
      'lhs_module' => 'cstm_quotes',
      'lhs_table' => 'cstm_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'cstm_quotes',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
?>
