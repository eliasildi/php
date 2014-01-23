<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Inserci&oacute;n de datos en tabla mediante formulario</title>
</head>
<body>
	<h2 align="center">Ejemplo 11 Manejo de datos en tabla Businesses
		mediante formulario</h2>

	<?php
	if ( isset($_POST['enviado']) )
	{
		// se establece la conexi�n con el servidor localhost

		$conexion = mysqli_connect("localhost","root","elias") or
		die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

		// seleccionar la base de datos Empleo

		$db = mysqli_select_db($conexion, 'Empleo');
		if (!$db) {
			die ('No se puede seleccionar la BD Empleo : ' . mysqli_error($conexion))."<br />";
		}

		// Proceso del bot�n Insertar -- Inserci�n de un registro en la tabla

		if (isset($_POST['bt_insertar'])) {

			// preguntamos si el campo clave est� vac�o

			if ( $_POST['name'] != "" )  {
				$sql = "Insert Into businesses (name, adress, city, telephone, url) Values ('";
				// $sql.= mysql_real_escape_string($_POST['business_id']) . "', '";
				$sql.= mysql_real_escape_string($_POST['name']) . "', '";
				$sql.= mysql_real_escape_string($_POST['adress']) . "', '";
				$sql.= mysql_real_escape_string($_POST['city']) . "', '";
				$sql.= mysql_real_escape_string($_POST['telephone']) . "', '";
				$sql.= mysql_real_escape_string($_POST['url']). "');";

				// Ejecuci�n de la consulta para insertar un registro

				$result = mysqli_query($conexion, $sql);
					
				if ($result) {
					$mensaje = "Se ha insertado el nuevo trabajo ";
				}
				else {
					$mensaje = "La Operaci&oacute;n INSERCI&Oacute;N no se realiz&oacute;";
				}
			}
			else
				$mensaje = "Error...El valor de business_id est&aacute; vac&iacute;o";
		}

		// Proceso del bot�n Buscar -- B�squeda de un registro en la tabla Cliente mediante su clave

		if (isset($_POST['bt_buscar']) )
		{
			if ( $_POST['business_id'] != "" )  {
				$sql = "SELECT * FROM businesses WHERE `business_id` = '".$_POST['business_id']."';";
				$result = mysqli_query($conexion, $sql);
				$fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
				if ( ! $fila ) {
					$mensaje = "La clave ".$_POST['business_id']." no se encuentra";
				}
				else {
					$business_id = $fila['business_id'];
					$name = $fila['name'];
					$adress = $fila['adress'];
					$city = $fila['city'];
					$telephone = $fila['telephone'];
					$url = $fila['url'];
					$mensaje = "Operaci&oacute;n B&Uacute;SQUEDA Completada";
					$sololectura = 'readonly';
				}
			}
			else
				$mensaje = "Error...El valor de clave est&aacute; vac&iacute;o";
		}

		// Proceso del bot�n Borrar -- Borrar un registro en la tabla Cliente mediante su clave
		// (este registro ya se obtuvo mediante una operaci�n de b�squeda)

		if (isset($_POST['bt_borrar']) ) {
			if ( $_POST['business_id'] != "" )  {
				$sql = "DELETE FROM businesses ";
				$sql .= "WHERE `business_id` = '";
				$sql .= $_POST['business_id']."';";
				$result = mysqli_query($conexion, $sql);
				$filas_afectadas = mysqli_affected_rows($conexion);
				if ( $filas_afectadas == 0) {
					$mensaje = "No se pudo BORRAR la clave".$_POST['business_id'];
				}
				else {
					$mensaje = "Operaci&oacute;n de BORRADO Completada";
				}
			}
			else {
				$mensaje = "Error...El valor de clave est&aacute; vac&iacute;o";
			}
		}

		// Proceso del bot�n Modificar -- Modifica un registro en la tabla Cliente mediante su clave
		// (este registro ya se obtuvo mediante una operaci�n de b�squeda)

		if (isset($_POST['bt_modificar']) ) {
			if ( $_POST['business_id'] != "" )  {
				$sql = "UPDATE businesses ";
				$sql .= "set ";
				$sql .= "`business_id` = '".$_POST['business_id']."', ";
				$sql .= "`name` = '".$_POST['name']."', ";
				$sql .= "`adress` = '".$_POST['adress']."', ";
				$sql .= "`city` = '".$_POST['city']."', ";
				$sql .= "`telephone` = '".$_POST['telephone']."', ";
				$sql .= "`url` = '".$_POST['url']."' ";
				$sql .= "where `business_id` = ".$_POST['business_id'].";";

				$result = mysqli_query($conexion, $sql);
				$filas_afectadas = mysqli_affected_rows($conexion);
					
				if ( $filas_afectadas == 0 ) {
				$mensaje = "No se pudo MODIFICAR la clave".$_POST['business_id'];
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
	<form ACTION="11-bd-empleo-operaciones-tabla-businesses.php"
		METHOD=POST>
		<table align="center" border="0">
			<tr>
				<td align="left" width="50">Business ID:</td>
				<td align="center" width="80"><INPUT NAME="business_id"
					MAXLENGTH="25" TYPE="TEXT"
					VALUE="<?php if (isset($business_id)) echo $business_id; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Name:</td>
				<td align="center" width="80"><INPUT NAME="name" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($name)) echo $name; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Adress:</td>
				<td align="center" width="80"><INPUT NAME="adress" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($adress)) echo $adress; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">City:</td>
				<td align="center" width="80"><INPUT NAME="city" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($city)) echo $city; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Telephone:</td>
				<td align="center" width="80"><INPUT NAME="telephone" MAXLENGTH="25"
					TYPE="TEXT"
					VALUE="<?php if (isset($telephone)) echo $telephone; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Url:</td>
				<td align="center" width="80"><INPUT NAME="url" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($url)) echo $url; ?>" /></td>
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
