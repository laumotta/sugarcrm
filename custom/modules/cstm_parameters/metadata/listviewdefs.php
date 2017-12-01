<?php
$module_name = 'cstm_parameters';
$listViewDefs [$module_name] = 
array (
  'CSTM_REPORTS_CSTM_PARAMETERS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cstm_reports_cstm_parameters',
    'label' => 'LBL_CSTM_REPORTS_CSTM_PARAMETERS_FROM_CSTM_REPORTS_TITLE',
    'width' => '25%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'VALUE_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_VALUE',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'created_by_link',
    'label' => 'LBL_CREATED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
