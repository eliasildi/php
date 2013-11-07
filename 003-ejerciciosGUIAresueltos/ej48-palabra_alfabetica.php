<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Verifica si una palabra es alfab&eacute;tica</p>
	<?php

	if ( isset($_GET['boton']) ) {
		$palabra = strtoupper($_GET["palabra"]);
		$long_palabra = strlen($palabra);
		$i = 0;
		$valor_anterior = 0;
		while ($i < $long_palabra) {
		if (ord($palabra[$i]) > $valor_anterior ) {
			$valor_anterior = ord($palabra[$i]);
			$i++;
		}
		else
			die("La palabra no es alfab&eacute;tica<br />");
	}
	}
	else {   // cerramos el código de php para mostrar el formulario
?>
	<form ACTION="ej48-palabra_alfabetica.php" METHOD=GET>
		Introduzca una palabra: <INPUT NAME="palabra" size="20" MAXLENGTH="20"
			TYPE="TEXT" VALUE="" /><br /> <INPUT NAME="boton" TYPE="SUBMIT"
			VALUE="Enviar"><br />
	</FORM>
	<?php	
}
?>
</body>
</html>
