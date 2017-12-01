<?php
$module_name = 'cstm_products';
$searchdefs [$module_name] = 
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
      'clave_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_CLAVE',
        'width' => '10%',
        'name' => 'clave_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'revised_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_REVISED',
        'width' => '10%',
        'name' => 'revised_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'revised_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_REVISED',
        'width' => '10%',
        'name' => 'revised_c',
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
        'default' => true,
        'width' => '10%',
      ),
      'category_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'category_c',
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
      'app_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_APP',
        'sortable' => false,
        'width' => '10%',
        'name' => 'app_c',
      ),
      'multilevel_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_MULTILEVEL',
        'sortable' => false,
        'width' => '10%',
        'name' => 'multilevel_c',
      ),
      'cstm_paquetes_cstm_products_name' => 
      array (
        'type' => 'relate',
        'link' => 'cstm_paquetes_cstm_products',
        'label' => 'LBL_CSTM_PAQUETES_CSTM_PRODUCTS_FROM_CSTM_PAQUETES_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cstm_paquetes_cstm_products_name',
      ),
      'invoice_store_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_INVOICE_STORE',
        'width' => '10%',
        'name' => 'invoice_store_c',
      ),
      'list_price_c' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_LIST_PRICE',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'list_price_c',
      ),
      'campaign_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CAMPAIGN',
        'width' => '10%',
        'name' => 'campaign_c',
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
