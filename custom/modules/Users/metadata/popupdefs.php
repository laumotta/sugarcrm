<?php
$popupMeta = array (
    'moduleMain' => 'User',
    'varName' => 'USER',
    'orderBy' => 'user_name',
    'whereClauses' => array (
  'first_name' => 'users.first_name',
  'last_name' => 'users.last_name',
  'user_name' => 'users.user_name',
  'is_group' => 'users.is_group',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'user_name',
  3 => 'is_group',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'last_name',
      1 => 'first_name',
    ),
    'orderBy' => 'last_name',
    'default' => true,
    'name' => 'name',
  ),
  'USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_USER_NAME',
    'link' => true,
    'default' => true,
    'name' => 'user_name',
  ),
  'LEVEL_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_LEVEL',
    'sortable' => false,
    'width' => '10%',
    'name' => 'level_c',
  ),
  'ACCOUNT_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'width' => '10%',
    'name' => 'account_c',
  ),
  'REPORTS_TO_NAME' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_REPORTS_TO_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'reports_to_name',
  ),
  'EMAIL1' => 
  array (
    'width' => '30%',
    'sortable' => false,
    'label' => 'LBL_LIST_EMAIL',
    'link' => true,
    'default' => true,
    'name' => 'email1',
  ),
  'PHONE_WORK' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_PHONE',
    'link' => true,
    'default' => true,
    'name' => 'phone_work',
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'link' => false,
    'default' => true,
    'name' => 'status',
  ),
  'IS_ADMIN' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ADMIN',
    'link' => false,
    'default' => true,
    'name' => 'is_admin',
  ),
  'IS_GROUP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_GROUP',
    'link' => true,
    'default' => false,
    'name' => 'is_group',
  ),
  'RECEIVE_NOTIFICATIONS' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_RECEIVE_NOTIFICATIONS',
    'width' => '10%',
    'name' => 'receive_notifications',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
    'name' => 'date_entered',
  ),
  'ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_POSTALCODE',
    'width' => '10%',
    'default' => false,
    'name' => 'address_postalcode',
  ),
  'ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_STATE',
    'width' => '10%',
    'default' => false,
    'name' => 'address_state',
  ),
  'PHONE_FAX' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_FAX_PHONE',
    'width' => '10%',
    'default' => false,
    'name' => 'phone_fax',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MODIFIED_BY',
    'width' => '10%',
    'default' => false,
    'name' => 'modified_by_name',
  ),
  'PHONE_OTHER' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OTHER_PHONE',
    'width' => '10%',
    'default' => false,
    'name' => 'phone_other',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'varchar',
    'label' => 'created_by_name',
    'width' => '10%',
    'default' => false,
    'name' => 'created_by_name',
  ),
  'PHONE_MOBILE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_MOBILE_PHONE',
    'width' => '10%',
    'default' => false,
    'name' => 'phone_mobile',
  ),
  'PHONE_HOME' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_HOME_PHONE',
    'width' => '10%',
    'default' => false,
    'name' => 'phone_home',
  ),
  'DEPARTMENT' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DEPARTMENT',
    'link' => true,
    'default' => false,
    'name' => 'department',
  ),
),
);
