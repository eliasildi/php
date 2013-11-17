<?php
if (isset($_POST['boton1']) or isset($_POST['boton2']) )
{
	$num1 = $_POST
	['numero1'];
	$num2 = $_POST
	['numero2'];
	$num3 = $_POST
	['numero3'];
	$num4 = $_POST
	['numero4'];
	
	if (isset($_POST['boton1']) )
	 {
	 	$resultado1= decbin ($num1);
	 	$resultado2= decbin ($num2);
	 	$resultado3= decbin ($num3);
	 	$resultado4= decbin ($num4);
	 }
	 
	 if (isset($_POST['boton2']) )
	 {
	 	$resultado1= bindec ($num1);
	 	$resultado2= bindec ($num2);
	 	$resultado3= bindec ($num3);
	 	$resultado4= bindec ($num4);
	 }
	 	
}
?>


<!DOCTYPE HTML>
<html lang="es-ES">
<head>
<meta charset="UTF-8">

</head>
<body>
<H2>Pasar Decimal/Binario</H2>
<form action="decimalbinario.php" method="POST">
<table>

<tr>
	
<td><b>Decimal o Binario</b>  <input type="text" name="numero1" value="<?php if (isset ($num1)){echo $num1;} else {echo "";} ?>"><b>.</b></td>
<td><input type="text" name="numero2" value="<?php if (isset ($num2)){echo $num2;} else {echo "";} ?>"><b>.</b></td>
<td><input type="text" name="numero3" value="<?php if (isset ($num3)){echo $num3;} else {echo "";} ?>"><b>.</b></td>
<td><input type="text" name="numero4" value="<?php if (isset ($num4)){echo $num4;} else {echo "";} ?>"></td>
</tr>
</br>

<td><b>Binario o Decimal</b>   <input type="text" name="resultado" value="<?php if (isset($resultado1)) {echo($resultado1);} else {echo '';} ?>" disabled="disabled" /><b>.</b></td>
<td><input type="text" name="resultado" value="<?php if (isset($resultado2)) {echo($resultado2);} else  {echo '';}?>" disabled="disabled" /><b>.</b></td>		
<td><input type="text" name="resultado" value="<?php if (isset($resultado3)) {echo($resultado3);} else  {echo '';}?>" disabled="disabled" /><b>.</b></td>
<td><input type="text" name="resultado" value="<?php if (isset($resultado4)) {echo($resultado4);} else  {echo '';}?>" disabled="disabled" /></td> 

<tr><td> <input name ="boton1" type="submit" value="Pasar DB"></td>
<td> <input name ="boton2" type="submit" value="Pasar BD"></td></tr>
</table>
</form>
</body>
</html>
