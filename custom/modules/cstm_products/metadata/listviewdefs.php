<?php
$module_name = 'cstm_products';
$listViewDefs [$module_name] = 
array (
  'CLAVE_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_CLAVE',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CATEGORY_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CATEGORY',
    'sortable' => false,
    'width' => '10%',
  ),
  'LIST_PRICE_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_LIST_PRICE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'UNITE_PRICE_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'label' => 'LBL_UNITE_PRICE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'APP_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_APP',
    'sortable' => false,
    'width' => '10%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'modified_user_link',
    'label' => 'LBL_MODIFIED_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'EXPIRATION_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_EXPIRATION',
    'width' => '10%',
  ),
  'CSTM_PAQUETES_CSTM_PRODUCTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cstm_paquetes_cstm_products',
    'label' => 'LBL_CSTM_PAQUETES_CSTM_PRODUCTS_FROM_CSTM_PAQUETES_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'SERIAL_NUMBER_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SERIAL_NUMBER',
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'QUANTITY_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
  ),
);
?>
