<?php

define('INCLUDE_CHECK',1);
require "../connect.php";

if(!$_POST['img']) die("There is no such product!");

$img=mysql_real_escape_string(end(explode('/',$_POST['img'])));
$row=mysql_fetch_assoc(mysql_query("SELECT * FROM carrito WHERE img='".$img."'"));

echo json_encode(array(
	'status' => 1,
	'id' => $row['id'],
	'preu' => (float)$row['preu'],
	'txt' => '<table width="100%" id="table_'.$row['id'].'">
  <tr>
    <td width="60%">'.$row['nom'].'</td>
    <td width="10%">$'.$row['preu'].'</td>
    <td width="15%"><select name="'.$row['id'].'_cnt" id="'.$row['id'].'_cnt" onchange="change('.$row['id'].');">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option></slect>
	
	</td>
	<td width="15%"><a href="#" onclick="window.remove('.$row['id'].');return false;" class="remove">Eliminar</a></td>
  </tr>
</table>'
));

?>
