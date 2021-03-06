<?php 

class hook{ 
 
	function hook(&$bean, $event, $arguments){
		require_once('data/SugarBean.php');
		$respuesta =false;
		$notify_client	=false;
		$this->db = DBManagerFactory::getInstance();
 		$this->_bean_quote =$bean; 

		error_log("HOOK COTIZA");

		if(($this->_bean_quote->sales_stage =='Credit Application' or $this->_bean_quote->sales_stage =='Special Projects' ) and $this->_bean_quote->payment_status_c =="Pendiente"){ 

		error_log('Enviando Mail Solicitud de Descuento'); 

			if($this->_bean_quote->sales_stage =='Credit Application'){
				$this->sendMessage('9857ef8f-c70f-e43c-0241-4fc112b796c4','efd612d8-6adc-f13a-6c2b-51c1f5ad2584','Usuario');
			}else {
				$this->sendMessage('9857ef8f-c70f-e43c-0241-4fc112b796c4','63815867-b60d-50e2-0362-51a60ca39987','Usuario');
			}

		}else if($this->_bean_quote->sales_stage =='Closed Won' and $this->_bean_quote->payment_status_c =="Pendiente"){ 

			error_log("Cotizacion ganada sin pago aprovado"); 
			$notify_client = true; 
			$this->sendMessage('32076709-dc72-1df8-1e8d-4fc110aca77f','3b499368-1012-e7d6-4d2a-4fe1e7a0d130','Cliente');

			//and $this->_bean_quote->executed_c == 0

		} else if ($this->_bean_quote->payment_status_c=="Aprobado" and $this->_bean_quote->executed_c ==0 ){
					
			$resultado = $this->action_libera();
			
			error_log("Notificando cotizacion  aprobada  y actualizado cotizacion de op liberadas");

			$this->sendMessage('ed053c11-7b32-f26c-b53a-4fc1129395b2','a7c04a00-ec7d-4a91-6a94-50c27c8f5401','Cliente');

			$query = sprintf("update cstm_quotes_cstm set executed_c=1 where id_c ='%s' ",$this->_bean_quote->id);
                        $r= $this->db->query($query);

		        $cv2 = sprintf("update cstm_quotes set date_closed =now() where id ='%s' ",$this->_bean->id);
                        $r2 =$this->db->query($cv2);



		}

	}
	
	public function libera(){
		require_once('modules/Opportunities/Opportunity.php');
		error_log("XXXXXXXXXXXXXXX  Liberando Oportunidades XXXXXXXXXXXXXXX");
	$query =sprintf("select  cstm_quote38b0unities_idb from cstm_quotespportunities_c  where cstm_quote000f_quotes_ida ='%s' and deleted=0;",$this->_bean_quote->id);
		$result = $this->db->query($query);
 		while($row = $this->db->fetchByAssoc($result))
		{
			$related_id = $row['cstm_quote38b0unities_idb'];
			error_log(">>> Oportunidad => ".$related_id);
			//$opp= new Opportunity();
			//$opp->retrieve($related_id);
			//$opp->sales_stage ="Closed Won"; 
			//$opp->release_payment_c = "Liberado"; 
			//$result = $opp->save();
		}

		error_log(">>>>>>>> HOOK DE COTIZACION FINALIZO <<<<<<<<<< ");

		return true;		
	}	
	

	function sendMessage($prospect_list_id,$template_id,$tipo){
		require_once('modules/EmailTemplates/EmailTemplate.php');
		require_once('modules/Users/User.php');
		require_once('modules/Employees/Employee.php');
		require_once("include/SugarPHPMailer.php");
		require_once('modules/Administration/Administration.php');
		require_once('modules/Accounts/Account.php');
		$success = false;
		$acc = new Account();
		$acc->retrieve($this->_bean_quote->accounts_cbda7ccounts_ida);
		$usr= new user(); //Instanaciamos datos de usuarios
		error_log('> Detonando MAIL');
		//error_log('> datos '.print_r($this->_bean_quotedos,1));
		$admin = new Administration();
		$admin-> retrieveSettings();
		$mail = new SugarPHPMailer();
		$mail->CharSet = "UTF-8";
		$mail->prepForOutbound();
		$mail->setMailerForSystem();
		$mail->From = $admin->settings['notify_fromaddress'];
		$mail->FromName =$admin->settings['notify_fromname'];
		$mail->ClearAllRecipients();
		$mail->ClearReplyTos();
		if ($acc->email1 != '' and $tipo == 'Cliente'){
			//error_log($acc->email1);
			$mail->AddAddress($acc->email1);
		}
		$emailTemp = new EmailTemplate();
		//error_log('Preparando plantilla: '.$template_id);
		$emailTemp->retrieve($template_id); //Datos de la plantilla
		if($emailTemp->body_html !=''){
			//error_log('Plantilla Seleccionada');
			$htmlBody = $emailTemp->body_html; //Extraemos el cuerpo
			//$arreglo = $this->_bean_quotedos;
			$htmlBody = str_replace('$no_c',  $this->_bean_quote->no_c, $htmlBody); //Remplazamos variables de plantilla
			//$htmlBody = str_replace('$partidas', $arreglo['partidas'], $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$id', $this->_bean_quote->id, $htmlBody); //Remplazamos variables de plantilla
			//$htmlBody = str_replace('$subtotal', number_format($arreglo['subtotal'],2), $htmlBody); //Remplazamos variables de plantilla
			//$htmlBody = str_replace('$iva', number_format($arreglo['iva'],2), $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$total', number_format($this->_bean_quote->total_c,2), $htmlBody); //Remplazamos variables de plantilla
			//$htmlBody = str_replace('$total', number_format($arreglo['total'],2), $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_name', $acc->name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$contact_name', $acc->name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$description', $acc->description, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_city', $acc->billing_address_city, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_street', $acc->billing_address_street, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_state', $acc->billing_address_state, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_postalcode', $acc->billing_address_postalcode, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_town_c', $acc->billing_address_town_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_ou_c', $acc->billing_address_ou_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_in_c', $acc->billing_address_in_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_colonia_c', $acc->billing_address_colonia_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$assigned_user_name', $this->_bean_quote->assigned_user_name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$link', $this->_bean_quote->id, $htmlBody); //Remplazamos variables de plantilla
			$emailTemp->body_html = $htmlBody;
			$mail->Subject=from_html($emailTemp->subject);
			//error_log($emailTemp->subject);
			$mail->isHTML(true);
			$mail->AddReplyTo("pagos@sifei.com.mx","Soporte Sifei");
			$mail->Body=from_html($emailTemp->body_html);
			//$mail->Subject = "Compra Exitosa - Notificaciones SIFEI"; //Subject
			//	error_log($emailTemp->body_html);
			$mail->prepForOutbound();
			$hasRecipients = false;
			
			if($tipo == 'Cliente'){
			
			$emailObj = new Email();
			$datec= date("Y-m-d H:i:s");
			$emailObj->to_addrs= $acc->email1;
			$emailObj->type= 'archived';
			$emailObj->deleted = '0';
			$emailObj->name = $mail->Subject ;
			$emailObj->description = $emailTemp->body_html;
			$emailObj->description_html = null;
			$emailObj->from_addr = $mail->From;
			$emailObj->parent_type = 'cstm_quotes';
			$emailObj->parent_id = $this->_bean_quote->id;
			$emailObj->date_sent = $datec;
			$emailObj->modified_user_id = '1';
			$emailObj->created_by = '1';
			$emailObj->status = 'sent';
			$emailObj->save();
			}
			
			if ($prospect_list_id ==''){
				$prospect_list_id ='52882a1f-a63a-def5-b1e0-4fc11b1a3475';
			}
			//error_log("Preparando TARGET LIST ". $prospect_list_id);
			$query = "SELECT related_id,related_type FROM prospect_lists_prospects WHERE prospect_list_id='$prospect_list_id' AND deleted=0";
			//error_log("copiando ->".$query);	
			$result = $this->db->query($query); //Resultado de listado de id de usuarios
			while($row = $this->db->fetchByAssoc($result))
			{
				$related_id = $row['related_id'];
				error_log($related_id);
				$usr->retrieve($related_id);
				$cpmail = $usr->email1;
				

				if (!empty($cpmail)){
					$hasRecipients = true;
					error_log("copiando ->".$cpmail);
					$mail->AddBCC($cpmail);
				}
			}
			if($hasRecipients){

				$usr2= new user(); //Instanaciamos datos de usuarios
				$usr2->retrieve($this->_bean_quote->assigned_user_id);
				$usr2_email1 =$usr2->email1;

				if(!empty($usr2_email1)){
					$mail->AddBCC($usr2_email1);
					error_log("Copiando Mail Vendedor-> ".$usr2_email1);
				}


				$usr3= new Employee();
				$notificar_reclutador=$usr3->retrieve_id($this->_bean_quote->assigned_user_id);
				if($notificar_reclutador['notify_recruiter_c']){
				error_log("ENTRO A NOTIFICAR");
				$email_reclutador=$usr3->retrieve_email($notificar_reclutador['reports_to_id']);
				$mail->AddBCC($email_reclutador);
				error_log("Copiando a reclutador->".$email_reclutador);
				}				

				//error_log('Enviando Mail');
				$success = @$mail->Send();
			}
		}
		return $success;
	}


	public function action_libera(){
		require_once('data/SugarBean.php');
		require_once('modules/Opportunities/Opportunity.php');
				
		$db1 = DBManagerFactory::getInstance();


		$record = $_REQUEST['record'];
		error_log("Librando Cotizacion :".  $record  );
		error_log(" ---------------------------------------------------------------- ");
		
		$query =sprintf("select  cstm_quote38b0unities_idb from cstm_quotespportunities_c  where cstm_quote000f_quotes_ida ='%s' and deleted=0;",$record);
		$result = $db1->query($query);

		while($rowx = $db1->fetchByAssoc($result))
		{
			$related_id = $rowx['cstm_quote38b0unities_idb'];
			$resultado = $this->update($related_id);
		}
		
		error_log(" ---------------------------------------------------------------- ");
		error_log(" Finalizo liberacion de cotizacion");
		
		return true;		

	}

	public function update($id){

		require_once('modules/Opportunities/Opportunity.php');
		error_log("Oportunidad :::::::::::: ".$id."");

		$opp= new Opportunity();
		$opp->retrieve($id);
		$opp->sales_stage ="Closed Won"; 
		$opp->release_payment_c = "Liberado"; 
		$result = $opp->save();

		return $result;
	}

}
?>
