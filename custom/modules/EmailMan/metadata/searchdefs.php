<?php
$searchdefs ['EmailMan'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'campaign_name',
        'label' => 'LBL_LIST_CAMPAIGN',
      ),
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'campaign_name' => 
      array (
        'name' => 'campaign_name',
        'label' => 'LBL_LIST_CAMPAIGN',
        'default' => true,
        'width' => '10%',
      ),
      'to_name' => 
      array (
        'name' => 'to_name',
        'label' => 'LBL_LIST_RECIPIENT_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'to_email' => 
      array (
        'name' => 'to_email',
        'label' => 'LBL_LIST_RECIPIENT_EMAIL',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'in_queue' => 
      array (
        'type' => 'bool',
        'label' => 'LBL_IN_QUEUE',
        'width' => '10%',
        'default' => true,
        'name' => 'in_queue',
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
