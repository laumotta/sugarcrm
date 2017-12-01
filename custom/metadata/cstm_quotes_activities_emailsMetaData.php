<?php
// created: 2012-01-02 12:43:41
$dictionary["cstm_quotes_activities_emails"] = array (
  'relationships' => 
  array (
    'cstm_quotes_activities_emails' => 
    array (
      'lhs_module' => 'cstm_quotes',
      'lhs_table' => 'cstm_quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
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
