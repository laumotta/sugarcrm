<?php
include 'pagination.class.php';
include 'nusoap/lib/nusoap.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1250">
<title>Sugar CRM SIFEI</title>
<script type="text/javascript" language="Javascript">   
 
      
</script>
</script>
</head>
<body>
<input type="hidden" name="hidden" value="si">

<?php

if(!isset($_COOKIE['sessidCookie']))
die('No tiene acceso a esta área. Contacte con el Administrador de su sitio web para obtenerlo');


$wsdl='http://cfd01.sifei.com.mx/cfdipac/server_WS/WSCuentasOp.php?wsdl';
$client = new nusoap_client($wsdl, true);
$param = array(array(
'rfc'=>'',   
'limite_inicio'=>'1',  
'limite_fin'=>'',
'list_rfc'=>array(
)  
));
$result = $client->call('listaConsumo', $param);


$products=$result['listadoConsumo'];

ini_set('display_errors','On');
error_reporting(E_ALL);


if (count($products)) {
	// Create the pagination object
	$pagination = new pagination($products, (isset($_GET['page']) ? $_GET['page'] : 1), 200);
	// Decide if the first and last links should show
	$pagination->setShowFirstAndLast(false);
	// You can overwrite the default seperator
	$pagination->setMainSeperator(' | ');
	// Parse through the pagination class
	$productPages = $pagination->getResults();
	// If we have items 
	if (count($productPages) != 0) {
		// Create the page numbers
		
		
		?>
<link rel="stylesheet" type="text/css" href="../cache/themes/Sugar5/css/style.css"/>
<table width="100%"  ALIGN="rigth"  cellspacing="0" cellpadding="0" border="1" class="list view">
		
<tr>
<th>Cliente</th>
<th>1 semana </th>
<th>3 dias </th>
<th>2 dias</th>
<th>1 dia </th>
<th>Hoy </th>
</tr>

<?
		
			// Loop through all the items in the array
			foreach ($productPages as $val) {
			// Show the information about the item
?>
<tr height="20" class="evenListRowS1">
<td width="15%" align="left" valign="top" scope="coll"><?php echo $val['rfc'] ;?></td>
<td width="15%" align="left" valign="top" scope="coll" ><?php echo $val['conSemanal'] ;?></td>
<td width="15%" align="left" valign="top" scope="coll" ><?php echo $val['conTresDias'] ;?></td>
<td width="15%" align="left" valign="top" scope="coll" ><?php echo $val['conDosDias'] ;?></td>
<td width="15%" align="left" valign="top" scope="coll" ><?php echo $val['conUnDia'] ;?></td>	
<td width="15%" align="left" valign="top" scope="coll" ><?php echo $val['conHoy'] ;?></td>
</tr>
<?
			}
			// print out the page numbers beneath the results
		
			?>

</table>
</div>
<?
	echo $pageNumbers = '<div class="numbers">'.$pagination->getLinks($_GET).'</div>';
		}
		}
		
 
	?>
	
	
</body>
</html>
