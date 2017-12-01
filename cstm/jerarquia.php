<html>
<head>
<title>Fuerza de ventas</title>
<link href="dropdown.vertical.css" media="all" rel="stylesheet" type="text/css" />
<link href="default.css" media="all" rel="stylesheet" type="text/css" /> 
</head>
<body>
<?php
include("../cnx.php");

$conn = mysql_connect($hostname, $username, $password) or die ('Error connecting to mysql');
mysql_select_db($database);
  

 
 
 function dependientes($asignado = '1') {

 	$lista = '<ul id="nav2" class="dropdown dropdown-vertical" >';
		
		$sql = sprintf("select id, user_name, reports_to_id, level_c from users inner join users_cstm on id = id_c where deleted = 0 and employee_status = 'Active' and reports_to_id ='%s'  ", $asignado);
		$q = mysql_query($sql);
 
 		while ($r = mysql_fetch_assoc($q))  {


        $lista .= '<li><a href="#">' . $r['user_name'] . ' '. $r['level_c'] .'</a>' ;
 
         
	 $tiene_dependientes = null;
 
         $sql = sprintf("SELECT COUNT(id) FROM users WHERE reports_to_id = '%s'", $r['id']);
          $tiene_dependientes = mysql_num_rows(mysql_query($sql));
 
        if ($tiene_dependientes) {
		
            
        $lista .= dependientes($r['id']);
			
        }
 
         $lista .= '</li>';
    }
 
     $lista .= '</ul>';
       return $lista;
	
	}
	
	echo dependientes();
		
?>
</body>
</html>
