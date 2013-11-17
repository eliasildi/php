<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bienvenido a esta p&aacute;gina!</title>
</head>
<body>
	<h2>Ejemplo 08 de trabajo con MYSQL</h2>
	<?php
	print "Uso de DELETE en una tabla de BD de MySQL desde PHP<br /><br />";

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","Murci3l@g0SQL") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

	// seleccionar una base de datos para ello se usa la función

	$db = mysqli_select_db($conexion, 'Clientes');

	// si la función devuelve false es porque la base de datos no se pudo seleccionar

	if (!$db) {
		die ('No se puede seleccionar la BD Clientes : ' . mysqli_error($conexion))."<br />";
	}

	// construimos el string de la sentencia DELETE para BORRAR registros de la Tabla Cliente

	$sql = "DELETE FROM Cliente ";
	$sql .= "WHERE `AClave` = '100.02'";

	// Ejecución de la consulta

	$result = mysqli_query($conexion, $sql) or
	die ("Error de aplicaci&oacute;n: Acceso a base de datos inv&aacute;lido<br />".  mysqli_error($conexion));

	$filas_afectadas = mysqli_affected_rows($conexion);
	print "El n&uacute;mero de filas afectadas $filas_afectadas<br />";

	$sql = "SELECT * FROM Cliente;";

	// Ejecución de la consulta

	$result = mysqli_query($conexion, $sql) or
	die ("Error de aplicaci&oacute;n: Acceso a base de datos inv&aacute;lido<br />".  mysqli_error($conexion));

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
