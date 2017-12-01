<?php

class trigger{

	function trigger(&$bean, $event, $arguments){

		require_once('data/SugarBean.php');
		require_once('cstm/utils.php');
		require_once('include/nusoap/nusoap.php');
		require_once('modules/Accounts/Account.php');

		$respuesta =false;

		$this->db =  DBManagerFactory::getInstance();	
		$this->soapclient = new nusoapclient('http://cfd01.sifei.com.mx/cfdipac/server_WS/WSCuentasOp.php?wsdl',true);
		$this->soapclientdev = new nusoapclient('http://devcfdi.sifei.com.mx/cfdipac/server_WS/WSCuentasOp.php?wsdl',true);


		$this->acc = new Account();  
		$this->acc->retrieve($bean->account_id);

		$this->_bean =$bean;

		error_log(">>>>>>>>>>>>>Entro al Hook<<<<<<<<<<<<");
		if ($this->_bean->saved_c == 0){

			if($this->_bean->sales_stage =='Closed Won'){

				if ($this->_bean->release_payment_c =='Liberado'){

					error_log('Es una Oportunidad LIBERADA');

					$respuesta = $this->sendOpp();
					error_log('RESPUESTA OP LIBERADA '.$respuesta);

					if($respuesta){


						$query = sprintf("update opportunities_cstm set saved_c=1 where id_c ='%s' ",$this->_bean->id);
						error_log($query);
						$update =$this->db->query($query);
						error_log(print_r($update,1));

						error_log('Enviar Mail de Pago');
						$this->sendMessage('ed053c11-7b32-f26c-b53a-4fc1129395b2','8dc8872a-c5c5-cf23-e49c-4faeb23e95a8','Cliente');
						
					}			

				}else{		

					error_log('Oportunidad GANADA Enviando Mail Oportunidad Ganada');
					$this->sendMessage('32076709-dc72-1df8-1e8d-4fc110aca77f','1f155348-cd35-fcb1-146c-4fc10b0db3ac','Usuario');	

				}

			}else if($this->_bean->sales_stage =='Solicitud de Descuento'){		

				error_log('Enviando Mail Solicitud de Descuento');
				$this->sendMessage('9857ef8f-c70f-e43c-0241-4fc112b796c4','d5f74d9e-8bd5-2ddc-992d-4fc10c592dfb','Usuario');		
				
			}

		}else if($this->_bean->sales_stage =='Comisionamiento' and $this->_bean->release_payment_c =='Liberado'){
			error_log("Enviando a comisiones");

			if(!empty($bean->cstm_products_id_c) and !empty($bean->id)){
				$commissions = new cstm_commissions();
				$productos = new cstm_products();
				$producto =$productos->datos_cstm($bean->cstm_products_id_c);

				if (!empty($bean->cstm_commi141cissions_ida))
				$commissions->id = $bean->cstm_commi141cissions_ida;

				$commissions->name = $bean->product_c;
				$commissions->assigned_user_id = $bean->assigned_user_id;

				$commissions->description = $bean->name;
				$commissions->category_c = $bean->category_c;
				$commissions->p_sifei_c = $producto['commission_corp_c'];
				$commissions->p_red_c = $producto['commission_net_c'];
				$commissions->account_id_c = $bean->account_id;
				$commissions->amount_civa_c = $bean->amount;
				$commissions->amount_c = $bean->amount/1.16;
				$commissions->save();
			}

		}

	}

	function sendOpp(){
		$success =false;
		error_log('Oportunidad con Categoria de '.$this->_bean->category_c);

		switch ($this->_bean->category_c)
		{
		case 'Creditos':
			error_log('Entro Oportunida de Creditos Y E PROSPECTO');

			if($this->acc->saved_c==0){
				error_log('Oportunida de Creditos es Prospecto ');
				$success =$this->creaCuenta() ;	
				if($success){
					
					
					if($this->_bean->cstm_products_id_c=='8d33cbfb-fbd7-8bb0-0aa2-4ed7c42d86e8'){
						
						
						error_log(">>>>>>>>>>>>> update  tipo renta  <<<<<<<<<<<<<< ");
						$query = sprintf("update accounts_cstm set type_service_c='R' where id_c ='%s' ",$this->acc->id);
						error_log($query);
						$r= $this->db->query($query);
						error_log(print_r($r,1));
						
						error_log('Activa Plan Renta');
						$unitario=$this->_bean->unite_price_c/2;

						$param =array(array(
						'codigo' => '2', 
						'nombre' => $this->_bean->name,
						'precio_u' =>  $unitario,
						'creditos' => $this->_bean->acquired_credits_c,
						'monto' => $this->_bean->amount,
						'rfc' => $this->acc->rfc_c,
						'servicio' => 'activa_Renta',
						'comodin' => $this->_bean->expiration_c,
						));
						
						$success = $this->creaOportunidad($param);
						
						
					} 
					
					error_log('MAIL DE BIENVENIDA');
 
					if($this->_bean->app_c=='B'){
						$this->sendMessage('9857ef8f-c70f-e43c-0241-4fc112b796c4','f07d6787-42e4-f7ad-7e87-5069d975f5c4','Cliente' );	
					}else{
						$this->sendMessage('9857ef8f-c70f-e43c-0241-4fc112b796c4','45b7e191-1e9f-aae2-6bc3-5069d87ffb0c','Cliente' );
					}
										
					return $success;
					

				}			

			}else if($this->acc->saved_c==1){
				error_log('Oportunida de Creditos es Cliente ');

				//es de renta
				if(trim($this->acc->type_service_c)=='R' and $this->_bean->cstm_products_id_c =='8d33cbfb-fbd7-8bb0-0aa2-4ed7c42d86e8') {

					error_log('PAGA CREDITOS RENTA');

					$param =array(array(
					'rfc' => $this->acc->rfc_c,
					'codigo' => $this->_bean->id,
					'monto' =>  $this->_bean->amount,
					'servicio' => 'pago_Renta',
					));
					//es de paga
				}else if(trim($this->acc->type_service_c)=='P'){

					error_log('Recarga de Creditos');
					$param =array(array(				
					'rfc' => $this->acc->rfc_c,
					'creditos' => $this->_bean->acquired_credits_c,
					'servicio' => 'creditos',
					));
					
				}				
			}
			break;

		case 'Desarrollo':

			error_log('MAIL NOTIFICACION DE Desarrollo');
			$this->sendMessage('dcb15136-e461-8887-1aac-4fc111cd25fd','c426678f-9c6f-ae9c-4cab-4fc10b136440','Usuario');
			$success =true;
			break;

		case 'Soporte':
			error_log('MAIL NOTIFICACION DE Desarrollo');
			$this->sendMessage('dcb15136-e461-8887-1aac-4fc111cd25fd','c426678f-9c6f-ae9c-4cab-4fc10b136440','Usuario');
			$success =true;
			break;
			
		case 'Software':

			error_log('MAIL NOTIFICACION DE Software');
			$this->sendMessage('dcb15136-e461-8887-1aac-4fc111cd25fd','c426678f-9c6f-ae9c-4cab-4fc10b136440','Usuario');

			if ($this->_bean->cstm_products_id_c=='73a2365e-faab-dbeb-27bb-503e62b5cd20'){ 
				error_log('SECTOR PRIMARIO'); 
			
				$param =array( array( 
				'rfc' => $this->acc->rfc_c, 
				'servicio' => 'activa_Sector_Primario', 
				'comodin' => '1', 
				)
				);	

			}else if ($this->_bean->cstm_products_id_c=='d3dab570-6c8b-9c78-cd2f-4f1f5c2e4212'){
				error_log('Entro KIOSCO VIRTUAL');
				
				$param =array(
				array(					
				'rfc' => $this->acc->rfc_c,
				'servicio' => 'activa_Quiosco',
				'comodin' => $this->_bean->acquired_credits_c,  
				)
				);
				

			}else if($this->_bean->name=='RESGUARDOS'){
				error_log('Entro RESGUARDOS');
				/*
				$param =array(
				array(					
				'rfc' => $this->acc->rfc_c,
				'creditos' => $this->_bean->acquired_credits_c,
				'servicio' => 'activa_Quiosco',
				)
				);*/

			}else if ($this->_bean->cstm_products_id_c=='e33a0449-f193-231b-a279-4fbbb25035c4'){

				error_log('Entro ALMACEN PARA DESCARGA DE FACTURAS');
				
				$param =array(
				array( 
				'rfc' => $this->acc->rfc_c,
				'codigo' => '1', 
				'comodin' => add_date($this->_bean->date_closed,'',12,''),
				'servicio' => 'activa_almacen_licencia',
				)
				);
				
			}else { 
				$success =true;
			}

			break;

		case 'Addendas':
			error_log('MAIL NOTIFICACION DE Addendas');
			/*
			$param =array(array(	
			'codigo' => 'codigo de la adenda',
			'descripcion' => 'descripcion de la adenda',
			'rfc' => $this->acc->rfc_c,
			'comodin' => 'es el tipo de programa B=Buz on, E=escritorio, BE buzon y escritorio',
			'servicio' => 'activa_Addenda',
			));
			*/
			$this->sendMessage('dcb15136-e461-8887-1aac-4fc111cd25fd','c426678f-9c6f-ae9c-4cab-4fc10b136440','Usuario');
			$success =true;
			break;
			
		case 'Conectores':
			$this->sendMessage('dcb15136-e461-8887-1aac-4fc111cd25fd','c426678f-9c6f-ae9c-4cab-4fc10b136440','Usuario');
			$success =true;
			break;

		case 'Timbrado Fiscal':
			error_log('Timbrado Fiscal');

			if($this->acc->account_type=='P'){
				error_log('Prospecto Timbrado Fiscal');
				$success =$this->creaCuenta() ;	

				if($success){

					$param =array(array(	
					'rfc' => $this->acc->rfc_c,
					'servicio' => 'activa_Cliente_Externo'
					));
					
					error_log('Entro MAIL DE BIENVENIDA CLIENTE DE TIMBRADO');
					$this->sendMessage('9857ef8f-c70f-e43c-0241-4fc112b796c4','799d4be0-8e39-5745-e734-4fc10c6108cd','Cliente');
					
				} 

				

			}else if($this->acc->account_type=='C'){
				error_log('Cliente Timbrado Fiscal ');

				if(trim($this->acc->type_service_c)=='P'){

					error_log('Recarga de Creditos de Timbrado');

					$param =array(array(				
					'rfc' => $this->acc->rfc_c,
					'creditos' => $this->_bean->acquired_credits_c,
					'servicio' => 'creditos_Cliente_Externo'
					));

				}				
			}
			break;

		default:

			error_log('Sin Opcion');
			return false;

		}
		if(isset($param))
		$success = $this->creaOportunidad($param);

		return $success;


	}

	function creaCuenta(){

		error_log('CREANDO CUENTA '. $this->acc->rfc_c);

		$success = false;

		$cat=array("Distribuidor"=>"D","Franquicia"=>"F","Corporativo"=>"C","Matriz"=>"M","Sucursal"=>"S","Inversor "=>"I","Competidor "=>"O","Partner "=>"P","Prensa "=>"P","Otro "=>"O");
		$TipoCli=array("P"=>"P","R"=>"P","G"=>"G");
		$PlanCli=array("P"=>"1","R"=>"2","G"=>"0");

		if($this->_bean->cstm_products_id_c=='8d33cbfb-fbd7-8bb0-0aa2-4ed7c42d86e8'){

			
			$TipoCliente="P";
			$PlanCliente=2;
			
			
			
		} else{
			
			$TipoCliente=$TipoCli[trim($this->acc->type_service_c)];
			$PlanCliente=$PlanCli[trim($this->acc->type_service_c)];
			
		}

		if($this->acc->contact_id_c!=''){
			require_once('modules/Contacts/Contact.php');
			$this->ctac = new Contact();  
			$this->ctac->retrieve($this->acc->contact_id_c);

			if($this->acc->type_customer_c=='F'){
				error_log('Cliente tipo Fisica');

				$NombreCont= $this->ctac->first_name;
				$ApePatCont=$this->ctac->last_name;
				$ApeMatCont=$this->ctac->m_name_c;
				$CurpCont='';
				$RfcRepLeg='';
				$NombreRepLeg='';
				$ApePatRepLeg='';
				$ApeMatRepLeg='';
				$CurpRepLeg='';

			}else if($this->acc->type_customer_c=='M'){
				error_log('Cliente tipo Moral');

				$NombreCont=''; 
				$ApePatCont=''; 
				$ApeMatCont=''; 
				$CurpCont='';
				$RfcRepLeg=$this->ctac->rfc_c;
				$NombreRepLeg=$this->ctac->first_name;
				$ApePatRepLeg=$this->ctac->last_name;
				$ApeMatRepLeg=$this->ctac->m_name_c;
				$CurpRepLeg='';


			}
		}else{

			$NombreCont='';
			$ApePatCont=''; 
			$ApeMatCont=''; 
			$CurpCont='';
			$RfcRepLeg='';
			$NombreRepLeg='';
			$ApePatRepLeg='';
			$ApeMatRepLeg='';
			$CurpRepLeg='';

		}


		$params =array(
		'RfcCont'=>$this->acc->rfc_c,
		'Tipo'=>$this->acc->type_customer_c,
		'RazonSocial'=>$this->acc->name,
		'NombreCont'=>$NombreCont,
		'ApePatCont'=>$ApePatCont,
		'ApeMatCont'=>$ApeMatCont,
		'CurpCont'=>$CurpCont,
		'ActividadPrep'=>$this->acc->activity_c,
		'RfcRepLeg'=>$RfcRepLeg,
		'NombreRepLeg'=>$NombreRepLeg,
		'ApePatRepLeg'=>$ApePatRepLeg,
		'ApeMatRepLeg'=>$ApeMatRepLeg,
		'CurpRepLeg'=>$CurpRepLeg,
		'FechaRegistro'=>$this->acc->date_entered,
		'Observaciones'=>$this->acc->description,
		'TotFoliosPago'=>$this->_bean->acquired_credits_c,
		'EmailNotif'=>$this->acc->email1,
		'ModeloFacturacion'=>$this->acc->billing_scheme_c,
		'IdCorporativo'=>$this->acc->parent_id,
		'TipoEstMatSuc'=>'M',
		'NombreEmi'=>$this->acc->ownership,
		'CalleEmi'=>$this->acc->billing_address_street,
		'NoExteriorEmi'=>$this->acc->billing_address_ou_c,
		'NoInteriorEmi'=>$this->acc->billing_address_in_c,
		'ColoniaEmi'=>$this->acc->billing_address_colonia_c,
		'LocalidadEmi'=>$this->acc->billing_address_town_c,
		'ReferenciaEmi'=>'',
		'MunicipioEmi'=>$this->acc->billing_address_city,
		'EstadoEmi'=>$this->acc->billing_address_state,
		'PaisEmi'=>$this->acc->billing_address_country,
		'CodigoPostalEmi'=>$this->acc->billing_address_postalcode,
		'TelefonoEmi'=>$this->acc->phone_office,
		'FaxEmi'=>$this->acc->phone_fax,
		'CorreoElectEmi'=>$this->acc->email1,
		'TipoCliente'=>$TipoCliente,
		'Plan'=>$PlanCliente,
		'Nlicencias'=>'2'
		);


		$set_entry_params = array();
		array_push($set_entry_params,$params);

		error_log(print_r($set_entry_params,1));
		
		if ($this->_bean->cstm_products_id_c=='aaf24d17-d9b1-01e9-757d-4fc12c8902d9'){
			
			$success =  $this->soapclientdev->call('creaCuenta',$set_entry_params);
			error_log("respuesta ws creacuenta en dev ". print_r($success,1));	
			
			return $success['status'];
			
		}else{
			
			$success =  $this->soapclient->call('creaCuenta',$set_entry_params);
			error_log("respuesta ws creacuenta ". print_r($success,1));	
			
			if($success['status']){	
				
				$numero = $this->mascara($success['idCliente']);

				error_log('Actualizar Datos');
				$this->acc->saved_c = '1';  
				$this->acc->customer_id_c = $success['idCliente'];  
				$this->acc->sic_code = $numero ;  
				$this->acc->save();	


				$q = sprintf("update accounts set account_type='C' where id ='%s' ",$this->acc->id);
				error_log($q);
				$u =$this->db->query($q);
				error_log(print_r($u,1));


			}
			
		}

		return $success['status'];
	}

	function creaOportunidad($param){

		$success = false;
		error_log('Liberando >>>>>>>> OPORTUNIDAD '. $this->acc->rfc_c );

		error_log(print_r($param,1));
		
		if ($this->_bean->cstm_products_id_c=='aaf24d17-d9b1-01e9-757d-4fc12c8902d9'){
			
			$success =  $this->soapclientdev->call('creaOportunidad',$param);
			error_log("respuesta ws ". print_r($success,1));			
			
		}else {
			
			$success =  $this->soapclient->call('creaOportunidad',$param);
			error_log("respuesta ws ". print_r($success,1));			
			
		}
		return $success['status'];

	}

	function sendMessage($prospect_list_id,$template_id,$tipo){

		require_once('modules/EmailTemplates/EmailTemplate.php');
		require_once('modules/Users/User.php');
		require_once("include/SugarPHPMailer.php");
		require_once('modules/Administration/Administration.php');

		$success = false;
		$hasRecipients = false;

		$usr= new user(); //Instanaciamos datos de usuarios

		error_log('Detonando MAIL');
		$admin = new Administration(); 
		$admin-> retrieveSettings(); 
		$mail = new SugarPHPMailer();
		$mail->Helo ="mail.sifei.com.mx";
		$mail->CharSet = "UTF-8";
		$mail->prepForOutbound(); 
		$mail->setMailerForSystem(); 
		$mail->From = $admin->settings['notify_fromaddress']; 
		$mail->FromName =$admin->settings['notify_fromname'];
		$mail->ClearAllRecipients();
		$mail->ClearReplyTos();

		error_log("ENVIANDO MAIL PARA :::: ". $tipo); 


		if ($this->acc->email1 !=  '' and $tipo == 'Cliente'){
			error_log($this->acc->email1);
			$mail->AddAddress($this->acc->email1);  
		}

		$emailTemp = new EmailTemplate();
		error_log('Preparando plantilla: '.$template_id);
		$emailTemp->retrieve($template_id); //Datos de la plantilla

			$usr->retrieve($this->_bean->assigned_user_id);
			$assigned_user_fullname = $usr->first_name .' '. $usr->last_name;
			if($assigned_user_fullname==''){
			$assigned_user_fullname='-';
			}		
			error_log('>>>>>>'.$assigned_user_fullname);
			$usr_email1 =$usr->email1;

		if($emailTemp->body_html !=''){
			error_log('Plantilla Seleccionada');

			$htmlBody = $emailTemp->body_html; //Extraemos el cuerpo
			$htmlBody = str_replace('$sic_code', $this->acc->sic_code, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$rfc_c', $this->acc->rfc_c, $htmlBody); //Remplazamos variables de plantilla

			$htmlBody = str_replace('$stage', $this->_bean->sales_stage, $htmlBody); //Remplazamos variables de plantilla		
			$htmlBody = str_replace('$status', $this->_bean->release_payment_c, $htmlBody); //Remplazamos variables de plantilla		
			$htmlBody = str_replace('$category', $this->_bean->category_c, $htmlBody); //Remplazamos variables de plantilla		
			$htmlBody = str_replace('$name', $this->_bean->name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_name', $this->acc->name, $htmlBody); //Remplazamos variables de plantilla	
			$htmlBody = str_replace('$contact_name', $this->acc->name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$customer_id', $this->acc->sic_code, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$rfc', $this->acc->rfc_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$amount', number_format($this->_bean->amount,2), $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$description', $this->acc->description, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_city', $this->acc->billing_address_city, $htmlBody); //Remplazamos variables de plantilla		
			$htmlBody = str_replace('$account_billing_address_street', $this->acc->billing_address_street, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_state', $this->acc->billing_address_state, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_postalcode', $this->acc->billing_address_postalcode, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_town_c', $this->acc->billing_address_town_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_ou_c', $this->acc->billing_address_ou_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_in_c', $this->acc->billing_address_in_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_colonia_c', $this->acc->billing_address_colonia_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$assigned_user_name', $assigned_user_fullname, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$link', $this->_bean->id, $htmlBody); //Remplazamos variables de plantilla

			$emailTemp->body_html = $htmlBody;

			if($prospect_list_id=='dcb15136-e461-8887-1aac-4fc111cd25fd'){
			$subject = $emailTemp->subject.' - '.$this->acc->name;
			$mail->AddAddress("helpdesk@sifei.com.mx","Soporte Sifei");
			$mail->AddCustomHeader ('X-OTRS-CustomerNo:'.$this->acc->customer_id_c);
			$mail->AddCustomHeader ('X-OTRS-oportunidad:'.$this->_bean->id);
			$mail->AddCustomHeader ('X-OTRS-CustomerUser:'.$this->acc->rfc_c);
			error_log('Modificando asunto ................');
			}else {
			$subject = $emailTemp->subject;
			}


			$mail->isHTML(true);
			$mail->AddReplyTo("helpdesk@sifei.com.mx","Soporte Sifei");
			$mail->Body=from_html($emailTemp->body_html);
			$mail->Subject = $subject;

			$mail->prepForOutbound();
			$hasRecipients = false;
			
			if($tipo == 'Cliente'){
			$emailObj = new Email();
			$datec= date("Y-m-d H:i:s"); 
			$emailObj->to_addrs= $this->acc->email1; 
			$emailObj->type= 'archived'; 
			$emailObj->deleted = '0'; 
			$emailObj->name = $subject ; 
			$emailObj->description = $emailTemp->body_html; 
			$emailObj->description_html = null;
			$emailObj->from_addr = $mail->From; 
			$emailObj->parent_type = 'Opportunities'; 
			$emailObj->parent_id = $this->_bean->id; 
			$emailObj->date_sent = $datec; 
			$emailObj->modified_user_id = '1'; 
			$emailObj->created_by = '1'; 
			$emailObj->status = 'sent';
			$emailObj->save();
			}

			if ($prospect_list_id ==''){
				error_log("SIN LISTA DE MAIL ")	;
				$prospect_list_id ='52882a1f-a63a-def5-b1e0-4fc11b1a3475';

			}
			
			
			error_log("Preparando TARGET LIST ". $prospect_list_id);

			$query = "SELECT related_id FROM prospect_lists_prospects WHERE prospect_list_id='$prospect_list_id' AND deleted=0";

			error_log($query);	
			$resulto = $this->db->query($query); //Resultado de listado de id de usuarios 

			$cont =0;			

			while($row = $this->db->fetchByAssoc($resulto))
			{
				$cont ++;
				error_log("ENTRO WHILE ".$cont." ". $row['related_id']);


				$related_id = $row['related_id'];

				$usr->retrieve($related_id);
				$cpmail =$usr->email1;

				error_log("ESTE ES EL CORREO ".$cpmail);

				if (!empty($cpmail)){
					$hasRecipients = true;	
					error_log("COPIANDO CORREOSS-> ".$cpmail);
					$mail->AddBCC($cpmail);


				}

			}
			
			$mail->AddBCC('sifeimx@gmail.com');
				
			if($prospect_list_id=='ed053c11-7b32-f26c-b53a-4fc1129395b2'){
 			if(!empty($usr_email1))
			$mail->AddBCC($usr_email1);
			error_log("Copiando Mail Vendedor-> ".$usr_email1);
			}

			if($hasRecipients){


				$success = @$mail->Send();
				error_log('Enviando Mail=>'.print_r($success,1));


			}

		}

		return $success;

	}
	
	function mascara($num){
	return sprintf("1%05d", $num);
	}

}
?>
