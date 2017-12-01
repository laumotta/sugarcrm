<?php 
require_once('include/MVC/View/views/view.list.php');
class ContactsViewList extends ViewList {
 
	function listViewProcess(){
		$this->processSearchForm();
		{
	  	$IDc=$GLOBALS['current_user']->id; 
		$user_namec=$GLOBALS['current_user']->user_name;
		$ROLc=$GLOBALS['current_user']->level_c; 
		
		$cad = new Employee();
		$cad->display_($IDc,1);
		$result =$cad->get_();
		$result2= $cad->arreglo_($result);
				
		if($ROLc=='GERENTE' || $ROLc=='DISTRIBUIDOR' || 
$ROLc=='ASESOR LIDER' ){
			if( $this->where != "") {
				

				if(empty($result2)){
				$query_ =sprintf("and contacts.assigned_user_id  in ('%s')",$IDc);

				}else {
				$query_ =sprintf("and contacts.assigned_user_id  in (%s,'%s')",$result2,$IDc);

				}
				$this->where .= $query_;
							
			}
			else {
				if(empty($result2)){
				$query_ =sprintf("contacts.assigned_user_id  in ('%s')",$IDc);
				}else{
				$query_ =sprintf("contacts.assigned_user_id  in (%s,'%s')",$result2,$IDc);
				}				
				$this->where .= $query_;
			}
		}
 
		
		}
		 $this->lv->searchColumns = 
$this->searchForm->searchColumns;
        if(empty($_REQUEST['search_form_only']) || 
$_REQUEST['search_form_only'] == false)
        {
            $this->lv->setup($this->seed, 
'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = 
empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . 
$_REQUEST['saved_search_select_name']);
            echo 
get_form_header($GLOBALS['mod_strings']['LBL_LIST_FORM_TITLE'] . 
$savedSearchName, '', false);
            echo $this->lv->display();
        } 
		 
		
 	}
}
?>
