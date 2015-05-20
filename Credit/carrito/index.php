<?php

define('INCLUDE_CHECK',1);
require "connect.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>carrito compras php mysql css ajax | markapp</title>

<link rel="stylesheet" type="text/css" href="estilos.css" />

<!--[if lt IE 7]>
<style type="text/css">
	.pngfix { behavior: url(pngfix/iepngfix.htc);}
    .tooltip{width:200px;};
</style>
<![endif]-->


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="simpletip/jquery.simpletip-1.3.1.pack.js"></script>


<script type="text/javascript" src="script.js"></script>

</head>

<body>

<div id="main-container">

	<div class="tutorialzine">
    <h1>Carro de compras con php, mysql, css3 y ajax</h1>
    <br/><br/><br/><br/><br/><br/>
    
    </div>


    <div class="container primero">
    
    	<span class="top-label">
            <span class="label-txt">Canasta</span>
        </span>
        
        <div class="content-area">
    
    		<div class="content drag-desired">
            	
                <?php

				$result = mysql_query("SELECT * FROM carrito");
				while($row=mysql_fetch_assoc($result))
				{
					echo '<div class="product"><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="128" height="128" class="pngfix" />
                            <h2>'.$row['name'].'</h2><h2>'.$row['price'].'</h2> 
                    </div>';
				}

				?>
                
                
       	        <div class="clear"></div>
            </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>



    <div class="container segundo">
    
    	<span class="top-label">
            <span class="label-txt">Compra</span>
        </span>
        
        <div class="content-area">
    
    		<div class="content drop-here">
            	<div id="cart-icon">
	            	<img src="img/Shoppingcart_128x128.png" alt="shopping cart" class="pngfix" width="128" height="128" />
					<img src="img/ajax_load_2.gif" alt="loading.." id="ajax-loader" width="16" height="16" />
                </div>

				<form name="checkoutForm" method="post" action="order.php">
                
                <div id="item-list">
                </div>
                
				</form>                
                <div class="clear"></div>

				<div id="total"></div>

       	        <div class="clear"></div>
                
                <a href="" onclick="document.forms.checkoutForm.submit(); return false;" class="button">Comprar</a>
                
          </div>

        </div>
        
        <div class="bottom-container-border">
        </div>

    </div>

	<div class="tutorial-info">	
       <a href="http://markapp.com.co/tuto/carrito/">Tutoriales markapp</a>,Fernando Ortiz.</div>

</div>

</body>
</html>
