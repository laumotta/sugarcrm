<?php 
include("../cnx.php");
if(isset($_POST["categoria"])){
	$cnx = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
	mysql_select_db($database, $cnx);
	$query_ciudades = "select name, list_price_c,quantity_c, invoice_store_c ,expiration_c, unite_price_c,sheet_c, id, description from cstm_products inner join cstm_products_cstm 
on id =id_c where category_c='".$_POST["categoria"]."'and  deleted =0 and status_c= 'Active' order by quantity_c desc;";
	$rs=mysql_query($query_ciudades);
	echo '<input name="invoice_store_c" id="invoice_store_c" size="10" maxlength="" value="0" title="" type="hidden" READONLY>';
	echo '<input name="product_c" id="product_c" size="10" maxlength="" value="" title="" type="hidden" READONLY>';
	echo '<select name="product" id="product" >';
	echo'<option label="" value="" selected="selected">-Seleccione-</option>';
	while($dato= mysql_fetch_assoc($rs)){
		echo '<option label="'.$dato["name"].'" 
value="'.$dato["name"]."|".$dato["quantity_c"]."|".number_format($dato["list_price_c"],2)."|".$dato["invoice_store_c"]."|".$dato["expiration_c"]."|".number_format($dato["unite_price_c"],3)."|".$dato["sheet_c"]."|".$dato["id"]."|".$dato["description"].'">'.$dato["name"].'</option>';
	}
	echo '</select>';?>
	<script type="text/javascript" language="Javascript">   
	$(document).ready(function(){
		$('#acquired_credits_c').attr('readonly',true);
		$("#product").change(function(){
		 $('#expiration_c').attr('disabled',true);

			var value = $(this).val();
			var datos = value.split("|");
		
		if (datos[1]==1 |datos[1]=='' ){
			$('#acquired_credits_c').attr('readonly',false);
		}
			$("#product_c").val(datos[0]);
			$("#acquired_credits_c").val(datos[1]);
			$("#amount").val(datos[2]);
			$("#invoice_store_c").val(datos[3]);
			$("#expiration_c").val(datos[4]);
			$("#unite_price_c").val(datos[5]);
			$("#name").val(datos[6]);
			$("#cstm_products_id_c").val(datos[7]);
			$("#description").val(datos[8]);
		});  



		$("#acquired_credits_c").change(function(){

			if( $("#cstm_products_id_c").val()== "e33a0449-f193-231b-a279-4fbbb25035c4"){
				/*ALMACEN DIGITAL*/
  				$('#expiration_c').attr('disabled',false);
				unit =$("#unite_price_c").val().replace(/[^\d\.\-\ ]/g, ''); 
				cat=$("#acquired_credits_c").val().replace(/[^\d\.\-\ ]/g, ''); 
				base =cat*unit; base2 = number_format(base,".",",");
				$("#amount").val(base2);

			} else if( $("#cstm_products_id_c").val()=="8df98d2f-b6eb-7e87-941b-4ed7c4bf3d7f"){
				/*PAQUETE PLUS PRE PAGO*/
				if ($("#acquired_credits_c").val() < 50 ){

					alert("Ingrese una cantidad mayor a 49");

				}else{
					cotizador();
				}	


			} else if( $("#cstm_products_id_c").val()== "8d33cbfb-fbd7-8bb0-0aa2-4ed7c42d86e8"){
					/*PAQUETE PLUS POST PAGO*/

				if ($("#acquired_credits_c").val() < 50 ){

					alert("Ingrese una cantidad mayor a 49");

				}else{

					$('#expiration_c').attr('disabled',false);
					$("#expiration_c").val(12);
					cotizador();
				}	


			} else if(  $("#cstm_products_id_c").val()==  "5c5b31e6-8b87-8c74-8a2c-4fada0567b2d"){
				/*Paquete Timbrado Fiscal Plus Pre Pago*/
				if ($("#acquired_credits_c").val() < 500 ){

					alert("Ingrese una cantidad mayor a 499");

				}else{
					cotizadordos();
				}

			} else {
				
				unit =$("#unite_price_c").val().replace(/[^\d\.\-\ ]/g, '');
				cat=$("#acquired_credits_c").val().replace(/[^\d\.\-\ ]/g, '');
				base =cat*unit;		
				base2 = number_format(base,".",",");	

				$("#amount").val(base2);

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
