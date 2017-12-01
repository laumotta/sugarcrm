<?php
// created: 2012-10-05 17:38:15
$layout_defs["Accounts"]["subpanel_setup"]["accounts_cstm_contracts"] = array (
  'order' => 100,
  'module' => 'cstm_contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_CSTM_CONTRACTS_FROM_CSTM_CONTRACTS_TITLE',
  'get_subpanel_data' => 'accounts_cstm_contracts',
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
