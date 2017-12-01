<?php
// created: 2015-05-26 13:39:21
$layout_defs["Leads"]["subpanel_setup"]["leads_cstm_quotes_1"] = array (
  'order' => 100,
  'module' => 'cstm_quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_LEADS_CSTM_QUOTES_1_FROM_CSTM_QUOTES_TITLE',
  'get_subpanel_data' => 'leads_cstm_quotes_1',
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
