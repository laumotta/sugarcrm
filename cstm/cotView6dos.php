<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
	.curved-box-css3
	{
	width: 260px;
	margin: 1px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	background-color: #048;
	}
	
	.curved-box-css31
	{
	width: 256px;
	margin: 2px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	background-color: #FFF;
	}
	
	.curved-box-css3 h2
	{
	padding: 10px 15px 5px 15px;
	color: #f4fbfd;
	}
	
	.curved-box-css3 p
	{
	margin: 0px;
	padding: 5px 15px 10px 15px;
	}
</style>
</head>

<body>
<table style="filter:progid:DXImageTransform.Microsoft.Gradient(endColorstr='#FFFFFF', startColorstr='#F4F4F4', gradientType='0');" height="100%" width="1005" border="0" bordercolor="#003366" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr><td>&nbsp;</td></tr>
          <tr>
            <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
              	<td>&nbsp;</td>
                <td height="150" align="right"><img src="http://crm.sifeidistribuciones.com.mx/crm/custom/themes/default/images/company_logo.png" alt="" 
width="170" height="88" /></td>
                <td>&nbsp;</td>
                <td bgcolor="#003399" width="1"></td>
                <td>&nbsp;</td>
                <td><img src="http://crm.sifeidistribuciones.com.mx/crm/cstm/Sifei.jpg" alt="" width="93" height="92" /></td>
              </tr>
            </table></td>
            <td width="390">&nbsp;</td>
            <td width="290"><div class="curved-box-css3">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="curved-box-css31"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#004488" align="center"><font size="3" face="Arial" color="#FFFFFF"><b>N° de orden</b></font></td>
  </tr>
  <tr>
    <td align="center"><font face="Impact" size="4"><?php echo str_replace('-','',date_format(date_create($detalle[1]->date_entered),'Y-m-d')).$detalle[1]->no_c;?></font></td>
  </tr>
</table>
</div></td>
  </tr>
</table>
</div><br />
<div class="curved-box-css3">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="curved-box-css31"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#004488" align="center"><font size="3" face="Arial" color="#FFFFFF"><b>Vigencia</b></font></td>
  </tr>
  <tr>
    <td align="center"><font face="Impact" size="4"><?php echo date_format(date_create($detalle[1]->date_closed),'Y-m-d');?></font></td>
  </tr>
</table>
</div></td>
  </tr>
</table>
</div><br />
<div class="curved-box-css3">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><div class="curved-box-css31"><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#004488" align="center"><font size="3" face="Arial" color="#FFFFFF"><b>Fecha de creacion</b></font></td>
  </tr>
  <tr>
    <td align="center"><font face="Impact" size="4"><?php echo date_format(date_create($detalle[1]->date_entered),'Y-m-d');?></font></td>
  </tr>
</table>
</div></td>
  </tr>
</table>
</div>
</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><br /><br /><br /><br /><br /><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="10">&nbsp;</td>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td bgcolor="#004080" height="30" width="40%" valign="middle"><font color="#FFFFFF" face="Arial" size="3"><b>&nbsp;&nbsp;<?php echo ($emisor->name);?></b></font></td>
                    <td><?php echo ($detalle[1]->description);?></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" bordercolor="#004080" border="1" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><p></p> 
<p style="text-align: left;"><span style="font-family: arial,helvetica,sans-serif;">
<hr />
<table style="width: 100%; font-size: small; font-family: arial,helvetica,sans-serif; " border="0" align="center">
<tbody>
<tr bgcolor="#004993">

<td align="right"><font color="#FFFFFF"><b>Partida</b></font></td>
<td align="left"><font color="#FFFFFF"><b>Producto</b></font></td>
<td align="right"><font color="#FFFFFF"><b>Cantidad</b></font></td>
<td align="right"><font color="#FFFFFF"><b>P. Unit.</b></font></td>

<td align="right"><font color="#FFFFFF"><b>Desc.</b></font></td>
<td align="right"><font color="#FFFFFF"><b>Imp.</b></font></td>
</tr>

<?php
$array_partidas = $model->partidas($detalle[1]->id);
$ops = $model->extrae($array_partidas);
$i =0;
$subtotal=0;
$descuento =0;
$iva =16;
foreach( $model->detallep($ops) as $partida)	{	?>
<tr>
<?php $i++;?>
<td align="right" ><?php echo $i; ?> <br /> </td>
<td align="left" ><?php echo $partida->product_c; ?> <br /> </td>
<td align="right" ><?php $cantidad = $partida->acquired_credits_c; echo number_format($cantidad,0); ?> <br /> </td>
<td align="right" ><?php $unit =($partida->unite_price_c/1.16);  echo number_format($unit,2); ?> <br/> </td>
<td align="right" ><?php $imp = $unit* $cantidad; echo $partida->discount_c."%"; ?> <br /> </td>
<td align="right" ><?php $descuento=$imp*($partida->discount_c/100); echo number_format(($imp),2); ?><br /> </td>
</tr>
<?php  
$subtotal =$subtotal+($imp);
$subdesc=$subdesc+$descuento;
}	?>
</tbody>
</table>
</span></span><p></p>
<hr />
<p style="text-align: left;"></p></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="middle"><img height="150" width="150" src="http://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/QRc%C3%B3digo_portada_wikipedia_espa%C3%B1ol_.png/220px-QRc%C3%B3digo_portada_wikipedia_espa%C3%B1ol_.png" /></td>
                    <td>&nbsp;</td>
                    <td valign="top"><table style="width: 100%; font-size: small; font-family: arial,helvetica,sans-serif;" width="200" align="right" width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td align="right"><b>Sub Total:</b></td>
    <td width="90">$&nbsp;<?php echo number_format($subtotal,2);?></td>
  </tr>
  <tr>
    <td align="right"><b>Descuento:</b></td>
    <td>$&nbsp;<?php  echo number_format($subdesc,2);?></td>
  </tr>
  <tr>
    <td align="right"><b>IVA:</b></td>
    <td>$&nbsp;<?php  echo number_format($IT =(($subtotal-$subdesc)*$iva)/100,2);?></td>
  </tr>
  <tr>
    <td align="right"><b>Total:</b></td>
    <td>$&nbsp;<?php  echo number_format($total =($subtotal-$subdesc+$IT),2); ?></td>
  </tr>
</table>
<br />
<table width="50%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td width="10">&nbsp;</td>
</tr>
</table>
</td>
</tr>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="100%" >
<div><font face="Arial" size="1">
Sin costos por implementación y mantenimiento
NO se hacen cargos por actualizaciones del SAT
Soporte Técnico, Fiscal y Contable incluidos
Nos Acoplamos a cualquier tipo de sistema de facturación</font></div>

</td>
</tr>

  <tr>
  <td>
</br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#004080" width="120" align="right"><font size="1" face="Arial" color="#FFFFFF"><b>Datos para el pago:</font></b></td>
    <td>&nbsp;&nbsp;<font size="1" face="Arial"><b></b></font></td>
  </tr>
  <tr>
    <td bgcolor="#004080" width="120" align="right"><font size="1" face="Arial" color="#FFFFFF"><b>Nombre de la Empresa:</font></b></td>
    <td>&nbsp;&nbsp;<font size="1" face="Arial"><b>Soluci&oacute;n Integral de Facturaci&oacute;n Electr&oacute;nica e Inform&aacute;tica SIFEI SA de CV</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#004080" width="120" align="right"><font size="1" face="Arial" color="#FFFFFF"><b>Banco:</font></b></td>
    <td>&nbsp;&nbsp;<font size="1" face="Arial"><b>HSBC</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#004080" align="right"><font size="1" face="Arial" color="#FFFFFF"><b>Cuenta:&nbsp;</b></font></td>
    <td>&nbsp;&nbsp;<font size="1" face="Arial"><b>4030053862 Suc 0456</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#004080" align="right"><font size="1" face="Arial" color="#FFFFFF"><b>Clabe:&nbsp;</b></font></td>
    <td>&nbsp;&nbsp;<font size="1" face="Arial"><b>021650040300538629</b></font></td>
  </tr>
  <tr>
    <td bgcolor="#004080" align="right"><font size="1" face="Arial" color="#FFFFFF"><b>Confirmacion de pago:&nbsp;</b></font></td>
    <td>&nbsp;&nbsp;<font size="1" face="Arial"><b>pagos@sifei.com.mx</b></font></td>
  </tr>
</table>
</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</td>
</tr>
</table>
</td>
      </tr>
          <tr>
            <td align="center"><p><p></p></p><p style=" text-align: center;"><a href="http://www.sifei.com.mx/"><span style="font-size: small;">ww.sifei.com.mx</span></a></p>
<p> <font face="Arial">01 800 01 SIFEI (74 334)</font></p></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
