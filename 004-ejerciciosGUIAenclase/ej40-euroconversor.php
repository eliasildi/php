<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Euroconversor</p>
	<?php
		// ISSET VERIFICA SI UNA VARIABLE TIENE ALGUN VALOR
	if ( isset($_GET['boton_a_euro']) ) { // procesa el formulario SI HAN EXO CLICK EN ESE BOTON ENTONCES:

		$importe_pta = (float)$_GET['cantidad']; // el float pasa a decimal el dato obtenido
		$importe_euro = $importe_pta / 166.386;
		printf ("%.2f pesetas son %.2f euros<br />", $importe_pta, $importe_euro);
	}
	elseif ( isset($_GET['boton_a_pta']) ) { // procesa el formulario SI HAN EXO CLICK EN ESE BOTON ENTONCES

	$importe_euro = (float)$_GET['cantidad']; // LO QUE HAN PUESTO LO PASAMOS A NUMEROS Y LO PASAMOS AL CAMPO CANTIDAD
	$importe_pta = $importe_euro * 166.386;
	printf ("%.2f euros son %.2f pesetas<br />", $importe_euro, $importe_pta);
}
else {   // cerramos el código de php para mostrar el formulario
?>

	<!-- aquí va el formulario -->

	<form ACTION="ej40-euroconversor.php" METHOD=GET>
		Cantidad a convertir: <INPUT NAME="cantidad" size="8" MAXLENGTH="8"
			TYPE="TEXT" VALUE="PON LA CANTIDAD" /><br /> <br /> <INPUT TYPE="SUBMIT"
			NAME="boton_a_euro" VALUE="A Euro"> <INPUT TYPE="SUBMIT"
			NAME="boton_a_pta" VALUE="A Peseta">
	</FORM>
	<?php	
}
?>
</body>
</html>
