<?php include("menu.php") ?>
<link href="../css/style.css" media="screen" rel="stylesheet"/>
<meta charset="utf-8">
<title>Formulari de registre</title>
<div class="group">
<center> 
  <form action="registre.php" method="POST">
  <h2>Formulari de registre</h2>  
     
      <label for="nom">Nom</label>
      <input type="text" name="nom" class="form-input" required/><br> <br> 
      
      <label for="cognom">Cognom</label>
      <input type="text" name="cognom" class="form-input" required/><br> <br> 

	<label for="usuari">Usuari</label>
      <input type="text" name="usuari" class="form-input" required/><br> <br> 

	<label for="contrasenya">Contrasenya</label>
      <input type="text" name="contrasenya" class="form-input" required/><br> <br>   
      
      <label for="email">Email</label>
      <input type="email" name="email" class="form-input" /><br> <br> 
	  
	  <label for="poblacio">Poblacio</label>
      <input type="text" name="poblacio" class="form-input" required/> <br> <br>  
     <center> <input class="form-btn" name="submit" type="submit" value="Registrar-se" /></center>
    </p>
  </form>
</div>

<?php include("footer.php") ?>