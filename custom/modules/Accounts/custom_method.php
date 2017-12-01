<?php

class custom_method{

	private $wsclient;

	public function __construct(){	
		
		require_once('include/nusoap/nusoap.php');
		$this->wsclient = new nusoapclient('http://cfd01.sifei.com.mx/cfdipac/server_WS/WSCuentasOp.php?wsdl',true);
		
	}

	public function soap_service($param){
	
	error_log("-> SOAP SERVICE".print_r($param,1));
	
	$success = false;

			$success =  $this->wsclient->call('creaOportunidad',$param);
			error_log("respuesta wsmethod ". print_r($success,1));
 
		return $success;
	}

}
?>
