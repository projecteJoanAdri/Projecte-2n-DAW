<?php

if(!defined('INCLUDE_CHECK')) die('error en el directorio');


/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'carrito'; 

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('no hay conexion a la base de datos');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>