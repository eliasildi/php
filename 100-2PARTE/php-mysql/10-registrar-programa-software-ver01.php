<html>
<head>
<title>Inserci�n de Registro de una Aplicaci�n por Cliente</title>
</head>
<body>
	<?php

	if ( isset( $_POST['bt_insertar'] ) )
	{
	 $conexion = mysqli_connect("localhost","root","elias") or
	 die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

	 $db = mysqli_select_db($conexion, 'software');

	 if (!$db) {
		 die ('No se puede seleccionar la BD software : ' . mysqli_error($conexion))."<br />";
	 }

	 $sql = "Insert Into REGISTRA Values ('";
	 $sql.= mysql_real_escape_string($_POST['comercio_form']) . "', '";
	 $sql.= mysql_real_escape_string($_POST['dni_form']) . "', '";
	 $sql.= mysql_real_escape_string($_POST['programa_form']) . "', '";
	 $sql.= mysql_real_escape_string($_POST['registro_form']) . "');";
	  
	 $result = mysqli_query($conexion, $sql) or
	 die ("Error...No se ha podido realizar la inserci&oacute;n del programa<br />");
	  
	 print "EL CLIENTE de C&Oacute;DIGO ". $_POST['dni_form']. " << ".$_POST['informacion']." >> DESEA RECIBIR INFORMACI�N";
	}

	?>
	<h1 align="center">SOFTWARE...Registro de un programa</h1>
	<br />
	<form METHOD="POST" ACTION="10-registrar-programa-software-ver01.php">
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
				<td>C�digo del programa que desea registrar</td>
				<td><INPUT TYPE="TEXT" NAME="programa_form"></td>
			</tr>
			<tr>
				<td>C�digo del comercio donde lo compr�</td>
				<td><INPUT TYPE="TEXT" NAME="comercio_form"></td>
			</tr>

			<tr>
				<td>Medio de registro usado por el cliente</td>
				<td><select name="registro_form" SIZE="3">
						<option VALUE="Internet" SELECTED>Internet</option>
						<option VALUE="Tarjeta Postal">Tarjeta Postal</option>
						<option VALUE="Tel�fono">Tel�fono</option>
				</select></td>
			</tr>
			<tr>
				<td>Desea recibir informaci�n sobre nuevos programas</td>
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



