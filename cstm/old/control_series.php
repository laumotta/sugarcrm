	<?php

	include("nusoap/lib/nusoap.php");


	if($_GET["record"]){

	$soapclient = new nusoap_client('http://cfd01.sifei.com.mx/cfdipac/server_WS/WSComisionistas.php?wsdl',true);
	$param=array('rfc'=>$_GET["record"]);

	$result =  $soapclient->call('DesCreditos',$param);
	if($result!=''){	


	$objXML = new DOMDocument();
	if(!$objXML->loadXML($result))
 	return "Error al cargar el xml de respuesta.";
	$searchNode = $objXML->getElementsByTagName( "Result" );
	$arrResult = array();
	foreach( $searchNode as $searchNode )
	{
	$arrResult['error'] =  $searchNode->getAttribute('error');
	$arrResult['status'] = $searchNode->getAttribute('status');
	$cp = $searchNode->getElementsByTagName( "CreditosPagados" );
	$arrResult['pagados'] = $cp->item(0)->nodeValue;
	$ca = $searchNode->getElementsByTagName( "CreditosAsignados" );
	$arrResult['asignados'] = $ca->item(0)->nodeValue;
	$cc = $searchNode->getElementsByTagName( "CreditosConsumidos" );
	$arrResult['consumidos'] = $cc->item(0)->nodeValue;
	$cd = $searchNode->getElementsByTagName( "CreditosDisponibles" );
	$arrResult['disponibles'] = $cd->item(0)->nodeValue;
	$rz = $searchNode->getElementsByTagName( "RazonSocial" );
	$arrResult['RazonSocial'] = $rz->item(0)->nodeValue;

	}

	 
if($arrResult['error']==1){
echo '
	<link rel="stylesheet" type="text/css" href="../cache/themes/Sugar5/css/style.css"/>
	<br>
	<h2>Detalle de Consumo</h2>
	<div class="detail view">
	<table width="50%" ALIGN="rigth" cellspacing="2"  border="1" class="list view"">
	<tr height="20" class="evenListRowS1">
	<td  width="12.5%" align="left" valign="top" scope="row">Razón Social</td>
	<td width="37.5%" align="left" valign="top" cope="row" >'.$arrResult['RazonSocial'].'</td>
	</tr>
	<tr height="20" class="evenListRowS1">
	<td align="left" valign="top" scope="row">Pagados</td>
	<td align="left" valign="top" >'.$arrResult['pagados'].'</td>
	</tr>
	<tr height="20" class="evenListRowS1">
	<td align="left" valign="top" scope="row">Asignados</td>
	<td align="left" valign="top" >'.$arrResult['asignados'].'</td>
	</tr>
	<tr height="20" class="evenListRowS1">
	<td align="left" valign="top" scope="row">Consumo</td>
	<td align="left" valign="top" >'.$arrResult['consumidos'].'</td>
	</tr>
	<tr height="20" class="evenListRowS1">
	<td align="left" valign="top" scope="row">Disponibles</td>
	<td align="left" valign="top">'.$arrResult['disponibles'].'</td>
	</tr>
	</table>
	</div>
	';
	}else{echo $arrResult['status'];}
	}
	}
?>
