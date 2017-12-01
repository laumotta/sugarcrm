<?php
$viewdefs ['Contacts'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          5 => '<input type="hidden" name="reports_to_id" value="{$smarty.request.contact_id}">',
          6 => '<input type="hidden" name="report_to_name" value="{$smarty.request.contact_name}">',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'curp_c',
            'label' => 'LBL_CURP',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_work',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'extension_c',
            'label' => 'LBL_EXTENSION',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phone_mobile',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'lead_source',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'type_contact_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_CONTACT',
          ),
          1 => '',
        ),
      ),
      'lbl_quickcreate_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'rfc_c',
            'label' => 'LBL_RFC',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'm_name_c',
            'label' => 'LBL_M_NAME',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nickname_aci_c',
            'label' => 'LBL_NICKNAME_ACI',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'email1',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
