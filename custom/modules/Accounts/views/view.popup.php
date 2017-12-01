<?
require_once('include/MVC/View/views/view.popup.php');

class AccountsViewPopup extends ViewPopup{

function __construct(){
parent::__construct();
}

function preDisplay(){
parent::preDisplay();
}

function display(){
global $popupMeta, $mod_strings, $beanFiles, $beanList;

if(!empty($_REQUEST['metadata']) && $_REQUEST['metadata'] != 'undefined' 
&& file_exists('modules/' . $this->module . '/metadata/' . 
$_REQUEST['metadata'] . '.php'))
require_once('modules/' . $this->module . '/metadata/' . 
$_REQUEST['metadata'] . '.php');
elseif(file_exists('custom/modules/' . $this->module . 
'/metadata/popupdefs.php'))
require_once('custom/modules/' . $this->module . 
'/metadata/popupdefs.php');
elseif(file_exists('modules/' . $this->module . 
'/metadata/popupdefs.php'))
require_once('modules/' . $this->module . '/metadata/popupdefs.php');

$url = parse_url($_SERVER['HTTP_REFERER']);
parse_str($url['query'], $query_str) ;

$in_search = false;
if ($query_str['action'] == 'index')
{
$in_search = true;
}

$IDc=$GLOBALS['current_user']->id; 
$user_namec=$GLOBALS['current_user']->user_name;
$ROLc=$GLOBALS['current_user']->level_c; 

$cad = new Employee();
$cad->display_($IDc,1);
$result =$cad->get_();
$result2= $cad->arreglo_($result);

if($ROLc=='GERENTE' || $ROLc=='DISTRIBUIDOR' ||$ROLc=='ASESOR LIDER' ){ 

$query_ =sprintf(" assigned_user_id = '%s'",$IDc);

$popupMeta['whereStatement'] = $query_;
} 
parent::display();
}
}
?> 
