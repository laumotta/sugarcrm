<?php
// created: 2011-08-04 12:17:52
$dictionary["Opportunity"]["fields"]["cstm_invoices_opportunities"] = array (
  'name' => 'cstm_invoices_opportunities',
  'type' => 'link',
  'relationship' => 'cstm_invoices_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_INVOICES_OPPORTUNITIES_FROM_CSTM_INVOICES_TITLE',
);
$dictionary["Opportunity"]["fields"]["cstm_invoices_opportunities_name"] = array (
  'name' => 'cstm_invoices_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_INVOICES_OPPORTUNITIES_FROM_CSTM_INVOICES_TITLE',
  'save' => true,
  'id_name' => 'cstm_invoi1350nvoices_ida',
  'link' => 'cstm_invoices_opportunities',
  'table' => 'cstm_invoices',
  'module' => 'cstm_invoices',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cstm_invoi1350nvoices_ida"] = array (
  'name' => 'cstm_invoi1350nvoices_ida',
  'type' => 'link',
  'relationship' => 'cstm_invoices_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CSTM_INVOICES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
