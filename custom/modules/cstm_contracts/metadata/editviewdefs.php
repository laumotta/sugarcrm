<?php
$module_name = 'cstm_contracts';
$_object_name = 'cstm_contracts';
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_sale_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Sale',
            'label' => 'LBL_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'comment' => 'Unconverted amount of the sale',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'accounts_cstm_contracts_name',
          ),
          1 => 
          array (
            'name' => 'cstm_contracts_opportunities_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'reference_code_c',
            'label' => 'LBL_REFERENCE_CODE',
          ),
          1 => 
          array (
            'name' => 'start_date_c',
            'label' => 'LBL_START_DATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'end_date_c',
            'label' => 'LBL_END_DATE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_closed',
            'comment' => 'Expected or actual date the sale will close',
            'label' => 'LBL_DATE_CLOSED',
          ),
          1 => 
          array (
            'name' => 'renewal_date_c',
            'label' => 'LBL_RENEWAL_DATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Description of the sale',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => '',
        ),
        8 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
