<?php
// created: 2012-01-17 10:46:03
$dictionary["cstm_quotes"]["fields"]["accounts_cstm_quotes"] = array (
  'name' => 'accounts_cstm_quotes',
  'type' => 'link',
  'relationship' => 'accounts_cstm_quotes',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CSTM_QUOTES_FROM_ACCOUNTS_TITLE',
);
$dictionary["cstm_quotes"]["fields"]["accounts_cstm_quotes_name"] = array (
  'name' => 'accounts_cstm_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CSTM_QUOTES_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_cbda7ccounts_ida',
  'link' => 'accounts_cstm_quotes',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["cstm_quotes"]["fields"]["accounts_cbda7ccounts_ida"] = array (
  'name' => 'accounts_cbda7ccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cstm_quotes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CSTM_QUOTES_FROM_CSTM_QUOTES_TITLE',
);
