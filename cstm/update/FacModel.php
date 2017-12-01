<?php
class factura{

private $op;
private $db;



		public function __construct()  
		{  
		
		$this->db = DataBase::getInstance();	
		   			
		} 

		public function opportunidades($op) {
	 
		 
		 $datos_tem =str_replace("undefined", "", $_GET["op"]);
		 $datos = explode(",", $datos_tem);

		foreach($datos as $id){
		 if($id !='')
		 $datos_[]="'".$id."'";
		}

		return $ids = implode(',',$datos_);

		}
		
		public function val($ops){
	  
			$query =sprintf("SELECT COUNT(DISTINCT account_id) as num, account_id FROM accounts_opportunities where opportunity_id in(%s) and 
deleted=0;",$ops);
			$this->db->setQuery($query);
			$accounts_opps=$this->db->loadObject();
			
			$query =sprintf("SELECT count(*) as num_fac from opportunities_cstm inner join opportunities on id =id_c where (invoiced_c ='Si' or 
release_payment_c!='Liberado') and id_c in(%s) and deleted=0;",$ops);
			$this->db->setQuery($query);
			$opps=$this->db->loadObject();
			
			return array(0=>$accounts_opps,1=>$opps);
			
		}
		
		public function emisor(){
		
			$this->db->setQuery("SELECT *  FROM accounts inner join accounts_cstm on id=id_c where id ='f0225eab-0a71-9d78-7345-4dd56b4276c2' and deleted=0");
			return $datos_emisor=$this->db->loadObject();
		
		}
		
		public function receptor($rec){
		
		 	$query =sprintf("SELECT *  FROM accounts inner join accounts_cstm on id=id_c where id ='%s' and deleted=0;",$rec);
			$this->db->setQuery($query);
			return $datos_receptor=$this->db->loadObject();
		
		}
		
		
		public function partidas($ids){
		    //echo "<br><br>";
			//echo 
			$query =sprintf("SELECT * FROM opportunities inner join opportunities_cstm on id=id_c where id in(%s) and deleted=0;",$ids);
			$this->db->setQuery($query);
			return $rows=$this->db->loadObjectList();
		}
		
		
		public function email($cuenta_id){
		
		
			$query=sprintf("select e.email_address  from email_addresses e inner join email_addr_bean_rel r on (r.email_address_id=e.id and r.bean_module='Accounts')
			where r.bean_id='%s' and r.deleted=0 and e.deleted=0 limit 1",$cuenta_id);
 
			$this->db->setQuery($query);
			return $rows=$this->db->loadObject();
		
		}
		
		public function layout($array){
			$id=create_guid();
			$link= $id.".txt";
			$assig =$array['asignado'];
 			$fac=$this->inserta_registro($id,$assig,$array['account']);
			$cadena =
			"01" .
			"|" .  
			$array['comprobante'] .
			"|" .
			$array['version'] .
			"|" .
			$array['serie'] .
			"|" .
			$fac->folio_c .
			"|" .
			$array['forma'] .
			"|" .
			$array['Certificado'] .
			"|" .
			$array['Condiciones'] .
			"|" .
			$array['subtotal'] .
			"|" .
			$array['_Descuento'] .
			"|" .
			$array['m_descuento'] .
			"|" .
			$array['total'] .
			"|" .
			$array['Pago'] .
			"|" .
			$array['tipo_comprobante'] .
			"|" .
			$array['Moneda'] .
			"|" .
			$array['Cambio'] .
			"|" .
			"EMISOR".
			"|" .
			$array['RFC'] .
			"|" .
			$array['name'] .
			"|" .
			"DOMICILIO FISCAL".
			"|" .
			$array['billing_address_street'] .
			"|" .
			$array['billing_address_ou_c'] .
			"|" .
			$array['billing_address_in_c'] .
			"|" .
			$array['billing_address_colonia_c'] .
			"|" .
			$array['billing_address_city'] .
			"|" .
			"" .
			"|" .
			$array['billing_address_town_c'] .
			"|" .
			$array['billing_address_state'] .
			"|" .
			$array['billing_address_country'] .
			"|" .
			$array['billing_address_postalcode'] .
			"|" .
			"EXPEDIDOEN" .
			"|" .
			"".
			"|" .
			"".
			"|" .
			"".
			"|" .
			"".
			"|" .
			"" .
			"|" .
			"".
			"|" .
			"" .
			"|" .
			"" .
			"|" .
			"" .
			"|" .
			"" .
			"|" .
			"RECEPTOR" .
			"|" .
			$array['rep_RFC'] .
			"|" .
			$array['rep_name'] .
			"|" .
			"DOMICILIO FISCAL_R" .
			"|" .
			$array['rep_billing_address_street'] .
			"|" .
			$array['rep_billing_address_ou_c'] .
			"|" .
			$array['rep_billing_address_in_c'] .
			"|" .
			$array['rep_billing_address_colonia_c'] .
			"|" .
			$array['rep_billing_address_city'] .
			"|" .
			" " .
			"|" .
			$array['rep_billing_address_town_c'] .
			"|" .
			$array['rep_billing_address_state'] .
			"|" .
			$array['rep_billing_address_country'] .
			"|" .
			$array['rep_billing_address_postalcode'] .
			"|" .
			$array['rep_mail'] .
			"|" .
			"".
			"|" .
			$array['Trasladados'] .
			"|" .
			"RETENIDOS" .
			"|" .
			"IVA" .
			"|" .
			"" .
			"|" .
			"" .
			"|" .
			"ISR" .
			"|" .
			"" .
			"|" .
			"".
			"|" .
			$array['l_expedicion'] .
			"|" .
			$array['schema_register_c'] .
			"|" .
			$array['no_cuenta'] .
			"|" .
			"N".
			PHP_EOL;
			$opp_no =1;
			$cantidad =1;
			 
			$opp = stripslashes($array['partidas']);
 				
				foreach($this->partidas($opp) as $ops)
				{			$this->actualiza_oportunidad($id,$ops->id);					
							$cadena_ .= "02";
							$cadena_ .= "|";
							$cadena_ .=$opp_no ++; //Numero de partida
							$cadena_ .= "|";
							$cadena_ .=1;    // Cantidad de articulos o serv a facturar.
							$cadena_ .= "|";
							$cadena_ .="No aplica";    // Unidad.
							$cadena_ .= "|";
							$cadena_ .="";    // Clave.
							$cadena_ .= "|";
							$cadena_ .=$ops->name; //descrip.
							$cadena_ .= "|";
							$cadena_ .=number_format(($unit =(($ops->amount)/(1-($ops->discount_c /100)))/1.16),3); //precio unit
							$cadena_ .= "|";
							if($ops->discount_c>0){$cadena_ .=number_format($ops->discount_c,3);}else{$cadena_ .=$ops->discount_c; } 
							$cadena_ .= "|";
							$cadena_ .=number_format(($imp = $unit * $cantidad),3); //importe neto
							$cadena_ .= "|";
							$cadena_ .="";  //no pedimento
							$cadena_ .= "|";
							$cadena_ .=""; //fecha de pedimento
							$cadena_ .= "|";
							$cadena_ .=""; //Aduana
								$cadena_ .= "|";
							$cadena_ .="";//numero de partida
								$cadena_ .= "|";
							$cadena_ .="TRASLADADOS"; 
								$cadena_ .= "|";
							$cadena_ .="IVA";
								$cadena_ .= "|";
							$cadena_ .=$array['iva']; 
								$cadena_ .= "|";
							$cadena_ .= number_format(((($imp*((100-$ops->discount_c)/100))*$array['iva'])/100),3); //importe iva trasladado
								$cadena_ .= "|";
							$cadena_ .="IEPS";
							$cadena_ .= "|";
						    $cadena_ .="0";
							$cadena_ .= "|";
							$cadena_ .="";//importe ieps trasladado
							$cadena_ .=PHP_EOL;
						
							}
							
			file_put_contents("layout/".utf8_encode($link),$cadena.$cadena_);
			// echo "termino";
 	 
			header('Location: ../index.php?module=cstm_invoices&action=DetailView&record='.$id);
		}
		
		public function inserta_registro($id,$assig,$acc){
			//	echo
			
			$query=sprintf("insert  into cstm_invoices_cstm (id_c)values('%s')",$id); 
			$this->db->setQuery($query);
			$bug=$this->db->execute();				
			
			//echo "<br><br>";
			//echo
			
			$query =sprintf("SELECT folio_c FROM cstm_invoices_cstm   where id_c ='%s' ",$id);
			$this->db->setQuery($query);
			$rows=$this->db->loadObject();
		    
			//echo "----<br><br>";
			//echo
			
			$query=sprintf("insert  into cstm_invoices (id,name,date_modified,date_entered,assigned_user_id,created_by,modified_user_id)values('%s','%s',TIMESTAMPADD(hour,+5,date_entered),TIMESTAMPADD(hour,+5,date_entered),'%s','%s','%s')",$id,$rows->folio_c,$assig,$assig,$assig); 
			$this->db->setQuery($query);
			$bug=$this->db->execute();		
			
			//echo "<br><br>";
			//echo
        	
			$query=sprintf("insert  into accounts_cstm_invoices_c (id, date_modified, deleted, accounts_ca379ccounts_ida, accounts_c4e85nvoices_idb)
			values('%s',TIMESTAMPADD(hour,+5,date_modified),0,'%s','%s')",$id,$acc,$id); 
			$this->db->setQuery($query);
			$acc_fac=$this->db->execute();		
 
			return $rows;

		
		}
		
		public function actualiza_oportunidad($id,$opp){
		
			//echo "<br><br>";	
			//echo
  			
			$query=sprintf("update  opportunities_cstm set invoiced_c='Si' where id_c ='%s'",$opp); 
			$this->db->setQuery($query);
			$caso=$this->db->execute();	
		    
			//echo "<br><br>";
			//echo "--<br><br>";
			//echo
  			$invopp_id=create_guid();
			$query=sprintf("insert  into cstm_invoicpportunities_c (id,date_modified,deleted,cstm_invoi1350nvoices_ida,cstm_invoi8ba3unities_idb )
			values('%s',TIMESTAMPADD(hour,+5,date_modified),0,'%s','%s')",$invopp_id,$id,$opp); 
			$this->db->setQuery($query);
			$op_fac=$this->db->execute();		
			
			//echo "<br><br>";
			
				 
		}

} 
?>
