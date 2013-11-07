<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>
	<h1>Procesar formulario con GET</h1>
	<br />
	<?php

	// con el metodo GET los valores están en el array $_GET[]
	// y cada uno de ellos se accede mediante el nombre que se
	// le asignó al control en el formulario

	print $_GET["nombre"]."<br />";
	print $_GET["mail"]."<br />";
	print $_GET["motivo"]."<br />";
	print $_GET["mensaje"]."<br />";
	?>
</body>
</html>
