
﻿<?php
class cotizador{

private $id;
private $db;

	public function __construct(){

		$this->db = DataBase::getInstance();	
	}
	
	public function cotizacion($op){
			
			$query =sprintf("select COUNT(DISTINCT account_id) as num, account_id from accounts_opportunities where 
			opportunity_id  in (select  cstm_quote38b0unities_idb from 
			cstm_quotespportunities_c  where  cstm_quote000f_quotes_ida ='%s' and deleted =0) and deleted =0;",$op);
			$this->db->setQuery($query);
			$accounts_opps=$this->db->loadObject();
			
			$query2 =sprintf("select count(*) as op from opportunities inner join opportunities_cstm on id =id_c  where deleted =0 and 
			sales_stage ='Solicitud de Descuento' and  discount_c=0 and id in (select cstm_quote38b0unities_idb from cstm_quotespportunities_c 
where cstm_quote000f_quotes_ida ='%s' and deleted=0) and deleted =0;",$op);
                        $this->db->setQuery($query2);
                        $opps=$this->db->loadObject();

			if($accounts_opps->num ==1){		
			//if($accounts_opps->num ==1 and  $opps->op ==0){		
			$query =sprintf(" select * from cstm_quotes inner join cstm_quotes_cstm on id=id_c where id ='%s' and deleted=0;",$op);
			$this->db->setQuery($query);
			$cotizacion=$this->db->loadObject();
			return array(0=>$accounts_opps,1=>$cotizacion);
			}
		}

	public function partidas($id){
	$query =sprintf("select cstm_quote38b0unities_idb from cstm_quotespportunities_c  where cstm_quote000f_quotes_ida = '%s' and deleted=0;",$id);
			$this->db->setQuery($query);
			return $partidas=$this->db->loadObjectList();
		}

	public function emisor($id){
			$query =sprintf(" select * from accounts inner join accounts_cstm on id=id_c where id = '%s' and deleted=0;",$id);
			$this->db->setQuery($query);
			return ($this->db->loadObject());
	}
	
	public function detallep($ids){
			$query =sprintf("SELECT * FROM opportunities inner join opportunities_cstm on id=id_c where id in(%s) and deleted=0;",$ids);
			$this->db->setQuery($query);
			return $rows=$this->db->loadObjectList();
	}
	
	public function users($id){
			$query =sprintf("SELECT * FROM users where id ='%s' and deleted=0;",$id);
			$this->db->setQuery($query);
			return $this->db->loadObject();
	}
	
	public function extrae($datos) {
	
		foreach($datos as $id){
		$cadena.="'".$id->cstm_quote38b0unities_idb."',";
		}
		return $cadena."''";
		 
	}
}


?>
