<?php
// created: 2012-01-16 00:58:14
$layout_defs["cstm_quotes"]["subpanel_setup"]["cstm_quotes_opportunities"] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'ForAccounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CSTM_QUOTES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'cstm_quotes_opportunities',
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
