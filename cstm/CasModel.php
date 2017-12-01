<?php 
include_once("DataBase.php");
include_once("util.php");

  class class_criteria {
   
  private $id;                
  private $name;
  private $date_entered;
  private $date_modified;   
  private $modified_user_id;
  private $created_by;
  private $description;   
  private $deleted;  
  private $assigned_user_id;
  private $case_number;
  private $type;     
  private $status; 
  private $priority;        
  private $resolution;      
  private $work_log;      
  private $account_id;        
  private $id_c;             
  private $category_type_c;
  private $magnitude_c;
  private $impact_c;    
  private $app_type_c;
  private $query_cstm;
  private $criterios;
  private $db;
  private $op;
  
	public function __construct()  
	{  

	$this->db = DataBase::getInstance();	
				
	} 

  
  public function createCriterial($op){
  
	switch ($op) {
 
			//and assigned_user_id in(select id from users where department ='Soporte')
		   case "C1" :
		   $query_cstm = " and status ='New'  and TIMESTAMPDIFF(MINUTE,TIMESTAMPADD(hour,-5,date_entered),now()) > 45  ";
		   break;

		   case "C2" :
		   $query_cstm = "and status ='Assigned'  and assigned_user_id in(select id from users where department ='Supervisor') and 
TIMESTAMPDIFF(MINUTE,TIMESTAMPADD(hour,-5,date_entered),now()) > 75  ";
		   break;

		   
		   case "C3" :
		   $query_cstm = "and status ='Assigned' and assigned_user_id in(select id from users where department ='Soporte') and TIMESTAMPDIFF(MINUTE,TIMESTAMPADD(hour,-5,date_entered),now()) > 120  ";
		   break;
		   
		   
		   case "C4" :
		   $query_cstm = "and status ='Assigned'  and assigned_user_id in(select id from users where department ='Desarrollo') and TIMESTAMPDIFF(MINUTE,TIMESTAMPADD(hour,-5,date_entered),now()) > 240  ";
		   break;
		   
		   default :
		   $query_cstm = "and status ='Closed' ";
		   break;
		  
		}
  
			$criterios=" and  (status != 'Rejected' or status != 'Duplicate') and category_type_c='Software' ";
			$query =sprintf("SELECT * FROM cases inner join cases_cstm on id=id_c  where deleted=0 %s ",$criterios);
		      $query = $query.$query_cstm;
		 
			$this->db->setQuery($query);
			return $this->db->loadObjectList();
  
  }
  
  
  public function users($user_id){
  
		
			$query =sprintf("SELECT * FROM users where id ='%s' and deleted=0;",$user_id);
			$this->db->setQuery($query);
			return $this->db->loadObject();
  
  
  
  }


	public function bugs($op,$app){
		
	switch ($op) {
 
			case "C1" :
		   $query_cstm =  "and DATEDIFF(now(),TIMESTAMPADD(hour,-5,date_entered)) <= 30";
		   break;

		   case "C2" :
		   $query_cstm  =  " and  DATEDIFF(now(),TIMESTAMPADD(hour,-5,date_entered)) <=90" ;
		   break;

		   
		   case "C3" :
		   $query_cstm  =  " and DATEDIFF(now(),TIMESTAMPADD(hour,-5,date_entered)) <= 360 " ;
		   break;
		   
 
		   default :
		   $query_cstm = "and status ='Closed' ";
		   break;
		  
		}
		
		$criterios=" and  (status != 'Rejected' or status != 'Duplicate')  and category_type_c='Software' and id not in (select case_id from cases_bugs WHERE DELETED =0)";
	 	$query =sprintf("SELECT * FROM cases inner join cases_cstm on id=id_c  where deleted=0 %s and app_type_c='%s' ",$criterios,$app);
	    	$query = $query.$query_cstm;
		
		

		//$query2 =sprintf("select app_type_c, count(app_type_c) as suma from cases inner join cases_cstm on id=id_c  where deleted=0 and id in(%s) ",$query);
		//$query2 = $query2.$query_cstm[1];
		
		$this->db->setQuery($query);
		return $this->db->loadObjectList();
	
 
			
	
	}
	
	
	public function createBug($array){
 		
	    $id=create_guid();
		echo $query=sprintf("insert  into bugs (id,name,date_modified,date_entered,status,description,priority,product_category,assigned_user_id,created_by)values('%s','%s',TIMESTAMPADD(hour,+5,date_entered),TIMESTAMPADD(hour,+5,date_entered),'%s','%s','%s','%s','7f8a6f2a-f948-5e87-f74d-4d4898d33c2b','7f8a6f2a-f948-5e87-f74d-4d4898d33c2b')",$id,$array["name"],$array["status"],$array["description"],$array["priority"],$array["product_category"]); 
 		 $this->db->setQuery($query);
		$bug=$this->db->execute();	
		
		$arreglo = explode("|",$array["mass_"]);
 
		
		foreach($arreglo as $caso){
		
		if(!empty($caso)){
        $id_=create_guid();
		$query3=sprintf("insert into cases_bugs(id, case_id, bug_id, date_modified, deleted) values('%s','%s','%s',now(),0)",$id_,$caso,$id); 
		$this->db->setQuery($query3);
	    $bugs_cases=$this->db->execute();			 
		}

		}
			 

			 
	
	}
  
  }
  
  /*
  
 SELECT TIMEDIFF(now(),date_entered),TIMESTAMPADD(hour,-5,date_entered), now() FROM cases inner join cases_cstm on id=id_c where deleted=0 and category_type_c=
'Software' and status ='New' and assigned_user_id in(select id from users where department ='Soporte') ;

  SELECT TIMEDIFF(now(),TIMESTAMPADD(hour,-5,date_entered)) FROM cases inner join cases_cstm on id=id_c where deleted=0 and category_type_c=
'Software' and status ='New' and assigned_user_id in(select id from users where department ='Soporte') ;
 
 SELECT * FROM cases inner join cases_cstm on id=id_c where deleted=0 and category_type_c=
'Software' and status ='New' and assigned_user_id in(select id from users where department ='Soporte') and TIMESTAMPDIFF(MINUTE,TIMESTAMPADD(hour,-5,date_entered),now()) > 45 ;

 
  */

  
  
  ?>
