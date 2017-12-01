<?php
$module_name = 'cstm_reports';
$viewdefs [$module_name] = 
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
	'javascript' => '{$PROBABILITY_SCRIPT} <script type="text/javascript" src="include/javascript/jquery.js"></script> <script type="text/javascript" 
	language="Javascript"> $(document).ready(function(){ldelim}
	$("#desplegar").click(function(){ldelim}
	$.post("cstm/control_reports.php",{ldelim}id:$("#report_id").val(),query_c:$("#query_c").val(){rdelim},function(data){ldelim}
	$("#report").html(data);
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'query_c',
            'studio' => 'visible',
            'label' => 'LBL_QUERY',
          ),
	  1 => '',
        ),

	3 => 
	array ( 
		0 => array ( 
			'name' => 'desplegar', 
			'label' => '',
			'customCode' => '<input name="desplegar" id="desplegar" type="button" value="Desplegar" >',
	 ),
	 1 => 
		array ( 
			'name' => 'report_id', 
			'label' => '', 'customCode' => '<input name="report_id" id="report_id" type="hidden" value="{$fields.id.value}" >',
	 ), 
	),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => array (
           'customCode' => '<div id="report"> </div>', ),
          ),
      ),
    ),
  ),
);
?>
