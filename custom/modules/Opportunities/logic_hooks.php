<?php

$hook_version = 1; 
$hook_array = Array(); 

$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(1, 'trigger', 'custom/modules/Opportunities/trigger.php','trigger', 'trigger'); 



?>