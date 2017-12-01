<?php
 
    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
	    class update{
			 function update(&$bean, $event, $arguments){
		
			$db =  DBManagerFactory::getInstance();
			
		 
			if($bean->status_c !='Pagado')	{
			$User = new Employee();
			$reporta=$User->retrieve_id($bean->assigned_user_id);
			$reclutador=$User->retrieve_id($reporta['reports_to_id']);
			$assigned_c=$User->retrieve_id($reclutador['reports_to_id']);
										
			$sql=sprintf("update cstm_commissions_cstm set n0_c ='%s' where id_c='%s' ",$reporta['level_c'],$bean->id);
			$result = $db->query($sql, true, 'Error al realizar el query');

			$sql=sprintf("update cstm_commissions_cstm set n1_c ='%s', reports_n1_c='%s' where id_c='%s' ",$reclutador['level_c'], $reclutador['user_name'],$bean->id);
			$result = $db->query($sql, true, 'Error al realizar el query');
			
			$sql=sprintf("update cstm_commissions_cstm set n2_c ='%s', reports_n2_c ='%s' where id_c='%s' ",$assigned_c['level_c'],$assigned_c['user_name'],$bean->id);
			$result = $db->query($sql, true, 'Error al realizar el query');

			}					 
 
			
				}
			

			}
	    
	?>
