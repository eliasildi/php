<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta p&aacute;gina!</title>
</head>
<body>
	<h2>Ejemplo 07 de trabajo con MYSQL</h2>
	<?php
	print "Uso de UPDATE en una tabla de BD MySQL desde PHP<br /><br />";

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","Murci3l@g0SQL") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

	// seleccionar una base de datos para ello se usa la función

	$db = mysqli_select_db($conexion, 'Clientes');

	// si la función devuelve false es porque la base de datos no se pudo seleccionar

	if (!$db) {
		die ('No se puede seleccionar la BD Clientes ' . mysqli_error($conexion))."<br />";
	}

	// preparamos la sentencia UPDATE para MODIFICAR los registros de la Tabla Cliente

	$sql = "UPDATE Cliente SET `AApellidos` = 'Salas Casado' ,
			`ANombre` = 'Carlos Alberto'
			WHERE `AClave` = '100.02'";

	// Ejecución de la consulta

	$result = mysqli_query($conexion, $sql) or
	die ("Error de aplicaci&oacute;n: Acceso a base de datos inv&aacute;lido<br />".  mysqli_error($conexion));

	// si lo de abajo se ejecuta es porque la consulta se ejecutó correctamente

	// para saber el número de filas que se han modificado se usa la función
	// mysql_affected_rows()

	$filas_afectadas = mysqli_affected_rows($conexion);
	print "El n&uacute;mero de filas afectadas $filas_afectadas<br />";

	$sql = "SELECT * FROM Cliente ";
	$sql .= "WHERE `AClave` > '100'";

	// Ejecución de la consulta

	$result = mysqli_query($conexion, $sql) or
	die ("Error de aplicaci&oacute;n: Acceso a base de datos inv&aacute;lido<br />".  mysqli_error($conexion));


	// mostramos los datos de la Tabla Clientes

	$NroRegistro = 0;

	while ( $fila = mysqli_fetch_array($result, MYSQLI_ASSOC))
	{
		$NroRegistro++;
		print "<br />El registro n&uacute;mero $NroRegistro tiene los siguientes datos:<br /><br />";
		print "Apellidos: ".$fila['AApellidos']."<br />";
		print "Nombre: ".$fila['ANombre']."<br />";
		print "Domicilio: ".$fila['ADomicilio']."<br />";
		print "Tel&eacute;lefono: ".$fila['ATelefono']."<br />";
		print "e-mail: ".$fila['AEmail']."<br />";
		print "Clave: ".$fila['AClave']."<br />";
	}
	?>
</body>
</html>
