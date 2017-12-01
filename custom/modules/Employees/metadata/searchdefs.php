<?php
$searchdefs ['Employees'] = 
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
      'reports_to_name' => 
      array (
        'type' => 'relate',
        'label' => 'LBL_REPORTS_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'reports_to_name',
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
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
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
      'reports_to_name' => 
      array (
        'type' => 'relate',
        'label' => 'LBL_REPORTS_TO_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'reports_to_name',
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
      'accounts_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNTS',
        'width' => '10%',
        'name' => 'accounts_c',
      ),
      'employee_status' => 
      array (
        'name' => 'employee_status',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'status',
      ),
      'title' => 
      array (
        'name' => 'title',
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
      'department' => 
      array (
        'name' => 'department',
        'default' => true,
        'width' => '10%',
      ),
      'email1' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_EMAIL',
        'width' => '10%',
        'default' => true,
        'name' => 'email1',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
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
      'ife_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_IFE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'ife_c',
      ),
      'cv_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CV',
        'sortable' => false,
        'width' => '10%',
        'name' => 'cv_c',
      ),
      'address_proof_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ADDRESS_PROOF',
        'sortable' => false,
        'width' => '10%',
        'name' => 'address_proof_c',
      ),
      'curp_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CURP',
        'sortable' => false,
        'width' => '10%',
        'name' => 'curp_c',
      ),
      'birth_cert_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_BIRTH_CERT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'birth_cert_c',
      ),
      'employment_app_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_EMPLOYMENT_APP',
        'sortable' => false,
        'width' => '10%',
        'name' => 'employment_app_c',
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
      'confidentiality_agr_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONFIDENTIALITY_AGR',
        'sortable' => false,
        'width' => '10%',
        'name' => 'confidentiality_agr_c',
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
