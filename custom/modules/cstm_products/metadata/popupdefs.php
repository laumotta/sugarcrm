<?php
$popupMeta = array (
    'moduleMain' => 'cstm_products',
    'varName' => 'cstm_products',
    'orderBy' => 'cstm_products.name',
    'whereClauses' => array (
  'name' => 'cstm_products.name',
  'assigned_user_id' => 'cstm_products.assigned_user_id',
  'category_c' => 'cstm_products_cstm.category_c',
  'status_c' => 'cstm_products_cstm.status_c',
  'app_c' => 'cstm_products_cstm.app_c',
  'multilevel_c' => 'cstm_products_cstm.multilevel_c',
  'cstm_paquetes_cstm_products_name' => 'cstm_products.cstm_paquetes_cstm_products_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'assigned_user_id',
  5 => 'category_c',
  6 => 'status_c',
  7 => 'app_c',
  8 => 'multilevel_c',
  9 => 'cstm_paquetes_cstm_products_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
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
  'category_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'category_c',
  ),
  'status_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
    'name' => 'status_c',
  ),
  'app_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_APP',
    'sortable' => false,
    'width' => '10%',
    'name' => 'app_c',
  ),
  'multilevel_c' => 
  array (
    'type' => 'enum',
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
    'name' => 'cstm_paquetes_cstm_products_name',
  ),
),
);
