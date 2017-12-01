<HTML>
<TITLE>Sugar CRM SIFEI</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="../cache/themes/Sugar5/css/yui.css?s=c9c8526686b6ab6aedd28ae83a48d117&c=1&developerMode=1786864016" /><link rel="stylesheet" type="text/css" href="../cache/themes/Sugar5/css/deprecated.css?s=c9c8526686b6ab6aedd28ae83a48d117&c=1&developerMode=1647884375" /><link rel="stylesheet" type="text/css" href="../cache/themes/Sugar5/css/style.css?s=c9c8526686b6ab6aedd28ae83a48d117&c=1&developerMode=1811040801" />
<link rel="SHORTCUT ICON" href="../themes/Sugar5/images/sugar_icon.ico?s=c9c8526686b6ab6aedd28ae83a48d117&c=1&developerMode=872208835">
<HEAD>
</HEAD>
<BODY>

<?php
require_once('CasModel.php');
$title=array("C1" => "Casos nuevos con un tiempo mayor a 45 min.","C2" => "Casos asignados a un Supervisor con un tiempo mayor a 75 min.","C3" => "Casos 
asignados a un Asesor sin cerrarse con un tiempo mayor a 120 min.","C4" => "Casos asignados a un Desarrollador sin cerrarse con un tiempo mayor a 240 min.");
if(!empty($_GET["OP"])){
 echo $title[$_GET["OP"]];
$model = new class_criteria();
$ops = $model->createCriterial($_GET["OP"]);
}else { die();}
?>
<TABLE border="0" cellpadding="0" cellspacing="0" width="100%"  class="list view">
<THEAD>
<TR>
<TH>No de Caso.</TH>
<TH>Asunto</TH>
<TH>Categoria</TH>
<TH>Prioridad</TH>
<TH>Estado</TH>
<TH>Fecha de Creación</TH>
<TH>Asignado a</TH>


</TR>

</THEAD>


<?php 
$status_=array(""=>"--","New"=>"Nuevo","Assigned"=>"Asignado","Closed"=>"Cerrado","Pending Input"=>"Pendiente de Información","Rejected"=>"Rechazado","Duplicate "=>"Duplicado");
$priority=array(""=>"--","P1"=>"Alta","P2"=>"Media","P3"=>"Baja");
echo "Registros encontrados: ".count($ops);
foreach($ops as $partida)
		{	
		
		
				$users=$model->users($partida->assigned_user_id);
 	?>


<TR >
<TD><a href="../index.php?module=Cases&action=detailview&record=<?php echo $partida->id;?>" target="_blank"><?php echo $partida->case_number;?></a></TD>
<TD><?php echo utf8_encode($partida->name);?></TD>

<TD><?php echo $partida->category_type_c; ?></TD>
<TD><?php echo $priority[$partida->priority];?></TD>

<TD><?php echo $status_[$partida->status];?></TD>

<TD><?php echo date('Y-m-d h:i:s',strtotime($partida->date_entered." - 5 hours"));?></TD>
<TD><?php echo $users->user_name;?></TD>


 
 
</TR>   
<?php  }	?>
</TBODY>
</TABLE> 

</BODY>
</HTML>
