<?php
$module_name = 'cstm_Paquetes';
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'aplicacion_c',
            'studio' => 'visible',
            'label' => 'LBL_APLICACION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'descuento_global_c',
            'label' => 'LBL_DESCUENTO_GLOBAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pack_amount_c',
            'label' => 'LBL_PACK_AMOUNT',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
