<?php
$popupMeta = array (
    'moduleMain' => 'Meetings',
    'varName' => 'Meeting',
    'orderBy' => 'meetings.name',
    'whereClauses' => array (
  'name' => 'meetings.name',
  'meeting_category_c' => 'meetings_cstm.meeting_category_c',
  'parent_name' => 'meetings.parent_name',
  'current_user_only' => 'meetings.current_user_only',
  'status' => 'meetings.status',
  'assigned_user_id' => 'meetings.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'meeting_category_c',
  5 => 'parent_name',
  6 => 'current_user_only',
  7 => 'assigned_user_id',
),
    'searchdefs' => array (
  'meeting_category_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MEETING_CATEGORY',
    'sortable' => false,
    'width' => '10%',
    'name' => 'meeting_category_c',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'parent_name' => 
  array (
    'type' => 'parent',
    'label' => 'LBL_LIST_RELATED_TO',
    'width' => '10%',
    'name' => 'parent_name',
  ),
  'current_user_only' => 
  array (
    'name' => 'current_user_only',
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
