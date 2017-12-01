<?php
// created: 2012-01-21 13:26:01
$dictionary["cstm_reports_cstm_parameters"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cstm_reports_cstm_parameters' => 
    array (
      'lhs_module' => 'cstm_reports',
      'lhs_table' => 'cstm_reports',
      'lhs_key' => 'id',
      'rhs_module' => 'cstm_parameters',
      'rhs_table' => 'cstm_parameters',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cstm_reportm_parameters_c',
      'join_key_lhs' => 'cstm_repor0b1breports_ida',
      'join_key_rhs' => 'cstm_reporb7cdameters_idb',
    ),
  ),
  'table' => 'cstm_reportm_parameters_c',
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
      'name' => 'cstm_repor0b1breports_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cstm_reporb7cdameters_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cstm_reportstm_parametersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cstm_reportstm_parameters_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cstm_repor0b1breports_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cstm_reportstm_parameters_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cstm_reporb7cdameters_idb',
      ),
    ),
  ),
);
?>
