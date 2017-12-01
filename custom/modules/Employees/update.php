<?php
require_once('data/SugarBean.php');
require_once("include/SugarPHPMailer.php");
require_once('modules/Administration/Administration.php');

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
	 
	    class update{
			 function update(&$bean, $event, $arguments){
		
				require_once('modules/Users/User.php');
				$db =  DBManagerFactory::getInstance();
					

					error_log("STATUS".$bean->user_name);
					if(empty($bean->user_name)){	

									
					if(!empty($bean->reports_to_name)){	
					$reportid = $bean->reports_to_id;
					}else {
					$reportid = $bean->created_by;
					}

					error_log("reporta".$bean->reports_to_name);
					error_log("creado".$bean->created_by);
					error_log("reports_to_id".$reportid);			
							
					$usr= new user(); //Instanaciamos datos de usuarios
					$usr->retrieve($reportid);
					$assigned_user_fullname = $usr->first_name .' '. $usr->last_name;
					$_fullname = $bean->first_name .' '. $bean->last_name;
					$usr_email1 =$usr->email1;

					error_log("FULL NAME".$assigned_user_fullname);					
					error_log("email".$usr->email1);	
		 
					
					$html .= " Haz click en la url para ver el usuario <br>  http://crm.sifeidistribuciones.com.mx/crm/index.php?action=DetailView&module=Employees&record=$bean->id <br><br>";
					
					$sql=sprintf("select user_name from users where id ='%s'",$bean->created_by);
 					$result = $db->query($sql, true, 'Error al realizar el query');
					$beancstm = $db->fetchByAssoc($result);	
								
					$notify_mail = new SugarPHPMailer();
					$notify_mail->isHTML(true);
					$admin = new Administration(); 
					$admin-> retrieveSettings(); 
					$notify_mail->CharSet = "UTF-8";
					$notify_mail->prepForOutbound(); 
					$notify_mail->setMailerForSystem(); 
					$notify_mail->From = $admin->settings['notify_fromaddress']; 
					$notify_mail->FromName = "Notificación CRM SIFEI";
					$html01 = $beancstm['user_name']." ha creado un nuevo usuario<br><br>";
					$html01 .= $html;
					$notify_mail->AddAddress("helpdesk@sifei.com.mx","Soporte Sifei");
					$notify_mail->AddReplyTo($usr->email1,$assigned_user_fullname);			
					$notify_mail->AddCustomHeader('X-OTRS-CustomerNo:'.$bean->created_by);
					$notify_mail->AddCustomHeader('X-OTRS-CustomerUser:'.$beancstm['user_name']);

					$notify_mail->AddBCC("ramon.jimenez@sifei.com.mx");
					$notify_mail->Subject = "CRM SIFEI - Usuario Creado: ". $_fullname ;
					$notify_mail->Body = from_html($html01);
					if(!$notify_mail->Send()){
						error_log("Error en el envio de mail de notificacion de casos:  ");

						}		
					}
					
					$sql='';	
					$sql=sprintf("select reports_to_id from users where id ='%s'",$bean->id);
 					$result = $db->query($sql, true, 'Error al realizar el query');
					$beancstm = $db->fetchByAssoc($result);		
					
					$sql='';	
					$sql=sprintf("select user_name from users where id ='%s'",$beancstm['reports_to_id']);
 					$result = $db->query($sql, true, 'Error al realizar el query');
					$beancstm2 = $db->fetchByAssoc($result);		
					
					$sql='';
					if($bean->reports_to_name !=$beancstm2['user_name'] ){
					$sql=sprintf("update users set reports_to_name ='%s' where id ='%s'",$beancstm2['user_name'],$bean->id);
 					$result = $db->query($sql, true, 'Error al realizar el query');
					}
 
			
				}
			

			}
	    
	?>
