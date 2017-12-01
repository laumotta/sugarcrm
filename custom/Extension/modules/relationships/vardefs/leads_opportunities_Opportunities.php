<?php
// created: 2016-01-05 18:48:02
$dictionary["Opportunity"]["fields"]["leads_opportunities"] = array (
  'name' => 'leads_opportunities',
  'type' => 'link',
  'relationship' => 'leads_opportunities',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_FROM_LEADS_TITLE',
);
$dictionary["Opportunity"]["fields"]["leads_opportunities_name"] = array (
  'name' => 'leads_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_oppo6cb7esleads_ida',
  'link' => 'leads_opportunities',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["leads_oppo6cb7esleads_ida"] = array (
  'name' => 'leads_oppo6cb7esleads_ida',
  'type' => 'link',
  'relationship' => 'leads_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
);
