<?php
// created: 2013-11-21 12:20:09
$layout_defs["cstm_quotes"]["subpanel_setup"]["cstm_quotes_cstm_invoices"] = array (
  'order' => 100,
  'module' => 'cstm_invoices',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CSTM_QUOTES_CSTM_INVOICES_FROM_CSTM_INVOICES_TITLE',
  'get_subpanel_data' => 'cstm_quotes_cstm_invoices',
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
