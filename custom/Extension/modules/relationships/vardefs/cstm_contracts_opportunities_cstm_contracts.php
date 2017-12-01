<?php
// created: 2012-10-08 18:41:24
$dictionary["cstm_contracts"]["fields"]["cstm_contracts_opportunities"] = array (
  'name' => 'cstm_contracts_opportunities',
  'type' => 'link',
  'relationship' => 'cstm_contracts_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["cstm_contracts"]["fields"]["cstm_contracts_opportunities_name"] = array (
  'name' => 'cstm_contracts_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_CONTRACTS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'cstm_contr5745unities_idb',
  'link' => 'cstm_contracts_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["cstm_contracts"]["fields"]["cstm_contr5745unities_idb"] = array (
  'name' => 'cstm_contr5745unities_idb',
  'type' => 'link',
  'relationship' => 'cstm_contracts_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CSTM_CONTRACTS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
