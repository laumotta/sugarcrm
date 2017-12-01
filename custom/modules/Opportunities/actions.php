<?php

class actions {


	public function set_contracts(){
	
		/*
		Metodo generado para:
		Contrato de soporte de instalacion
		Polizas de soporte
		*/	

		error_log('>> Generando Contrato');
		$contracts = new cstm_Contratos();
		$contracts->name =$this->_bean->name;			
		$contracts->accounts_cec16ccounts_ida =$this->_bean->account_id;			
		$contracts->cstm_contraf03unities_idb =$this->_bean->id;			
		$contracts->assigned_user_id =$this->_bean->assigned_user_id;
		$contracts->description =$this->_bean->description;
		$contracts->status_c ='inprogress';
		$contracts->amount =$this->_bean->amount;
		$start =date('Y-m-d');
		$contracts->date_closed =$start;
		
		$contracts->reference_code_c =strtotime($this->_bean->date_entered);
		$contracts->start_date_c =$start;
		$end_date = date('Y-m-d',strtotime('+12 month'));
		$contracts->end_date_c =$end_date;
		$contracts->renewal_date_c =$end_date;
		
		$this->serial_code =$contracts->reference_code_c;
		
		if($contracts->save());		
		return true;
		
		
		
	} 

	public function set_serial($esquema='CFDI'){
	
		/*
		Consumo de Seriales generados  por luis para:
		Serial o codigo de CFI 
				
		*/
	 		 
 		$expiration_c = !empty($this->_bean->expiration_c) ? $this->_bean->expiration_c : '';
		
		$duracion = !empty($this->_bean->expiration_c) ? 'month': '';
		$rfc = !empty($this->_bean->expiration_c) ? $this->acc->rfc_c : '';
		
		$param =	array("paramsSerial"=>array(
		'idAsignado'=>$this->_bean->assigned_user_id,
		'cantidad'=>$this->_bean->acquired_credits_c,
		'precio'=>$this->_bean->amount,
		'idCampania'=>$this->_bean->campaign_id,
		'descripcion'=>$this->_bean->name,
		'duracion'=>$expiration_c,
		'duracionTiempo'=>$duracion, 
		'tipoSerial'=>$esquema,
		'rfc'=>$rfc
		),"paramLogin"=>array(
		'usuario'=> 'ucodes',
		'password'=> 'CoD33sS%'
		));
		
		error_log('XXXXXXXXXXXXXXXX'.print_r($param,1));
	
		$result = $this->soapseriales->call('setRequestSerialInstall',$param);
		error_log('SERIAL '.print_r($result,1));
		
		if(empty($result['error']) and !empty($result['serial'])){
		$this->serial_code =$result['serial']; 
		return true;
		
		}
		
	}



}

?>
