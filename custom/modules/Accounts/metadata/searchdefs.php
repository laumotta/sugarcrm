<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'rfc_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RFC',
        'width' => '10%',
        'name' => 'rfc_c',
      ),
      'phone' => 
      array (
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
        'name' => 'phone',
      ),
      'email' => 
      array (
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
        'name' => 'email',
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
      'rfc_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_RFC',
        'width' => '10%',
        'name' => 'rfc_c',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'parent_name' => 
      array (
        'type' => 'relate',
        'link' => 'member_of',
        'label' => 'LBL_MEMBER_OF',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'customer_id_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_CUSTOMER_ID',
        'width' => '10%',
        'name' => 'customer_id_c',
      ),
      'sic_code' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SIC_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'sic_code',
      ),
      'consumption_level_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CONSUMPTION_LEVEL',
        'sortable' => false,
        'width' => '10%',
        'name' => 'consumption_level_c',
      ),
      'anual_consumption_level_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ANUAL_CONSUMPTION_LEVEL_C',
        'sortable' => false,
        'width' => '10%',
        'name' => 'anual_consumption_level_c',
      ),
      'proxima_recarga_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PROXIMA_RECARGA',
        'width' => '10%',
        'name' => 'proxima_recarga_c',
      ),
      'saved_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_SAVED',
        'width' => '10%',
        'name' => 'saved_c',
      ),
      'billing_address_state' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BILLING_ADDRESS_STATE',
        'width' => '10%',
        'default' => true,
        'name' => 'billing_address_state',
      ),
      'website' => 
      array (
        'name' => 'website',
        'default' => true,
        'width' => '10%',
      ),
      'status_install_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_STATUS_INSTALL',
        'width' => '10%',
        'name' => 'status_install_c',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type_service_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_SERVICE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type_service_c',
      ),
      'phone_office' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_OFFICE',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_office',
      ),
      'phone_alternate' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_PHONE_ALT',
        'width' => '10%',
        'default' => true,
        'name' => 'phone_alternate',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'rating' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_RATING',
        'width' => '10%',
        'default' => true,
        'name' => 'rating',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'billing_address_postalcode' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
        'width' => '10%',
        'default' => true,
        'name' => 'billing_address_postalcode',
      ),
      'billing_address_city' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BILLING_ADDRESS_CITY',
        'width' => '10%',
        'default' => true,
        'name' => 'billing_address_city',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
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
      'billing_address_country' => 
      array (
        'name' => 'billing_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      'account_type' => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
      ),
      'industry' => 
      array (
        'name' => 'industry',
        'default' => true,
        'width' => '10%',
      ),
      'type_customer_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYPE_CUSTOMER',
        'sortable' => false,
        'width' => '10%',
        'name' => 'type_customer_c',
      ),
      'account_category_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT_CATEGORY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'account_category_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'status_c',
      ),
      'support_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SUPPORT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'support_c',
      ),
      'events_support_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_EVENTS_SUPPORT',
        'width' => '10%',
        'name' => 'events_support_c',
      ),
      'support_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SUPPORT_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'support_status_c',
      ),
      'resguardo_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RESGUARDO_STATUS_C',
        'sortable' => false,
        'width' => '10%',
        'name' => 'resguardo_status_c',
      ),
      'almacen_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ALMACEN_STATUS_C',
        'sortable' => false,
        'width' => '10%',
        'name' => 'almacen_status_c',
      ),
      'cuenta_padre_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CUENTA_PADRE',
        'width' => '10%',
        'name' => 'cuenta_padre_c',
      ),
      'cuenta_hija_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_CUENTA_HIJA',
        'width' => '10%',
        'name' => 'cuenta_hija_c',
      ),
      'aci_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACI_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'aci_status_c',
      ),
      'promocion_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PROMOCION',
        'width' => '10%',
        'name' => 'promocion_c',
      ),
      'funcionalidad_basica_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FUNCIONALIDAD_BASICA',
        'width' => '10%',
        'name' => 'funcionalidad_basica_c',
      ),
      'servicios_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SERVICIOS_C',
        'width' => '10%',
        'name' => 'servicios_c',
      ),
      'send_campaign_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SEND_CAMPAIGN',
        'sortable' => false,
        'width' => '10%',
        'name' => 'send_campaign_c',
      ),
      'mark_for_process_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MARK_FOR_PROCESS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'mark_for_process_c',
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
