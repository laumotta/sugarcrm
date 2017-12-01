<?php 
include("../cnx.php");
if(isset($_POST["categoria"])){
$cnx = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database, $cnx);
$query_ciudades = "select name, list_price_c,quantity_c, invoice_store_c ,expiration_c, unite_price_c,sheet_c, id from cstm_products inner join cstm_products_cstm 
on id =id_c where category_c='".$_POST["categoria"]."'and  deleted =0 and status_c= 'Active' order by quantity_c desc;";
$rs=mysql_query($query_ciudades);
echo '<input name="invoice_store_c" id="invoice_store_c" size="10" maxlength="" value="0" title="" type="hidden" READONLY>';
echo '<input name="product_c" id="product_c" size="10" maxlength="" value="" title="" type="hidden" READONLY>';
echo '<select name="product" id="product" >';
echo'<option label="" value="" selected="selected">-Seleccione-</option>';
while($dato= mysql_fetch_assoc($rs)){
echo '<option label="'.$dato["name"].'" 
value="'.$dato["name"]."|".$dato["quantity_c"]."|".number_format($dato["list_price_c"],2)."|".$dato["invoice_store_c"]."|".$dato["expiration_c"]."|".number_format($dato["unite_price_c"],3)."|".$dato["sheet_c"]."|".$dato["id"].'">'.$dato["name"].'</option>';
}
echo '</select>';?>
<script type="text/javascript" language="Javascript">   
$(document).ready(function(){

	$("#product").change(function(){
	var value = $(this).val();
	var datos = value.split("|");
	$("#product_c").val(datos[0]);
	$("#acquired_credits_c").val(datos[1]);
	$("#amount").val(datos[2]);
	$("#invoice_store_c").val(datos[3]);
	$("#expiration_c").val(datos[4]);
	$("#unite_price_c").val(datos[5]);
	$("#name").val(datos[6]);
	$("#cstm_products_id_c").val(datos[7]);
	});  
	
	$("#acquired_credits_c").change(function(){

	if( (document.getElementsByName("product_c")[0].value) == "PAQUETE PLUS PRE PAGO"){
	cotizador();
	} 
	}); 
	
	$("#acquired_credits_c").change(function(){
	if( (document.getElementsByName("product_c")[0].value) == "PAQUETE PLUS POST PAGO"){
	$('#expiration_c').attr('disabled',false);
	$("#expiration_c").val(12);
	cotizador();
	} 
	}); 
	
	$("#acquired_credits_c").change(function(){
	if( (document.getElementsByName("product_c")[0].value) == "Paquete Timbrado Fiscal Plus"){
	cotizadordos();
	} 
	});
	
	$("#expiration_c").change(function(){
	cotizador();
	}); 
	
	
	
	
	
	
	});
</script>
<?php
mysql_close($cnx);
}
?>
