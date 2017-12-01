<?php 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'Trigger para la clase de cuenta', 'custom/modules/Accounts/accounts_hook.php','accounts_logic_hook', 'update_account'); 

?>
