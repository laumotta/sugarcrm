<?php
$module_name = 'cstm_invoices';
$listViewDefs [$module_name] = 
array (
  'ACCOUNTS_CSTM_INVOICES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'accounts_cstm_invoices',
    'label' => 'LBL_ACCOUNTS_CSTM_INVOICES_FROM_ACCOUNTS_TITLE',
    'width' => '32%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'CSTM_QUOTES_CSTM_INVOICES_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'cstm_quotes_cstm_invoices',
    'label' => 'LBL_CSTM_QUOTES_CSTM_INVOICES_FROM_CSTM_QUOTES_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'FOLIO_C' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_FOLIO',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
?>
