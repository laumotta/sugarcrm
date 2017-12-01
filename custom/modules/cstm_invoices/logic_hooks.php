<?php 
$hook_version = 1; 
$hook_array = Array(); 

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'Trigger para facturas', 'custom/modules/cstm_invoices/invoices_hook.php','invoices_logic_hook', 'update_invoices'); 

?>