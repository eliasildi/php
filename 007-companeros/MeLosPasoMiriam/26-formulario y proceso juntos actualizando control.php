<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>
<h1>Procesar formulario con POST</h1>
<br />

<!--
En este primer ejemplo de que el formulario esté incrustado
en el código del fichero que lo procesa, se debe determinar
como reconocer que se debe presentar el formulario y cuando
se debe procesar los datos recogidos del mismo.

Para ello podemos usar varios métodos.

En el primero se usa una variable oculta que tendrá valor
cuando el formulario es enviado al presionar el botón de
envío.

Un segundo método más general es preguntar por el propio
botón si este se ha activado como consecuencia de haber
hecho clic sobre el.-->


<?php

if ( isset($_GET["control"])) {    // en este caso preguntamos por la variable oculta
	$nombre = $_GET["nombre"];
	$mail = $_GET["mail"];
	$motivo = $_GET["motivo"];
	$mensaje = $_GET["mensaje"];
	echo "Enviado correctamente";
}

?>

<FORM ACTION="26-formulario y proceso juntos actualizando control.php" METHOD=GET>
	<table align="center" border="0">
		<tr>
			<td align="left" width="100">Nombre:</td>
			<td align="center" width="150">
				<INPUT NAME="nombre" MAXLENGTH="25"
					   TYPE="TEXT" VALUE="<?php if (isset($nombre)) echo "$nombre"; ?>"></td>
		</tr>
		<tr>
			<td align="left" width="100">Email:</td>
			<td align="center" width="150">
				<INPUT NAME="mail" MAXLENGTH="25"
					   TYPE="TEXT" VALUE="<?php if (isset($mail)) echo "$mail"; ?>"></td>
		</tr>
		<tr>
			<td align="left" width="100">Motivo:</td>
			<td align="center" width="150">
				<INPUT NAME="motivo" MAXLENGTH="25"
					   TYPE="TEXT" VALUE="<?php if (isset($motivo)) echo "$motivo"; ?>"></td>
		</tr>
		<tr>
			<td align="left" width="100">Mensaje:</td>
			<td>
				<TEXTAREA NAME="mensaje" ROWS=3 COLS=20><?php if (isset($mensaje)) echo "$mensaje"; ?></TEXTAREA></td>
		</tr>
		<tr>
			<td widht="100"></td>
			<td align="right" width="150"><INPUT NAME="boton" TYPE="SUBMIT"
				VALUE="Enviar">
			</td>
		</tr>
	</TABLE>
	<INPUT NAME="control" MAXLENGTH="25" TYPE="hidden" VALUE="1">
</FORM>

</body>
</html>
