<?php
$module_name = 'cstm_commissions';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'javascript' => '{$PROBABILITY_SCRIPT}
		<script type="text/javascript" src="include/javascript/jquery.js"></script>
		<script type="text/javascript" language="Javascript">   


		function calc2(desc){ldelim}	
		monto =$("#amount_c").val().replace(",","")	;
		sif =$("#p_sifei_c").val();
		monto = monto*(sif/100);
		return (monto);
		{rdelim}	

		function calc3(desc){ldelim}	
		monto =$("#amount_c").val().replace(",","")	;
		monto = monto*(desc/100);
		return (monto);
		{rdelim}	


		$(document).ready(function(){ldelim}	 



		dato=calc2($("#p_sifei_c").val());
		$("#m_sifei_c").val(dato.toFixed(2));

		$("#p_sifei_c").change(function(){ldelim}
		dato=calc2($(this).val());
		$("#m_sifei_c").val(dato.toFixed(2));
		{rdelim});	


		$("#p_assigned_c").change(function(){ldelim}
		dato=calc3($(this).val());
		$("#m_assigned_c").val(dato.toFixed(2));
		{rdelim});	

		$("#p_n1_c").change(function(){ldelim}
		dato=calc3($(this).val());
		$("#m_n1_c").val(dato.toFixed(2));
		{rdelim});		

		$("#p_n2_c").change(function(){ldelim}
		dato=calc3($(this).val());
		$("#m_n2_c").val(dato.toFixed(2));
		{rdelim});	

		$("#p_remanente_c").change(function(){ldelim}
		dato=calc3($(this).val());
		$("#m_remanente_c").val(dato.toFixed(2));
		{rdelim});	



		{rdelim}); 

		</script>',
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
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
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
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
        4 => 
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
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'p_sifei_c',
            'label' => 'LBL_P_SIFEI',
            'customCode' => '(%)<input name="p_sifei_c"  id="p_sifei_c" size="10" maxlength="10" type="text" value="{$fields.p_sifei_c.value}">
			&nbsp;$ <input name="m_sifei_c"  id="m_sifei_c" size="10" maxlength="10" type="text" value="{$fields.m_sifei_c.value}">',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
            'customCode' => '{$fields.assigned_user_name.value}
				 &nbsp;{$fields.n0_c.value}',
          ),
          1 => 
          array (
            'name' => 'p_assigned_c',
            'label' => 'LBL_P_ASSIGNED',
            'customCode' => '(%)<input name="p_assigned_c"  id="p_assigned_c" size="10" maxlength="10" type="text" value="{$fields.p_assigned_c.value}">
			&nbsp;$ <input name="m_assigned_c"  id="m_assigned_c" size="10" maxlength="10" type="text" value="{$fields.m_assigned_c.value}">',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'reports_n1_c',
            'label' => 'LBL_REPORTS_N1',
            'customCode' => '<input name="reports_n1_c"  id="reports_n1_c" size="25" maxlength="25" type="text" value="{$fields.reports_n1_c.value}">
			&nbsp;{$fields.n1_c.value}',
          ),
          1 => 
          array (
            'name' => 'p_n1_c',
            'label' => 'LBL_P_N1',
            'customCode' => '(%)<input name="p_n1_c"  id="p_n1_c" size="10" maxlength="10" type="text" value="{$fields.p_n1_c.value}">
			&nbsp;$ <input name="m_n1_c"  id="m_n1_c" size="10" maxlength="10" type="text" value="{$fields.m_n1_c.value}">',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reports_n2_c',
            'label' => 'LBL_REPORTS_N2',
            'customCode' => '<input name="reports_n2_c"  id="reports_n2_c" size="25" maxlength="25" type="text" value="{$fields.reports_n2_c.value}">
			&nbsp;{$fields.n2_c.value}',
          ),
          1 => 
          array (
            'name' => 'p_n2_c',
            'label' => 'LBL_P_N2',
            'customCode' => '(%)<input name="p_n2_c"  id="p_n2_c" size="10" maxlength="10" type="text" value="{$fields.p_n2_c.value}">
			&nbsp;$ <input name="m_n2_c"  id="m_n2_c" size="10" maxlength="10" type="text" value="{$fields.m_n2_c.value}">',
          ),
        ),
        5 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'p_remanente_c',
            'label' => 'LBL_P_REMANENTE',
            'customCode' => '(%)<input name="p_remanente_c"  id="p_remanente_c" size="10" maxlength="10" type="text" value="{$fields.p_remanente_c.value}">
			&nbsp;$ <input name="m_remanente_c"  id="m_remanente_c" size="10" maxlength="10" type="text" value="{$fields.m_remanente_c.value}">',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'p_red_c',
            'label' => 'LBL_P_RED',
          ),
          1 => 
          array (
            'name' => 'n1_c',
            'label' => 'LBL_N1',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'm_remanente_c',
            'label' => 'LBL_M_REMANENTE',
          ),
          1 => 
          array (
            'name' => 'm_assigned_c',
            'label' => 'LBL_M_ASSIGNED',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'm_n1_c',
            'label' => 'LBL_M_N1',
          ),
          1 => 
          array (
            'name' => 'm_n2_c',
            'label' => 'LBL_M_N2',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'm_red_c',
            'label' => 'LBL_M_RED',
          ),
          1 => 
          array (
            'name' => 'm_sifei_c',
            'label' => 'LBL_M_SIFEI',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'n2_c',
            'label' => 'LBL_N2',
          ),
          1 => 
          array (
            'name' => 'n0_c',
            'label' => 'LBL_N0',
          ),
        ),
        11 => 
        array (
          0 => '',
          1 => '',
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
