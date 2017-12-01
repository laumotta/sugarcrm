<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    
    class logic_hooks_class
    {
        function after_login_method($bean, $event, $arguments)
        {
	
	 if ( isset($GLOBALS['db']) ) { $db = $GLOBALS['db']; }
         if ( ! isset($db) ) { $db = DBManagerFactory::getInstance(); }

	if($bean->id !='d41003e3-4ecd-db72-6839-4f885f94bdb2'){	
	$query = sprintf("update users_cstm set last_login_c = now() where id_c ='%s'",$bean->id);
	error_log($query);
	$db->query($query);
	}

        }
    }
?>
