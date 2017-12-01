<?php
// created: 2012-01-16 00:58:14
$dictionary["Opportunity"]["fields"]["cstm_quotes_opportunities"] = array (
  'name' => 'cstm_quotes_opportunities',
  'type' => 'link',
  'relationship' => 'cstm_quotes_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_QUOTES_OPPORTUNITIES_FROM_CSTM_QUOTES_TITLE',
);
$dictionary["Opportunity"]["fields"]["cstm_quotes_opportunities_name"] = array (
  'name' => 'cstm_quotes_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_QUOTES_OPPORTUNITIES_FROM_CSTM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'cstm_quote000f_quotes_ida',
  'link' => 'cstm_quotes_opportunities',
  'table' => 'cstm_quotes',
  'module' => 'cstm_quotes',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cstm_quote000f_quotes_ida"] = array (
  'name' => 'cstm_quote000f_quotes_ida',
  'type' => 'link',
  'relationship' => 'cstm_quotes_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CSTM_QUOTES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
