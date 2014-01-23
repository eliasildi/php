<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta página!</title>
</head>
<body>
	<h2>Ejemplo 03 de trabajo con MYSQL</h2>
	<?php
	print "Creaci&oacute;n de una tabla en una BD MySQL desde PHP<br /><br />";

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","elias") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />". mysqli_error($conexion));

	// seleccionar una base de datos para ello se usa la función
	// mysqli_select_db(parametro1, parametro2)
	// donde
	// parametro1 es la variable que contiene los datos de la conexión al servidor
	// parametro2 es un string que contiene el nombre de la bd a la que se quiere conectar

	$db = mysqli_select_db($conexion, 'Clientes');

	// si la función devuelve false
	// es porque la base de datos no se pudo seleccionar

	if (!$db) {
		die ('No se puede seleccionar la BD Clientes : ' . mysqli_error($conexion))."<br />";
	}

	// por si existiese, se elimina la tabla

	$sql = "DROP TABLE Cliente;";

	// ejecutamos la consulta para eliminar la tabla

	$tb = mysqli_query($conexion, $sql);

	// Creamos el string con el script (query) que permite crear la Tabla Clientes

	$sql = "CREATE TABLE  `Cliente` (
			`AApellidos` VARCHAR( 25 ) NOT NULL ,
			`ANombre` VARCHAR( 25 ) NOT NULL ,
			`ADomicilio` VARCHAR( 25 ) NOT NULL ,
			`ATelefono` VARCHAR( 25 ) NOT NULL ,
			`AEmail` VARCHAR( 25 ) NOT NULL ,
			`AClave` REAL(5,2) NOT NULL ,
			PRIMARY KEY (  `AClave` )
			) ENGINE = INNODB;";

	// ejecutamos el query para crear la tabla

	$tb = mysqli_query($conexion, $sql);

	// si la función devuelve false es porque la tabla no se pudo crear

	if (!$tb) {
		die ('No se puede crear la tabla Cliente : ' . mysqli_error($conexion))."<br/>";
	}
	else {
		echo 'OK...se ha creado la tabla Cliente en la BD<br />';
	}
	?>
</body>
</html>
