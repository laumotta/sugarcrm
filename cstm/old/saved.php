﻿<?php


class saved {	 
	
	private $hostname = '127.0.0.1';
	private $username = 'AdmiN_CrmProd';
	private $password ='aDmin_CrM123+Prod';
	private $database ='lanmicro_crm';
	private $cnx ;	
	private $soapcliente=null;	
	
	function __construct(){

	
	require_once('include/nusoap/nusoap.php');
	//$this->soapclient = new nusoapclient('http://cfd01.sifei.com.mx/cfdipac2012/server_WS/server_agrega_cuenta.php?wsdl',true);
	$this->soapclient = new nusoapclient('http://cfd01.sifei.com.mx/cfd/webservices/server_agrega_cuenta.php?wsdl',true);
	$this->cnx = mysql_pconnect($this->hostname, $this->username, $this->password) or trigger_error(mysql_error(),E_USER_ERROR);
	mysql_select_db ($this->database, $this->cnx);


	} 

	function cuenta_principal($cuenta_id,$oportunidad_id,$creditos,$invoice_store_c,$expiration_c,$unite_price_c,$product_c,$monto){
	
	$cat=array("Distribuidor"=>"D","Franquicia"=>"F","Corporativo"=>"C","Matriz"=>"M","Sucursal"=>"S","Inversor "=>"I","Competidor "=>"O","Partner "=>"P","Prensa "=>"P","Otro "=>"O");
	$tipo=array("P"=>"P","R"=>"P","G"=>"G");
	$plan=array("P"=>"1","R"=>"2","G"=>"0");


	 	$sql=sprintf("select 
		acc.id,
		acc_cstm.rfc_c,
		acc_cstm.type_customer_c,
		acc.name,
		'contacts.first_name' =null,
		'contacts.last_name' =null,
		'contacts.m_name_c'=null,
		'contacts_cstm.curp_c'=null,
		acc_cstm.activity_c,
		'contacts_cstm.rfc_c'=null,
		'contacts_cstm.first_name'=null,
		'contacts_cstm.last_name'=null,
		'contacts_cstm.m_name'=null,
		'contacts_cstm.curp_c'=null,
		acc.date_entered,
		acc.description,
		'opportunities_csmt.acquired_credits_c'=null,
		acc_cstm.billing_scheme_c,
		acc.parent_id,
		acc_cstm.account_category_c,
		acc.ownership,
		acc_cstm.billing_address_colonia_c,
		acc_cstm.billing_address_ou_c,
		acc_cstm.billing_address_in_c,
		acc_cstm.billing_address_colonia_c,
		acc_cstm.billing_address_town_c,
		acc.billing_address_state,
		acc.billing_address_street,
		acc.billing_address_city,
		acc.billing_address_country,
		acc.billing_address_postalcode,
		acc.phone_office,
		acc.phone_fax,
		acc_cstm.saved_c,
		acc_cstm.contact_id_c,
		acc_cstm.type_service_c,
		acc.account_type
		from  accounts as acc inner join accounts_cstm as acc_cstm on acc_cstm.id_c =acc.id   where acc.deleted=0 
		and acc.id = '%s'",$cuenta_id);
		$result = mysql_query($sql,$this->cnx) or die (mysql_error()."=> Erro en datos de cuenta");
	  $beancstm = mysql_fetch_assoc($result);


 $sql2=sprintf("select c_c.rfc_c, c.first_name, c.last_name, c_c.m_name_c, c_c.curp_c from contacts as c 
inner join contacts_cstm as c_c on c.id =c_c.id_c 
where c.deleted=0 and id ='%s'  limit 1",$beancstm['contact_id_c']);

$result2 = mysql_query($sql2,$this->cnx) or die (mysql_error()."=> Existe mas de un Representante legal");
$beancstm2 = mysql_fetch_assoc($result2);



$sql5=sprintf("select e.email_address  from email_addresses e inner join email_addr_bean_rel r on (r.email_address_id=e.id and r.bean_module='Accounts')
where r.bean_id='%s' and r.deleted=0 and e.deleted=0 limit 1",$cuenta_id);
$result5 =  mysql_query($sql5,$this->cnx) or die (mysql_error()."=> Error en mail");
$beancstm5= mysql_fetch_assoc($result5);

		//SELECT DE CONTACT PARA REP. LEGAL, CONTRIBUYENTE


if($beancstm['saved_c']==0){
 	 
		if($beancstm['type_customer_c']=="F"){
		
					$set_entry_params  = array(
					'RfcCont'=>utf8_encode($beancstm['rfc_c']),
					'Tipo'=>utf8_encode($beancstm['type_customer_c']),
					'RazonSocial'=>utf8_encode($beancstm['name']),

					'NombreCont'=>utf8_encode($beancstm2['first_name']),
					'ApePatCont'=>utf8_encode($beancstm2['last_name']),
					'ApeMatCont'=>utf8_encode($beancstm2['m_name_c']),
					'CurpCont'=>utf8_encode($beancstm2['curp_c']),
					'ActividadPrep'=>utf8_encode($beancstm['activity_c']),
					'RfcRepLeg'=>'',

					'NombreRepLeg'=>'',
					'ApePatRepLeg'=>'',
					'ApeMatRepLeg'=>'',
					'CurpRepLeg'=>'',
					


					'FechaRegistro'=>utf8_encode($beancstm['date_entered']),
					'Observaciones'=>utf8_encode($beancstm['description']),
					'Creado'=>utf8_encode($beancstm['date_entered']),
					'TotFoliosPago'=>$creditos,
					'Remoto'=>'',
					'EmailNotif'=>$beancstm5['email_address'],
					'ModeloFacturacion'=>utf8_encode($beancstm['billing_scheme_c']),
					'IdCorporativo'=>utf8_encode($beancstm['parent_id']),
					'TipoEstMatSuc'=>$cat[$beancstm['account_category_c']],
					'NombreEmi'=>utf8_encode($beancstm['ownership']),
					'CalleEmi'=>utf8_encode($beancstm['billing_address_street']),
					'NoExteriorEmi'=>utf8_encode($beancstm['billing_address_ou_c']),
					'NoInteriorEmi'=>utf8_encode($beancstm['billing_address_in_c']), 
					'ColoniaEmi'=>utf8_encode($beancstm['billing_address_colonia_c']),
					'LocalidadEmi'=>utf8_encode($beancstm['billing_address_town_c']),
					'ReferenciaEmi'=>'',
					'MunicipioEmi'=>utf8_encode($beancstm['billing_address_city']),
					'EstadoEmi'=>utf8_encode($beancstm['billing_address_state']),
				 
					'PaisEmi'=>utf8_encode($beancstm['billing_address_country']),
					'CodigoPostalEmi'=>utf8_encode($beancstm['billing_address_postalcode']),
					'TelefonoEmi'=>utf8_encode($beancstm['phone_office']),
					'FaxEmi'=>utf8_encode($beancstm['phone_fax']),
					'CorreoElectEmi'=>$beancstm5['email_address'],
					'Plan'=>$plan[trim($beancstm['type_service_c'])],
					'Nlicencias'=>'1',
					'TipoCliente'=>$tipo[trim($beancstm['type_service_c'])],
					'Activo'=>'S',
					'DesFacturas'=>$invoice_store_c,
					'Expiracion'=>$expiration_c,
					'Precio_u'=>$unite_price_c,
					'Nombre_p'=>utf8_encode($product_c),
					'monto'=>$monto,
					'CodAddenda'=>'',
					'DesAddenda'=>utf8_encode($product_c),
					'Tprograma'=>''
					);



		
		}else if($beancstm['type_customer_c']=="M"){
 
						$set_entry_params  = array(
						'RfcCont'=>utf8_encode($beancstm['rfc_c']),
						'Tipo'=>utf8_encode($beancstm['type_customer_c']),
						'RazonSocial'=>utf8_encode($beancstm['name']),

					
						

						'NombreCont'=>'',
						'ApePatCont'=>'',
						'ApeMatCont'=>'',
						'CurpCont'=>'',

						'ActividadPrep'=>utf8_encode($beancstm['activity_c']),
						'RfcRepLeg'=>utf8_encode($beancstm2['rfc_c']),
						'NombreRepLeg'=>utf8_encode($beancstm2['first_name']),
						'ApePatRepLeg'=>utf8_encode($beancstm2['last_name']),
						'ApeMatRepLeg'=>utf8_encode($beancstm2['m_name_c']),
						'CurpRepLeg'=>utf8_encode($beancstm2['curp_c']),
						'FechaRegistro'=>utf8_encode($beancstm['date_entered']),
						'Observaciones'=>utf8_encode($beancstm['description']),
						'Creado'=>utf8_encode($beancstm['date_entered']),
						'TotFoliosPago'=>$creditos,
						'Remoto'=>'',
						'EmailNotif'=>$beancstm5['email_address'],
						'ModeloFacturacion'=>utf8_encode($beancstm['billing_scheme_c']),
						'IdCorporativo'=>utf8_encode($beancstm['parent_id']),
						'TipoEstMatSuc'=>$cat[$beancstm['account_category_c']],
						'NombreEmi'=>utf8_encode($beancstm['ownership']),
						'CalleEmi'=>utf8_encode($beancstm['billing_address_street']),
						'NoExteriorEmi'=>utf8_encode($beancstm['billing_address_ou_c']),
						'NoInteriorEmi'=>utf8_encode($beancstm['billing_address_in_c']), 
						'ColoniaEmi'=>utf8_encode($beancstm['billing_address_colonia_c']),
						'LocalidadEmi'=>utf8_encode($beancstm['billing_address_town_c']),
						'ReferenciaEmi'=>'',
						'MunicipioEmi'=>utf8_encode($beancstm['billing_address_city']),
						'EstadoEmi'=>utf8_encode($beancstm['billing_address_state']),
 
						'PaisEmi'=>utf8_encode($beancstm['billing_address_country']),
						'CodigoPostalEmi'=>utf8_encode($beancstm['billing_address_postalcode']),
						'TelefonoEmi'=>utf8_encode($beancstm['phone_office']),
						'FaxEmi'=>utf8_encode($beancstm['phone_fax']),
						'CorreoElectEmi'=>$beancstm5['email_address'],
						'Plan'=>$plan[trim($beancstm['type_service_c'])],
						'Nlicencias'=>'2',
						'TipoCliente'=>$tipo[trim($beancstm['type_service_c'])],
						'Activo'=>'S',
						'DesFacturas'=>$invoice_store_c,
						'Expiracion'=>$expiration_c,
						'Precio_u'=>$unite_price_c,
						'Nombre_p'=>utf8_encode($product_c),
						'monto'=>$monto,
						'CodAddenda'=>'',
						'DesAddenda'=>utf8_encode($product_c),
						'Tprograma'=>''
						);

 
		}
	
				$result =  $this->soapclient->call('crea_cta',$set_entry_params);
				
				error_log($result);	
					
				if($result == 'Cuenta creada'){

				$this->actualiza_cuenta($cuenta_id);				
				$this->actualiza_oportunidad($oportunidad_id);	


				} 
				else 
				{
				//Agregar notificacion de error
				}

				
		}else {
			 

			error_log("TIPO ".$beancstm['type_service_c']);
		
			if($beancstm['account_category_c']=='Corporativo' ){
		   	//sub_cuentas($cuenta_id);	
			//recargas('',$cuenta_id,$creditos);
			}else if(trim($beancstm['type_service_c'])=='R') {
						error_log('Entro pago renta');
						$this->renta($oportunidad_id,$monto);
			}else{
			error_log('recarga');	
			$this->recargas($beancstm['rfc_c'],'',$creditos,$oportunidad_id);
			  
				 
		 	}
			}

	}

function renta($oportunidad_id,$monto)	{

error_log("renta".$oportunidad_id."--".$monto);
$sql4=sprintf("select id_c, saved_c from opportunities_cstm where  id_c='%s'",$oportunidad_id);

$result4 = mysql_query($sql4,$this->cnx) or die (mysql_error());
$beancstm4 = mysql_fetch_assoc($result4);

if($beancstm4['saved_c']==0){	
$param=array('idEstado'=> $oportunidad_id,'pago'=> $monto);
$result= $this->soapclient->call('pagoRenta', $param);

if ($result== 'ok' ){
error_log("renta ok");
$this->actualiza_oportunidad($oportunidad_id) ;
}else {

error_log("error en renta");
error_log($result);

}
}

}


	function recargas ($rfc_c,$cuenta_id,$creditos,$oportunidad_id,$invoice_store_c){
	
	$sql4=sprintf("select id_c, saved_c from opportunities_cstm where  id_c='%s'",$oportunidad_id);

	$result4 = mysql_query($sql4,$this->cnx) or die (mysql_error());
	$beancstm4 = mysql_fetch_assoc($result4);

	if($beancstm4['saved_c']==0){	
 
	
	// $param=array('_rfc_cta'=>$rfc_c, '_id_crm'=> $cuenta_id,'_fol'=> $creditos,'DesFacturas'=>$invoice_store_c); 

	$param=array(
	'RfcCont'=>$rfc_c,
	'IdCrm'=> $cuenta_id,
	'Folios'=> $creditos,
	'DesFacturas'=> $invoice_store_c,
	'CodAddenda'=>'',
	'DesAddenda'=>'',
	'Expiracion'=>'',
	'Tprograma'=>''
	);

	$result= $this->soapclient->call('agrega_fol', $param);
 
	if ($result== 1 ){
	$this->actualiza_oportunidad($oportunidad_id) ;
	}else{
	error_log($result);
	}
	


	}
				
	
	 
	}

	function actualiza_cuenta($cuenta_id){

				$sql=sprintf("update accounts_cstm set saved_c =1 where id_c = '%s'",$cuenta_id);
				$result = mysql_query($sql,$this->cnx);

	} 
	
	function actualiza_oportunidad($oportunidad_id){
				$sql=sprintf("update opportunities_cstm set saved_c =1 where id_c = '%s'",$oportunidad_id);
				$result = mysql_query($sql,$this->cnx);

	}


	function cerrar(){
	mysql_close($this->cnx);
	}
}

?>
