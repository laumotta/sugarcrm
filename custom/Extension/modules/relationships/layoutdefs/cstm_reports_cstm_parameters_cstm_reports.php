<?php
// created: 2012-01-21 13:26:01
$layout_defs["cstm_reports"]["subpanel_setup"]["cstm_reports_cstm_parameters"] = array (
  'order' => 100,
  'module' => 'cstm_parameters',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CSTM_REPORTS_CSTM_PARAMETERS_FROM_CSTM_PARAMETERS_TITLE',
  'get_subpanel_data' => 'cstm_reports_cstm_parameters',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
