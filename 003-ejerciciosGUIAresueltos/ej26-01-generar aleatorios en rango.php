<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Generaci&oacute;n de aleatorios en rango</title>
</head>
<body>
	<h2>Generando aleatorios dentro de un rango</h2>

	<?php

	if ( isset($_POST["control"])) {    // en este caso preguntamos por la variable oculta
		//
		//	if (isset($_POST["boton"])) {       // en este caso preguntamos por el boton
		//
		$valor_minimo = (int)$_POST["minimo"];
		$valor_maximo = (int)$_POST["maximo"];
		$cantidad = (int)$_POST["cantidad"];

		if ($cantidad == 0)
			die("Debe introducir un n&uacute;mero de elementos mayor que 0");

		if ($valor_maximo <= $valor_minimo)
			die("El valor m&aacute;ximo no puede ser menor o igual que el m&iacute;nimo");

		for ($i = 1; $i <= $cantidad; $i++ ) {
		echo mt_rand($valor_minimo, $valor_maximo). "<br />";
	}
	}
else { ?>
	<FORM ACTION="ej26-01-generar aleatorios en rango.php" METHOD=POST>
		<table align="center" border="0">
			<tr>
				<td align="left" width="100">Valor m&iacute;nimo:</td>
				<td align="center" width="150"><INPUT NAME="minimo" MAXLENGTH="25"
					TYPE="TEXT" VALUE=""></td>
			</tr>
			<tr>
				<td align="left" width="100">Valor m&aacute;ximo:</td>
				<td align="center" width="150"><INPUT NAME="maximo" MAXLENGTH="25"
					TYPE="TEXT" VALUE=""></td>
			</tr>
			<tr>
				<td align="left" width="100">Cantidad de n&uacute;meros a generar:</td>
				<td align="center" width="150"><INPUT NAME="cantidad" MAXLENGTH="25"
					TYPE="TEXT" VALUE=""></td>
			</tr>
			<tr>
				<td widht="100"></td>
				<td align="right" width="150"><INPUT NAME="boton" TYPE="SUBMIT"
					VALUE="Enviar">
				</td>
			</tr>
		</TABLE>
		<INPUT NAME="control" MAXLENGTH="25" TYPE="hidden" VALUE="1">
	</FORM>

	<?php
}
?>
</body>
</html>
