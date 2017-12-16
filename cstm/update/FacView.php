<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML>
<HEAD>

<TITLE>Sugar CRM SIFEI</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 
<link rel="stylesheet" type="text/css" href="../cache/themes/Sugar5/css/style.css" />
<link rel="SHORTCUT ICON" href="../themes/Sugar5/images/sugar_icon.ico">

<script type="text/javascript" src="../include/javascript/jquery.js"></script> 
<script type="text/javascript" src="../include/javascript/jquery.validate.js"></script>
<style type="text/css">
* { font-family: Verdana; font-size: 96%; }
label { width: 10em; float: left; }
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
.required, .error 
{

color: #000000;

}
</style>

<script type="text/javascript">
  $(document).ready(function(){
    $("#EditView").validate();
	
			$("#l_expedicion").addClass("required");
			$("#schema_register_c").addClass("required");
			$("#billing_address_street").addClass("required");
			$("#billing_address_ou_c").addClass("required");
			$("#billing_address_town_c").addClass("required");
			$("#billing_address_state").addClass("required");
			$("#billing_address_country").addClass("required");
			$("#billing_address_postalcode").addClass("required");
			$("#rep_billing_address_ou_c").addClass("required");
			$("#rep_billing_address_town_c").addClass("required");
			$("#rep_billing_address_state").addClass("required");
			$("#rep_billing_address_country").addClass("required");
	// if (document.getElementById("_Descuento").value > 0){
	// 		$("#m_descuento").addClass("required");
	// 		document.getElementById("Descuento").disabled = true;
 			
	// }
  });

 
	
  
	function aplica_desc(sub,desc){
	var  sub;
	var desc;
	var it;
	var tot;
	
	if( sub != 0 ){
	resu= (sub* desc)/100;
	document.getElementById('_Descuento').value = resu.toFixed(3);
	
	it=(0,16*(sub-resu))/100;
	document.getElementById('Trasladados').value = it.toFixed(3);
	tot=sub-resu+it;
	document.getElementById('total').value = tot.toFixed(3);
	}
	 
	function getCookie(cookieName) {
		var cookieValue=null;
		var posName=document.cookie.indexOf(escape(cookieName)+"=");
		if (posName!=-1){
		var posValue=posName+(escape(cookieName)+"=").length;
		var endPos=document.cookie.indexOf(";",posValue);
		if (endPos!=-1) cookieValue=unescape(document.cookie.substring(posValue,endPos));
		else cookieValue=unescape(document.cookie.substring(posValue));
		}
		return cookieValue; 
		}
		
		resultado =getCookie(c_k);
		document.getElementById('asignado').value = resultado;
	}
  </script>
</HEAD>
<BODY>
<div class="moduleTitle">
<h2> <img src="../custom/themes/default/images/icon_cstm_products_32.gif" alt="cstm_Facturas" title="cstm_Facturas" align="absmiddle"><span class="pointer">»</span>Datos a Facturar</h2>
</div>
 
<form action="?layout=true" method="post"  name="EditView" id="EditView"   >

<?php 	$emi=$model->emisor();?>
<input type="hidden" name="asignado" value="1">
<input type="hidden" name="account" value="<?php echo $acc[0]->account_id; ?>">
<input type="hidden" name="version" value="3.2">
<input type="hidden" name="serie" value="A">
<input type="hidden" name="tipo_comprobante" value="ingreso">
<input type="hidden" name="Certificado" value="00001000000103575619">
<input type="hidden" name="iva" value="<?php echo $iva= 16; ?>">
<div id="LBL_ACCOUNT_INFORMATION" class="detail view">
<h4>Datos de Emisor</h4>
<table id="detailpanel_1" cellspacing="0">
<tbody><tr>
<td scope="row" width="12.5%">
Razón social:
</td>
<td width="37.5%">
<span id="name">
 
<input type="text" name="name"  id="name" value="<?php echo $emi->name;?>" size="75"  class="required"   READONLY>
 
</span>
</td>
<td scope="row" width="12.5%">
RFC:
</td>
<td width="37.5%">
<span id="account_type">
<input type="text" name="RFC" id="RFC"  value="<?php echo $emi->rfc_c; ?>" size="75"  class="required"   READONLY>


</span>
</td>
</tr>

<tr>
<td scope="row" width="12.5%">
Calle:</td>
<td width="37.5%">
 
<span id="ownership">
<input type="text" name="billing_address_street" id="billing_address_street" value="<?php echo $emi->billing_address_street; ?> "  size="75"  class="required"   READONLY>
</span>

 
</td>
<td scope="row" width="12.5%">
Núm. Exterior </td>
<td width="37.5%">
 
<span id="billing_address_ou_c">
<input type="text" name="billing_address_ou_c" id="billing_address_ou_c"  value="<?php echo $emi->billing_address_ou_c; ?>"  size="75"    READONLY>
</span>
 
</td>
</tr>
<tr>
<td scope="row" width="12.5%">
Núm. Interior</td>
<td width="37.5%">

<span id="activity_c">
<input type="text" name="billing_address_in_c" id="billing_address_in_c" value=" <?php echo $emi->billing_address_in_c; ?> "  size="75"    READONLY>

</span>
</td>
<td scope="row" width="12.5%">
Colonia</td>
<td width="37.5%">
<span id="phone_office">
<input type="text" name="billing_address_colonia_c"  id="billing_address_colonia_c" value="<?php echo $emi->billing_address_colonia_c; ?>"  size="75"    READONLY>

</span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">
Delegación/Municipio
</td>
<td width="37.5%">
<span id="billing_scheme_c">
<input type="text" name="billing_address_town_c" id="billing_address_town_c" value="<?php echo $emi->billing_address_town_c; ?>" size="75"  class="required"   READONLY>

</span>
</td>
<td scope="row" width="12.5%">
Referencia </td>
<td width="37.5%">
<span id="phone_alternate">
<?php echo "--"; ?></span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">
Ciudad
</td>
<td width="37.5%">
<span id="industry">
<input type="text" name="billing_address_city"  id="billing_address_city" value="<?php echo $emi->billing_address_city; ?>" size="75" class="required"   READONLY>
</span>
</td>
<td scope="row" width="12.5%">
Estado</td>
<td width="37.5%">
<span id="account_category_c">
<input type="text" name="billing_address_state"  id="billing_address_state" value="<?php echo $emi->billing_address_state; ?>" size="75"  class="required"    READONLY>

</span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">

País</td>
<td width="37.5%">
<span id="docs_attached_c">
<input type="text" name="billing_address_country" id="billing_address_country"  value="<?php echo $emi->billing_address_country; ?>" size="75"  class="required"   READONLY>

</span>
</td>
<td scope="row" width="12.5%">
Código Postal</td>
<td width="37.5%">
<span id="documents_c">
<input type="text" name="billing_address_postalcode" id="billing_address_postalcode" value="<?php echo $emi->billing_address_postalcode; ?>" size="75"   class="required"  READONLY>


</span>
</td>
</tr>
</tbody></table>
</div>
<?php 	$rec=$model->receptor($acc[0]->account_id); ?>
<div id="LBL_PANEL_ASSIGNMENT" class="detail view">
<h4>Datos de Receptor</h4>
<table id="detailpanel_3" cellspacing="0">
<tbody> 
 <tr>
<td scope="row" width="12.5%">
Razón social:
</td>
<td width="37.5%">
<span id="name">
<input type="text" name="rep_name"  id="rep_name" value=" <?php echo $rec->name; ?> " size="75"  class="required"   READONLY>


 
</span>
</td>
<td scope="row" width="12.5%">
RFC:
</td>
<td width="37.5%">
<span id="account_type">
<input type="text" name="rep_RFC"  id="rep_RFC" value="<?php echo $rec->rfc_c; ?>" size="75"  class="required"  READONLY>

</span>
</td>
</tr>
 
<tr>
<td scope="row" width="12.5%">
Calle:</td>
<td width="37.5%">
 
<span id="ownership">
<input type="text" name="rep_billing_address_street"  id="rep_billing_address_street" value="<?php echo $rec->billing_address_street; ?>" maxlength="150"  size="75"  class="required"   READONLY>
</span>

</span>
</td>
<td scope="row" width="12.5%">
Núm. Exterior </td>
<td width="37.5%">
 
<span id="rep_billing_address_ou_c">

<input type="text" name="rep_billing_address_ou_c" id="rep_billing_address_ou_c" value="<?php echo $rec->billing_address_ou_c; ?>" size="75"      
READONLY>
</span>
</span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">
Núm. Interior</td>
<td width="37.5%">

 
<span id="activity_c">
<input type="text" name="rep_billing_address_in_c" id="rep_billing_address_in_c"  value="<?php echo $rec->billing_address_in_c; ?>" size="75"      READONLY>
</span>
</span>
</td>
<td scope="row" width="12.5%">
Colonia</td>
<td width="37.5%">
<span id="phone_office">
<input type="text" name="rep_billing_address_colonia_c"   id="rep_billing_address_colonia_c" value="<?php echo $rec->billing_address_colonia_c; ?>" size="75"    READONLY>

</span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">
Delegación/Municipio
</td>
<td width="37.5%">
<span id="billing_scheme_c">
<input type="text" name="rep_billing_address_town_c" id="rep_billing_address_town_c" value="<?php echo $rec->billing_address_town_c; ?>" size="75"  class="required"   READONLY>

</span>
</td>
<td scope="row" width="12.5%">
 </td>
<td width="37.5%">
<span id="phone_alternate">
 </span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">
Ciudad
</td>
<td width="37.5%">
<span id="industry">
<input type="text" name="rep_billing_address_city" id="rep_billing_address_city" value="<?php echo $rec->billing_address_city; ?>" size="75"   class="required"  READONLY>
 </span>
</td>
<td scope="row" width="12.5%">
Estado</td>
<td width="37.5%">
<span id="account_category_c">
<input type="text" name="rep_billing_address_state" id="rep_billing_address_state" value="<?php echo $rec->billing_address_state; ?>" size="75"   class="required"  READONLY>

 
</span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">

País</td>
<td width="37.5%">

<span id="docs_attached_c">
<input type="text" name="rep_billing_address_country" id="rep_billing_address_country" value="<?php echo $rec->billing_address_country; ?>" size="75"  class="required"   READONLY>
 
</span>
</td>
<td scope="row" width="12.5%">
Código Postal</td>
<td width="37.5%">
<span id="documents_c">
<input type="text" name="rep_billing_address_postalcode" id="rep_billing_address_postalcode" value="<?php echo $rec->billing_address_postalcode; ?>" size="75"   class="required"  READONLY>
 
</span>
</td>
</tr>
<tr>
<td scope="row" width="12.5%">

E-mail</td>
<td width="37.5%">
<span id="docs_attached_c">
<?php 	$dato=$model->email($rec->id); ?>
<input id="rep_mail"  name="rep_mail" id="rep_mail" value="<?php echo $dato->email_address; ?>"  class="required"  size="75">
 
</span>
</td>
<td scope="row" width="12.5%">
</td>
<td width="37.5%">
 
</td>
</tr>
</tbody></table>
</div>
 
<TABLE WIDTH="100%" ALIGN="rigth"   class="list view">
<THEAD>
<TR>
<TH>Cant.</TH>
 
<TH >Descripción</TH>
<TH >Precio Unitario</TH>
<TH >Unidad</TH>
<TH >Descuento</TH>
<TH >Importe</TH>

</TR>

</THEAD>

<input name ="partidas"  type="hidden"  name="mass[]" id="mass[]" value="<?php echo $ops;?>"  class="required"  READONLY></TD>
<?php 
 $nopartida =1;
 $subtotal=0;
 
 $descuento=0;
foreach($model->partidas($ops) as $partida)
		{	
		 
	?>

	

<TR>
<TD><?php echo $cantidad =1; ?>

 
 
<TD> <?php echo $partida->name; ?></TD>

<TD><?php  $unit =(($partida->amount)/(1-($partida->discount_c /100)))/1.16; echo number_format($unit,3); ?></TD>
<TD> <?php echo "No aplica"; ?></TD>
<TD><?php $imp = $unit* $cantidad;  $desc =($imp*$partida->discount_c )/100;  echo $partida->discount_c; ?></TD>
<TD><?php  echo number_format($imp,3);?></TD>
 <?php $subtotal =$subtotal+$imp;?>
 <?php $descuento =$descuento+$desc;?>
</TR>   
<?php  }	?>
</TBODY>
</TABLE> 

<div id="LBL_PANEL_ADVANCED" class="detail view">
<h4>Condiciones Comerciales</h4>
<table id="detailpanel_4" cellspacing="0">
<tbody>
<tr>
<td scope="row" width="12.5%">
Forma de Pago</td>

<td width="37.5%">
<select name="forma" id="forma" title="" class="required"  >
<option label="Pago en una sola exhibición" value="Pago en una sola exhibición">Pago en una sola exhibición</option>
<option label="Pago en parcialidades" value="Pago en parcialidades">Pago en parcialidades</option>
 

</select>

<td scope="row" width="12.5%">
Subtotal:
</td>
<td width="37.5%">
<input type="text" name="subtotal" id="subtotal" value="<?php echo number_format($subtotal,3);  ?>"  class="required"    READONLY>

</td>
</tr>
 <tr>
<td scope="row" width="12.5%">
Condiciones de Pago</td>

<td width="37.5%">
<input name="Condiciones" id="Condiciones"   maxlength="" value="Contado" title=""     > </td>
<td scope="row" width="12.5%">
% Descuento:
</td>
<td width="37.5%">
 <input name="Descuento" id="Descuento"   maxlength="" value="" title=""  onblur="aplica_desc(<?php echo $subtotal; ?>,this.value);"   >
</td>
</tr>
 <tr>
<td scope="row" width="12.5%">
Método de Pago</td>

<td width="37.5%">
<select name="Pago" id="Pago" title="" >
<option label="Efectivo" value="Efectivo">Efectivo</option>
<option label="Cheque" value="Cheque">Cheque</option>
<option label="Transferencia" value="Transferencia">Transferencia</option>
<option label="Deposito" value="Deposito">Deposito</option>
<option label="Tarjeta Bancaria de Crédito" value="Tarjeta Bancaria de Crédito">Tarjeta Bancaria de Crédito o Débito</option>
<option label="Crédito" value="Crédito">Credito</option>
</select>

</td>
<td scope="row" width="12.5%">
Importe Descuento
</td>
<td width="37.5%">
 <input name="_Descuento" id="_Descuento"   maxlength="" value="<?php echo $descuento; ?>" title=""   class="required" READONLY>
 
</td>
</tr>
 <tr>
<td scope="row" width="12.5%">
Tipo de Comprobante
</td>

<td width="37.5%">
<input type="text" name="comprobante" id="comprobante" value="FA"  class="required"   READONLY>

</td>
<td scope="row" width="12.5%">
Impuestos Retenidos
</td>
<td width="37.5%">
  <input type="text" name="Retenidos"  id="Retenidos" value="0"  class="required"     READONLY>
</td>
</tr>
 <tr>
<td scope="row" width="12.5%">
Moneda
</td>

<td width="37.5%">
<input type="text" name="Moneda"   id="Moneda" value="MXN"  class="required"   READONLY>


</td>
<td scope="row" width="12.5%">

IVA Trasladado:
</td>
<td width="37.5%">
<input type="text" name="Trasladados"  id="Trasladados"  value="<?php  echo number_format($IT =(($subtotal-$descuento)*$iva)/100,3);?>"  class="required"   READONLY>

</td>
</tr>
 <tr>
<td scope="row" width="12.5%">
Tipo de Cambio
</td>

<td width="37.5%">
<input type="text" name="Cambio"  id="Cambio" value="1.0"   READONLY>
</td>
<td scope="row" width="12.5%">
 Total:
</td>
<td width="37.5%">
 <input type="text" name="total" id="total" value="<?php  echo number_format($total =($subtotal-$descuento+$IT),3); ?>"  class="required"   READONLY>
</td>
</tr>
 <tr>
<td scope="row" width="12.5%">
Lugar de Expedición
</td>
<td width="37.5%">
<input type="text" name="l_expedicion" id="l_expedicion" size="55" value="<?php echo $emi->billing_address_city.' '.$emi->billing_address_state. ' '. $emi->billing_address_country; ?>"  >
</td>
<td scope="row" width="12.5%">
Regimen fiscal
</td>
<td width="37.5%">
<input type="text" name="schema_register_c" id="schema_register_c" value="<?php echo $emi->schema_register_c; ?>"  >
</td>
</tr>
 <tr>
<td scope="row" width="12.5%">
Motivo de descuento
</td>
<td width="37.5%">
 <input type="text" name="m_descuento" id="m_descuento" value=""  >
</td>
<td scope="row" width="12.5%">
Numero de Cuenta
</td>
<td width="37.5%">
 <input type="text" name="no_cuenta" id="no_cuenta" size="16" value="" maxlength="16"  >
</td>
</tr>
</tbody></table>
</div>

 
<table cellpadding="1" cellspacing="0" border="0"  class="actionsContainer">
<tr>
<td class="buttons" align="left" NOWRAP>
<input class="submit" type="submit"   name="Facturar" id="Facturar"  value="Facturar" > 
 

</td>
</tr>
</table>
</form>
</BODY>
</HTML>
 
