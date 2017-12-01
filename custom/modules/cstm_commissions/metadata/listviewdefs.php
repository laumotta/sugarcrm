<?php
$module_name = 'cstm_commissions';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '12%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'REPORTS_N1_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REPORTS_N1',
    'width' => '10%',
  ),
  'REPORTS_N2_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_REPORTS_N2',
    'width' => '10%',
  ),
  'CATEGORY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => false,
    'width' => '10%',
  ),
  'ACCOUNT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'width' => '10%',
  ),
  'CSTM_COMMISSIONS_OPPORTUNITIES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cstm_commissions_opportunities',
    'label' => 'LBL_CSTM_COMMISSIONS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'width' => '20%',
    'default' => true,
  ),
  'AMOUNT_CIVA_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_AMOUNT_CIVA',
    'width' => '10%',
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'M_RED_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_M_RED',
    'width' => '10%',
  ),
  'P_RED_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_P_RED',
    'width' => '10%',
  ),
  'AMOUNT_C' => 
  array (
    'type' => 'decimal',
    'default' => false,
    'label' => 'LBL_AMOUNT',
    'width' => '10%',
  ),
);
?>
