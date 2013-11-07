<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Calculadora Ver 1 Resultado en otra p&aacute;gina</p>
	<?php

	// es este caso los resultados se muestran en una página aparte

	if ( isset($_POST['enviado']) )
	{

		$num1 = (float)( $_POST["num1"] );
		$num2 = (float)( $_POST["num2"] );
		if ( strcmp($_POST["oper"], "s" ) == 0 )
			$resultado = $num1 + $num2;
		elseif ( strcmp($_POST["oper"], "r" ) == 0 )
		$resultado = $num1 - $num2;
		elseif ( strcmp($_POST["oper"], "m" ) == 0 )
		$resultado = $num1 * $num2;
		elseif ( strcmp($_POST["oper"], "d" ) == 0 )
		$resultado = (float)($num1 / $num2); //división
		elseif ( strcmp($_POST["oper"], "mo" ) == 0 )
		$resultado = (int)($num1 % $num2);
		elseif ( strcmp($_POST["oper"], "p" ) == 0 )
		$resultado = (float)($num1 * ($num2 / 100.0));
		elseif ( strcmp($_POST["oper"], "toeuro" ) == 0 )
		$resultado = (float)($num1 / 166.386);
		else
			$resultado = (float)($num1 * 166.386);
		printf ("El resultado es %.2f<br />", $resultado);
	}
	// en el metodo POST los valores están en el array $_POST[]
	else
{ ?>
	<!-- aquí va el formulario -->

	<FORM ACTION="ej34-01-calculadora_dos_operandos.php" METHOD=POST>
		<table>
			<tr>
				<td>Operando 1: <INPUT NAME="num1" size="6" MAXLENGTH="6"
					TYPE="TEXT" VALUE="" /><br /> Operando 2: <INPUT NAME="num2"
					size="6" MAXLENGTH="6" TYPE="TEXT" VALUE="" /><br /> <br /> <br />
				</td>
				<td>Suma <INPUT TYPE="radio" NAME="oper" VALUE="s" checked="checked" /><br />
					Resta <INPUT TYPE="radio" NAME="oper" VALUE="r" /><br />
					Multiplicaci&oacute;n <INPUT TYPE="radio" NAME="oper" VALUE="m" /><br />
					Divisi&oacute;n <INPUT TYPE="radio" NAME="oper" VALUE="d" /><br />
					M&oacute;dulo <INPUT TYPE="radio" NAME="oper" VALUE="mo" /><br />
					Porcentaje <INPUT TYPE="radio" NAME="oper" VALUE="p" /><br /> Pasar
					a € <INPUT TYPE="radio" NAME="oper" VALUE="toeuro" /><br /> Pasar
					a Ptas. <INPUT TYPE="radio" NAME="oper" VALUE="topta" /><br />
				</td>
			</tr>
			<tr align="center">
				<td colspan="2"><INPUT NAME="boton1" TYPE="SUBMIT" VALUE="Calcular">
					<INPUT NAME="boton2" TYPE="RESET" VALUE="Borrar"><br />
				</td>
			</tr>

		</table>
		<input type="hidden" name="enviado" value="1" />
	</FORM>
	<?php	
}
?>
</body>
</html>
