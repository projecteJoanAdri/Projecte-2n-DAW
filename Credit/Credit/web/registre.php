<?php

require "connexio.php";

$sql = "INSERT INTO usuari (nom,cognom,usuari,contrasenya,email,poblacio) 
		VALUES ('".$_POST['nom']."','".$_POST['cognom']."','".$_POST['usuari']."','".$_POST['contrasenya']."','".$_POST['email']."','".$_POST['poblacio']."')";
$resultat = mysqli_query($conn,$sql);

header("Location: index.php");

?> 
