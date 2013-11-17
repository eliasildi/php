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

	// se establece la conexión con el servidor localhost

	$conexion = mysqli_connect("localhost","root","Murci3l@g0SQL") or
	die ("No se puede establecer la conexi&oacute;n con la BD<br />. mysqli_error($conexion)");

	// seleccionar la base de datos Empleo

	$db = mysqli_select_db($conexion, 'Empleo');
	if (!$db) {
		die ('No se puede seleccionar la BD Empleo : ' . mysqli_error($conexion))."<br />";
	}

	$sqlcategories = "SELECT category_id, title FROM categories;";
	$res_categories = mysqli_query($conexion, $sqlcategories);

	$sqlbusiness = "SELECT business_id, name FROM businesses;";
	$res_business = mysqli_query($conexion, $sqlbusiness);

	if ( isset($_POST['enviado']) )  {

		// Proceso del botón Insertar -- Inserción de un registro en la tabla

		if (isset($_POST['bt_insertar'])) {

			// preguntamos si el campo clave está vacío

			if (( $_POST['category'] != "" )  and ( $_POST['business'] != "" )) {
				$sql = "Insert Into biz_categories (business_id, category_id) Values ('";
				$sql.= mysql_real_escape_string($_POST['business']) . "', '";
				$sql.= mysql_real_escape_string($_POST['category']). "');";

				// Ejecución de la consulta para insertar un registro

				$result = mysqli_query($conexion, $sql);
					
				if ($result) {
					$mensaje = "Se ha insertado (".$_POST['business'].",".$_POST['category'].") en la tabla";
				}
				else {
					$mensaje = "La Operaci&oacute;n INSERCI&Oacute;N no se realiz&oacute;";
				}
			}
			else
				$mensaje = "Error...Debe seleccionar un elemento de cada select";
		}

		// Proceso del botón Buscar -- Búsqueda de un registro en la tabla Cliente mediante su clave

		// Proceso del botón Borrar -- Borrar un registro en la tabla Cliente mediante su clave
		// (este registro ya se obtuvo mediante una operación de búsqueda)

		if (isset($_POST['bt_borrar']) ) {
			if (( $_POST['category'] != "" )  and ( $_POST['business'] != "" )) {
					
				$sql = "DELETE FROM biz_categories ";
				$sql .= "WHERE (`category_id` = '";
				$sql .= $_POST['category']."') AND (`business_id` = '";
				$sql .= $_POST['business']."');";

				// Ejecución de la consulta para insertar un registro

				$result = mysqli_query($conexion, $sql);

				$filas_afectadas = mysqli_affected_rows($conexion);
				if ( $filas_afectadas == 0) {
				$mensaje = "La Operaci&oacute;n BORRADO no se realiz&oacute;";
			}
			else
				$mensaje = "Se ha borrado (".$_POST['business'].",".$_POST['category'].") en la tabla";
			}
			else
				$mensaje = "Error...Selecciona un elemento de cada select";
		}
	}
	?>

	<form ACTION="11-ver2-bd-empleo-operaciones-tabla-bizcategories.php"
		METHOD=POST>
		<table align="center" border="0">
			<tr>
				<td align="left" width="50">Category ID:</td>
				<td align="center" width="80"><select name="category">
						<option value="">Select a category</option>
						<?php
						while ( TRUE ) {
					$fila_cat = mysqli_fetch_array($res_categories, MYSQLI_ASSOC);
					if ($fila_cat == FALSE )
						break;
					?>
						<option value="<?php echo $fila_cat['category_id']; ?>">
							<?php echo $fila_cat['title']; ?>
						</option>
						<?php
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td align="left" width="50">Businesses ID:</td>
				<td align="center" width="80"><select name="business">
						<option value="">Select a business</option>
						<?php
						while ( TRUE ) {
					$fila_bus = mysqli_fetch_array($res_business, MYSQLI_ASSOC);
					if ($fila_bus == FALSE )
						break;
					?>
						<option value="<?php echo $fila_bus['business_id']; ?>">
							<?php echo $fila_bus['name']; ?>
						</option>
						<?php
				}
				?>
				</select>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><INPUT NAME="bt_insertar"
					TYPE="SUBMIT" VALUE="Insertar"> <INPUT NAME="bt_borrar"
					TYPE="SUBMIT" VALUE="Borrar">
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
