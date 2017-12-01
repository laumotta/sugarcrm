<?php
// created: 2012-10-08 18:41:24
$dictionary["Opportunity"]["fields"]["cstm_contracts_opportunities"] = array (
  'name' => 'cstm_contracts_opportunities',
  'type' => 'link',
  'relationship' => 'cstm_contracts_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_OPPORTUNITIES_FROM_CSTM_CONTRACTS_TITLE',
);
$dictionary["Opportunity"]["fields"]["cstm_contracts_opportunities_name"] = array (
  'name' => 'cstm_contracts_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_OPPORTUNITIES_FROM_CSTM_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'cstm_contrdd87ntracts_ida',
  'link' => 'cstm_contracts_opportunities',
  'table' => 'cstm_contracts',
  'module' => 'cstm_contracts',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cstm_contrdd87ntracts_ida"] = array (
  'name' => 'cstm_contrdd87ntracts_ida',
  'type' => 'link',
  'relationship' => 'cstm_contracts_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CSTM_CONTRACTS_OPPORTUNITIES_FROM_CSTM_CONTRACTS_TITLE',
);
