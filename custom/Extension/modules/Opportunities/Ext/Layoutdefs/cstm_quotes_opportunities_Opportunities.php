<?php
// created: 2011-11-30 13:14:25
$layout_defs["Opportunities"]["subpanel_setup"]["cstm_quotes_opportunities"] = array (
  'order' => 100,
  'module' => 'cstm_quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CSTM_QUOTES_OPPORTUNITIES_FROM_CSTM_QUOTES_TITLE',
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
