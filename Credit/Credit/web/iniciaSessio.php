<?php include("menu.php") ?>
<link href="../css/login-box.css" rel="stylesheet" type="text/css" />
<body>
<div style="padding: 100px 0 0 250px;">
<div id="login-box">
<H2>Inicia Sessió</H2>

<br />
<br />
<form action="login.php" method="POST">
<div id="login-box-name" style="margin-top:20px;">Usuari:</div><div id="login-box-field" style="margin-top:20px;"><input name="usuari" class="form-login" title="usuari" value="" size="30" maxlength="2048" /></div>
<div id="login-box-name">Contrasenya:</div><div id="login-box-field"><input name="password" type="password" class="form-login" title="password" value="" size="30" maxlength="2048" /></div>
<br />
<input type="submit" width="103" height="42" style="margin-left:90px;" name="login" value="Login" /> 
</form>
</div>
</div>
<?php include("footer.php") ?>



