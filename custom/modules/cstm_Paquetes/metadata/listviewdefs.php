<?php
$module_name = 'cstm_Paquetes';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'PACK_AMOUNT_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_PACK_AMOUNT',
    'width' => '10%',
  ),
);
?>
