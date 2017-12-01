<?php 
include_once("DataBase.php");

class CostumerFunction {

	public function __construct()  
	{  
		$this->db = DataBase::getInstance();	
	} 

	public function exist_serial($serial){

		error_log('Entro a la clase');
		
		$query =sprintf("SELECT count(serial) as serial FROM seriales where  serial='%s' and release_payment_c='Liberado';",$serial);
		$this->db->setQuery($query);
		$result_count=$this->db->loadObject();
	
		return   $result_count->serial ;
	

	}


}

	/*
		select 
			`accounts`.`sic_code` AS `customer_id`,
			`opportunities`.`id` AS `opp_id`,
			`opportunities_cstm`.`release_payment_c` AS `release_payment_c`,
			`opportunities_cstm`.`app_c` AS `app_c`,
			`opportunities_cstm`.`category_c` AS `category_c`,
			`opportunities_cstm`.`acquired_credits_c` AS `quantity`,
			unix_timestamp(`opportunities`.`date_entered`) AS `serial`,
			`opportunities`.`date_closed` AS `date_closed`,
			`jt2`.`name` AS `products_id_c`
		from
			((((`opportunities`
			left join `opportunities_cstm` ON ((`opportunities`.`id` = `opportunities_cstm`.`id_c`)))
			left join `accounts_opportunities` as`jtl0` ON (((`opportunities`.`id` = `jtl0`.`opportunity_id`) and (`jtl0`.`deleted` = 0))))
			left join `accounts` ON (((`accounts`.`id` = `jtl0`.`account_id`) and (`accounts`.`deleted` = 0) and (`accounts`.`deleted` = 0))))
			left join `cstm_products` as `jt2` ON (((`opportunities_cstm`.`cstm_products_id_c` = `jt2`.`id`) and (`jt2`.`deleted` = 0))))
		where
			((`jt2`.`id` = 'ad9b53d4-2859-b94b-ba30-4f4804f71873') and (`opportunities`.`deleted` = 0) and (`opportunities_cstm`.`release_payment_c` = 'Liberado'))
		order by `opportunities`.`name`;
		*/


?>
