<?php  
class promociones {

	public function __construct()  
	{  
		$this->db = DataBase::getInstance();	
	} 

	public function serial_instalador($serial){

		error_log('Entro a la clase :::');
		error_log($serial);		
		$query =sprintf("SELECT count(serial) as count, customer_id FROM seriales where  serial='%s' and release_payment_c='Liberado';",$serial);
		$this->db->setQuery($query);
		$Respuesta=$this->db->loadObject();
		
		return array ('serial'=>$Respuesta->count,'customer_id'=>$Respuesta->customer_id);	

	}


} 

?>