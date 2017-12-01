<?php
$module_name = 'cstm_quotes';
$_module_name = 'cstm_quotes';
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
      'no_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_NO',
        'width' => '10%',
        'name' => 'no_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'no_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_NO',
        'width' => '10%',
        'name' => 'no_c',
      ),
      'accounts_cstm_quotes_name' => 
      array (
        'type' => 'relate',
        'link' => 'accounts_cstm_quotes',
        'label' => 'LBL_ACCOUNTS_CSTM_QUOTES_FROM_ACCOUNTS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_cstm_quotes_name',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_closed' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_CLOSED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_closed',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'sales_stage' => 
      array (
        'name' => 'sales_stage',
        'default' => true,
        'width' => '10%',
      ),
      'payment_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PAYMENT_STATUS',
        'sortable' => false,
        'width' => '10%',
        'name' => 'payment_status_c',
      ),
      'method_of_payment_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_METHOD_OF_PAYMENT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'method_of_payment_c',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
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
      'message_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_MESSAGE',
        'width' => '10%',
        'name' => 'message_c',
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
