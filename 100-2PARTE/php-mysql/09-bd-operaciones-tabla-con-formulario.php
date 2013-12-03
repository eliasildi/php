<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Inserci&oacute;n de datos en tabla mediante formulario</title>
</head>
<body>
	<h2 align="center">Ejemplo 09 Manejo de datos en tabla Clientes
		mediante formulario</h2>

	<?php
	if ( isset($_POST['enviado']) )
	{
		// se establece la conexión con el servidor localhost

		$conexion = mysqli_connect("localhost","root","alejo") or
		die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

		// seleccionar la base de datos Clientes

		$db = mysqli_select_db($conexion, 'Clientes');
		if (!$db) {
			die ('No se puede seleccionar la BD Clientes : ' . mysqli_error($conexion))."<br />";
		}

		// Proceso del botón Insertar -- Inserción de un registro en la tabla

		if (isset($_POST['bt_insertar'])) {

			// preguntamos si el campo clave está vacío

			if ( $_POST['clave'] != "" )  {
				$sql = "Insert Into Cliente (AApellidos, ANombre, ADomicilio, ATelefono, AEmail, AClave) Values ('";
				$sql.= $_POST['apellidos'] . "', '";
				$sql.= $_POST['nombre'] . "', '";
				$sql.= $_POST['domicilio'] . "', '";
				$sql.= $_POST['telefono'] . "', '";
				$sql.= $_POST['email'] . "', '";
				$sql.= $_POST['clave'] . "');";

				// Ejecución de la consulta para insertar un registro

				$result = mysqli_query($conexion, $sql);
					
				if ($result) {
					$mensaje = "Se ha insertado la clave ".$_POST['clave'];
				}
				else {
					$mensaje = "La Operaci&oacute;n INSERCI&Oacute;N no se realiz&oacute;";
				}
			}
			else
				$mensaje = "Error...El valor de clave est&aacute; vac&iacute;o";
		}

		// Proceso del botón Buscar -- Búsqueda de un registro en la tabla Cliente mediante su clave

		if (isset($_POST['bt_buscar']) )
		{
			if ( $_POST['clave'] != "" )  {
				$sql = "SELECT * FROM Cliente WHERE `AClave` = '".$_POST['clave']."';";
				$result = mysqli_query($conexion, $sql);
				$fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
				if ( ! $fila ) {
					$mensaje = "La clave ".$_POST['clave']." no se encuentra";
				}
				else {
					$apellido = $fila['AApellidos'];
					$nombre = $fila['ANombre'];
					$domicilio = $fila['ADomicilio'];
					$telefono = $fila['ATelefono'];
					$email = $fila['AEmail'];
					$clave = $fila['AClave'];
					$mensaje = "Operaci&oacute;n B&Uacute;SQUEDA Completada";
					$sololectura = 'readonly';
				}
			}
			else
				$mensaje = "Error...El valor de clave est&aacute; vac&iacute;o";
		}

		// Proceso del botón Borrar -- Borrar un registro en la tabla Cliente mediante su clave
		// (este registro ya se obtuvo mediante una operación de búsqueda)

		if (isset($_POST['bt_borrar']) ) {
			if ( $_POST['clave'] != "" )  {
				$sql = "DELETE FROM Cliente ";
				$sql .= "WHERE `AClave` = '";
				$sql .= $_POST['clave']."';";
				$result = mysqli_query($conexion, $sql);
				$filas_afectadas = mysqli_affected_rows($conexion);
				if ( $filas_afectadas == 0) {
					$mensaje = "No se pudo BORRAR la clave".$_POST['clave'];
				}
				else {
					$mensaje = "Operaci&oacute;n de BORRADO Completada";
				}
			}
			else {
				$mensaje = "Error...El valor de clave est&aacute; vac&iacute;o";
			}
		}

		// Proceso del botón Modificar -- Modifica un registro en la tabla Cliente mediante su clave
		// (este registro ya se obtuvo mediante una operación de búsqueda)

		if (isset($_POST['bt_modificar']) ) {
			if ( $_POST['clave'] != "" )  {
				$sql = "UPDATE Cliente ";
				$sql .= "set ";
				$sql .= "`AApellidos` = '".$_POST['apellidos']."', ";
				$sql .= "`ANombre` = '".$_POST['nombre']."', ";
				$sql .= "`ADomicilio` = '".$_POST['domicilio']."', ";
				$sql .= "`ATelefono` = '".$_POST['telefono']."', ";
				$sql .= "`AEmail` = '".$_POST['email']."' ";
				$sql .= "where `AClave` = ".$_POST['clave'].";";

				$result = mysqli_query($conexion, $sql);
				$filas_afectadas = mysqli_affected_rows($conexion);
					
				if ( $filas_afectadas == 0 ) {
				$mensaje = "No se pudo MODIFICAR la clave".$_POST['clave'];
			}
			else {
				$mensaje = "Operaci&oacute;n de MODIFICADO Completada";
			}
			}
			else {
			$mensaje = "Error...El valor de clave est&aacute; vac&iacute;o";
		}
		}
	}
	?>
	<form ACTION="09-bd-operaciones-tabla-con-formulario.php" METHOD=POST>
		<table align="center" border="0">
			<tr>
				<td align="left" width="50">Apellidos:</td>
				<td align="center" width="80"><INPUT NAME="apellidos" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($apellido)) echo $apellido; ?>" />
				</td>
			</tr>
			<tr>
				<td align="left" width="50">Nombre:</td>
				<td align="center" width="80"><INPUT NAME="nombre" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($nombre)) echo $nombre; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Domicilio:</td>
				<td align="center" width="80"><INPUT NAME="domicilio" MAXLENGTH="25"
					TYPE="TEXT"
					VALUE="<?php if (isset($domicilio)) echo $domicilio; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Tel&eacute;fono:</td>
				<td align="center" width="80"><INPUT NAME="telefono" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($telefono)) echo $telefono; ?>" />
				</td>
			</tr>
			<tr>
				<td align="left" width="50">e-mail:</td>
				<td align="center" width="80"><INPUT NAME="email" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($email)) echo $email; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Clave:</td>
				<td align="center" width="80"><INPUT NAME="clave" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($clave)) echo $clave; ?>"
					<?php if (isset($sololectura)) echo $sololectura; ?> /></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><INPUT NAME="bt_insertar"
					TYPE="SUBMIT" VALUE="Insertar"> <INPUT NAME="bt_buscar"
					TYPE="SUBMIT" VALUE="Buscar"> <INPUT NAME="bt_borrar" TYPE="SUBMIT"
					VALUE="Borrar"> <INPUT NAME="bt_modificar" TYPE="SUBMIT"
					VALUE="Modificar"> <INPUT NAME="bt_vaciar" TYPE="SUBMIT"
					VALUE="Vaciar">
				</td>
			</tr>
			<tr>
				<td align="left" width="50">Resultado Operacion:</td>
				<td align="center" width="80"><INPUT NAME="informacion"
					MAXLENGTH="40" SIZE="40" TYPE="TEXT" readonly="readonly"
					VALUE="<?php if (isset($mensaje)) echo $mensaje; ?>" /></td>
			</tr>
		</table>
		<input type="hidden" name="enviado" value="1" />
	</form>
</body>
</html>
