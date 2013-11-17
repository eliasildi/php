<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta p&aacute;gina!</title>
</head>
<body>
	<h2>Ejemplo 06 de trabajo con MYSQL</h2>
	<?php
	print "Uso de consulta SELECT en una tabla de BD MySQL desde PHP<br />";

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","h3ct0rUch@") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

	// seleccionar una base de datos para ello se usa la función

	$db = mysqli_select_db($conexion, 'Clientes');

	// si la función devuelve false
	// es porque la base de datos no se pudo seleccionar

	if (!$db) {
		die ('No se puede seleccionar la BD Clientes : ' . mysqli_error($conexion))."<br />";
	}

	// preparación de la consulta SELECT para consultar la Tabla Cliente

	$sql = "SELECT * FROM Cliente ";
	$sql .= "WHERE `AClave` > '100'";

	// Ejecución de la consulta

	$result = mysqli_query($conexion, $sql) or
	die ("Error de aplicaci&oacute;n: Acceso a base de datos inv&aacute;lido<br />".  mysqli_error($conexion));

	// una vez obtenidos los resultados hay que procesarlos
	// para ello se usan varias instrucciones, veamos la primera

	// la función mysqli_fetch_array(paramtero1, parametro2) devuelve una matriz asociativa con los valores
	// de una fila del conjunto de resultados (parametro1) o falso si ya no quedan más resultados

	// el parámetro2 indica como se entrega la matriz, sus valores pueden ser:
	// MYSQLI_ASSOC : a los campos de la matriz se accede con el nombre de los campos de la base de datos
	// MYSQLI_NUM   : a los campos de la matriz se accede mediante números comenzando por el 0 y en el orden
	//             : en que aparecen en la tabla
	// MYSQLI_BOTH  : los dos métodos anteriores a la vez

	// uso de manera asociativa (MYSQL_NUM)

	$NroRegistro = 0;

	while ( $fila = mysqli_fetch_array($result, MYSQLI_NUM))
	{
		$NroRegistro++;
		print "<br />El registro n&uacute;mero $NroRegistro tiene los siguientes datos:<br /><br />";
		print "Apellidos: ".$fila[0]."<br />"; // Campo AApellidos
		print "Nombre: ".$fila[1]."<br />";  // Campo ANombre
		print "Domicilio: ".$fila[2]."<br />"; // Campo ADomicilio
		print "Tel&eacute;lefono: ".$fila[3]."<br />"; // Campo ATelefono
		print "e-mail: ".$fila[4]."<br />"; // Campo AEmail
		print "Clave: ".$fila[5]."<br />"; // Campo AClave
	}
	?>
</body>
</html>
