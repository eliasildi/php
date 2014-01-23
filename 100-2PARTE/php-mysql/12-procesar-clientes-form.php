<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Inserci&oacute;n de datos en tabla mediante formulario</title>
</head>
<body>
	<h2 align="center">Ejemplo 12 Manejo de datos en tabla Clientes
		mediante formulario</h2>

	<?php

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","elias") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

	// seleccionar la base de datos Software

	$db = mysqli_select_db($conexion, 'Software');
	if (!$db) {
		die ('No se puede seleccionar la BD Software : ' . mysqli_error($conexion))."<br />";
	}


	// aqui se debe poner el código que se ejecuta cuando se procese el formulario de esta página






	// esto debe ser el else de ese if que se muestra al entrar por primera vez el código

	if (isset($_POST["modificar"]) ) {
		$sqlclientes = "SELECT * FROM cliente WHERE `dni` ='".$_POST["elegido"]."';";
		$res_clientes = mysqli_query($conexion, $sqlclientes);
		$fila_cli = mysqli_fetch_array($res_clientes, MYSQLI_ASSOC);
		$dni = $fila_cli["dni"];
		$nombre = $fila_cli["nombre"];
		$edad = $fila_cli["edad"];
	}

	if (isset($_POST["m"]) ) {
	$sqlclientes = "SELECT * FROM cliente WHERE `dni` ='".$_POST["elegido"]."';";
	$res_clientes = mysqli_query($conexion, $sqlclientes);
	$fila_cli = mysqli_fetch_array($res_clientes, MYSQLI_ASSOC);
	$dni = $fila_cli["dni"];
	$nombre = $fila_cli["nombre"];
	$edad = $fila_cli["edad"];
}

echo $_POST["modificar"]."<br />";
echo $_POST["elegido"]."<br />";







?>

	<!--<table align="center" border="1">
<tr>
	<td colspan="5" align="center">CLIENTES</td>
</tr>
<tr>
	<td>Nro Reg</td>
	<td>Dni</td>
	<td>Nombre</td>
	<td>Edad</td>
	<td>Operaciones</td>
</tr>	
	
	<?php
	$cont = 1;
	while ( TRUE ) {
		$fila_cli = mysqli_fetch_array($res_clientes, MYSQLI_ASSOC);
		if ($fila_cli == FALSE )
			break;
		?>
		<tr>
			<td><?php echo $cont++; ?></td>
			<td><?php echo $fila_cli["dni"]; ?></td>
			<td><?php echo $fila_cli["nombre"]; ?></td>
			<td><?php echo $fila_cli["edad"]; ?></td>
			<td><a href="12-procesar-clientes.php">Modificar</a> <a href="12-procesar-clientes.php">Borrar</a></td>
		</tr>
	<?php
	}
	?>
	<tr>
		<td colspan="5" align="center"><a href="12-procesar-clientes.php">Insertar</a></td>
	</tr>
</table>-->
</body>
</html>
