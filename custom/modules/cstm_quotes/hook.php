<?php class hook{
	function hook(&$bean, $event, $arguments){
		require_once('data/SugarBean.php');
		require_once('modules/Accounts/Account.php');
		$respuesta =false;
		$notify_client	=false;
		
		$this->db = DBManagerFactory::getInstance();
		$this->acc = new Account();
		$this->acc->retrieve($bean->accounts_cbda7ccounts_ida);
		
		
		$this->_bean =$bean;

		error_log(">>>>>>>>>>>>>Entro al Hook<<<<<<<<<<<<");
		if($this->_bean->sales_stage =='Closed Won'){
			
			error_log('Es una Cotizacion Ganada');
			$respuesta = partidas();
			error_log('RESPUESTA Cotizacion LIBERADA '.print_r($respuesta,1));
			if($respuesta['success']){
				error_log('Enviar Mail de Pago');
				$notify_client = true;
				$this->_beandos =$respuesta;
				$this->sendMessage('52882a1f-a63a-def5-b1e0-4fc11b1a3475','3b499368-1012-e7d6-4d2a-4fe1e7a0d130');
			}			
		
	

		
		} 
		
	}
	function partidas(){
	
 		$subtotal =0;
		$ret_array = array();
		$query =sprintf("select cstm_quote38b0unities_idb from cstm_quotespportunities_c  where cstm_quote000f_quotes_ida = '%s' and deleted=0;",$this->_bean->id);
		$result = $this->db->query($query); 
		$partidas ='';
		while($row = $this->db->fetchByAssoc($result))
		{			
			 $related_id = $row['cstm_quote38b0unities_idb'];
			require_once('modules/Opportunities/Opportunity.php');
			$this->op= new Opportunity();  
			$rowop = $this->op->get_opp($related_id);
		
			$cantidad =$rowop['acquired_credits_c'];			
			$unitariot = $rowop['unite_price_c'];
			$unitario = $unitariot/1.16;
			$importe =$unitario * $cantidad;
			$subtotal = $subtotal+$importe;	
			$partidas .= $rowop['name']."<br>" ;
			

		}
		
		$iva =(($subtotal*16)/100);
		$total =$subtotal+$iva;
		
		$ret_array['partidas'] = $partidas;
		$ret_array['subtotal'] = $subtotal;
		$ret_array['iva'] = $iva;
		$ret_array['total'] = $total;

		
		$query = sprintf("update cstm_quotes_cstm set subtotal_c =%s ,iva_c =%s, total_c=%s  where id_c ='%s' ",$subtotal,$iva,$total,$this->_bean->id);
		error_log($query);
		$update =$this->db->query($query); 
		error_log(print_r($update,1));
		$ret_array['success'] =$update;
		
		
		
		return $ret_array;
	}
	
	function sendMessage($prospect_list_id,$template_id){
		require_once('modules/EmailTemplates/EmailTemplate.php');
		require_once('modules/Users/User.php');
		require_once("include/SugarPHPMailer.php");
		require_once('modules/Administration/Administration.php');
		$success = false;
		$usr= new user(); //Instanaciamos datos de usuarios
		error_log('> Detonando MAIL');
		
		error_log('> datos '.print_r($this->_beandos,1));
		
		$admin = new Administration();
		$admin-> retrieveSettings();
		$mail = new SugarPHPMailer();
		$mail->CharSet = "UTF-8";
		$mail->prepForOutbound();
		$mail->setMailerForSystem();
		$mail->From = $admin->settings['notify_fromaddress'];
		$mail->FromName = "Notificación CRM SIFEI";
		$mail->ClearAllRecipients();
		$mail->ClearReplyTos();
		if ($this->acc->email1 != ''){
			error_log($this->acc->email1);
			$mail->AddAddress($this->acc->email1);
		}
		$emailTemp = new EmailTemplate();
		error_log('Preparando plantilla: '.$template_id);
		$emailTemp->retrieve($template_id); //Datos de la plantilla
		if($emailTemp->body_html !=''){
			error_log('Plantilla Seleccionada');
			$htmlBody = $emailTemp->body_html; //Extraemos  el cuerpo
						 
			$arreglo = $this->_beandos;
			   			
			$htmlBody = str_replace('$partidas', $arreglo['partidas'], $htmlBody); //Remplazamos variables de plantilla		
			$htmlBody = str_replace('$subtotal', number_format($arreglo['subtotal'],2), $htmlBody); //Remplazamos variables de plantilla		
			$htmlBody = str_replace('$iva', number_format($arreglo['iva'],2), $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$total', number_format($arreglo['total'],2), $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_name', $this->acc->name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$contact_name', $this->acc->name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$description', $this->acc->description, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_city', $this->acc->billing_address_city, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_street', $this->acc->billing_address_street, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_state', $this->acc->billing_address_state, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_postalcode', $this->acc->billing_address_postalcode, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_town_c', $this->acc->billing_address_town_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_ou_c', $this->acc->billing_address_ou_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_in_c', $this->acc->billing_address_in_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$account_billing_address_colonia_c', $this->acc->billing_address_colonia_c, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$assigned_user_name', $this->_bean->assigned_user_name, $htmlBody); //Remplazamos variables de plantilla
			$htmlBody = str_replace('$link', $this->_bean->id, $htmlBody); //Remplazamos variables de plantilla
			$emailTemp->body_html = $htmlBody;
			$mail->Subject=from_html($emailTemp->subject);
			error_log($emailTemp->subject);
			$mail->isHTML(true);
			$mail->AddReplyTo("helpdesk@sifei.com.mx","Soporte Sifei");
			$mail->Body=from_html($emailTemp->body_html);
			$mail->Subject = "CRM SIFEI : Oportunidad GANADA"; //Subject
			//	error_log($emailTemp->body_html);
			$mail->prepForOutbound();
			$hasRecipients = false;
			
			if ($prospect_list_id ==''){
				
				$prospect_list_id ='52882a1f-a63a-def5-b1e0-4fc11b1a3475';
				
			}
			
			error_log("Preparando TARGET LIST ". $prospect_list_id);
			
			$query = "SELECT related_id,related_type FROM prospect_lists_prospects WHERE prospect_list_id='$prospect_list_id' AND deleted=0";
			$result = $this->db->query($query); //Resultado de listado de id de usuarios
			while($row = $this->db->fetchByAssoc($result))
			{
				$related_id = $row['related_id'];
				$usr->retrieve($related_id);
				if (!empty($usr->email1)){
					if($hasRecipients){
						 $mail->AddBCC($usr->email1);
					}
					$hasRecipients = true;
				}
			}
			if($hasRecipients){
				error_log('Enviando Mail');
				$success = @$mail->Send();
			}
		}
		return $success;
	}
}
?>
