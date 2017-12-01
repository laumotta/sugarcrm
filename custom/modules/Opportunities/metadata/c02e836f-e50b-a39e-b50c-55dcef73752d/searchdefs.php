<?php
$searchdefs ['Opportunities'] = 
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'cstm_quotes_opportunities_name' => 
      array (
        'type' => 'relate',
        'link' => 'cstm_quotes_opportunities',
        'label' => 'LBL_CSTM_QUOTES_OPPORTUNITIES_FROM_CSTM_QUOTES_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'cstm_quotes_opportunities_name',
      ),
      'campaign_name' => 
      array (
        'type' => 'relate',
        'link' => 'campaign_opportunities',
        'label' => 'LBL_CAMPAIGN',
        'width' => '10%',
        'default' => true,
        'name' => 'campaign_name',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
      ),
      'account_name' => 
      array (
        'name' => 'account_name',
        'default' => true,
        'width' => '10%',
      ),
      'category_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORY',
        'sortable' => false,
        'width' => '10%',
        'name' => 'category_c',
      ),
      'modified_user_id' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'modified_user_id',
      ),
      'created_by' => 
      array (
        'type' => 'assigned_user_name',
        'label' => 'LBL_CREATED',
        'width' => '10%',
        'default' => true,
        'name' => 'created_by',
      ),
      'opportunity_type' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_TYPE',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'opportunity_type',
      ),
      'invoiced_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INVOICED',
        'sortable' => false,
        'width' => '10%',
        'name' => 'invoiced_c',
      ),
      'folio_package_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FOLIO_PACKAGE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'folio_package_c',
      ),
      'acquired_credits_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_ACQUIRED_CREDITS',
        'width' => '10%',
        'name' => 'acquired_credits_c',
      ),
      'release_payment_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_RELEASE_PAYMENT',
        'sortable' => false,
        'width' => '10%',
        'name' => 'release_payment_c',
      ),
      'amount' => 
      array (
        'name' => 'amount',
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
      'sales_stage' => 
      array (
        'name' => 'sales_stage',
        'default' => true,
        'width' => '10%',
      ),
      'opportunity_stage_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_OPPORTUNITY_STAGE',
        'sortable' => false,
        'width' => '10%',
        'name' => 'opportunity_stage_c',
      ),
      'lead_source' => 
      array (
        'name' => 'lead_source',
        'default' => true,
        'width' => '10%',
      ),
      'app_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_APP',
        'sortable' => false,
        'width' => '10%',
        'name' => 'app_c',
      ),
      'date_closed' => 
      array (
        'name' => 'date_closed',
        'default' => true,
        'width' => '10%',
      ),
      'next_step' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NEXT_STEP',
        'width' => '10%',
        'default' => true,
        'name' => 'next_step',
      ),
      'description' => 
      array (
        'type' => 'text',
        'label' => 'LBL_DESCRIPTION',
        'sortable' => false,
        'width' => '10%',
        'default' => true,
        'name' => 'description',
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
