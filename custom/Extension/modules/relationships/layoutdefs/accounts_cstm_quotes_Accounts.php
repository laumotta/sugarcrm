<?php
// created: 2012-01-17 10:46:03
$layout_defs["Accounts"]["subpanel_setup"]["accounts_cstm_quotes"] = array (
  'order' => 100,
  'module' => 'cstm_quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_CSTM_QUOTES_FROM_CSTM_QUOTES_TITLE',
  'get_subpanel_data' => 'accounts_cstm_quotes',
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
