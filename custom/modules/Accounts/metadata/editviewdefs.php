<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'javascript' => '{$PROBABILITY_SCRIPT} 
	<script type="text/javascript" language="Javascript">  
	document.getElementById("rfc_c").disabled = true;
	document.getElementById("account_type").disabled = true;
	
rec_ = document.getElementsByName("record")[0].value;

if(rec_ != ""){ldelim}
document.getElementById("assigned_user_name").disabled = true;
document.getElementById("assigned_user_id").disabled = true;
document.getElementById("btn_assigned_user_name").disabled = true;
document.getElementById("btn_clr_assigned_user_name").disabled = true;
{rdelim}


	if(document.getElementById("type_customer_c").selectedIndex!=2)
	{ldelim}
	document.getElementById("rfc_c").disabled = true; 
	document.getElementById("type_customer_c").disabled = true;
	{rdelim}

	document.getElementsByName("name")[0].onchange = function() 
	{ldelim}
	document.getElementById("name").value=document.getElementById("name").value.toUpperCase();
	{rdelim}
	
	document.getElementsByName("rfc_c")[0].onchange = function() {ldelim}
	document.getElementById("rfc_c").value=document.getElementById("rfc_c").value.toUpperCase();
	{rdelim}
	
	document.getElementsByName("type_customer_c")[0].onchange = function() {ldelim}
	document.getElementById("rfc_c").disabled = false; 
	var op= document.getElementById("type_customer_c").selectedIndex;
	if(op==2){ldelim}
	removeFromValidate(\'EditView\',\'rfc_c\');
	addToValidate(\'EditView\', \'rfc_c\', \'rfcV\', \'true\', \'Selecciona un tipo de contribuyente\');
	{rdelim}  		
	if(op==1){ldelim}
	removeFromValidate(\'EditView\',\'rfc_c\');
	addToValidate(\'EditView\', \'rfc_c\', \'rfcM\', \'true\', \'RFC invalido para persona Moral\');
	{rdelim}  
	if(op==0){ldelim}
	removeFromValidate(\'EditView\',\'rfc_c\');
	addToValidate(\'EditView\', \'rfc_c\', \'rfcF\', \'true\', \'RFC invalido para persona Fisica\');
	{rdelim} 
	{rdelim}
	</script>',
      'useTabs' => false,
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
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
          ),
        ),
        1 => 
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
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => '',
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
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'account_category_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
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
            'name' => 'docs_attached_c',
            'studio' => 'visible',
            'label' => 'LBL_DOCS_ATTACHED',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'documents_c',
            'studio' => 'visible',
            'label' => 'LBL_DOCUMENTS',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'promocion_c',
            'label' => 'LBL_PROMOCION',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
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
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'q9_c',
            'studio' => 'visible',
            'label' => 'LBL_Q9',
          ),
          1 => 
          array (
            'name' => 'q10_c',
            'studio' => 'visible',
            'label' => 'LBL_Q10',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'q11_c',
            'label' => 'LBL_Q11',
          ),
          1 => '',
        ),
        4 => 
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
        5 => 
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
        6 => 
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
            'label' => 'LBL_BILLING_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'billing_address_colonia_c',
            'label' => 'LBL_BILLING_ADDRESS_COLONIA',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_ou_c',
            'label' => 'LBL_BILLING_ADDRESS_OU',
          ),
          1 => 
          array (
            'name' => 'billing_address_in_c',
            'label' => 'LBL_BILLING_ADDRESS_IN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_town_c',
            'label' => 'LBL_BILLING_ADDRESS_TOWN',
          ),
          1 => 
          array (
            'name' => 'billing_address_state',
            'comment' => 'The state used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_country',
            'comment' => 'The country used for the billing address',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'saved_c',
            'label' => 'LBL_SAVED',
          ),
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
            'name' => 'rating',
            'comment' => 'An arbitrary rating for this company for use in comparisons with others',
            'label' => 'LBL_RATING',
          ),
        ),
      ),
    ),
  ),
);
?>
