<?php 

include("../cnx.php");
 

if(isset($_POST["edo"])){

$cnx = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database, $cnx);

$query_ciudades = "SELECT distinct(d_ciudad), d_ciudad FROM sepomex WHERE d_estado like '%".utf8_encode($_POST["edo"])."%'  ORDER BY d_ciudad";
$rs=mysql_query($query_ciudades);

echo '<select name="address_city" id="address_city"  >';
while($dato= mysql_fetch_assoc($rs)){


echo '<option value="'.utf8_decode($dato["d_ciudad"]).'">'.utf8_decode($dato["d_ciudad"]).'</option>';

}
echo '</select>';
}

mysql_close($cnx);
?>
