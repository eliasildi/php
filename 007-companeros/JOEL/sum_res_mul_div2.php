<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
		<head>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<title>Programaci&oacute;n en PHP</title>
		</head>
		<body>

		<center><h4><b>Ejercicio Joel Chávez Perdomo</b></h4></center><br />

		<?php

		if (isset($_POST["sumar"])) {

			$sumar=$_POST["sumar"];
			$n1=$_POST["n1"];
			$n2=$_POST["n2"];
			$resultado=$n1+$n2;

		}
		
		if (isset($_POST["restar"])) {
		
			$restar=$_POST["restar"];
			$n1=$_POST["n1"];
			$n2=$_POST["n2"];
			$resultado=$n1-$n2;
		
		}
		
		


		?>

<FORM ACTION="sum_res_mul_div2.php" METHOD=POST>
<table style="border:1px solid black; border-collapse:collapse; text-align:center;" align="center">

		<tr>
			<td>Primer Numero |</td>
			<td>Segundo Numero |</td>
			<td>Resultado</td>
		</tr>
		
		<tr>
			<td><INPUT size="3" NAME="n1" TYPE="TEXT" VALUE="<?php if (isset($sumar)) { echo $n1; } elseif (isset($restar)) { echo $n1; } else { echo ""; }?>"></td>
			<td><INPUT size="3" NAME="n2" TYPE="TEXT" VALUE="<?php if (isset($sumar)) { echo $n2; } elseif (isset($restar)) { echo $n2; } else { echo ""; }?>"></td>
			<td><INPUT size="3" NAME="" TYPE="TEXT" VALUE="<?php if (isset($sumar)) { echo $resultado; } elseif (isset($restar)) { echo $resultado; } else { echo ""; }?>" disabled="disabled"></td>
		</tr>
		
		<tr>
			<td colspan="3" align="center">
			<INPUT NAME="sumar" TYPE="SUBMIT" VALUE="+">
			<INPUT NAME="restar" TYPE="SUBMIT" VALUE="-">
			</td>
		</tr>
	

</table>
</FORM>



</body>
</html>






<?php 
		
//		<INPUT NAME="multiplicar" TYPE="SUBMIT" VALUE="*">
//		<INPUT NAME="dividir" TYPE="SUBMIT" VALUE="/">

?>