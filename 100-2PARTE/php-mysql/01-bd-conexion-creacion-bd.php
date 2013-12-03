<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta página!</title>
</head>
<body>
	<h2>Ejemplo 01 de trabajo con MYSQL</h2>
	<?php
	print "Creaci&oacute;n de una base de datos en MYSQL desde PHP<br /><br />";

	// se establece la conexión con el servidor localhost
	// usuario: root
	// contraseña: (la que sea)
	// se crea una conexión

	// la funcion mysqli_connect() permite conectar con una bd
	// necesita 3 parámetros.

	// parámatro 1 = datos del servidor
	// parámatro 2 = datos de los usuarios
	// parámatro 3 = datos de la contraseña

	$conexion = mysqli_connect("localhost","root","alejo") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />");

	// se crea la base de datos Clientes
	// mysql_create_db es una función eliminada en PHP 6
	// en su lugar se debe usar mysqli_query() con
	// la sentencia de SQL puro

	// se crea el script que permite crear la base de datos

	$sql = 'CREATE DATABASE Clientes';

	// con mysqli_query( conexion , script_a_ejecutar ) se ejecutan las consultas

	if (mysqli_query( $conexion, $sql ))
		echo "Se ha creado sin problemas la base de datos Clientes <br />";
	else
		echo 'Error al crear la base de datos Clientes: ' . mysqli_error($conexion) . "<br />";
	?>
</body>
</html>








