<?php
$viewdefs ['Accounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          4 => 
          array (
            'customCode' => '<input title="Consumo de creditos" accesskey="" class="button"
onclick="url =\'{$fields.rfc_c.value}\'; window.open(\'cstm/control_series.php?record=\'+encodeURIComponent(url),\'\',\'width=500,height=290\',\'\');" name="button" value="Consumo de creditos"
type="button">',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'enableConnectors' => true,
              'module' => 'Accounts',
              'connectors' => 
              array (
                0 => 'ext_rest_linkedin',
              ),
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sic_code',
            'comment' => 'SIC code of the account',
            'label' => 'LBL_SIC_CODE',
          ),
          1 => 
          array (
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type_customer_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_CUSTOMER',
          ),
          1 => 
          array (
            'name' => 'rfc_c',
            'label' => 'LBL_RFC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'owner_c',
            'studio' => 'visible',
            'label' => 'LBL_OWNER',
          ),
          1 => 
          array (
            'name' => 'schema_register_c',
            'label' => 'LBL_SCHEMA_REGISTER',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'activity_c',
            'label' => 'LBL_ACTIVITY',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'billing_scheme_c',
            'studio' => 'visible',
            'label' => 'LBL_BILLING_SCHEME',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'industry',
            'comment' => 'The company belongs in this industry',
            'label' => 'LBL_INDUSTRY',
          ),
          1 => 
          array (
            'name' => 'account_category_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_CATEGORY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'docs_attached_c',
            'studio' => 'visible',
            'label' => 'LBL_DOCS_ATTACHED',
          ),
          1 => 
          array (
            'name' => 'documents_c',
            'studio' => 'visible',
            'label' => 'LBL_DOCUMENTS',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'annual_revenue',
            'comment' => 'Annual revenue for this company',
            'label' => 'LBL_ANNUAL_REVENUE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'q1_c',
            'studio' => 'visible',
            'label' => 'LBL_Q1',
          ),
          1 => 
          array (
            'name' => 'q16_c',
            'studio' => 'visible',
            'label' => 'LBL_Q16',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'q2_c',
            'label' => 'LBL_Q2',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'q3_c',
            'studio' => 'visible',
            'label' => 'LBL_Q3',
          ),
          1 => 
          array (
            'name' => 'q4_c',
            'studio' => 'visible',
            'label' => 'LBL_Q4',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'q14_c',
            'label' => 'LBL_Q14',
          ),
          1 => 
          array (
            'name' => 'q15_c',
            'studio' => 'visible',
            'label' => 'LBL_Q15',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'q13_c',
            'label' => 'LBL_Q13',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_town_c',
            'label' => 'LBL_BILLING_ADDRESS_TOWN',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_ou_c',
            'label' => 'LBL_BILLING_ADDRESS_OU',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_in_c',
            'label' => 'LBL_BILLING_ADDRESS_IN',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_colonia_c',
            'label' => 'LBL_BILLING_ADDRESS_COLONIA',
          ),
          1 => '',
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_MEMBER_OF',
          ),
          1 => 
          array (
            'name' => 'campaign_name',
            'comment' => 'The first campaign name for Account (Meta-data only)',
            'label' => 'LBL_CAMPAIGN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'rating',
            'comment' => 'An arbitrary rating for this company for use in comparisons with others',
            'label' => 'LBL_RATING',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'type_service_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_SERVICE',
          ),
          1 => 
          array (
            'name' => 'saved_c',
            'label' => 'LBL_SAVED',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
          1 => 
          array (
            'name' => 'installation_date_c',
            'label' => 'LBL_INSTALLATION_DATE',
          ),
        ),
      ),
    ),
  ),
);
?>
