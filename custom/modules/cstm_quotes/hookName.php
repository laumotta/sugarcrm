<?php
 
class CustomLogicHookClassName {
  
	function CustomLogicHook(&$bean, $event, $arguments) {
		
		
 		
		error_log(">>>>>>>>>>>>> HOOOK relationship COTIZA <<<<<<<<<<<<<<<");
		
		error_log(print_r($event,1));
		error_log(print_r($arguments,1));

                require_once('data/SugarBean.php');
                $this->db = DBManagerFactory::getInstance();

		require_once('modules/cstm_quotes/cstm_quotes.php');
                $COT= new cstm_quotes();
                $COT->retrieve($arguments['id']);


		
		 /*
		 		 Por cada oportunidad que se relaciona se actualiza  el total del la cotizacion
				 No se actualiza por editar la cotizacion
		 */
	 
		  if($arguments['related_module'] =='Opportunities' and $COT->executed_c == 0 ){
			
			
			require_once('modules/Opportunities/Opportunity.php');
			
			$op= new Opportunity();
			$op->retrieve($arguments['related_id']);
						
			if($op->release_payment_c != "Liberado" ){
			
			error_log(">>>>>>>>>>>>> Entro ");
			
	
			error_log(">>>>>>>>>>>>> Actualizado Cotizacion ");  
			$respuesta = $this->update_monto($bean->id);
			
			}
		}
	}
	
	function update_monto($id){
		error_log("UPDATE COTIZA ". $id);

		$subtotal =0;
		$descuento =0;
		$subdesc =0;
		$query =sprintf("select cstm_quote38b0unities_idb from cstm_quotespportunities_c where cstm_quote000f_quotes_ida = '%s' and deleted=0;",$id);
		$result = $this->db->query($query);
 		 
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
			$descuento=$importe*($rowop['discount_c']/100);
			$subdesc=$subdesc+$descuento;

			$subtotal = $subtotal+$importe;
	 
			 
		}
		
		$iva =((($subtotal-$subdesc)*16)/100);
		$total =($subtotal-$subdesc)+$iva;
		 
		$query = sprintf("update cstm_quotes_cstm set subtotal_c =%s ,iva_c =%s, total_c=%s, descuento_c=%s where id_c ='%s' ",$subtotal,$iva,$total,$subdesc,$id);
		$update =$this->db->query($query);
		$ret_array['success'] =$update;
		return $ret_array;
	}

}
?>
