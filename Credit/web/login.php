<?php 
require 'connexio.php';

session_start();

if (isset($_POST['login']))
{
	$usuari_entrat = $_POST['usuari'];
	$pass_entrat = $_POST['password'];
	
	$user_ok = $conn->query("SELECT * FROM usuari where usuari = '$usuari_entrat'");
	$pass_ok = $conn->query("SELECT * FROM usuari where contrasenya = '$pass_entrat'");
	
	if ($user_ok->num_rows>0 && $pass_ok->num_rows>0)
	{
		echo "Benvingut " . $_POST['usuari'];
		
	}
	else
	{
		echo "Error!";
		
	}
}
?> 