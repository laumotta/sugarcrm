<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'billing_address_city' => 'accounts.billing_address_city',
  'billing_address_state' => 'accounts.billing_address_state',
  'billing_address_country' => 'accounts.billing_address_country',
  'assigned_user_id' => 'accounts.assigned_user_id',
  'cuenta_hija_c' => 'accounts_cstm.cuenta_hija_c',
  'support_status_c' => 'accounts_cstm.support_status_c',
  'resguardo_status_c' => 'accounts_cstm.resguardo_status_c',
  'almacen_status_c' => 'accounts_cstm.almacen_status_c',
  'aci_status_c' => 'accounts_cstm.aci_status_c',
  'funcionalidad_basica_c' => 'accounts_cstm.funcionalidad_basica_c',
  'cuenta_padre_c' => 'accounts_cstm.cuenta_padre_c',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'billing_address_city',
  3 => 'billing_address_state',
  4 => 'billing_address_country',
  5 => 'assigned_user_id',
  6 => 'cuenta_hija_c',
  7 => 'support_status_c',
  8 => 'resguardo_status_c',
  9 => 'almacen_status_c',
  10 => 'aci_status_c',
  11 => 'funcionalidad_basica_c',
  12 => 'cuenta_padre_c',
),
    'create' => array (
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'billing_address_city' => 
  array (
    'name' => 'billing_address_city',
    'width' => '10%',
  ),
  'billing_address_state' => 
  array (
    'name' => 'billing_address_state',
    'width' => '10%',
  ),
  'billing_address_country' => 
  array (
    'name' => 'billing_address_country',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
  'cuenta_padre_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_CUENTA_PADRE',
    'width' => '10%',
    'name' => 'cuenta_padre_c',
  ),
  'cuenta_hija_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_CUENTA_HIJA',
    'width' => '10%',
    'name' => 'cuenta_hija_c',
  ),
  'support_status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SUPPORT_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'support_status_c',
  ),
  'resguardo_status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_RESGUARDO_STATUS_C',
    'sortable' => false,
    'width' => '10%',
    'name' => 'resguardo_status_c',
  ),
  'almacen_status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ALMACEN_STATUS_C',
    'sortable' => false,
    'width' => '10%',
    'name' => 'almacen_status_c',
  ),
  'aci_status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ACI_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'aci_status_c',
  ),
  'funcionalidad_basica_c' => 
  array (
    'type' => 'bool',
    'label' => 'LBL_FUNCIONALIDAD_BASICA',
    'width' => '10%',
    'name' => 'funcionalidad_basica_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => '10',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => false,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7',
    'label' => 'LBL_STATE',
    'default' => true,
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10',
    'label' => 'LBL_COUNTRY',
    'default' => true,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10',
    'label' => 'LBL_LIST_PHONE',
    'default' => false,
  ),
),
);
