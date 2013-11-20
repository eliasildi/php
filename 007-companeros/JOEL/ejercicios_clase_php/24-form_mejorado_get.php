<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>
	<h1>Formulario y procesamiento en el mismo fichero</h1>
	<br />
	<?php

	// la función isset devuelve true si una variable se le ha
	// asignado un valor

	if ( isset($_GET['enviado']) )
	{
		print $_GET["nombre"]."<br />";
		print $_GET["mail"]."<br />";
		print $_GET["motivo"]."<br />";
		print $_GET["mensaje"]."<br />";
	}
	// en el metodo POST los valores están en el array $_GET[]
	else
{ ?>
	<form ACTION="24-form_mejorado_get.php" METHOD=GET>
		<TABLE align="center" border="0">
			<tr>
				<td align="left" width="100">Nombre:</td>
				<td align="center" width="150"><INPUT NAME="nombre" MAXLENGTH="25"
					TYPE="TEXT" VALUE="" /></td>
			</tr>
			<tr>
				<td align="left" width="100">Email:</td>
				<td align="center" width="150"><INPUT NAME="mail" MAXLENGTH="25"
					TYPE="TEXT" VALUE="" /></td>
			</tr>
			<tr>
				<td align="left" width="100">Motivo:</td>
				<td align="center" width="150"><INPUT NAME="motivo" MAXLENGTH="25"
					TYPE="TEXT" VALUE="" /></td>
			</tr>
			<tr>
				<td align="left" width="100">Mensaje:</td>
				<td><TEXTAREA NAME="mensaje" ROWS=3 COLS=20></TEXTAREA></td>
			</tr>
			<tr>
				<td widht="100"></td>
				<td align="right" width="150"><INPUT NAME="boton" TYPE="SUBMIT"
					VALUE="Enviar">
				</td>
			</tr>
		</TABLE>
		<input type="hidden" name="enviado" value="1" />
	</FORM>
	<?php	
}
?>
</body>
</html>
