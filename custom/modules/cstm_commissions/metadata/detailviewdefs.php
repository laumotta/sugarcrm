<?php
$module_name = 'cstm_commissions';
$viewdefs [$module_name] = 
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
          1 => 'DUPLICATE',
          2 => 'DELETE',
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
          0 => 'name',
          1 => 
          array (
            'name' => 'account_c',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cstm_commissions_opportunities_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'category_c',
            'studio' => 'visible',
            'label' => 'LBL_CATEGORY',
          ),
          1 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'amount_civa_c',
            'label' => 'LBL_AMOUNT_CIVA',
          ),
          1 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 =>   array (
            'name' => 'assigned_user_name',
            'label' => 'Vendedor',
			 'customCode' => '{$fields.assigned_user_name.value}
				 &nbsp;{$fields.n0_c.value}',
			
          ),

          1 => 
          array (
            'name' => 'p_assigned_c',
            'label' => 'LBL_P_ASSIGNED',
			 'customCode' => '{$fields.p_assigned_c.value}
				 &nbsp;{$fields.m_assigned_c.value}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'reports_n1_c',
            'label' => 'LBL_REPORTS_N1',
			 'customCode' => '{$fields.reports_n1_c.value}
				 &nbsp;{$fields.n1_c.value}',
			
          ),
          1 => 
          array (
            'name' => 'p_n1_c',
            'label' => 'LBL_P_N1',
			 'customCode' => '{$fields.p_n1_c.value}
				 &nbsp;{$fields.m_n1_c.value}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reports_n2_c',
            'label' => 'LBL_REPORTS_N2',
						 'customCode' => '{$fields.reports_n2_c.value}
				 &nbsp;{$fields.n2_c.value}',
          ),
          1 => 
          array (
            'name' => 'p_n2_c',
            'label' => 'LBL_P_N2',
			 'customCode' => '{$fields.p_n2_c.value}
				 &nbsp;{$fields.m_n2_c.value}',
          ),
        ),
      ),
    ),
  ),
);
?>
