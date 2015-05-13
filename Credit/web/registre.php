<?php
$db_host="localhost";
$db_usuari="nombre_de_usuario";
$contrasenya="contrasenyaa";
$db_nom="nombre_de_base_de_datos";
$db_taula_nom="nombre_de_tabla";
   $db_connection = mysql_connect($db_host, $db_usuari, $db_contrasenya);
 
if (!$db_connection) {
	die('No s'ha pogut connectar a la base de dades');
}
$subs_nom = utf8_decode($_POST['nom']);
$subs_cognom = utf8_decode($_POST['cognom']);
$subs_usuari = utf8_decode($_POST['usuari']);
$subs_contrasenya = utf8_decode($_POST['contrasenya']);
$subs_email = utf8_decode($_POST['email']);
$subs_poblacio = utf8_decode($_POST['poblacio']);
 
$resultat=mysql_query("SELECT * FROM ".$db_taula_nom." WHERE Email = '".$subs_email."'", $db_connection);
 
if (mysql_num_rows($resultat)>0)
{
 
header('Location: Fail.html');
 
} else {
	
	$insert_value = 'INSERT INTO `' . $db_nom . '`.`'.$db_taula_nom.'` (`Nom` , `Cognom` , `Usuari`,`Contrasenya`,`email`,`poblacio`) VALUES ("' . $subs_nom . '", "' . $subs_cognom . '", "' . $subs_usari . '","' . $subs_contrasenya . '", "' . $subs_email . '", "' . $subs_poblacio . '")';
 
mysql_select_db($db_nom, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);
 
if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: Success.html');
}
 
mysql_close($db_connection);
		
?>