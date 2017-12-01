<?php
$module_name = 'cstm_quotes';
$_object_name = 'cstm_quotes';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
          1 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Description of the sale',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'note_c',
            'studio' => 'visible',
            'label' => 'LBL_NOTE',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cstm_quotes_type',
            'comment' => 'The Sale is of this type',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'date_closed',
            'comment' => 'Expected or actual date the sale will close',
            'label' => 'LBL_DATE_CLOSED',
          ),
        ),
      ),
    ),
  ),
);
?>
