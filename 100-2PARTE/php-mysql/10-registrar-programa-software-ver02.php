<html>
<head>
<title>Inserción de Registro de una Aplicación por Cliente</title>
</head>
<body>
	<?php

	if ( isset( $_POST['bt_insertar'] ) )
	{
	 $conexion = mysqli_connect("localhost","root","Murci3l@g0SQL") or
	 die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

	 $db = mysqli_select_db($conexion, 'software');

	 if (!$db) {
		 die ('No se puede seleccionar la BD Software : ' . mysqli_error($conexion))."<br />";
	 }

	 // consulta en la tabla comercio por el nombre
	 	
	 $sqlcomercio = "SELECT cif FROM  COMERCIO
		 		WHERE `nombre` = '". $_POST['comercio_form']."';";

	 $result = mysqli_query($conexion, $sqlcomercio);

	 if (! $result) {
	 	die ("Error...En la ejecución de la consulta de tabla Comercio");
	 }

	 $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);

	 if (! $fila) {
	 	die ("Error...El nombre del comercio no se encuentra en la BD <br />");
	 }

	 $codigocomercio = $fila['cif'];

	 // consulta en la tabla programa por el nombre -- deberia hacerse tambien la versión

	 $sqlprograma = "SELECT codigo FROM PROGRAMA
	 		WHERE `nombre` = '". $_POST['programa_form']."'".
	 		" AND `version` = '". $_POST['version_form']."';";

	 $result = mysqli_query($conexion, $sqlprograma) or
	 die ("Error...En la ejecución de la consulta de tabla Programa");

	 $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);

	 if (! $fila) {
	 	die ("Error...El nombre del programa no se encuentra en la BD <br />");
	 }


	 $codigoprograma = $fila['codigo'];

	 // inserción en la tabla registra

	 $sql = "Insert Into REGISTRA Values ('";
	 $sql.= mysql_real_escape_string($codigocomercio) . "', '";
	 $sql.= mysql_real_escape_string($_POST['dni_form']) . "', '";
	 $sql.= mysql_real_escape_string($codigoprograma) . "', '";
	 $sql.= mysql_real_escape_string($_POST['registro_form']) . "');";
	  
	 $result = mysqli_query($conexion, $sql) or
	 die ("Error...No se ha podido insertar el registro");
	  
	 print "<br />"."EL CLIENTE  de C&Oacute;DIGO ". $_POST['dni_form']. " << ".$_POST['informacion']." >> DESEA RECIBIR INFORMACIÓN";
	}
	?>
	<h1 align="center">SOFTWARE...Registro de un programa</h1>
	<br />
	<form METHOD="POST" ACTION="10-registrar-programa-software-ver02.php">
		<table border="1" align="center">
			<tr>
				<td colspan="2" align="center">Inserte datos del programa a
					registrar</td>
			</tr>
			<tr>
				<td>DNI persona que registra</td>
				<td><INPUT TYPE="TEXT" NAME="dni_form"></td>
			</tr>
			<tr>
				<td>Nombre del programa que desea registrar</td>
				<td><INPUT TYPE="TEXT" NAME="programa_form"></td>
			</tr>
			<tr>
				<td>Versi&oacute;n del programa que desea registrar</td>
				<td><INPUT TYPE="TEXT" NAME="version_form"></td>
			</tr>
			<tr>
				<td>Nombre del comercio donde lo compró</td>
				<td><INPUT TYPE="TEXT" NAME="comercio_form"></td>
			</tr>
			<tr>
				<td>Medio de registro usado por el cliente</td>
				<td><select name="registro_form" SIZE="3">
						<option VALUE="Internet" SELECTED>Internet</option>
						<option VALUE="Tarjeta Postal">Tarjeta Postal</option>
						<option VALUE="Teléfono">Teléfono</option>
				</select></td>
			</tr>
			<tr>
				<td>Desea recibir información sobre nuevos programas</td>
				<td><input name="informacion" type="radio" value="SI" CHECKED />SI<br />
					<input name="informacion" type="radio" value="NO" />NO<br /></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><INPUT name="bt_insertar"
					TYPE="SUBMIT" value="Insertar"></td>
			</tr>
		</table>
	</form>
</body>
</html>



