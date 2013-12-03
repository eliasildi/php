<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta p�gina!</title>
</head>
<body>
	<h2>Ejemplo 01 de trabajo con MYSQL</h2>
	<?php
	print "Creaci&oacute;n de una base de datos en MYSQL desde PHP<br /><br />";

	// se establece la conexi�n con el servidor localhost
	// usuario: root
	// contrase�a: (la que sea)
	// se crea una conexi�n

	// la funcion mysqli_connect() permite conectar con una bd
	// necesita 3 par�metros.

	// par�matro 1 = datos del servidor
	// par�matro 2 = datos de los usuarios
	// par�matro 3 = datos de la contrase�a

	$conexion = mysqli_connect("localhost","root","alejo") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />");

	// se crea la base de datos Clientes
	// mysql_create_db es una funci�n eliminada en PHP 6
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








