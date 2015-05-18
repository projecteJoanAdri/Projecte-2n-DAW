<?php

$conn = new mysqli("localhost","root","","bikejoanadri");

$query = ("SELECT * FROM usuari");
$result = mysqli_query($conn,$query);

?> 