<?php 
require_once('FacModel.php');
include_once("util.php");
include_once("DataBase.php");
$model = new factura();
if(isset($_GET['id'])){
$name=$_GET['id'].".txt";
$file="../cstm/layout/".$name;
header("Content-Type:application/force-download");
header("Content-Disposition:attachment;filename=".$name.";");
header("Content-Type:application/octet-stream");
header("Content-Length:".filesize($file));
readfile($file);exit;}

if(isset($_GET["op"])){
 $ops = $model->opportunidades($_GET["op"]);
$acc = $model->val($ops);
// 
if ($acc[0]->num == 1 and $acc[1]->num_fac == 0){
require_once('FacView.php');
}else {
echo "Las oportunidades seleccionadas son de diferentre cuenta, sin liberar o pueden estar facturadas ";
die();
}
}
if (isset($_GET['layout'])=="true") {
$datos = $model->layout($_POST);
}
?>