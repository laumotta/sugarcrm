<?php
$searchdefs ['Users'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'account_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT',
        'width' => '10%',
        'name' => 'account_c',
      ),
      'level_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LEVEL',
        'sortable' => false,
        'width' => '10%',
        'name' => 'level_c',
      ),
      'address_city' => 
      array (
        'type' => 'name',
        'label' => 'LBL_ADDRESS_CITY',
        'default' => true,
        'width' => '10%',
        'name' => 'address_city',
      ),
      'address_state' => 
      array (
        'type' => 'name',
        'label' => 'LBL_ADDRESS_STATE',
        'default' => true,
        'width' => '10%',
        'name' => 'address_state',
      ),
      'address_postalcode' => 
      array (
        'type' => 'name',
        'label' => 'LBL_ADDRESS_POSTALCODE',
        'default' => true,
        'width' => '10%',
        'name' => 'address_postalcode',
      ),
      'department' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_DEPARTMENT',
        'name' => 'department',
      ),
      'reports_to_name' => 
      array (
        'type' => 'relate',
        'label' => 'LBL_REPORTS_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'reports_to_name',
      ),
      'por_vender_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_POR_VENDER',
        'width' => '10%',
        'name' => 'por_vender_c',
      ),
    ),
    'advanced_search' => 
    array (
      'first_name' => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10%',
      ),
      'last_name' => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10%',
      ),
      'user_name' => 
      array (
        'name' => 'user_name',
        'default' => true,
        'width' => '10%',
      ),
      'level_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_LEVEL',
        'sortable' => false,
        'width' => '10%',
        'name' => 'level_c',
      ),
      'reports_to_name' => 
      array (
        'type' => 'relate',
        'label' => 'LBL_REPORTS_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'reports_to_name',
      ),
      'account_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT',
        'width' => '10%',
        'name' => 'account_c',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'is_admin' => 
      array (
        'name' => 'is_admin',
        'default' => true,
        'width' => '10%',
      ),
      'title' => 
      array (
        'name' => 'title',
        'default' => true,
        'width' => '10%',
      ),
      'is_group' => 
      array (
        'name' => 'is_group',
        'default' => true,
        'width' => '10%',
      ),
      'department' => 
      array (
        'name' => 'department',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_postalcode' => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_country' => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'por_vender_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_POR_VENDER',
        'width' => '10%',
        'name' => 'por_vender_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
