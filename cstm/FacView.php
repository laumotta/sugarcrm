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
		if (document.getElementById("_Descuento").value > 0){
			$("#m_descuento").addClass("required");
			document.getElementById("Descuento").disabled = true;

		}


		$("#addCF").click(function(){
			$("#customFields").append('<tr valign="top"><th scope="row"><label for="customFieldName">Custom Field</label></th><td><input type="text" class="code" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp; <input type="text" class="code" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp; <a href="javascript:void(0);" class="remCF">Remove</a></td></tr>');
		});

		$("#customFields").on('click', '.remCF', function(){
			$(this).parent().parent().remove();
		});

	});

	function aplica_desc(sub,desc){
		var sub;
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

	<div id="main">
		<div id="content">	

			<div class="moduleTitle">
				<h2><img src="../custom/themes/default/images/icon_cstm_products_32.gif" alt="cstm_Facturas" title="cstm_Facturas" align="absmiddle"><span class="pointer">»</span>Datos a Facturar</h2>
			</div>

			<form action="?layout=true" method="post"  name="EditView" id="EditView"   >

				<input type="hidden" name="tipo_CFD" value="FA">
				<input type="hidden" name="version" value="3.3">
				<input type="hidden" name="serie" value="A">


				<?php 	$emi=$model->emisor();?>

				<table id="detailpanel_4" cellspacing="2">
					<div id="LBL_ACCOUNT_INFORMATION" class="detail view">
						<h4>EMISOR</h4>
						<tr>
							<td scope="row" width="2.5%">
								RFC:
							</td>
							<td width="37.5%">
								<span id="account_type">
									<input type="text" name="RFC" id="RFC"  value="<?php echo $emi->rfc_c; ?>" size="55"  class="required"   READONLY>
								</span>
							</td>

							<td scope="row" width="12.5%">
								Nombre o Razón social:
							</td>
							<td width="37.5%">
								<span id="name">
									<input type="text" name="nombre_rs"  id="nombre_rs" value="<?php echo $emi->name;?>" size="75"  class="required"   READONLY>
								</span>
							</td></tr>

							<tr>
								<td scope="row" width="12.5%">
									Regimen fiscal:
								</td>
								<td width="37.5%">
									<select name="regimen_fiscal" id="regimen_fiscal" title="" >
										<option label="" value="<?php echo $emi->schema_register_c;?>"><?php echo $emi->schema_register_c;?></option>
										<option value="601">General de Ley Personas Morales</option>
										<option value="603">Personas Morales con Fines no Lucrativos</option>
										<option value="605">Sueldos y Salarios e Ingresos Asimilados a Salarios</option>
										<option value="606">Arrendamiento</option>
										<option value="608">Demás ingresos</option>
										<option value="609">Consolidación</option>
										<option value="610">Residentes en el Extranjero sin Establecimiento Permanente en México</option>
										<option value="611">Ingresos por Dividendos (socios y accionistas)</option>
										<option value="612">Personas Físicas con Actividades Empresariales y Profesionales</option>
										<option value="614">Ingresos por intereses</option>
										<option value="616">Sin obligaciones fiscales</option>
										<option value="620">Sociedades Cooperativas de Producción que optan por diferir sus ingresos</option>
										<option value="621">Incorporación Fiscal</option>
										<option value="622">Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras</option>
										<option value="623">Opcional para Grupos de Sociedades</option>
										<option value="624">Coordinados</option>
										<option value="628">Hidrocarburos</option>
										<option value="607">Régimen de Enajenación o Adquisición de Bienes</option>
										<option value="629">De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales</option>
										<option value="630">Enajenación de acciones en bolsa de valores</option>
										<option value="615">Régimen de los ingresos por obtención de premios</option>
									</select>
								</td>
							</tr>
						</table>

						<?php 	$rec=$model->receptor($acc[0]->account_id); ?>

						<table id="detailpanel_4" cellspacing="2">
							<div id="LBL_PANEL_ASSIGNMENT" class="detail view">
								<h4>RECEPTOR</h4>
								<tr>
									<td scope="row" width="2.5%">
										RFC:
									</td>
									<td width="37.5%">
										<span id="account_type">
											<input type="text" name="rep_RFC"  id="rep_RFC" value="<?php echo $rec->rfc_c; ?>" size="75"  class="required">
										</span>
									</td>

									<td scope="row" width="10%">
										Nombre o Razón social:
									</td>
									<td width="27.5%">
										<span id="name">
											<input type="text" name="rep_name_rs"  id="rep_name_rs" value=" <?php echo $rec->name; ?> " size="75"  class="required"   >
										</span>
									</td>
								</tr>

								<tr>
									<td scope="row" width="2.5%">
										Residencia Fiscal:
									</td>
									<td width="7.5%">		
										<select name="rep_red_fis" id="rep_red_fis" title="" class="required"  >
											<option value="<?php echo $rec->billing_address_country; ?>"><?php echo $rec->billing_address_country; ?> </option> 
<!-- agregar una validacion if despues del echo para que id=mxn imprima mexico 

	if ($id='MEX') {-->

</td>


<td scope="row" width="2.5%">
	No. de Registro de Identidad Fiscal:
</td>
<td width="7.5%">		
	<input type="text" name="nrif" id="nrif" size="40" value="" maxlength="40">
</td>
</tr>


<tr>
	<td scope="row" width="12.5%">
	Uso CFDI</td>
	<td width="37.5%">
		<select name="uso_cfdi" id="uso_cfdi" title="" >
			<option label="" value="">Selecciona una opcion...</option>
			<option value="G02">Devoluciones, descuentos o bonificaciones</option>
			<option value="G03">Gastos en general</option>
			<option value="I01">Construcciones</option>
			<option value="I02">Mobilario y equipo de oficina por inversiones</option>
			<option value="I03">Equipo de transporte</option>
			<option value="I04">Equipo de computo y accesorios</option>
			<option value="I05">Dados, troqueles, moldes, matrices y herramental</option>
			<option value="I06">Comunicaciones telefónicas</option>
			<option value="I07">Comunicaciones satelitales</option>
			<option value="I08">Otra maquinaria y equipo</option>
			<option value="D01">Honorarios médicos, dentales y gastos hospitalarios.</option>
			<option value="D02">Gastos médicos por incapacidad o discapacidad</option>
			<option value="D03">Gastos funerales.</option>
			<option value="D04">Donativos.</option>
			<option value="D05">Intereses reales efectivamente pagados por créditos hipotecarios (casa habitación).</option>
			<option value="D06">Aportaciones voluntarias al SAR.</option>
			<option value="D07">Primas por seguros de gastos médicos.</option>
			<option value="D08">Gastos de transportación escolar obligatoria.</option>
			<option value="D09">Depósitos en cuentas para el ahorro, primas que tengan como base planes de pensiones.</option>
			<option value="D10">Pagos por servicios educativos (colegiaturas)</option>
			<option value="P01">Por definir</option>
		</select>
	</td>	

	<td scope="row" width="12.5%">
	E-mail</td>
	<td width="37.5%">
		<span id="docs_attached_c">
			<?php 	$dato=$model->email($rec->id); ?>
			<input id="rep_mail"  name="rep_mail" id="rep_mail" value="<?php echo $dato->email_address; ?>"  class="required"  size="75">
		</span>
	</td>
</tr>


<tr>
	<td scope="row" width="12.5%">
		Total Impuestos Retenidos
	</td>
	<td width="37.5%">
		<input type="text" name="Retenidos"  id="Retenidos" value="0"  class="required"     READONLY>
	</td>

	<td scope="row" width="12.5%">
		Total Impuestos Trasladados
	</td>
	<td width="37.5%">
		<input type="text" name="Trasladados"  id="Trasladados" value="0"  class="required"     READONLY>
	</td>
</tr></select></td></tr></div></table>


<table id="detailpanel_4" cellspacing="2">
	<div id="LBL_PANEL_ASSIGNMENT" class="detail view">
		<h4>INFO ADIC</h4>
		<tr>
			<input type="hidden" name="Indicador" id="Indicador" size="16" value="" maxlength="16"  >
			<td scope="row" width="12.5%">
				Motivo de descuento
			</td>
			<td width="37.5%">
				<input type="text" name="m_descuento" id="m_descuento" value=""  >
			</td>

			<td scope="row" width="12.5%">
				Emisor Domicilio Fiscal
			</td>
			<td width="37.5%">
				<input type="text" name="l_expedicion" id="l_expedicion" size="0" value="<?php echo $emi->q14_c; ?>"  >
			</td>
		</tr>

		<tr>
			<td scope="row" width="12.5%">
				Emisor Expedición en:
			</td>
			<td width="37.5%">
				<input type="text" name="l_expedicion" id="l_expedicion" size="0" value="<?php echo $emi->q14_c; ?>"  >
			</td>
			<td scope="row" width="12.5%">
				Receptor Domicilio
			</td>
			<td>

				<input type="text" name="receptor_domicilio" id="receptor_domicilio" value="<?php echo $rec->billing_address_street  .' '.
				$rec->billing_address_ou_c .' '.
				$rec->billing_address_in_c .' '.
				$rec->billing_address_colonia_c .' '.
				$rec->billing_address_town_c .' '.
				$rec->billing_address_city .' '.
				$rec->billing_address_state .' '.
				$rec->billing_address_country .' '.
				$rec->billing_address_postalcode ; ?>">		
			</td>
		</tr>

		<tr>
			<td scope="row" width="12.5%">
				Numero de Cuenta
			</td>
			<td width="37.5%">
				<input type="text" name="no_cuenta" id="no_cuenta" size="16" value="" maxlength="16"  >
			</td>
			<td scope="row" width="12.5%">
			Desglose IEPS</td>
			<td width="37.5%">
				<select name="Desglose" id="Desglose" title="" >
					<option label="" value="">Selecciona una opcion...</option>
					<option value="S">S</option>
					<option value="N">N</option>
				</select>
			</td>
		</tr>
	</div>
</tbody>
</table> 


<table class="form-table" id="customFields">
	<div id="LBL_PANEL_ASSIGNMENT" class="detail view">
		<h4>CFDIs Relacionados</h4>
		<tr valign="top">
			<th scope="row"><label for="customFieldName">Custom Field</label></th>
			<td>
				<input type="text" class="code" name="customFieldName[]" value="" placeholder="Input Name" /> &nbsp;
				<input type="text" class="code" name="customFieldValue[]" value="" placeholder="Input Value" /> &nbsp;
				<a href="javascript:void(0);" id="addCF">Add</a>

			</td>
		</tr>
	</div>
</table> 






<table id="detailpanel_4" cellspacing="2">
	<div id="PART" class="detail view">
		<h4>PARTIDAS</h4>
		<TABLE WIDTH="100%" ALIGN="rigth"   class="list view" border="1">
			<THEAD>
				<TR>
					<TH>Cantidad</TH>
					<TH>Clave Unidad Estándar</TH>
					<TH>Unidad de Medida</TH>
					<TH>Clave de Producto o Servicio</TH>
					<TH>Numero de Identificacion</TH>
					<TH>Descripción</TH>
					<TH>Precio Unitario</TH>
					<TH>Descuento</TH>
					<TH>Importe Neto</TH>
					<TH>Pedimento</TH>
					<TH>Predial</TH>
				</TR>
			</THEAD>

			<input name ="partidas"  type="hidden"  name="mass[]" id="mass[]" value="<?php echo $ops;?>"  class="required"  READONLY></TD>
			<?php 
			$nopartida =1;
			$Subtotal=0;
			$descuento=0;
			foreach($model->partidas($ops) as $partida)
			{	

				$impnto = ($partida->unite_price_c*$partida->acquired_credits_c);
				$cantidad =$partida->acquired_credits_c;
				$unit =((($partida->amount)/(1-($partida->discount_c /100)))/1.16/$cantidad);
				$unit2 = $partida->unite_price_c;

				?>
				<TR>
					<TD><?php echo $cantidad ; ?> <!--cantidad-->
						<td><?php echo $partida->claveunidad_c; ?></td> <!--clave unidad est-->
						<td><?php echo $partida->unidadmedida_c; ?></td> <!--unidad de media-->
						<td><?php echo $partida->clve_prod_ser; ?></td> <!--clve de prod/serv-->
						<td><?php echo $partida->numero_ident; ?></td> <!--num de identifi-->
						<TD> <?php echo $partida->descrip; ?></TD> <!--descripcion-->

						<TD><?php echo number_format($unit2,6);?></TD><!--precio unitario-->

						<TD><?php  $desc =($impnto*$partida->discount_c )/100; echo $desc; ?></TD><!-- descuento -->


						<TD><?php  echo number_format($impnto,3); ?></TD> <!--importe neto=cantidad * precio uni-->

						<td>pedimento</td>	
						<td>predial</td>
					</TD></TR>   
					<?php    

					$Subtotal=$Subtotal+$impnto;
					$to_descuento=$to_descuento+$desc;


				}	?>
			</TBODY>
		</TABLE>
	</div>
</table>

<table id="partidas_imp" cellspacing="2">
	<div id="PART_I" class="detail view">
		<h4>PARTIDAS IMPUESTOS</h4>
		<TABLE WIDTH="100%" ALIGN="rigth"   class="list view" border="1">
			<input type="hidden" name="seccion" value="03-IMP">
			<THEAD>
				<tr>
					<TH>Tipo</TH>
					<TH>Base</TH>
					<TH>Impuesto</TH>
					<TH>Tipo Factor</TH>
					<TH>Tasa Cuota</TH>
					<TH>Importe</TH>
				</tr>
			</THEAD>

			<?php 
			$nopartida =1;
			$tipo = "TRASLADADOS";
			$tipo_imp="IVA";
			$tipo_fact="TASA";
			$tasa_cuo = 0.160000;

//declarar cada una de las variables anteriores por ejeplo $tipoglobal
			$tipo_fact_global;
			$importeglobal;
			$globales= array();
			foreach($model->partidas($ops) as $partida)
			{	
				$impnto = ($partida->unite_price_c*$partida->acquired_credits_c);
				$desc =($impnto*$partida->discount_c )/100;


				?>
				<tr>
					<td width="7.5%" id="tipo" value=""><?php echo $tipo->discount_c; echo ($tipo);?></td>

					<td width="7.5%" id="base"><?php $base=($impnto-$desc); echo $base;?></td><!--Base=importeneto -descuento -->


					<td width="7.5%" id="tipo_imp"><?php echo ($tipo_imp); ?></td>
					<td width="7.5%" id="tipo_fact"><?php echo ($tipo_fact); ?></td>
					<td width="7.5%" id="tasa_cuo" value=""><?php echo $tasa_cuo->discount_c; echo ($tasa_cuo); ?></td>
					<td width="7.5%"><?php $tot= ($base-($base*$tasa_cuo)); echo number_format($tot) ;?></td>
				</tr>
				<?php 

				$importeglobal=$importeglobal+$tot;
				$globales= array('tipo' => $tipo, 'impuesto' => $tipo_imp, 'factor' => $tipo_fact, 'cuota' => $tasa_cuo , 'importe' => $importeglobal);

			}	?> 
		</tbody></table></div></table>


		<table id="impuestos_globales" cellspacing="2">
			<div <id="Impuestos_Globales" class="detail view">
				<h4>IMPUESTOS GLOBALES</h4></div>
				<TABLE WIDTH="100%" ALIGN="rigth"   class="list view" border="1">
					<input type="hidden" name="seccion" value="04-IMP_GLOB">
					<THEAD>
						<tr>
							<TH>Tipo</TH>
							<TH>Impuesto</TH>
							<TH>Tipo Factor</TH>
							<TH>Tasa Cuota</TH>
							<TH>Importe</TH>
						</tr>
					</THEAD>

					<tr> <!-- se imprime el array con los datos globales de la tabla anterior -->
						<td width="7.5%" id="tipo" value=""> <?php  echo ($globales['tipo']); ?></td>
						<td width="7.5%" id="tipo_imp"><?php  echo ($globales['impuesto']); ?></td>
						<td width="7.5%" id="tipo_fact"><?php  echo ($globales['factor']); ?></td>
						<td width="7.5%" id="tipo_fact"><?php  echo ($globales['cuota']); ?></td>
						<td width="7.5%" id=·"importeglobal"><?php echo ($globales['importe']);?></td>
					</tr>

				</tbody></table></div></table>

				<table id="detailpanel_4" cellspacing="2">
					<div id="LBL_ACCOUNT_INFORMATION" class="detail view">
						<h4>ENCABEZADO</h4>
						<tr>
							<td scope="row" width="2.5%">
							Forma de Pago</td>
							<td >
								<select name="forma_pago" id="forma_pago" title="" class="required"  >
									<option label="" value="">Selecciona una opcion...</option>
									<option label="Cheque nominativo" value="Cheque nominativo">Cheque Nominativo</option>
									<option label="Efefctivo" value="Efectivo">Efectivo</option>
									<option label="Transferencia electrónica de fondos" value="Transferencia electrónica de fondos">Transferencia electrónica de fondos</option>
									<option label="Tarjeta de credito" value="Tarjeta de credito">Tarjeta de credito</option>
									<option label="Monedero Electrónico" value="Monedero Electrónico">Monedero Electrónico</option>
									<option label="Dinero Electrónico" value="Dinero Electrónico">Dinero Electrónico</option>
									<option label="Vales De Despensa" value="Vales De Despensa">Vales De Despensa</option>
									<option label="Dacion de Pago" value="Dacion de Pago">Dacion de Pago</option>
									<option label="Pago por Subrogacion" value="Pago por Subrogacion">Pago por Subrogacion</option>
									<option label="Pago por Consignacion" value="Pago por Consignacion">Pago por Consignacion</option>
									<option label="Condonacion" value="Condonacion">Condonacion</option>
									<option label="Compensacion" value="Compensacion">Compensacion</option>
									<option label="Novacion" value="Novacion">Novacion</option>
									<option label="Confusion" value="Confusion">Confusion</option>
									<option label="Remision de Deuda" value="Remision de Deuda">Remision de Deuda</option>
									<option label="Prescripción o caducidad" value="Prescripción o caducidad">Prescripción o caducidad</option>
									<option label="A satisfaccion del acredor" value="A satisfaccion del acredor">A Satisfaccion del Acredor</option>
									<option label="Tarjeta de Debito" value="Tarjeta de Debito">Tarjeta de Debito</option>
									<option label="Tarjeta de Servicios" value="Tarjeta de Servicios">Tarjeta de Servicios</option>
									<option label="Aplicacion de Anticipos" value="Aplicacion de Anticipos">Aplicacion de Anticipos</option>
									<option label="Por Definir" value="Por Definir">Por Definir</option>
								</select>
							</td>

							<input type="hidden" name="NoCertificado" value="00001000000406180982">

							<td scope="row" width="12.5%">
							Condiciones de Pago</td>
							<td width="37.5%">
								<input name="Condiciones_pago" id="Condiciones"   maxlength="1000" value="Contado" title="">
							</td>
						</tr>
						<tr>
							<td scope="row" width="12.5%">
								Subtotal:
							</td>
							<td width="37.5%">
								<input type="text" name="subtotal" id="subtotal" value="<?php echo number_format($Subtotal,3);  ?>"  class="required"    READONLY>
							</td>



							<td scope="row" width="12.5%">
								% Descuento:
							</td>
							<td width="37.5%">
								<input name="_Descuento" id="_Descuento"   maxlength="" value="<?php echo number_format($to_descuento,3); ?>" class="required" READONLY>
							</td>


							<tr>
								<td scope="row" width="12.5%">
									Moneda
								</td>
								<td width="37.5%">
									<select name="Subtotal" id="Subtotal" title="" class="required"  >
										<option value="MXN">Peso Mexicano</option>
									</select>

									<td scope="row" width="12.5%">
										Tipo de Cambio
									</td>
									<td width="37.5%">
										<input type="text" name="Cambio"  id="Cambio" value="1.0"   READONLY>
									</td>
								</tr>

								<tr>
									<td scope="row" width="12.5%">
										Total:
									</td>


									<?php

									$total=$Subtotal-$to_descuento+$globales['importe'];

									?>


									<td width="37.5%">
										<input type="text" name="total" id="total" value="<?php  echo($total); ?>" class="required"   READONLY>
									</td>
								</tr>

								<tr>
									<td scope="row" width="12.5%">
										Tipo de Comprobante
									</td>
									<td width="37.5%">
										<select name="tipo_comprobante" id="tipo_comprobante" title="" >
											<option value="E">Egreso</option>
											<option value="I">Ingreso</option>
											<option value="T">Traslado</option>
											<option value="N">Nomina</option>
											<option value="P">Pago</option>
										</select>
									</td>

									<td scope="row" width="12.5%">
									Metodo de Pago</td>
									<td width="37.5%">
										<select name="metodo_pago" id="metodo_pago" title="" >
											<option label="PUE" value="Pago en una Sola Exhibicion">PUE</option>
											<option label="PPD" value="Pago en Parcialidades o Diferido">PPD</option>
											....
										</select>
									</td>
								</tr>

								<tr>
									<td scope="row" width="12.5%">
										Lugar de Expedición
									</td>
									<td width="37.5%">
										<input type="text" name="lugar_expedicion" id="lugar_expedicion" size="55" value="<?php echo $emi->q14_c; ?>"  >
									</td>

									<td scope="row" width="12.5%">
										Confirmacion
									</td>
									<td width="37.5%">
										<input type="text" name="" id="" size="16" value="" maxlength="5"  >
									</td>
								</tr>

							</table>
							<table cellpadding="1" cellspacing="0" border="0"  class="actionsContainer">
								<tr>
									<td class="buttons" align="left" NOWRAP>
										<input class="submit" type="submit"   name="Facturar" id="Facturar"  value="Facturar" > 

									</td>
								</tr>
							</table>



						</form>
					</div>
				</div>
			</BODY>
		</HTML>