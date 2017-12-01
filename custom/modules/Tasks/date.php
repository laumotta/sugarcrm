<?php
 
    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
	    class date{
			 function date(&$bean, $event, $arguments){
		
					$db =  DBManagerFactory::getInstance();
					 
					
					if($bean->date_due == ''){


					echo $sql=sprintf("update tasks set date_due =DATE_ADD(now(), INTERVAL 72 HOUR)  where id = '".$bean->id."'");
					$result = $db->query($sql, true, 'Error al realizar el query');

					}

                                        				 
			
				}
			

			}
	    
	?>
