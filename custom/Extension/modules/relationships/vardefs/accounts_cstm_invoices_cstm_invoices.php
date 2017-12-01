<?php
// created: 2011-08-04 11:49:56
$dictionary["cstm_invoices"]["fields"]["accounts_cstm_invoices"] = array (
  'name' => 'accounts_cstm_invoices',
  'type' => 'link',
  'relationship' => 'accounts_cstm_invoices',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CSTM_INVOICES_FROM_ACCOUNTS_TITLE',
);
$dictionary["cstm_invoices"]["fields"]["accounts_cstm_invoices_name"] = array (
  'name' => 'accounts_cstm_invoices_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CSTM_INVOICES_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_ca379ccounts_ida',
  'link' => 'accounts_cstm_invoices',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["cstm_invoices"]["fields"]["accounts_ca379ccounts_ida"] = array (
  'name' => 'accounts_ca379ccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cstm_invoices',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CSTM_INVOICES_FROM_CSTM_INVOICES_TITLE',
);
