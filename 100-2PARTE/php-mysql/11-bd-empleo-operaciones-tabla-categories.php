<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Inserci&oacute;n de datos en tabla mediante formulario</title>
</head>
<body>
	<h2 align="center">Ejemplo 09 Manejo de datos en tabla Categories
		mediante formulario</h2>

	<?php
	if ( isset($_POST['enviado']) )
	{
		// se establece la conexión con el servidor localhost

		$conexion = mysqli_connect("localhost","root","elias") or
		die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

		// seleccionar la base de datos Empleo

		$db = mysqli_select_db($conexion, 'Empleo');
		if (!$db) {
			die ('No se puede seleccionar la BD Empleo : ' . mysqli_error($conexion))."<br />";
		}

		// Proceso del botón Insertar -- Inserción de un registro en la tabla

		if (isset($_POST['bt_insertar'])) {

			// preguntamos si el campo clave está vacío

			if ( $_POST['category_id'] != "" )  {
				$sql = "Insert Into Categories (category_id, title, description) Values ('";
				$sql.= mysql_real_escape_string($_POST['category_id']) . "', '";
				$sql.= mysql_real_escape_string($_POST['title']) . "', '";
				$sql.= mysql_real_escape_string($_POST['description']). "');";

				// Ejecución de la consulta para insertar un registro

				$result = mysqli_query($conexion, $sql);
					
				if ($result) {
					$mensaje = "Se ha insertado la categoria ".$_POST['category_id'];
				}
				else {
					$mensaje = "La Operaci&oacute;n INSERCI&Oacute;N no se realiz&oacute;";
				}
			}
			else
				$mensaje = "Error...El valor de category_id est&aacute; vac&iacute;o";
		}

		// Proceso del botón Buscar -- Búsqueda de un registro en la tabla Cliente mediante su clave

		if (isset($_POST['bt_buscar']) )
		{
			if ( $_POST['category_id'] != "" )  {
				$sql = "SELECT * FROM categories WHERE `category_id` = '".$_POST['category_id']."';";
				$result = mysqli_query($conexion, $sql);
				$fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
				if ( ! $fila ) {
					$mensaje = "La clave ".$_POST['category_id']." no se encuentra";
				}
				else {
					$category_id = $fila['category_id'];
					$title = $fila['title'];
					$description = $fila['description'];
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
			if ( $_POST['category_id'] != "" )  {
				$sql = "DELETE FROM categories ";
				$sql .= "WHERE `category_id` = '";
				$sql .= $_POST['category_id']."';";
				$result = mysqli_query($conexion, $sql);
				$filas_afectadas = mysqli_affected_rows($conexion);
				if ( $filas_afectadas == 0) {
					$mensaje = "No se pudo BORRAR la clave".$_POST['category_id'];
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
			if ( $_POST['category_id'] != "" )  {
				$sql = "UPDATE categories ";
				$sql .= "set ";
				$sql .= "`category_id` = '".$_POST['category_id']."', ";
				$sql .= "`title` = '".$_POST['title']."', ";
				$sql .= "`description` = '".$_POST['description']."' ";
				$sql .= "where `category_id` = ".$_POST['category_id'].";";

				$result = mysqli_query($conexion, $sql);
				$filas_afectadas = mysqli_affected_rows($conexion);
					
				if ( $filas_afectadas == 0 ) {
				$mensaje = "No se pudo MODIFICAR la clave".$_POST['category_id'];
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
	<form ACTION="11-bd-empleo-operaciones-tabla-categories.php"
		METHOD=POST>
		<table align="center" border="0">
			<tr>
				<td align="left" width="50">Category ID:</td>
				<td align="center" width="80"><INPUT NAME="category_id"
					MAXLENGTH="25" TYPE="TEXT"
					VALUE="<?php if (isset($category_id)) echo $category_id; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Title:</td>
				<td align="center" width="80"><INPUT NAME="title" MAXLENGTH="25"
					TYPE="TEXT" VALUE="<?php if (isset($title)) echo $title; ?>" /></td>
			</tr>
			<tr>
				<td align="left" width="50">Description:</td>
				<td align="center" width="80"><INPUT NAME="description"
					MAXLENGTH="25" TYPE="TEXT"
					VALUE="<?php if (isset($description)) echo $description; ?>" /></td>
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
