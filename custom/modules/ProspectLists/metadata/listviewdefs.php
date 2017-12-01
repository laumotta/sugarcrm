<?php
$listViewDefs ['ProspectLists'] = 
array (
  'NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_PROSPECT_LIST_NAME',
    'link' => true,
    'default' => true,
  ),
  'LIST_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TYPE_LIST_NAME',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'width' => '50%',
    'label' => 'LBL_LIST_DESCRIPTION',
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
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ENTRY_COUNT' => 
  array (
    'type' => 'int',
    'label' => 'LBL_LIST_ENTRIES',
    'width' => '10%',
    'default' => true,
  ),
);
?>
