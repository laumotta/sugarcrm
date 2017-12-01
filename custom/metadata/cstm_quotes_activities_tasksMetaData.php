<?php
// created: 2012-01-02 12:43:40
$dictionary["cstm_quotes_activities_tasks"] = array (
  'relationships' => 
  array (
    'cstm_quotes_activities_tasks' => 
    array (
      'lhs_module' => 'cstm_quotes',
      'lhs_table' => 'cstm_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
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
