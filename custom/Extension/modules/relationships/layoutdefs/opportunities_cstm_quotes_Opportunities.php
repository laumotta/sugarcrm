<?php
// created: 2011-11-30 13:12:32
$layout_defs["Opportunities"]["subpanel_setup"]["opportunities_cstm_quotes"] = array (
  'order' => 100,
  'module' => 'cstm_quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_CSTM_QUOTES_FROM_CSTM_QUOTES_TITLE',
  'get_subpanel_data' => 'opportunities_cstm_quotes',
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
