<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta página!</title>
</head>
<body>
	<h2>Ejemplo 02 de trabajo con MYSQL</h2>
	<?php
	print "Uso de una base de datos con MySQL <br /><br />";

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","alejo") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />");

	// seleccionar una base de datos para ello se usa la función
	// mysqli_select_db(parametro1, parametro2)
	// donde
	// parametro1 es la variable que contiene los datos de la conexión al servidor
	// parametro2 es un string que contiene el nombre de la bd a la que se quiere conectar

	$db = mysqli_select_db($conexion, 'Clientes');

	// si la función devuelve false
	// es porque la base de datos no se pudo seleccionar

	if (!$db) {
		die ('No se ha podido seleccionar la BD Clientes : ' . mysqli_error($conexion))."<br />";
	}
	else {
		print 'OK -- se ha logrado conectar con la BD Clientes<br />';
	}

	?>
</body>
</html>
