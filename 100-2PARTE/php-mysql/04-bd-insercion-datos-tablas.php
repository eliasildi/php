<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta página!</title>
</head>
<body>
	<h2>Ejemplo 04 de trabajo con MYSQL</h2>
	<?php
	print "Inserci&oacute;n de datos en una tabla de BD MySQL desde PHP <br /><br />";

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","Murci3l@g0SQL") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

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

	// sentencia INSERT para insertar un cliente

	$sql = "Insert Into Cliente (AApellidos, ANombre, ADomicilio, ATelefono, AEmail, AClave)
			Values ('";
	$sql.= mysql_real_escape_string('Fuentes') . "', '";
	$sql.= mysql_real_escape_string('Juan') . "', '";
	$sql.= mysql_real_escape_string('C/Diagonal 222') . "', '";
	$sql.= mysql_real_escape_string('934556777') . "', '";
	$sql.= mysql_real_escape_string('juan99@hotmail.es') . "', '";
	$sql.= mysql_real_escape_string('100.02') . "');";

	// La función mysql_real_escape_string()
	//
	// Escapa caracteres especiales en la cadena no escapada, teniendo en cuenta el conjunto de caracteres
	// actual de la conexión para que sea seguro usarla en mysql_query(). Si se van a insertar datos binarios,
	// esta función debe ser usada.
	//
	//Esta función siempre debe (con pocas excepciones) ser usada para hacer los datos seguros,
	// antes de enviar una consulta a MySQL.
	//

	// Inserción del registro

	$result = mysqli_query($conexion, $sql) or
	die ("Error de aplicaci&oacute;n: Acceso a base de datos inv&aacute;lido<br />".  mysqli_error($conexion));

	// si esto se ejecuta es porque el registro se ha podido insertar correctamente, de lo contrario el programa
	// hubiera terminado

	print "Se ha insertado correctamente el registro en la tabla Cliente<br />";

	// insertamos un segundo registro

	$sql = "Insert Into Cliente (AApellidos, ANombre, ADomicilio, ATelefono, AEmail, AClave)
			Values ('";
	$sql.= mysql_real_escape_string("Gonz&aacute;lez") . "', '";
	$sql.= mysql_real_escape_string('Pedro') . "', '";
	$sql.= mysql_real_escape_string('C/La Carrera 15') . "', '";
	$sql.= mysql_real_escape_string('928762987') . "', '";
	$sql.= mysql_real_escape_string('pedroglez@gmail.com') . "', '";
	$sql.= mysql_real_escape_string('101.03') . "');";

	$result = mysqli_query($conexion, $sql) or
	die ("Error de aplicaci&oacute;n: Acceso a base de datos inv&aacute;lido<br />".  mysqli_error($conexion));

	// si esto se ejecuta es porque el registro se ha podido insertar correctamente, de lo contrario el programa
	// hubiera terminado

	print "Se ha insertado correctamente el segundo registro en la tabla Cliente<br />";

	?>
</body>
</html>
