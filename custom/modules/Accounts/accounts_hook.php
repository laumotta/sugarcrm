<?php

require_once("custom_method.php"); 

class accounts_logic_hook extends custom_method {


	function update_account(&$bean, $event, $arguments){
		error_log("-> Logic Hook UPDATE ACCOUNT");
		
		//$bean->custom_fields->retrieve();
		//$bean->fetched_row['status_c'] == 'Active'
		//error_log('>>'.$bean->status_c);
		
		if ($bean->status_c == 'Inactive'){
			
			error_log("-> Actualizando Status de cuenta");
			
			$param =array(
				array(					
				'rfc' => $bean->rfc_c,
				'servicio' => 'actualiza_Status',
				'comodin' => 'I',  
				)
			);
							
		}
		
		if (isset($param))
		$result = $this->soap_service($param);
		
		
	
	}



}


?>
