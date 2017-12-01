<?php
// created: 2016-03-07 18:52:30
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '25%',
    'default' => true,
  ),
  'consumption_level_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_CONSUMPTION_LEVEL',
    'sortable' => false,
    'width' => '10%',
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'width' => '4%',
    'default' => true,
  ),
  'phone_office' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
    'width' => '20%',
    'default' => true,
  ),
  'email1' => 
  array (
    'vname' => 'LBL_LIST_EMAIL',
    'widget_class' => 'SubPanelEmailLink',
    'width' => '20%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'vname' => 'LBL_ASSIGNED_TO',
    'width' => '20%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'width' => '4%',
    'default' => true,
  ),
  'parent_name' => 
  array (
    'type' => 'relate',
    'link' => 'member_of',
    'vname' => 'LBL_MEMBER_OF',
    'width' => '10%',
    'default' => true,
  ),
  'type_customer_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE_CUSTOMER',
    'sortable' => false,
    'width' => '10%',
  ),
  'type_service_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TYPE_SERVICE',
    'sortable' => false,
    'width' => '10%',
  ),
  'aci_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ACI_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'resguardo_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_RESGUARDO_STATUS_C',
    'sortable' => false,
    'width' => '10%',
  ),
  'proxima_recarga_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PROXIMA_RECARGA',
    'width' => '10%',
  ),
  'funcionalidad_basica_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_FUNCIONALIDAD_BASICA',
    'width' => '10%',
  ),
);
?>
