<?php
// created: 2015-05-26 13:37:44
$dictionary["cstm_quotes"]["fields"]["leads_cstm_quotes"] = array (
  'name' => 'leads_cstm_quotes',
  'type' => 'link',
  'relationship' => 'leads_cstm_quotes',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CSTM_QUOTES_FROM_LEADS_TITLE',
);
$dictionary["cstm_quotes"]["fields"]["leads_cstm_quotes_name"] = array (
  'name' => 'leads_cstm_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CSTM_QUOTES_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_cstmacf5esleads_ida',
  'link' => 'leads_cstm_quotes',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["cstm_quotes"]["fields"]["leads_cstmacf5esleads_ida"] = array (
  'name' => 'leads_cstmacf5esleads_ida',
  'type' => 'link',
  'relationship' => 'leads_cstm_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CSTM_QUOTES_FROM_CSTM_QUOTES_TITLE',
);
