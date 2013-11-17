<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Inserci&oacute;n de datos en tabla mediante formulario</title>
</head>
<body>
	<h2 align="center">Ejemplo 09 Manejo de datos en tabla Biz_Categories
		mediante formulario</h2>

	<?php

	echo $_GET["dni"]."<br />";
	echo $_GET["oper"]."<br />";



	//// se establece la conexión con el servidor localhost
	//
	//$conexion = mysqli_connect("localhost","root","Murci3l@g0SQL") or
	//			die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");
	//
	//// seleccionar la base de datos Software
	//
	//$db = mysqli_select_db($conexion, 'Software');
	//if (!$db) {
//	die ('No se puede seleccionar la BD Software : ' . mysqli_error($conexion))."<br />";
//}
//
//
//$sqlclientes = "SELECT * FROM cliente;";
//$res_clientes = mysqli_query($conexion, $sqlclientes);

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
