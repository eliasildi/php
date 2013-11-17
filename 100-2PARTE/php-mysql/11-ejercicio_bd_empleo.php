<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Creación de la BD Empleo y sus Tablas</title>
</head>

<body>
	<h2>Ejemplo BD Empleo</h2>
	<?php

	// Conexión al servidor

	$conexion = @mysqli_connect("localhost", "root", "Murci3l@g0SQL") or
	die ("Error... No se puede establecer la conexi&oacute;n con el Servidor de BD<br />");

	echo "OK...Se ha podido conectar sin problemas con el servidor<br />";

	// Creación de la BD Empleo

	$sql = 'CREATE DATABASE Empleo';

	if ( mysqli_query( $conexion, $sql ) )
		echo "OK...Se ha creado sin problemas la base de datos Empleo<br />";
	else
		echo "Error...No se pudo crear la base de datos Empleo<br />";

	// Seleccionar la BD Empleo

	$db = mysqli_select_db($conexion, 'Empleo');

	if ( ! $db ) {
		die ("Error...No se puede seleccionar la BD Clientes<br />");
	}

	echo "OK...La BD Empleo esta en uso actualmente<br />";

	// Creación de tablas

	// 		TABLA biz_categories

	$sql = "CREATE TABLE  `biz_categories` (
				`business_id` int(11) NOT NULL ,
				`category_id` VARCHAR( 10 ) NOT NULL,
				PRIMARY KEY (  `business_id`, `category_id` ),
				KEY business_id(`business_id`, `category_id`)
				) ENGINE = INNODB;";

	// ejecutamos el query para crear la tabla

	$tb = mysqli_query($conexion, $sql);

	// si la función devuelve false es porque la tabla no se pudo crear

	if (!$tb) {
		die ("No se puede crear la tabla biz_categories<br/>");
	}
	else {
		echo "OK...se ha creado la tabla biz_categories en la BD<br />";
	}

	TABLA businesses

	$sql = "CREATE TABLE  `businesses` (
						`business_id` int(11) NOT NULL auto_increment,
						`name` VARCHAR( 255 ) NOT NULL,
						`adress` VARCHAR( 255 ) NOT NULL,
						`city` VARCHAR( 128 ) NOT NULL,
						`telephone` VARCHAR( 64 ) NOT NULL,
						`url` VARCHAR( 255 ),
						PRIMARY KEY (  `business_id` ),
						UNIQUE business_id( `business_id` ),
						KEY business_id_2( `business_id` )
		    ) ENGINE = INNODB;";

	// ejecutamos el query para crear la tabla

	$tb = mysqli_query($conexion, $sql);

	// si la función devuelve false es porque la tabla no se pudo crear

	if (! $tb ) {
		die ("No se puede crear la tabla businesses<br/>");
	}
	else {
		echo "OK...se ha creado la tabla businesses en la BD<br />";
	}

	// 		TABLA businesses

	$sql = "CREATE TABLE  `categories` (
								`category_id` varchar(10) NOT NULL,
								`title` VARCHAR( 128 ) NOT NULL,
								`description` VARCHAR( 255 ) NOT NULL,
								PRIMARY KEY (  `category_id` ),
								UNIQUE category_id( `category_id` ),
								KEY category_id_2( `category_id` )
								) ENGINE = INNODB;";

	// ejecutamos el query para crear la tabla

	$tb = mysqli_query($conexion, $sql);

	// si la función devuelve false es porque la tabla no se pudo crear

	if (!$tb) {
		die ("No se puede crear la tabla categories<br/>");
	}
	else {
		echo "OK...se ha creado la tabla categories en la BD<br />";
	}

	?>

</body>
</html>
