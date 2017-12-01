<?php
// created: 2012-02-04 13:19:43
$dictionary["Opportunity"]["fields"]["cstm_commissions_opportunities"] = array (
  'name' => 'cstm_commissions_opportunities',
  'type' => 'link',
  'relationship' => 'cstm_commissions_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_COMMISSIONS_OPPORTUNITIES_FROM_CSTM_COMMISSIONS_TITLE',
);
$dictionary["Opportunity"]["fields"]["cstm_commissions_opportunities_name"] = array (
  'name' => 'cstm_commissions_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_COMMISSIONS_OPPORTUNITIES_FROM_CSTM_COMMISSIONS_TITLE',
  'save' => true,
  'id_name' => 'cstm_commi141cissions_ida',
  'link' => 'cstm_commissions_opportunities',
  'table' => 'cstm_commissions',
  'module' => 'cstm_commissions',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cstm_commi141cissions_ida"] = array (
  'name' => 'cstm_commi141cissions_ida',
  'type' => 'link',
  'relationship' => 'cstm_commissions_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_CSTM_COMMISSIONS_OPPORTUNITIES_FROM_CSTM_COMMISSIONS_TITLE',
);
