<?php
$viewdefs ['Employees'] = 
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
	$(document).ready(function(){ldelim}	 
	$("#address_state").change(function(){ldelim}
	$.post("cstm/sepomex.php",{ldelim}edo:$("#address_state").val(){rdelim},function(data){ldelim}
	$("#cd").html(data);
	{rdelim});
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
            'name' => 'employee_status',
            'label' => 'LBL_EMPLOYEE_STATUS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
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
            'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.title.name}" id="{$fields.title.name}" size="30" maxlength="50" value="{$fields.title.value}" title="" tabindex="t" >{else}{$fields.title.value}<input type="hidden" name="{$fields.title.name}" id="{$fields.title.name}" value="{$fields.title.value}">{/if}',
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
            'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.department.name}" id="{$fields.department.name}" size="30" maxlength="50" value="{$fields.department.value}" title="" tabindex="t" >{else}{$fields.department.value}<input type="hidden" name="{$fields.department.name}" id="{$fields.department.name}" value="{$fields.department.value}">{/if}',
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
            'label' => 'LBL_REPORTS_TO_NAME',
            'customCode' => '{if $EDIT_REPORTS_TO}<input type="text" name="{$fields.reports_to_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.reports_to_name.name}" size="" value="{$fields.reports_to_name.value}" title="" autocomplete="off" >{$REPORTS_TO_JS}<input type="hidden" name="{$fields.reports_to_id.name}" id="{$fields.reports_to_id.name}" value="{$fields.reports_to_id.value}"> <span class="id-ff multiple"><button type="button" name="btn_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick=\'open_popup("{$fields.reports_to_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}{/literal}, "single", true);\'><img src="themes/default/images/id-ff-select.png?s=c9c8526686b6ab6aedd28ae83a48d117&c=1"></button><button type="button" name="btn_clr_{$fields.reports_to_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button lastChild" onclick="this.form.{$fields.reports_to_name.name}.value = \'\'; this.form.{$fields.reports_to_id.name}.value = \'\';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><img src="themes/default/images/id-ff-clear.png?s=c9c8526686b6ab6aedd28ae83a48d117&c=1"></button></span>{else}{$fields.reports_to_name.value}<input type="hidden" name="{$fields.reports_to_id.name}" id="{$fields.reports_to_id.name}" value="{$fields.reports_to_id.value}">{/if}',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'label' => 'LBL_OTHER_PHONE',
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
            'name' => 'address_street',
            'type' => 'text',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'displayParams' => 
            array (
              'rows' => 2,
              'cols' => 30,
            ),
          ),
          1 => 
          array (
            'name' => 'address_city',
            'label' => 'LBL_CITY',
            'customCode' => ' {if $fields.address_city.value == ""}
	<div id="cd"></div>{else}
	<input type="text" name="{$fields.address_city.name}" id="{$fields.address_city.name}" value="{$fields.address_city.value}">
	{/if}
	</select>',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'address_state',
            'label' => 'LBL_STATE',
            'customCode' => '{if $fields.address_state.value == ""}
		<select name="{$fields.address_state.name}" id="{$fields.address_state.name}" title="" tabindex="s">
		<option value="" selected="selected" >- Seleccione -</option> 
		<option value="Aguascalientes">Aguascalientes</option>
		<option value="Baja California">Baja California</option>
		<option value="Baja California Sur">Baja California Sur</option>
		<option value="Campeche">Campeche</option>
		<option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
		<option value="Colima">Colima</option>
		<option value="Chiapas">Chiapas</option>
		<option value="Chihuahua">Chihuahua</option>
		<option value="Distrito Federal">Distrito Federal</option>
		<option value="Durango">Durango</option>
		<option value="Guanajuato">Guanajuato</option>
		<option value="Guerrero">Guerrero</option>
		<option value="Hidalgo">Hidalgo</option>
		<option value="Jalisco">Jalisco</option>
		<option value="México">México</option>
		<option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
		<option value="Morelos">Morelos</option>
		<option value="Nayarit">Nayarit</option>
		<option value="Nuevo León">Nuevo León</option>
		<option value="Oaxaca">Oaxaca</option>
		<option value="Puebla">Puebla</option>
		<option value="Querétaro">Querétaro</option>
		<option value="Quintana Roo">Quintana Roo</option>
		<option value="San Luis Potosí">San Luis Potosí</option>
		<option value="Sinaloa">Sinaloa</option>
		<option value="Sonora">Sonora</option>
		<option value="Tabasco">Tabasco</option>
		<option value="Tamaulipas">Tamaulipas</option>
		<option value="Tlaxcala">Tlaxcala</option>
		<option value="Veracruz">Veracruz</option>
		<option value="Yucatán">Yucatán</option>
		<option value="Zacatecas">Zacatecas</option>
		</select>{else}
		<input type="text" name="{$fields.address_state.name}" id="{$fields.address_state.name}" value="{$fields.address_state.value}">
		{/if}',
          ),
          1 => 
          array (
            'name' => 'address_postalcode',
            'label' => 'LBL_POSTAL_CODE',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'address_country',
            'label' => 'LBL_COUNTRY',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'label' => 'LBL_EMAIL',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ife_c',
            'studio' => 'visible',
            'label' => 'LBL_IFE',
            'customCode' => '{if $EDIT_REPORTS_TO}
			<select name="{$fields.ife_c.name}" id="{$fields.ife_c.name}" title="" tabindex="123">
			<option value="{$fields.ife_c.value}" selected="selected" >{$fields.ife_c.value}</option> 
			<option label="No" value="No">No</option>
			<option label="Si" value="Si">Si</option>
			</select>
			{else}
			{$fields.ife_c.value}<input type="hidden" name="{$fields.ife_c.name}" id="{$fields.ife_c.name}" value="{$fields.ife_c.value}">
			{/if}',
          ),
          1 => 
          array (
            'name' => 'cv_c',
            'studio' => 'visible',
            'label' => 'LBL_CV',
            'customCode' => '{if $EDIT_REPORTS_TO}
			<select name="{$fields.cv_c.name}" id="{$fields.cv_c.name}" title="" tabindex="123">
			<option value="{$fields.cv_c.value}" selected="selected" >{$fields.cv_c.value}</option> 
			<option label="No" value="No">No</option>
			<option label="Si" value="Si">Si</option>
			</select>
			{else}
			{$fields.cv_c.value}<input type="hidden" name="{$fields.cv_c.name}" id="{$fields.cv_c.name}" value="{$fields.cv_c.value}">
			{/if}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'curp_c',
            'studio' => 'visible',
            'label' => 'LBL_CURP',
            'customCode' => '{if $EDIT_REPORTS_TO}
			<select name="{$fields.curp_c.name}" id="{$fields.curp_c.name}" title="" tabindex="123">
			<option value="{$fields.curp_c.value}" selected="selected" >{$fields.curp_c.value}</option> 
			<option label="No" value="No">No</option>
			<option label="Si" value="Si">Si</option>
			</select>
			{else}
			{$fields.curp_c.value}<input type="hidden" name="{$fields.curp_c.name}" id="{$fields.curp_c.name}" value="{$fields.curp_c.value}">
			{/if}',
          ),
          1 => 
          array (
            'name' => 'birth_cert_c',
            'studio' => 'visible',
            'label' => 'LBL_BIRTH_CERT',
            'customCode' => '{if $EDIT_REPORTS_TO}
			<select name="{$fields.birth_cert_c.name}" id="{$fields.birth_cert_c.name}" title="" tabindex="123">
			<option value="{$fields.birth_cert_c.value}" selected="selected" >{$fields.birth_cert_c.value}</option> 
			<option label="No" value="No">No</option>
			<option label="Si" value="Si">Si</option>
			</select>
			{else}
			{$fields.birth_cert_c.value}<input type="hidden" name="{$fields.birth_cert_c.name}" id="{$fields.birth_cert_c.name}" value="{$fields.birth_cert_c.value}">
			{/if}',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'employment_app_c',
            'studio' => 'visible',
            'label' => 'LBL_EMPLOYMENT_APP',
            'customCode' => '{if $EDIT_REPORTS_TO}
			<select name="{$fields.employment_app_c.name}" id="{$fields.employment_app_c.name}" title="" tabindex="123">
			<option value="{$fields.employment_app_c.value}" selected="selected" >{$fields.employment_app_c.value}</option> 
			<option label="No" value="No">No</option>
			<option label="Si" value="Si">Si</option>
			</select>
			{else}
			{$fields.employment_app_c.value}<input type="hidden" name="{$fields.employment_app_c.name}" id="{$fields.employment_app_c.name}" value="{$fields.employment_app_c.value}">
			{/if}',
          ),
          1 => 
          array (
            'name' => 'confidentiality_agr_c',
            'studio' => 'visible',
            'label' => 'LBL_CONFIDENTIALITY_AGR',
            'customCode' => '{if $EDIT_REPORTS_TO}
			<select name="{$fields.confidentiality_agr_c.name}" id="{$fields.confidentiality_agr_c.name}" title="" tabindex="123">
			<option value="{$fields.confidentiality_agr_c.value}" selected="selected" >{$fields.confidentiality_agr_c.value}</option> 
			<option label="No" value="No">No</option>
			<option label="Si" value="Si">Si</option>
			</select>
			{else}
			{$fields.confidentiality_agr_c.value}<input type="hidden" name="{$fields.confidentiality_agr_c.name}" id="{$fields.confidentiality_agr_c.name}" value="{$fields.confidentiality_agr_c.value}">
			{/if}',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'address_proof_c',
            'studio' => 'visible',
            'label' => 'LBL_ADDRESS_PROOF',
            'customCode' => '{if $EDIT_REPORTS_TO}
			<select name="{$fields.address_proof_c.name}" id="{$fields.address_proof_c.name}" title="" tabindex="123">
			<option value="{$fields.address_proof_c.value}" selected="selected" >{$fields.address_proof_c.value}</option> 
			<option label="No" value="No">No</option>
			<option label="Si" value="Si">Si</option>
			</select>
			{else}
			{$fields.address_proof_c.value}<input type="hidden" name="{$fields.address_proof_c.name}" id="{$fields.address_proof_c.name}" value="{$fields.address_proof_c.value}">
			{/if}',
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
      ),
    ),
  ),
);
?>
