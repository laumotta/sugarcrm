<?php
// created: 2012-02-04 13:19:43
$dictionary["cstm_commissions"]["fields"]["cstm_commissions_opportunities"] = array (
  'name' => 'cstm_commissions_opportunities',
  'type' => 'link',
  'relationship' => 'cstm_commissions_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_COMMISSIONS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
$dictionary["cstm_commissions"]["fields"]["cstm_commissions_opportunities_name"] = array (
  'name' => 'cstm_commissions_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_COMMISSIONS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'cstm_commie7a1unities_idb',
  'link' => 'cstm_commissions_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["cstm_commissions"]["fields"]["cstm_commie7a1unities_idb"] = array (
  'name' => 'cstm_commie7a1unities_idb',
  'type' => 'link',
  'relationship' => 'cstm_commissions_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CSTM_COMMISSIONS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
