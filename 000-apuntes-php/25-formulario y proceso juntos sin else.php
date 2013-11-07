 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Procesamiento formularios en PHP</title>
</head>
<body>

<!--

En este segundo ejemplo en el que el formulario esté incrustado
en el código del fichero que lo procesa,  se ejemplifica
como mostrar valores iniciales en los controles.

Para ello en la propiedad value se pondrá codigo php
que determinará si la variable tiene valor o no y se
asignará el correspondiente valor

En la parte de procesamiento del formulario
se preparan las variables que serán mostradas
en los controles

En este caso se elimina el else para que los valores
que se han cargado en los controles sean mostrados
por el formulario

-->


<?php

	if ( isset($_POST["control"])) {    // en este caso preguntamos por la variable oculta
//
//	if (isset($_POST["boton"])) {       // en este caso preguntamos por el boton
//
	print $_POST["nombre"]."<br />";
	print $_POST["mail"]."<br />";
	print $_POST["motivo"]."<br />";
	print $_POST["mensaje"]."<br />";
}
?>

<FORM ACTION="25-formulario y proceso juntos sin else.php" METHOD=POST>
	<table align="center" border="0">
		<tr>
			<td align="left" width="100">Nombre:</td>
			<td align="center" width="150"><INPUT NAME="nombre" MAXLENGTH="25"
				TYPE="TEXT" VALUE=""></td>
		</tr>
		<tr>
			<td align="left" width="100">Email:</td>
			<td align="center" width="150"><INPUT NAME="mail" MAXLENGTH="25"
				TYPE="TEXT" VALUE=""></td>
		</tr>
		<tr>
			<td align="left" width="100">Motivo:</td>
			<td align="center" width="150"><INPUT NAME="motivo" MAXLENGTH="25"
				TYPE="TEXT" VALUE=""></td>
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
	<INPUT NAME="control" MAXLENGTH="25" TYPE="hidden" VALUE="1">
</FORM>

</body>
</html>
