<?php
$module_name = 'cstm_reports';
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
	  3 => array ( 'customCode' => '<input title="Desplegar Reporte" accesskey="" class="button" name="desplegar" value="Desplegar" id="desplegar" type="button">
		  <input name="report_id" id="report_id" type="hidden" value="{$fields.id.value}" >',
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
          'file' => 'include/javascript/jquery.js',
        ),
		 1 =>
        array (
          'file' => 'modules/cstm_reports/cstm_reports.js',
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
          1 => 'assigned_user_name',
        ),
        1 => 
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
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'studio' => 'visible',
            'label' => 'LBL_QUERY',
			'customCode' => '<div id="report"></div>',
          ),
        ),
      ),
    ),
  ),
);
?>
