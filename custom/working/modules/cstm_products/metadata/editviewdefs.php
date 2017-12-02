<?php
$module_name = 'cstm_products';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
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
            'name' => 'serial_number_c',
            'label' => 'LBL_SERIAL_NUMBER',
          ),
          1 => 
          array (
            'name' => 'quantity_c',
            'label' => 'LBL_QUANTITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'app_c',
            'studio' => 'visible',
            'label' => 'LBL_APP',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'unite_price_c',
            'label' => 'LBL_UNITE_PRICE',
            'customCode' => '
      <input type="text" name="{$fields.unite_price_c.name}" id="{$fields.unite_price_c.name}" value="{$fields.unite_price_c.value}" >
      ',
          ),
          1 => 
          array (
            'name' => 'expiration_c',
            'label' => 'LBL_EXPIRATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'commission_corp_c',
            'label' => 'LBL_COMMISSION_CORP',
          ),
          1 => 
          array (
            'name' => 'commission_franquicia_c',
            'label' => 'LBL_COMMISSION_FRANQUICIA',
          ),
        ),
        6 => 
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
        7 => 
        array (
          0 => 
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'multilevel_c',
            'studio' => 'visible',
            'label' => 'LBL_MULTILEVEL',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sheet_c',
            'studio' => 'visible',
            'label' => 'LBL_SHEET',
          ),
          1 => 
          array (
            'name' => 'invoice_store_c',
            'label' => 'LBL_INVOICE_STORE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'campaign_c',
            'studio' => 'visible',
            'label' => 'LBL_CAMPAIGN',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'cstm_paquetes_cstm_products_name',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'cstm_paquetes_cstm_products_name',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'clave_unidad_estandar_c',
            'studio' => 'visible',
            'label' => 'LBL_CLAVE_UNIDAD_ESTANDAR',
          ),
        ),
        15 => 
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
