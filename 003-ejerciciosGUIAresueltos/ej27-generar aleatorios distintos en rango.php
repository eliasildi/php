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

	//  Este ejemplo es una modificación del ejercicio anterior
	//  en este caso los números aletorios que se muestren
	//  deben ser distintos.
	//
	//  Siendo así se debe utilizar un array para ir guardando
	//  los números aleatorios que se van generando.
	//
	//  El otro control que se debe realizar es que la cantidad
	//  de números aleatorios que se pidan generar debe ser posible
	//  con los datos del rango suministrado.

	if ( isset($_POST["control"])) {    // en este caso preguntamos por la variable oculta
		$valor_minimo = (int)$_POST["minimo"];
		$valor_maximo = (int)$_POST["maximo"];
		$cantidad = (int)$_POST["cantidad"];

		if ($cantidad == 0)
			die("Debe introducir un n&uacute;mero de elementos mayor que 0");

		if ($valor_maximo <= $valor_minimo)
			die("El valor m&aacute;ximo no puede ser menor o igual que el m&iacute;nimo");

		// la nueva verificación a realizar

		if ( ($valor_maximo - $valor_minimo + 1) < $cantidad )
			die("La cantidad de n&uacute;meros solicitada no se puede generar dentro del rango indicado");

		$aleatorios = array();

		for ($i = 0; $i < $cantidad; $i++ ) {
		do {
			$valor_generado = mt_rand($valor_minimo, $valor_maximo);
		} while (in_array($valor_generado, $aleatorios) );
		$aleatorios[$i] = $valor_generado;
	}

	// mostrar los números por pantalla

	for ($i = 0; $i < $cantidad; $i++ ) {
		echo $aleatorios[$i]. "<br />";
	}
	}
else { ?>
	<FORM ACTION="ej27-generar aleatorios distintos en rango.php"
		METHOD=POST>
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
