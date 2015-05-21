<?php

define('INCLUDE_CHECK',1);
require "connect.php";

if(!$_POST)
{
	if($_SERVER['HTTP_REFERER'])
	header('Location : '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carrito</title>

<link rel="stylesheet" type="text/css" href="estilos.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js.txt"></script>


<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div id="main-container">

    <div class="container">
    
    	<span class="top-label">
            <span class="label-txt">Factura</span>
        </span>
        <span class="top-label">
            <span class="label-txt"><a href="index.php">Retornar</a></span>
        </span>
        
        <div class="content-area">
    
    		<div class="content">
            	
                <?php
				
				$cnt = array();
				$products = array();
				
				foreach($_POST as $key=>$value)
				{
					$key=(int)str_replace('_cnt','',$key);
				
					$products[]=$key;
					$cnt[$key]=$value;
				}

				$result = mysql_query("SELECT * FROM carrito WHERE id IN(".join($products,',').")");
				
				if(!mysql_num_rows($result))
				{
					echo '<h1>Hi ha un error a la compra!</h1>';
				}
				else
				{ 
					echo '<h1>La teva compra:</h1>';
					
					while($row=mysql_fetch_assoc($result))
					{
						echo '<h2>'.$cnt[$row['id']].' x '.$row['nom']." = ".$row['preu'].'</h2>';
						
						@$total += $cnt[$row['id']]*$row['preu'];
					}
		
					echo '<h1>Total: '.$total.'€</h1>';
				}
				?>
				
                
                
       	        <div class="clear"></div>
				<input type="Button" onclick="window.location.href='pagament.html'" value="Pagar"/>
            </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>

</div>

</body>
</html>
