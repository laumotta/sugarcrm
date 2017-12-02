<?php
$module_name = 'cstm_products';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'clave_c',
            'label' => 'LBL_CLAVE',
          ),
          1 => 
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
        ),
        1 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'list_price_c',
            'label' => 'LBL_LIST_PRICE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'quantity_c',
            'label' => 'LBL_QUANTITY',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'unite_price_c',
            'label' => 'LBL_UNITE_PRICE',
          ),
          1 => 
          array (
            'name' => 'expiration_c',
            'label' => 'LBL_EXPIRATION',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'commission_dist_c',
            'label' => 'LBL_COMMISSION_DIST',
          ),
          1 => 
          array (
            'name' => 'commission_net_c',
            'label' => 'LBL_COMMISSION_NET',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'multilevel_c',
            'studio' => 'visible',
            'label' => 'LBL_MULTILEVEL',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'sheet_c',
            'studio' => 'visible',
            'label' => 'LBL_SHEET',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
        9 => 
        array (
          0 => 'assigned_user_name',
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'cstm_paquetes_cstm_products_name',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'cstm_paquetes_cstm_products_name',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'clave_unidad_estandar_c',
            'studio' => 'visible',
            'label' => 'LBL_CLAVE_UNIDAD_ESTANDAR',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'clave_producto_c',
            'studio' => 'visible',
            'label' => 'LBL_CLAVE_PRODUCTO',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
