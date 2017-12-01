<?php

class invoices_logic_hook {


	function update_invoices(&$bean, $event, $arguments){
		
		
		error_log("-> Logic Hook UPDATE Facturas");
		
		
		if ($bean->status_c == 'Cancelada'){
			
			error_log("-> Actualizando  OPORTUNIDADES ".$bean->id);
			$this->update_opportunities($bean->id);
			
			
		}	
	}

	function update_opportunities($id){
		require_once('data/SugarBean.php');

		$tmp = false ;
		$this->db =  DBManagerFactory::getInstance();
		$query_rel =sprintf("select * from cstm_invoicpportunities_c where cstm_invoi1350nvoices_ida ='%s' and deleted =0;",$id);
		
		error_log("-> Cancelando OPORTUNIDADES".$query_rel);
		
		$result = $this->db->query($query_rel);
		while($row = $this->db->fetchByAssoc($result))
		{
		$tmp = true ;	
			$query = sprintf("update opportunities_cstm set invoiced_c ='No' where id_c ='%s' ",$row['cstm_invoi8ba3unities_idb']);
			error_log("->Actualizando op => ".$query);
			$this->db->query($query);
			

			
		}

		if($tmp){
			$query_upd =sprintf("update cstm_invoicpportunities_c  set deleted = 1 where cstm_invoi1350nvoices_ida ='%s' and deleted =0;",$id);
			error_log("->Actualizando relacion de op fac => ".$query_upd);
			$this->db->query($query_upd);
		}
		
		
	}
	


}


?>