<?php $hook_version = 1; $hook_array = Array(); 


error_log(">>>>>>>>>>>>>>>>>>>>>>>>>>>>>".$_REQUEST['module']); 

if($_REQUEST['module'] =='cstm_quotes' or !isset($_REQUEST['module'])){ 
$hook_array['after_save'] = Array(); $hook_array['after_save'][] = 
Array(1, 'hook', 'custom/modules/cstm_quotes/cotiza.php','hook', 'hook');
}

if($_REQUEST['module'] !='cstm_quotes'){
$hook_array['after_relationship_add'] = Array(); 
$hook_array['after_relationship_add'][] = Array(1, 'hookName', 
'custom/modules/cstm_quotes/hookName.php', 'CustomLogicHookClassName', 
'CustomLogicHook');
 }
?>
