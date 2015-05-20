<?php include("menu.php") ?>
<link href="../css/style.css" media="screen" rel="stylesheet"/>


<body>
<center>
<form id="contact_form" action="contactar.php" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Tema:</label><br />
		<input id="name" class="input" name="tema" id="tema" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">E-mail:</label><br />
		<input id="email" class="input" name="email" id="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Missatge:</label><br />
		<textarea id="message" class="input" name="missatge" id="missatge" rows="7" cols="30"></textarea><br />
		
		<input id="submit_button" type="submit" value="Enviar" name="enviar" />
	</div>
<p>Telefon: 972454678</p>
<p>Mobil: 657867872</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2972.9148897293862!2d2.8996832!3d41.8301308!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x49b46035a45adf59!2sRadikal+Bikes!5e0!3m2!1ses!2ses!4v1431365314243" width="600" height="450" frameborder="0" style="border:0"></iframe>
</form>
</center>
</body>	
<?php include("footer.php") ?>


