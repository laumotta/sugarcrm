<?php
// created: 2012-01-21 13:26:01
$dictionary["cstm_parameters"]["fields"]["cstm_reports_cstm_parameters"] = array (
  'name' => 'cstm_reports_cstm_parameters',
  'type' => 'link',
  'relationship' => 'cstm_reports_cstm_parameters',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_REPORTS_CSTM_PARAMETERS_FROM_CSTM_REPORTS_TITLE',
);
$dictionary["cstm_parameters"]["fields"]["cstm_reports_cstm_parameters_name"] = array (
  'name' => 'cstm_reports_cstm_parameters_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CSTM_REPORTS_CSTM_PARAMETERS_FROM_CSTM_REPORTS_TITLE',
  'save' => true,
  'id_name' => 'cstm_repor0b1breports_ida',
  'link' => 'cstm_reports_cstm_parameters',
  'table' => 'cstm_reports',
  'module' => 'cstm_reports',
  'rname' => 'name',
);
$dictionary["cstm_parameters"]["fields"]["cstm_repor0b1breports_ida"] = array (
  'name' => 'cstm_repor0b1breports_ida',
  'type' => 'link',
  'relationship' => 'cstm_reports_cstm_parameters',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CSTM_REPORTS_CSTM_PARAMETERS_FROM_CSTM_PARAMETERS_TITLE',
);
