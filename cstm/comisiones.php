<?php 

include("../cnx.php");

$cnx = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database, $cnx);

$total_total="";
$total_dist="";
$total_red ="";
$total_rem="";
$total_franq="";
$total_sifei="";
$options_n0="";
$options_promotor ="";
$options_n1="";
$options_n2="";
$options_n3="";

$options_pn1="";
$options_pn2="";
$options_pn3="";

$total_ind="";

$monto_sifei="";
$monto_franq="";
$monto_rem ="";
$monto_red ="";
$monto_sifei="";
$monto_franq="";
$monto_rem="";
$monto_red="";
$monto_sifei="";
$monto_franq="";
$monto_rem="";
$monto_red="";
$monto_sifei="";
$monto_franq ="";
$monto_rem="";
$monto_red="";
$monto_sifei="";
$monto_franq="";
$monto_rem =""; 
$monto_red="";
$monto_ind ="";


function formatDate($sFecha){
       
/*
$toks=explode("/",$inicial);
$inicial=$toks[2]."-".$toks[1]."-".$toks[0];
$fecha_operar_ini=mktime(0,0,0,$toks[1],$toks[0],$toks[2]);
*/
       $date=explode("/",$sFecha);
       if(count($date)!=3){   return "";    }                       
       return $sFecha=$date[2]."-".$date[1]."-".$date[0];
}

function consulta_com($level_commission,$category_id){

$sql4=sprintf("select %s from cstm_products_cstm where category_c  = '%s' ",$level_commission,$category_id);
$result4 = mysql_query($sql4) or die (mysql_error());
$beancstm4 = mysql_fetch_assoc($result4);

return $beancstm4[$level_commission];
}


function consulta_id($_id){

$sql4=sprintf("select user_name as nombre  from users inner join users_cstm on id=id_c  where id = '%s'  ",$_id);
$result4 = mysql_query($sql4) or die (mysql_error());
$beancstm4 = mysql_fetch_assoc($result4);

return utf8_decode($beancstm4['nombre']);
}

	//FUNCION QUE SACA 3 REPORTS_TO_ID DEPENDIENDO DEL VENDEDOR
function get_ids_boss($idempleado){
		global $hostname;
		global $username;
		global $password;
		global $database;

		$cnx = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
		mysql_select_db($database, $cnx);

		foreach(array(10,5,2) as $valor){
			
	        $query=sprintf("select reports_to_id, level_c from users inner join users_cstm on id=id_c where id='%s'",$idempleado);					
 			$result =mysql_query($query);
			$row = mysql_fetch_assoc($result);
 
			if ($row["level_c"]=="PROMOTOR") {
			
			
			$idempleado=$row["reports_to_id"];
			
						$query=sprintf("select reports_to_id, level_c from users inner join users_cstm on id=id_c where id='%s'",$idempleado);					
						$result =mysql_query($query);
						$row = mysql_fetch_assoc($result);
			
			
			
			}

 
			if(($row["reports_to_id"]=="069C7AE7-A0F6-47F0-80AD-D9612E37E8E7" || $row["reports_to_id"]=="2E8C9BF9-A94D-4ABF-8070-0117638CA16C" )||( $idempleado =="069C7AE7-A0F6-47F0-80AD-D9612E37E8E7" ||  $idempleado =="2E8C9BF9-A94D-4ABF-8070-0117638CA16C")  ){
			return($valor);
			}
		 	$idempleado=$row["reports_to_id"];
		}		
		return(0);

	}

function access($user_id)
{

		global $hostname;
		global $username;
		global $password;
		global $database;

		$cnx = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
		mysql_select_db($database, $cnx);

 			
	        $query=sprintf("select user_id from acl_roles_users where role_id ='6764b961-4f5f-ef29-7c9b-4d2f9639c34e'   and user_id='%s' and deleted=0",$user_id);					
			$result =mysql_query($query);
			$num_rows = mysql_num_rows($result);
			
			if($num_rows==0){
			
			return 0;
			
			}else{
			
			return 1;
			} 
			

}

function cuenta($idacc){

$sql5=sprintf("select name from accounts where id = '%s'  ",$idacc);
$result5 = mysql_query($sql5) or die (mysql_error());
$beancstm5 = mysql_fetch_assoc($result5);

return ($beancstm5['name']);
}

if(isset($_POST["start"]) && isset($_POST["user"]) && isset($_POST["due"]) && isset($_POST["ck_"]) ){

 $hidden_style=access($_POST["ck_"]);

if($hidden_style==0 && $_POST["ck_"]!=$_POST["user"] ){

echo"<p class='error'>No tiene acceso a esta &aacute;rea solo puede consultar comisiones de su red. Contacte con el Administrador de su sitio web para obtenerlo.</p>";
}else {

?>
<h3><center>La informaci&oacute;n de este reporte se encuentra bajo validaci&oacute;n  o puede estar sujeta a cambios sin previo aviso.</center></h3>
<h4>Ventas de Directas y de Asesores</h4>
    <?php 
			$query_n0 = sprintf("select  id from users inner join users_cstm  on id=id_c 
			where deleted =0  and id = '%s' and (level_c = 'DISTRIBUIDOR' or level_c = 'GERENTE') ",$_POST["user"]);
			$result_n0 = mysql_query($query_n0);
			while ($row_n0 = mysql_fetch_assoc($result_n0)) {  
				$options_n0.= '<option  value=" '. $row_n0['id'] . '" >' . strtoupper(consulta_id($row_n0['id'])). '</option>'; 
			
			}
			
			$query_promotor = sprintf("select id from users inner join users_cstm  on id=id_c 
			where deleted =0  and reports_to_id in (%s)  and level_c = 'ASESOR' ",$query_n0);
			$result_promotor = mysql_query($query_promotor);
			while ($row_promotor = mysql_fetch_assoc($result_promotor)) {  
			$options_promotor.= '<option  value=" '. $row_promotor['id'] . '" >' . strtoupper(consulta_id($row_promotor['id'])). '</option>'; 
			}
	
    ?>
 
<h4>Nivel 0</h4></br>
<SELECT ><OPTION VALUE=0><?=$options_n0?> </SELECT> Asesores <SELECT ><OPTION VALUE=0><?=$options_promotor?> </SELECT> </br></br>


<TABLE WIDTH="100%" ALIGN="rigth"  class="list view">
<THEAD>
<TR>
<TH>#</TH>
<TH >Fuerza de Ventas</TH>
<TH >Monto</TH>
<TH >Fecha de cierre</TH>
<TH >Cuenta</TH>
<TH >Descripcion</TH>
<TH >Categoria</TH>
<?php if($hidden_style== 1){ ?>
<TH >% SIFEI </TH>
<TH >$ SIFEI </TH>
<TH >% Fraq</TH>
<TH >$ Fraq</TH>
<TH >% red</TH>
<TH >$ red</TH>
<TH >% Rem</TH>
<TH >$ Rem</TH>
<?php } ?>
<TH >% Dir</TH>
<TH >$ Dir</TH>
</TR>

</THEAD>


<? 

$ii=1;
 $query = sprintf(" select  op.id as oppid, op.name as name, op_c.category_c as cat ,op.date_closed as date, op.amount as amount, assigned_user_id,  ap.account_id  as idacc from opportunities as op  inner join opportunities_cstm as op_c on op_c.id_c=op.id inner join accounts_opportunities as ap on ap.opportunity_id = op.id
 where release_payment_c ='%s' and op.deleted=0  and ap.deleted=0
 and (assigned_user_id in (%s) or assigned_user_id in(%s))
 and  op.date_closed >= '%s' and op.date_closed <= '%s' order by assigned_user_id  ",$_POST["release_payment_c"],$query_n0,$query_promotor,formatDate($_POST["start"]),formatDate($_POST["due"]));
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) { $remanente=get_ids_boss($_POST["user"]); ?>


<TR>
<TD scope="row"><?php echo $ii++; ?></TD>
<TD scope="row"><?php echo consulta_id($row['assigned_user_id']);?></TD>

<TD scope="row"><?php echo $monto_total=  number_format($row['amount'],2,".","")?></TD>
<TD scope="row"><?php echo $row['date'];?></TD>
<TD scope="row"><a href="index.php?module=Accounts&offset=1&stamp=1323358236061315000&return_module=Accounts&action=DetailView&record=<?php echo $row['idacc'];?> " target="_blank">
 <?php echo cuenta($row['idacc']);?></a> </TD>

<TD scope="row"><a href="index.php?module=Opportunities&offset=1&stamp=1300318362048257100&return_module=Opportunities&action=DetailView&record=
<?php echo $row['oppid'];?> " target="_blank"> <?php echo utf8_encode($row['name']);?> </a> </TD>
<TD scope="row"><?php echo $cat_ = $row['cat'];  ?></TD>
<?php if($hidden_style== 1){ ?>

<TD scope="row"><?php echo consulta_com('commission_corp_c',$cat_);?></TD>
<TD scope="row"><?php echo $monto_sifei= number_format($monto_total *(float)consulta_com('commission_corp_c',$cat_)/100,2,".","");?></TD>

<TD scope="row"><?php echo consulta_com('commission_franquicia_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_franq=number_format($monto_total *(float)consulta_com('commission_franquicia_c',$cat_)/100,2,".",""); ?></TD>

<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_)!=0){echo $red=number_format(consulta_com('commission_net_c',$cat_)- $remanente,2,".","");}else{ echo $red=number_format(0,2,".","");}?></TD>
<TD scope="row"><?php echo $monto_red=number_format(($monto_total *(float)$red )/100,2,".",""); ?></TD>

<TD scope="row"><? if(consulta_com('commission_net_c',$cat_ ) !=0) { echo number_format($remanente,2,".","");}else {echo number_format($remanente=0,2,".","");}?></TD>
<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_ ) !=0) {echo $monto_rem= number_format($monto_total *$remanente/100,2,".","");}else {echo number_format($monto_rem=0,2,".","");}?></TD>
<?php } ?>

<TD scope="row"><?php echo consulta_com('commission_dist_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_dist= number_format($monto_total *(float)consulta_com('commission_dist_c',$cat_)/100,2,".","");  ?></TD>

</TR>     
<?

$total_sifei = $total_sifei + $monto_sifei;
$total_franq = $total_franq + $monto_franq;

$total_rem = $total_rem + $monto_rem;
$total_red = $total_red + $monto_red;


$total_dist = $total_dist + $monto_dist; 
$total_total = $total_total + $monto_total;


} ?> 
</TBODY>
</TABLE> 

<br>
<div id="LBL_EDITVIEW_PANEL2">

<div>
<h4>Ventas de Distribuidores y Pormotores Multinivel</h4>

    <?php 
			$query_n1 = sprintf("select id from users inner join users_cstm on id=id_c  
			where reports_to_id = '%s' and deleted =0  and  (level_c = 'DISTRIBUIDOR' or level_c = 'GERENTE')",$_POST["user"]);
			$result_n1 = mysql_query($query_n1);
			while ($row_n1 = mysql_fetch_assoc($result_n1)) {  
				$options_n1.= '<option  value=" '. $row_n1['id'] . '" >' . strtoupper(consulta_id($row_n1['id'])). '</option>'; 
			}

			$query_pn1 = sprintf("select id from users inner join users_cstm  on id=id_c 
			where deleted =0  and reports_to_id in (%s)  and level_c = 'ASESOR' ",$query_n1);
			$result_pn1 = mysql_query($query_pn1);
			while ($row_pn1 = mysql_fetch_assoc($result_pn1)) {  
			$options_pn1.= '<option  value=" '. $row_pn1['id'] . '" >' . strtoupper(consulta_id($row_pn1['id'])). '</option>'; 
			}
    ?>
 
<h4>Nivel 1 </h4> </br>
 <SELECT ><OPTION VALUE=0><?=$options_n1?> </SELECT> Asesores <SELECT ><OPTION VALUE=0><?=$options_pn1?> </SELECT> </br></br>




<TABLE WIDTH="100%" ALIGN="rigth"  class="list view">
<THEAD>
<TR>
<TH>#</TH>
<TH >Fuerza de Ventas</TH>
<TH >Monto</TH>
<TH >Fecha de cierre</TH>
<TH >Cuenta</TH>
<TH >Description</TH>
<TH >Categoria</TH>
<?php if($hidden_style== 1){ ?>

<TH >% SIFEI </TH>
<TH >$ SIFEI </TH>
<TH >% Fraq</TH>
<TH >$ Fraq</TH>
<TH >% red</TH>
<TH >$ red</TH>
<TH >% Rem</TH>
<TH >$ Rem</TH>
<TH >% FV</TH>
<TH >$ FV</TH>
<?php } ?>
<TH >% Dir</TH>
<TH >$ Dir</TH>

</TR>

</THEAD>

<? 

$ii=1;
 $query = sprintf("select  op.id as oppid, op.name as name, op_c.category_c as cat ,op.date_closed as date, op.amount as amount, assigned_user_id,  ap.account_id  as idacc 
  from opportunities as op  inner join opportunities_cstm as op_c on op_c.id_c=op.id inner join accounts_opportunities as ap on ap.opportunity_id = op.id
 where release_payment_c ='%s' and op.deleted=0    and ap.deleted=0
 and (assigned_user_id in (%s) or assigned_user_id in (%s)) and  op.date_closed >= '%s' and op.date_closed <= '%s' order by assigned_user_id ",$_POST["release_payment_c"],$query_n1,$query_pn1,formatDate($_POST["start"]),formatDate($_POST["due"]));
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) { ?>

<?php $remanente=get_ids_boss($row['oppid']); ?>

<TR>

<TD scope="row"><?php echo $ii++; ?></TD>
<TD scope="row"><?php echo consulta_id($row['assigned_user_id']); ?></TD>

<TD scope="row"><?php echo $monto_total=  number_format($row['amount'],2,".","")?></TD>
<TD scope="row"><?php echo $row['date'];?></TD>
<TD scope="row"><a href="index.php?module=Accounts&offset=1&stamp=1323358236061315000&return_module=Accounts&action=DetailView&record=<?php echo $row['idacc'];?> " target="_blank">
 <?php echo cuenta($row['idacc']);?></a> </TD>

<TD scope="row"><a href="index.php?module=Opportunities&offset=1&stamp=1300318362048257100&return_module=Opportunities&action=DetailView&record=
<?php echo $row['oppid'];?> " target="_blank"> <?php echo utf8_encode($row['name']);?> </a> </TD>
<TD scope="row"><?php echo $cat_ = $row['cat'];  ?></TD>
<?php if($hidden_style== 1){ ?>

<TD scope="row"><?php echo consulta_com('commission_corp_c',$cat_);?></TD>
<TD scope="row"><?php echo $monto_sifei= number_format($monto_total *(float)consulta_com('commission_corp_c',$cat_)/100,2,".","");?></TD>

<TD scope="row"><?php echo consulta_com('commission_franquicia_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_franq=number_format($monto_total *(float)consulta_com('commission_franquicia_c',$cat_)/100,2,".",""); ?></TD>

<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_)!=0){echo $red=number_format(5 - $remanente,2,".","");}else{ echo $red=number_format(0,2,".","");}?></TD>
<TD scope="row"><?php echo $monto_red=number_format(($monto_total *(float)$red )/100,2,".",""); ?></TD>

<TD scope="row"><? if(consulta_com('commission_net_c',$cat_ ) !=0) { echo number_format($remanente,2,".","");}else {echo number_format($remanente=0,2,".","");}?></TD>
<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_ ) !=0) {echo $monto_rem= number_format($monto_total *$remanente/100,2,".","");}else {echo number_format($monto_rem=0,2,".","");}?></TD>

<TD scope="row"><?php echo consulta_com('commission_dist_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_ind= number_format($monto_total *(float)consulta_com('commission_dist_c',$cat_)/100,2,".","");  ?></TD>
<?php } ?>

<TD scope="row"><?php  if($cat_=="Creditos"){ echo $directo ="5.00";}else{ echo $directo ="0.00";} ?></TD>
<TD scope="row"><?php echo $monto_dist= number_format($monto_total * (float) $directo/100,2,".","");  ?></TD>
</TR>     
<?
$total_sifei = $total_sifei + $monto_sifei;
$total_franq = $total_franq + $monto_franq;


$total_red = $total_red + $monto_red;
$total_rem = $total_rem + $monto_rem;

$total_ind = $total_ind + $monto_ind ;
$total_dist = $total_dist + $monto_dist; 
$total_total = $total_total + $monto_total;

} ?> 
</TBODY>
</TABLE> 
<?php 
			$query_n2 = sprintf("select  id from users inner join users_cstm on id=id_c 
			where reports_to_id in (%s) and deleted=0 and (level_c = 'DISTRIBUIDOR' or level_c = 'GERENTE')",$query_n1);
			$result_n2 = mysql_query($query_n2);
			while ($row_n2 = mysql_fetch_assoc($result_n2)) {  
				$options_n2.= '<option  value=" '. $row_n2['id'] . '" >' . strtoupper(consulta_id($row_n2['id'])). '</option>'; 
			}
			
			$query_pn2 = sprintf("select id from users inner join users_cstm  on id=id_c 
			where deleted =0  and reports_to_id in (%s)  and level_c = 'ASESOR' ",$query_n2);
			$result_pn2 = mysql_query($query_pn2);
			while ($row_pn2 = mysql_fetch_assoc($result_pn2)) {  
			$options_pn2.= '<option  value=" '. $row_pn2['id'] . '" >' . strtoupper(consulta_id($row_pn2['id'])). '</option>'; 
			}

    ?>
 
<h4>Nivel 2 </h4> </br>
 <SELECT ><OPTION VALUE=0><?=$options_n2?> </SELECT> Asesores <SELECT ><OPTION VALUE=0><?=$options_pn2?> </SELECT> </br></br>

 
<TABLE WIDTH="100%" ALIGN="rigth"  class="list view">
<THEAD>
<TR>
<TH>#</TH>
<TH >Fuerza de Ventas</TH>
<TH >Monto</TH>
<TH >Fecha de cierre</TH>
<TH >Cuenta</TH>
<TH >Description</TH>
<TH >Categoria</TH>
<?php if($hidden_style== 1){ ?>

<TH >% SIFEI </TH>
<TH >$ SIFEI </TH>
<TH >% Fraq</TH>
<TH >$ Fraq</TH>
<TH >% red</TH>
<TH >$ red</TH>
<TH >% Rem</TH>
<TH >$ Rem</TH>
<TH >% FV</TH>
<TH >$ FV</TH>
<?php } ?>

<TH >% Dir</TH>
<TH >$ Dir</TH>
</TR>

</THEAD>

<? 

$ii=1;
 $query = sprintf("select  op.id as oppid, op.name as name, op_c.category_c as cat ,op.date_closed as date, op.amount as amount, assigned_user_id,  ap.account_id  as idacc 
  from opportunities as op  inner join opportunities_cstm as op_c on op_c.id_c=op.id inner join accounts_opportunities as ap on ap.opportunity_id = op.id
 where release_payment_c ='%s' and op.deleted=0   and ap.deleted=0
 and (assigned_user_id in (%s) or assigned_user_id in (%s)) 
 and  op.date_closed >= '%s' and op.date_closed <= '%s' order by assigned_user_id ",$_POST["release_payment_c"],$query_n2,$query_pn2,formatDate($_POST["start"]),formatDate($_POST["due"]));
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) { ?>
<?php $remanente=get_ids_boss($row['oppid']); ?>
<TR>
<TD scope="row"><?php echo $ii++; ?></TD>
<TD scope="row"><?php echo consulta_id($row['assigned_user_id']); ?></TD>

<TD scope="row"><?php echo $monto_total=  number_format($row['amount'],2,".","")?></TD>
<TD scope="row"><?php echo $row['date'];?></TD>
<TD scope="row"><a href="index.php?module=Accounts&offset=1&stamp=1323358236061315000&return_module=Accounts&action=DetailView&record=<?php echo $row['idacc'];?> " target="_blank">
 <?php echo cuenta($row['idacc']);?></a> </TD>

<TD scope="row"><a href="index.php?module=Opportunities&offset=1&stamp=1300318362048257100&return_module=Opportunities&action=DetailView&record=
<?php echo $row['oppid'];?> " target="_blank"> <?php echo utf8_encode($row['name']);?> </a> </TD>
<TD scope="row"><?php echo $cat_ = $row['cat'];  ?></TD>
<?php if($hidden_style== 1){ ?>

<TD scope="row"><?php echo consulta_com('commission_corp_c',$cat_);?></TD>
<TD scope="row"><?php echo $monto_sifei= number_format($monto_total *(float)consulta_com('commission_corp_c',$cat_)/100,2,".","");?></TD>

<TD scope="row"><?php echo consulta_com('commission_franquicia_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_franq=number_format($monto_total *(float)consulta_com('commission_franquicia_c',$cat_)/100,2,".",""); ?></TD>

<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_)!=0){echo $red=number_format(7 - $remanente,2,".","");}else{ echo $red=number_format(0,2,".","");}?></TD>
<TD scope="row"><?php echo $monto_red=number_format(($monto_total *(float)$red )/100,2,".",""); ?></TD>
 
<TD scope="row"><? if(consulta_com('commission_net_c',$cat_ ) !=0) { echo number_format($remanente,2,".","");}else {echo number_format($remanente=0,2,".","");}?></TD>
<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_ ) !=0) {echo $monto_rem= number_format($monto_total *$remanente/100,2,".","");}else {echo number_format($monto_rem=0,2,".","");}?></TD>

<TD scope="row"><?php echo consulta_com('commission_dist_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_ind= number_format($monto_total *(float)consulta_com('commission_dist_c',$cat_)/100,2,".","");  ?></TD>
<?php } ?>

<TD scope="row"><?php if($cat_=="Creditos"){ echo $directo ="3.00";}else{ echo $directo = "0.00";}  ?></TD>
<TD scope="row"><?php echo $monto_dist= number_format($monto_total * (float) $directo/100,2,".","");  ?></TD>
</TR>     
<?
$total_sifei = $total_sifei + $monto_sifei;
$total_franq = $total_franq + $monto_franq;
$total_red = $total_red + $monto_red;
$total_rem = $total_rem + $monto_rem;
$total_ind = $total_ind + $monto_ind ;
$total_dist = $total_dist + $monto_dist; 
$total_total = $total_total + $monto_total;

} ?> 
</TBODY>
</TABLE> 
  <?php 
			$query_n3 = sprintf("select id   from users inner join users_cstm on id=id_c 
			where  reports_to_id in  (%s)and deleted=0 and (level_c = 'DISTRIBUIDOR' or level_c = 'GERENTE')",$query_n2);
			$result_n3 = mysql_query($query_n3);
			while ($row_n3 = mysql_fetch_assoc($result_n3)) {  
				$options_n3.= '<option  value=" '. $row_n3['id'] . '" >' . strtoupper(consulta_id($row_n3['id'])). '</option>'; 
			}
			
			$query_pn3 = sprintf("select id from users inner join users_cstm  on id=id_c 
			where deleted =0  and reports_to_id in (%s)  and level_c = 'ASESOR' ",$query_n3);
			$result_pn3 = mysql_query($query_pn3);
			while ($row_pn3 = mysql_fetch_assoc($result_pn3)) {  
			$options_pn3.= '<option  value=" '. $row_pn3['id'] . '" >' . strtoupper(consulta_id($row_pn3['id'])). '</option>'; 
			}

    ?>
 
<h4>Nivel 3 </h4> </br>
 <SELECT ><OPTION VALUE=0><?=$options_n3?> </SELECT> Asesores <SELECT ><OPTION VALUE=0><?=$options_pn3?> </SELECT> </br></br>


<TABLE WIDTH="100%" ALIGN="rigth"  class="list view">
<THEAD>
<TR>
<TH>#</TH>
<TH >Fuerza de Ventas</TH>
<TH >Monto</TH>
<TH >Fecha de cierre</TH>
<TH >Cuenta</TH>
<TH >Description</TH>
<TH >Categoria</TH>
<?php if($hidden_style== 1){ ?>

<TH >% SIFEI </TH>
<TH >$ SIFEI </TH>
<TH >% Fraq</TH>
<TH >$ Fraq</TH>
<TH >% red</TH>
<TH >$ red</TH>
<TH >% Rem</TH>
<TH >$ Rem</TH>
<TH >% FV</TH>
<TH >$ FV</TH>
<?php } ?>

<TH >% Dir</TH>
<TH >$ Dir</TH>

</TR>

</THEAD>

<? 

 
$ii=1;
 $query = sprintf("select  op.id as oppid, op.name as name, op_c.category_c as cat ,op.date_closed as date, op.amount as amount, assigned_user_id,  ap.account_id  as idacc 
  from opportunities as op  inner join opportunities_cstm as op_c on op_c.id_c=op.id inner join accounts_opportunities as ap on ap.opportunity_id = op.id
 where release_payment_c ='%s' and op.deleted=0   and ap.deleted=0
 and (assigned_user_id in (%s) or assigned_user_id in (%s))   and  op.date_closed >= '%s' and op.date_closed <= '%s' order by assigned_user_id ",$_POST["release_payment_c"],$query_n3,$query_pn3,formatDate($_POST["start"]),formatDate($_POST["due"]));
$result = mysql_query($query);

while ($row = mysql_fetch_assoc($result)) { ?>
<?php $remanente=get_ids_boss($row['oppid']); ?>
<TR>
<TD scope="row"><?php echo $ii++; ?></TD>
<TD scope="row"><?php echo consulta_id($row['assigned_user_id']); ?></TD>

<TD scope="row"><?php echo $monto_total=  number_format($row['amount'],2,".","")?></TD>
<TD scope="row"><?php echo $row['date'];?></TD>
<TD scope="row"><a href="index.php?module=Accounts&offset=1&stamp=1323358236061315000&return_module=Accounts&action=DetailView&record=<?php echo $row['idacc'];?> " target="_blank">
 <?php echo cuenta($row['idacc']);?></a> </TD>

<TD scope="row"><a href="index.php?module=Opportunities&offset=1&stamp=1300318362048257100&return_module=Opportunities&action=DetailView&record=
<?php echo $row['oppid'];?> " target="_blank"> <?php echo utf8_encode($row['name']);?> </a> </TD>
<TD scope="row"><?php echo $cat_ = $row['cat'];  ?></TD>
<?php if($hidden_style== 1){ ?>

<TD scope="row"><?php echo consulta_com('commission_corp_c',$cat_);?></TD>
<TD scope="row"><?php echo $monto_sifei= number_format($monto_total *(float)consulta_com('commission_corp_c',$cat_)/100,2,".","");?></TD>

<TD scope="row"><?php echo consulta_com('commission_franquicia_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_franq=number_format($monto_total *(float)consulta_com('commission_franquicia_c',$cat_)/100,2,".",""); ?></TD>

<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_)!=0){echo $red=number_format(8 - $remanente,2,".","");}else{ echo $red=number_format(0,2,".","");}?></TD>
<TD scope="row"><?php echo $monto_red=number_format(($monto_total *(float)$red )/100,2,".",""); ?></TD>

<TD scope="row"><? if(consulta_com('commission_net_c',$cat_ ) !=0) { echo number_format($remanente,2,".","");}else {echo number_format($remanente=0,2,".","");}?></TD>
<TD scope="row"><?php if(consulta_com('commission_net_c',$cat_ ) !=0) {echo $monto_rem= number_format($monto_total *$remanente/100,2,".","");}else {echo number_format($monto_rem=0,2,".","");}?></TD>

<TD scope="row"><?php echo consulta_com('commission_dist_c',$cat_); ?></TD>
<TD scope="row"><?php echo $monto_ind= number_format($monto_total *(float)consulta_com('commission_dist_c',$cat_)/100,2,".","");  ?></TD>
<?php } ?>

<TD scope="row"><?php  if($cat_=="Creditos"){ echo $directo ="2.00";}else{ echo $directo = "0.00";}  ?></TD>
<TD scope="row"><?php echo $monto_dist= number_format($monto_total * (float) $directo/100,2,".","");  ?></TD>
</TR>     
<?
$total_sifei = $total_sifei + $monto_sifei;
$total_franq = $total_franq + $monto_franq;
$total_red = $total_red + $monto_red;
$total_rem = $total_rem + $monto_rem;
$total_ind = $total_ind + $monto_ind ;
$total_dist = $total_dist + $monto_dist; 
$total_total = $total_total + $monto_total;
} ?> 
</TBODY>
</TABLE> 
</div>


<?
echo "<br>"."<br>" ;?>


<table width="100%" border="0" cellpadding="10" cellspacing="1" class="edit view">
<tbody><tr>
<th colspan="8" align="left">
<h4>Totales</h4>

</th>
</tr>
<?php if($hidden_style== 1){ ?>

<tr>
<td id="amount_sifei_c_label" scope="row" valign="top" width="0%">
Monto SIFEI:
</td>
<td valign="top" width="0%">
<input name="amount_sifei_c" id="amount_sifei_c" size="30" maxlength="" value="<? echo   number_format($total_sifei,2);?>" title="" tabindex="107" type="text"> 
</td><td id="amount_fraq_c_label" scope="row" valign="top" width="0%">
Monto Franquicia:
</td>
<td valign="top" width="0%">
<input name="amount_fraq_c" id="amount_fraq_c" size="30" maxlength="" value="<? echo  number_format($total_franq,2);  ?>" title="" tabindex="108" type="text"> 
</td></tr>
<?php } ?>

<tr>
<td id="amount_dist_c_label" scope="row" valign="top" width="0%">
Monto Vendedor:
</td>
<td valign="top" width="0%">
<input name="amount_dist_c" id="amount_dist_c" size="30" maxlength="" value="<? echo  number_format($total_dist,2); ?>" title="" tabindex="109" type="text"> 
</td>
<?php if($hidden_style== 1){ ?>

<td id="amount_net_c_label" scope="row" valign="top" width="0%">
Monto Red:
</td>
<td valign="top" width="0%">
<input name="amount_net_c" id="amount_net_c" size="30" maxlength="" value="<? echo  number_format($total_red,2); ?>" title="" tabindex="110" type="text"> 
</td></tr>

<tr>
<td id="amount_" scope="row" valign="top" width="0%">
Monto Fuerza de Ventas:
</td>
<td valign="top" width="0%">
<input name="remainder_franq_c" id="remainder_franq_c" size="30" maxlength="" value="<? echo  number_format($total_ind,2); ?>" title="" tabindex="108" type="text"> 

</td>
<td id="amount_" scope="row" valign="top" width="0%">
Remanente de Franquicia:
</td>
<td valign="top" width="0%">
<input name="remainder_franq_c" id="remainder_franq_c" size="30" maxlength="" value="<? echo  number_format($total_rem,2); ?>" title="" tabindex="108" type="text"> 
</td></tr>

<tr>
<td id="amount_" scope="row" valign="top" width="0%">
Suma de Conceptos:
</td>
<td valign="top" width="0%">
<input  id="suma_c" size="30" maxlength="" value="<?  $total_total2=$total_sifei+ $total_franq +$total_rem +$total_red+$total_ind +$total_dist; echo number_format($total_total2,2); ?>" title="" tabindex="108" type="text"> 
</td>

<td id="remainder_franq_c_label" scope="row" valign="top" width="0%">
SUMA de OPORTUNIDADES:
</td>
<td valign="top" width="0%">
<input name="amount_" id="amount_dist_c" size="30" maxlength="" value="<? echo number_format($total_total,2);?>" title="" tabindex="109" type="text"> 
</td>
</tr>
<?php } ?>

</tbody></table>
</div>


<? mysql_free_result($result);}} mysql_close($cnx);  ?>	


 

