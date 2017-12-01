<?php
function create_guid()
{
	$microTime = microtime();
	list($a_dec, $a_sec) = explode(" ", $microTime);

	$dec_hex = dechex($a_dec* 1000000);
	$sec_hex = dechex($a_sec);

	ensure_length($dec_hex, 5);
	ensure_length($sec_hex, 6);

	$guid = "";
	$guid .= $dec_hex;
	$guid .= create_guid_section(3);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= create_guid_section(4);
	$guid .= '-';
	$guid .= $sec_hex;
	$guid .= create_guid_section(6);

	return $guid;

}
function create_guid_section($characters)
{
	$return = "";
	for($i=0; $i<$characters; $i++)
	{
		$return .= dechex(mt_rand(0,15));
	}
	return $return;
}

function ensure_length(&$string, $length)
{
	$strlen = strlen($string);
	if($strlen < $length)
	{
		$string = str_pad($string,$length,"0");
	}
	else if($strlen > $length)
	{
		$string = substr($string, 0, $length);
	}
}

function clean($theValue)
{
	$theValue=trim($theValue); // $theValue=utf8_decode($theValue);

	if (PHP_VERSION < 6) {
		
		$theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;

		}

	$theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);
	$vowels = array('\"');
	$theValue = str_replace($vowels,"", $theValue);

	return $theValue;
}

 

?>
