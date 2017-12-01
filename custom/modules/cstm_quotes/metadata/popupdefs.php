<?php
$popupMeta = array (
    'moduleMain' => 'cstm_quotes',
    'varName' => 'cstm_quotes',
    'orderBy' => 'cstm_quotes.name',
    'whereClauses' => array (
  'name' => 'cstm_quotes.name',
),
    'searchInputs' => array (
  0 => 'name',
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALE_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => true,
    'name' => 'date_closed',
  ),
  'ACCOUNTS_CSTM_QUOTES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'accounts_cstm_quotes',
    'label' => 'LBL_ACCOUNTS_CSTM_QUOTES_FROM_ACCOUNTS_TITLE',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_cstm_quotes_name',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'CSTM_QUOTES_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
    'name' => 'cstm_quotes_type',
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
    'name' => 'lead_source',
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALE_STAGE',
    'default' => false,
    'name' => 'sales_stage',
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT',
    'align' => 'right',
    'default' => false,
    'currency_format' => true,
    'name' => 'amount_usdollar',
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
    'name' => 'next_step',
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => false,
    'name' => 'probability',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
    'name' => 'modified_by_name',
  ),
),
);
