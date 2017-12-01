<?php
// created: 2015-05-26 13:39:21
$dictionary["cstm_quotes"]["fields"]["leads_cstm_quotes_1"] = array (
  'name' => 'leads_cstm_quotes_1',
  'type' => 'link',
  'relationship' => 'leads_cstm_quotes_1',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CSTM_QUOTES_1_FROM_LEADS_TITLE',
);
$dictionary["cstm_quotes"]["fields"]["leads_cstm_quotes_1_name"] = array (
  'name' => 'leads_cstm_quotes_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_CSTM_QUOTES_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_cstme634_1leads_ida',
  'link' => 'leads_cstm_quotes_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["cstm_quotes"]["fields"]["leads_cstme634_1leads_ida"] = array (
  'name' => 'leads_cstme634_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_cstm_quotes_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_CSTM_QUOTES_1_FROM_CSTM_QUOTES_TITLE',
);
