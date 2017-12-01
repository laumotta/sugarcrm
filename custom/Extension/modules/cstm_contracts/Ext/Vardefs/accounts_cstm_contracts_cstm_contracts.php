<?php
// created: 2012-10-05 17:38:15
$dictionary["cstm_contracts"]["fields"]["accounts_cstm_contracts"] = array (
  'name' => 'accounts_cstm_contracts',
  'type' => 'link',
  'relationship' => 'accounts_cstm_contracts',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CSTM_CONTRACTS_FROM_ACCOUNTS_TITLE',
);
$dictionary["cstm_contracts"]["fields"]["accounts_cstm_contracts_name"] = array (
  'name' => 'accounts_cstm_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CSTM_CONTRACTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_c6ad2ccounts_ida',
  'link' => 'accounts_cstm_contracts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["cstm_contracts"]["fields"]["accounts_c6ad2ccounts_ida"] = array (
  'name' => 'accounts_c6ad2ccounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cstm_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_TITLE',
);
