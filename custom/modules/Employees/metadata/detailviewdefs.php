<?php
$viewdefs ['Employees'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'customCode' => '{if $DISPLAY_EDIT}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'EditView\'" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}',
          ),
          1 => 
          array (
            'customCode' => '{if $DISPLAY_DUPLICATE}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value=\'{$module}\'     ; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$id}\'; this.form.isDuplicate.value=true; this.form.action.value=\'EditView\'" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}',
          ),
          2 => 
          array (
            'customCode' => '{if $DISPLAY_DELETE}<input title="{$APP.LBL_DELETE_BUTTON_LABEL}" accessKey="{$APP.LBL_DELETE_BUTTON_LABEL}" class="button" onclick="if( confirm(\'{$DELETE_WARNING}\') ) {ldelim} this.form.return_module.value=\'{$module}\'; this.form.return_action.value=\'index\'; this.form.return_id.value=\'{$id}\'; this.form.action.value=\'delete\'; this.form.submit();{rdelim}" type="button" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}',
          ),
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
          0 => 'employee_status',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{$fields.full_name.value}',
            'label' => 'LBL_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'level_c',
            'studio' => 'visible',
            'label' => 'LBL_LEVEL',
          ),
          1 => 
          array (
            'name' => 'accounts_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNTS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'title',
            'label' => 'LBL_TITLE',
          ),
          1 => 
          array (
            'name' => 'phone_work',
            'label' => 'LBL_OFFICE_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'department',
            'label' => 'LBL_DEPARTMENT',
          ),
          1 => 
          array (
            'name' => 'phone_mobile',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'reports_to_name',
            'customCode' => '<a href="index.php?module=Employees&action=DetailView&record={$fields.reports_to_id.value}">{$fields.reports_to_name.value}</a>',
            'label' => 'LBL_REPORTS_TO_NAME',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'esquema_c',
            'studio' => 'visible',
            'label' => 'LBL_ESQUEMA',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        7 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'phone_home',
            'label' => 'LBL_HOME_PHONE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'messenger_type',
            'label' => 'LBL_MESSENGER_TYPE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'messenger_id',
            'label' => 'LBL_MESSENGER_ID',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'address_country',
            'customCode' => '{$fields.address_street.value}<br>{$fields.address_city.value} {$fields.address_state.value}&nbsp;&nbsp;{$fields.address_postalcode.value}<br>{$fields.address_country.value}',
            'label' => 'LBL_ADDRESS',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'label' => 'LBL_EMAIL',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ife_c',
            'studio' => 'visible',
            'label' => 'LBL_IFE',
          ),
          1 => 
          array (
            'name' => 'cv_c',
            'studio' => 'visible',
            'label' => 'LBL_CV',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'curp_c',
            'studio' => 'visible',
            'label' => 'LBL_CURP',
          ),
          1 => 
          array (
            'name' => 'birth_cert_c',
            'studio' => 'visible',
            'label' => 'LBL_BIRTH_CERT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'employment_app_c',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYMENT_APP',
          ),
          1 => 
          array (
            'name' => 'confidentiality_agr_c',
            'studio' => 'visible',
            'label' => 'LBL_CONFIDENTIALITY_AGR',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_proof_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_PROOF',
          ),
          1 => 
          array (
            'name' => 'notify_recruiter_c',
            'label' => 'LBL_NOTIFY_RECRUITER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'sales_scheme_c',
            'studio' => 'visible',
            'label' => 'LBL_SALES_SCHEME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
