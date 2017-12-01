<?php
$listViewDefs ['Bugs'] = 
array (
  'BUG_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_NUMBER',
    'link' => true,
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_LIST_SUBJECT',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
  ),
  'PRODUCT_CATEGORY' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_PRODUCT_CATEGORY',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_TYPE',
    'default' => true,
  ),
  'PRIORITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PRIORITY',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'RESOLUTION' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_RESOLUTION',
    'default' => false,
  ),
);
?>
