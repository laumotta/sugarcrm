<?php
// created: 2011-08-04 11:49:54
$layout_defs["Accounts"]["subpanel_setup"]["accounts_cstm_invoices"] = array (
  'order' => 100,
  'module' => 'cstm_invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_CSTM_INVOICES_FROM_CSTM_INVOICES_TITLE',
  'get_subpanel_data' => 'accounts_cstm_invoices',
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
