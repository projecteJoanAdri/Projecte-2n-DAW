<?php

/*require "class.phpmailer.php";
require "class.smtp.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "bikejoanadri@gmail.com";
$mail->Password = "ASdf1234";
$mail->SetFrom = $_POST['email']; 
$mail->AddAddress('bikejoanadri@gmail.com');
$mail->Subject = $_POST['tema'];
$mail->AltBody = $_POST['missatge'];

if(!$mail->Send())
{
	echo "Error: "; 
}
else
{
	echo "Enviat";
}
*/

require "connexio.php";

$sql = "INSERT into contacta(tema,email,missatge)
		VALUES('".$_POST['tema']."','".$_POST['email']."','".$_POST['missatge']."')";
$insereix = mysqli_query($conn,$sql);
?> 
<a href="index.php">Index</a>