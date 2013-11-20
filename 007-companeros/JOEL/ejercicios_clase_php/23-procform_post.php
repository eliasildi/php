<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>
	<h1>Procesar formulario con POST</h1>
	<br />
	<?php

	// en el metodo POST los valores están en el array $_POST[]

	print $_POST["nombre"]."<br />";
	print $_POST["mail"]."<br />";
	print $_POST["motivo"]."<br />";
	print $_POST["mensaje"]."<br />";
	?>
</body>
</html>
