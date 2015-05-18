<?php 
session_start();
//error_reporting(E_ALL);
//@ini_set('display_errors', '1');
//con session_start() creamos la sesión si no existe o la retomamos si ya ha sido creada
extract($_REQUEST);
//la función extract toma las claves de una matriz asoiativa y las convierte en nombres de variable,
//asignándoles a esas variables valores iguales a los que tenía asociados en la matriz. Es decir, convierte a $_GET['id'] en $id,
//sin que tengamos que tomarnos el trabajo de escribir $id=$_GET['ID']; 
mysql_connect("localhost","root","");
mysql_select_db("prova");
//incluímos la conexión a nuestra base de datos
if(!isset($cantidad)){$cantidad=1;}
//Como también vamos a usar este archivo para actualizar las cantidades,
//hacemos que cuando la misma no esté indicada sea igual a 1
$qry=mysql_query("select * from catalogo where id='".$id."'");
$row=mysql_fetch_array($qry);
//Si ya hemos introducido algún producto en el prova lo tendremos guardado temporalmente
//en el array superglobal $_SESSION['prova'], de manera que rescatamos los valores de dicho array
//y se los asignamos a la variable $prova, previa comprobación con isset de que $_SESSION['prova']
//ya haya sido definida
if(isset($_SESSION['prova']))
$prova=$_SESSION['prova'];
//Ahora introducimos el nuevo producto en la matriz $prova, utilizando como índice el id del producto
//en cuestión, encriptado con md5. Utilizamos md5 porque genera un valor alfanumérico que luego,
//cuando busquemos un producto en particular dentro de la matriz, no podrá ser confundido con la posición
//que ocupa dentro de dicha matriz, como podría ocurrir si fuera sólo numérico.
//Cabe aclarar que si el producto ya había sido agregado antes, los nuevos valores que le asignemos reemplazarán
//a los viejos. 
//Al mismo tiempo, y no porque sea estrictamente necesario sino a modo de ejemplo, guardamos más de un valor 
//en la variable $prova, valiéndonos de nuevo de la herramienta array.
$prova[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id);
//Ahora dentro de la sesión ($_SESSION['prova']) tenemos sólo los valores que teníamos (si es que teníamos alguno) antes de ingresar
//a esta página y en la variable $prova tenemos esos mismos valores más el que acabamos de sumar. De manera que 
//tenemos que actualizar (reemplazar) la variable de sesión por la variable $prova.
$_SESSION['prova']=$prova;
//Y volvemos a nuestro catálogo de artículos. La cadena SID representa al identificador de la sesión, que, dependiendo 
//de la configuración del servidor y de si el usuario tiene o no activadas las cookies puede no ser necesario pasarla por la url.
//Pero para que nuestro prova funcione, independientemente de esos factores, conviene escribirla siempre.
header("Location:catalogo.php?".SID);
?>