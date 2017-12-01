<?php
// created: 2013-11-21 12:20:11
$dictionary["cstm_invoices"]["fields"]["cstm_quotes_cstm_invoices"] = array (
  'name' => 'cstm_quotes_cstm_invoices',
  'type' => 'link',
  'relationship' => 'cstm_quotes_cstm_invoices',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_QUOTES_CSTM_INVOICES_FROM_CSTM_QUOTES_TITLE',
);
$dictionary["cstm_invoices"]["fields"]["cstm_quotes_cstm_invoices_name"] = array (
  'name' => 'cstm_quotes_cstm_invoices_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_QUOTES_CSTM_INVOICES_FROM_CSTM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'cstm_quotedec0_quotes_ida',
  'link' => 'cstm_quotes_cstm_invoices',
  'table' => 'cstm_quotes',
  'module' => 'cstm_quotes',
  'rname' => 'name',
);
$dictionary["cstm_invoices"]["fields"]["cstm_quotedec0_quotes_ida"] = array (
  'name' => 'cstm_quotedec0_quotes_ida',
  'type' => 'link',
  'relationship' => 'cstm_quotes_cstm_invoices',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CSTM_QUOTES_CSTM_INVOICES_FROM_CSTM_INVOICES_TITLE',
);
