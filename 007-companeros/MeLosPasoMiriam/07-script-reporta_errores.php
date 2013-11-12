<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Reportando errores en PHP</title>
</head>
<body>
	<?php

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	// include("file_with_errors.php"); si queremos incluir el codigo de un fichero

	print "Probamos como funciona la correcci&oacute;n de errores <br />";
	$a = $b + 3;
	echo "El valor de la variable a es $a";
	?>
</body>
</html>
