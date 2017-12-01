<?php
require_once('cstm/saved.php');  
require_once('data/SugarBean.php');
require_once("include/SugarPHPMailer.php");
require_once('modules/Administration/Administration.php');

 
    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
	    class case_closed{
			 function case_closed(&$bean, $event, $arguments){
		
					$db =  DBManagerFactory::getInstance();

					$sql=sprintf("select * from accounts inner join accounts_cstm on id=id_c where   deleted=0 and accounts.id ='%s'",$bean->account_id);
					$result = $db->query($sql, true, 'Error al realizar el query');
					$beancstm = $db->fetchByAssoc($result);

					$sql2="select body_html from email_templates where id ='bcea3f96-63f9-23f8-9d47-4d9389d11e55'";
					$result2 = $db->query($sql2, true, 'Error al realizar el query');
					$beancstm2 = $db->fetchByAssoc($result2);

					$sql3=sprintf("select e.email_address as email from email_addresses e inner join email_addr_bean_rel r on (r.email_address_id=e.id and r.bean_module='Accounts')
					where r.bean_id='%s' and r.deleted=0 and e.deleted=0 limit 1",$bean->account_id);
					$result3 = $db->query($sql3, true, 'Error al realizar el query');
					$beancstm3 = $db->fetchByAssoc($result3);
					
					
					$html = "Nombre oportunidad";
					$html .= ": ".$bean->name."<br>";
					$html .= "Nombre cuenta";
					$html .= ": ".$bean->account_name."<br>";
					$html .= "Cantidad";
					$html .= ": ".$bean->amount." MXN <br>";
					$html .= "Descripcion : ".$bean->description."<br><br>";
					$html .= "Ciudad";
					$html .= ": ".$beancstm['billing_address_city']."<br>";
					$html .= "Calle";
					$html .= ": ".$beancstm['billing_address_street']."<br>";
					$html .= "Estado/Provincia";
					$html .= ": ".$beancstm['billing_address_state']."<br>";
					$html .= "Código postal";
					$html .= ": ".$beancstm['billing_address_postalcode']."<br>";
					$html .= "Delegación / Municipio";
					$html .= ": ".$beancstm['billing_address_town_c']."<br>";
					$html .= "No. Exterior";
					$html .= ": ".$beancstm['billing_address_ou_c']."<br>";
					$html .= "No. Interior";
					$html .= ": ".$beancstm['billing_address_in_c']."<br>";
					$html .= "Colonia";
					$html .= ": ".$beancstm['billing_address_colonia_c']."<br><br>";
					$html .= " Haz click en la url para ver la oportunidad <br>  http://crm.sifeidistribuciones.com.mx/crm/index.php?module=Opportunities&action=DetailView&record=$bean->id <br><br>";
						
					$url_c= " Haz click en la url para ver la oportunidad http://crm.sifeidistribuciones.com.mx/crm/index.php?module=Opportunities&action=DetailView&record=$bean->id";
					
					$notify_mail = new SugarPHPMailer();
					$notify_mail->isHTML(true);
					$admin = new Administration(); 
					$admin-> retrieveSettings(); 
					$notify_mail->CharSet = "UTF-8";
					$notify_mail->prepForOutbound(); 
					$notify_mail->setMailerForSystem(); 
					$notify_mail->From = $admin->settings['notify_fromaddress']; 
					$notify_mail->FromName = "Notificación CRM SIFEI";

if(($bean->sales_stage =='Comisionamiento' && $bean->release_payment_c =='Liberado')){
	error_log("Enviando a comisiones");
	if(!empty($bean->cstm_products_id_c) and !empty($bean->id)){
		$commissions = new cstm_commissions();
		$productos = new cstm_products();
		$producto =$productos->datos_cstm($bean->cstm_products_id_c);

		if ($bean->cstm_commi141cissions_ida)
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



		if ($bean->sales_stage =='Closed Won' && $bean->release_payment_c =='Pendiente' && $bean->saved_c == 0){
			$html01 = $bean->assigned_user_name." ha marcado como ganada la oportunidad se espera liberar pago con los siguientes datos <br><br>";
						$html01 .= $html;
						$notify_mail->AddBCC("ramon.jimenez@sifei.com.mx");
						$notify_mail->AddBCC("pilar.ramirez@sifei.com.mx");
						$notify_mail->Subject = "CRM SIFEI : Oportunidad GANADA";
						$notify_mail->Body = from_html($html01);

						if(!$notify_mail->Send()){
						error_log("Error en el envio de mail de notificacion de casos:  " . $mail->ErrorInfo);
						}		
					}
				

   if ($bean->sales_stage =='Solicitud de Descuento' && $bean->release_payment_c =='Pendiente' && $bean->saved_c == 0 ){
                        $html01 = $bean->assigned_user_name." ha marcado la oportunidad con solicitud de descuento <br><br>";
                                                $html01 .= $html;
                                                $notify_mail->AddBCC("carlos.martinez@sifei.com.mx");
                                                $notify_mail->AddBCC("alejandro.cortes@sifei.com.mx");
                                                $notify_mail->AddBCC("ramon.jimenez@sifei.com.mx");
                                                $notify_mail->Subject = "CRM SIFEI : Oportunidad con Solicitud de Descuento";
                                                $notify_mail->Body = from_html($html01);
                                                if(!$notify_mail->Send()){
                                                error_log("Error en el envio de mail de notificacion de casos:  " . $mail->ErrorInfo);
                                                }
                  }
					
					if ($bean->release_payment_c =='Liberado' && $bean->saved_c == 0){

						if ($bean->category_c =='Creditos' or $bean->category_c =='Distribucion')	
						{		
						error_log('entro 1');
						$datos = new saved();				
$datos->cuenta_principal($bean->account_id,$bean->id,$bean->acquired_credits_c,$bean->invoice_store_c,$bean->expiration_c,$bean->unite_price_c,$bean->name,$bean->amount);
						$datos -> cerrar();
						
						
						}else {
						
						$sql=sprintf("update opportunities_cstm set saved_c=1 where saved_c=0 and  id_c='%s'",$bean->id);
						$result = $db->query($sql, true, 'Error al realizar el query');
						}	
						
						$html01 = " Se ha liberado el pago creado por ".$bean->assigned_user_name."  <br><br>";
						$html01 .= $html;
						$notify_mail->AddBCC("ramon.jimenez@sifei.com.mx");
						$notify_mail->AddBCC("alejandro.cortes@sifei.com.mx");
						$notify_mail->AddBCC("carlos.martinez@sifei.com.mx");
						//$notify_mail->AddBCC("adrian.gonzalez@sifei.com.mx");
						$notify_mail->AddBCC("roberto.medrano@sifei.com.mx");

						if ($bean->category_c =='Desarrollo' or $bean->category_c =='Software' or $bean->category_c =='Soporte')
                                                {
						 $notify_mail->AddBCC("helpdesk@sifei.com.mx");
						 $notify_mail->AddBCC("mary.quiahua@sifei.com.mx");					
						 $notify_mail->AddBCC("ignacio.hernandez@sifei.com.mx");
						}


						$notify_mail->Subject = "CRM SIFEI : Pago Liberado Oportunidad de ".$bean->category_c;
						$notify_mail->Body = from_html($html01);

						if(!$notify_mail->Send()){
						error_log("Error en el envio de mail de notificacion de casos:  " . $mail->ErrorInfo);
						}		

						if($beancstm['account_type']=='P' && $bean->category_c =='Creditos'){
						
						$sql=sprintf("update accounts set account_type ='C' where id = '".$bean->account_id."'");
						$result = $db->query($sql, true, 'Error al realizar el query');
						
						$html = sprintf($beancstm2["body_html"], $beancstm["name"]);
						$notify_mail->AddReplyTo("helpdesk@sifei.com.mx","Soporte Sifei");
						$notify_mail->AddAddress($beancstm3["email"]);
						$notify_mail->AddBCC("ramon.jimenez@sifei.com.mx");
						//$notify_mail->AddBCC("adrian.gonzalez@sifei.com.mx");
						$notify_mail->AddBCC("carlos.martinez@sifei.com.mx");
						$notify_mail->Subject = "Notificaciones SIFEI";
						$notify_mail->Body = from_html($html);

						if(!$notify_mail->Send()){						
						error_log("Error en el envio de mail de notificacion de bienvenida:  ".$mail->ErrorInfo);						
						}	
					
						}

						
						/*
						$tipo_ ="Pago Liberado Oportunidad de ".$bean->category_c;

						$idr=create_guid();
						$sql=sprintf("insert into cases(id, date_entered, deleted,account_id,name ,status,priority,assigned_user_id,created_by,description )
						values('%s',now(),0,'%s','%s','New','P1','7f8a6f2a-f948-5e87-f74d-4d4898d33c2b','a50dfdb1-e274-6d9d-6f4a-4d8d41ddc516','%s')",$idr,$bean->account_id,$tipo_,$url_c);
						$result = $db->query($sql, true, 'Error al realizar el query');

						$sql=sprintf("insert into cases_cstm(id_c ) values('%s')",$idr);
						$result = $db->query($sql, true, 'Error al realizar el query');
*/
						

					}
			
			
				}
			

			}
	    
	?>
