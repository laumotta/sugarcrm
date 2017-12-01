<?php
$searchdefs ['EmailTemplates'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'subject' => 
      array (
        'name' => 'subject',
        'default' => true,
        'width' => '10%',
      ),
      'description' => 
      array (
        'name' => 'description',
        'default' => true,
        'width' => '10%',
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
      'body' => 
      array (
        'type' => 'text',
        'label' => 'LBL_BODY',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'body',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
