<?php
// created: 2012-10-05 17:49:23
$dictionary["cstm_contracts"]["fields"]["cstm_contracts_cstm_contracts"] = array (
  'name' => 'cstm_contracts_cstm_contracts',
  'type' => 'link',
  'relationship' => 'cstm_contracts_cstm_contracts',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_L_TITLE',
);
$dictionary["cstm_contracts"]["fields"]["cstm_contracts_cstm_contracts"] = array (
  'name' => 'cstm_contracts_cstm_contracts',
  'type' => 'link',
  'relationship' => 'cstm_contracts_cstm_contracts',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_R_TITLE',
);
$dictionary["cstm_contracts"]["fields"]["cstm_contracts_cstm_contracts_name"] = array (
  'name' => 'cstm_contracts_cstm_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_R_TITLE',
  'save' => true,
  'id_name' => 'cstm_contr77cbntracts_ida',
  'link' => 'cstm_contracts_cstm_contracts',
  'table' => 'cstm_contracts',
  'module' => 'cstm_contracts',
  'rname' => 'name',
);
$dictionary["cstm_contracts"]["fields"]["cstm_contracts_cstm_contracts_name"] = array (
  'name' => 'cstm_contracts_cstm_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_L_TITLE',
  'save' => true,
  'id_name' => 'cstm_contr77cbntracts_ida',
  'link' => 'cstm_contracts_cstm_contracts',
  'table' => 'cstm_contracts',
  'module' => 'cstm_contracts',
  'rname' => 'name',
);
$dictionary["cstm_contracts"]["fields"]["cstm_contr77cbntracts_ida"] = array (
  'name' => 'cstm_contr77cbntracts_ida',
  'type' => 'link',
  'relationship' => 'cstm_contracts_cstm_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CSTM_CONTRACTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_R_TITLE',
);
$dictionary["cstm_contracts"]["fields"]["cstm_contr77cbntracts_ida"] = array (
  'name' => 'cstm_contr77cbntracts_ida',
  'type' => 'link',
  'relationship' => 'cstm_contracts_cstm_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CSTM_CONTRACTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_L_TITLE',
);
