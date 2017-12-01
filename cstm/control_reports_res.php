<?php
include_once("../cnx.php");
 
$cnx = mysql_connect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db($database, $cnx);

$report = sprintf("select query_c from cstm_reports inner join cstm_reports_cstm on id=id_c where deleted=0 and id ='%s'",$_GET["record"]);
$result_report = mysql_query($report);
$array_report = mysql_fetch_assoc($result_report);


$param = sprintf("select name,value_c from cstm_parameters inner join cstm_parameters_cstm on cstm_parameters.id =cstm_parameters_cstm.id_c 
inner join cstm_reportm_parameters_c on cstm_reportm_parameters_c.cstm_reporb7cdameters_idb=cstm_parameters.id where cstm_parameters.deleted=0 and 
cstm_reportm_parameters_c.deleted=0 and cstm_reportm_parameters_c.cstm_repor0b1breports_ida='%s'",$_GET["record"]);
$result_param = mysql_query($param);

$newphrase = $array_report['query_c'];
while ($row = mysql_fetch_assoc($result_param)) {
$newphrase = str_replace($row['name'], $row['value_c'], $newphrase);
}

//echo $newphrase;

$result = mysql_query($newphrase); 
if (($result)||(mysql_errno == 0))
{
echo '<link rel="stylesheet" type="text/css" href="../cache/themes/Sugar5/css/style.css"/>';
echo '<table width="100%"  ALIGN="rigth"  cellspacing="0" cellpadding="0" border="1" class="list view">
                <tbody><tr>';
  if (mysql_num_rows($result)>0)
  {
          //loop thru the field names to print the correct headers
          $i = 0;
          while ($i < mysql_num_fields($result))
          {
       echo "<th nowrap='nowrap' scope='col'>". mysql_field_name($result, $i) . "</th>";
       $i++;
    }
    echo "</tr>";
   
    //display the data
    while ($rows = mysql_fetch_array($result,MYSQL_ASSOC))
    {
      echo "<tr  height='20' class='evenListRowS1' >";
      foreach ($rows as $data)
      {
        echo "<td  align='left' valign='top' scope='row'>".($data) . "</td>";
      }
    }
  }else{
    echo "<tr><td colspan='" . ($i+1) . "'>Sin Resultados!</td></tr>";
	setcookie("sessidCookie", $_COOKIE['ck_login_id_20']);
	header( 'Location: '.$array_report["query_c"] ) ;
  }
  echo "</tbody></table>";
}else{
  echo "Error in running query :". mysql_error();
}
mysql_close($cnx);
?>
