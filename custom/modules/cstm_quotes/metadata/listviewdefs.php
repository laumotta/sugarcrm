<?php
$module_name = 'cstm_quotes';
$OBJECT_NAME = 'CSTM_QUOTES';
$listViewDefs [$module_name] = 
array (
  'NO_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_NO',
    'width' => '5%',
  ),
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_LIST_SALE_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNTS_CSTM_QUOTES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'accounts_cstm_quotes',
    'label' => 'LBL_ACCOUNTS_CSTM_QUOTES_FROM_ACCOUNTS_TITLE',
    'width' => '40%',
    'default' => true,
  ),
  'SALES_STAGE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SALE_STAGE',
    'default' => true,
  ),
  'PAYMENT_STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PAYMENT_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'METHOD_OF_PAYMENT_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_METHOD_OF_PAYMENT',
    'sortable' => false,
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TOTAL_C' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_TOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'TXNRESPONSECODEDESC_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TXNRESPONSECODEDESC',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'CSTM_QUOTES_TYPE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE',
    'default' => false,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'EXECUTED_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_EXECUTED',
    'width' => '10%',
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => false,
  ),
  'CURRENCY_SYMBOL' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_CURRENCY_SYMBOL',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_CLOSED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DATE_CLOSED',
    'default' => false,
  ),
  'NOTE_C' => 
  array (
    'type' => 'text',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_NOTE',
    'sortable' => false,
    'width' => '10%',
  ),
  'IVA_C' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_IVA',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SUBTOTAL_C' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_SUBTOTAL',
    'currency_format' => true,
    'width' => '10%',
  ),
  'DESCUENTO_C' => 
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_DESCUENTO',
    'currency_format' => true,
    'width' => '10%',
  ),
  'AUTHORIZEID_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_AUTHORIZEID',
    'width' => '10%',
  ),
  'TRANSACTIONNO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TRANSACTIONNO',
    'width' => '10%',
  ),
  'MESSAGE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_MESSAGE',
    'width' => '10%',
  ),
  'RECEIPTNO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_RECEIPTNO',
    'width' => '10%',
  ),
  'TXNRESPONSECODE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_TXNRESPONSECODE',
    'width' => '10%',
  ),
  'CARDTYPE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_CARDTYPE',
    'width' => '10%',
  ),
  'ACQRESPONSECODE_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ACQRESPONSECODE',
    'width' => '10%',
  ),
  'BATCHNO_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_BATCHNO',
    'width' => '10%',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'RISKOVERALLRESULT_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_RISKOVERALLRESULT',
    'width' => '10%',
  ),
  'AMOUNT_USDOLLAR' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_AMOUNT',
    'align' => 'right',
    'default' => false,
    'currency_format' => true,
  ),
  'NEXT_STEP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NEXT_STEP',
    'default' => false,
  ),
  'PROBABILITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PROBABILITY',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '5%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
);
?>
