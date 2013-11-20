<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Procesamiento formularios en PHP</title>
</head>
<body>
	<h1>Procesar formulario con POST</h1>
	<br />

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

//if ( isset($_POST["control"])) {    // en este caso preguntamos por la variable oculta
//
	if (isset($_POST["boton"])) {       // en este caso preguntamos por el boton
//

if (isset($_POST["nombre"]))
	$form_nombre = "Inserte un nombre...";
if (isset($_POST["mail"]))
	$form_mail = "Inserte un e-mail...";
if (isset($_POST["motivo"]))
	$form_motivo = "Inserte un motivo...";
if (isset($_POST["mensaje"]))
	$form_mensaje = "Inserte un mensaje...";

}
?>

	<!--SE QUITA EL ELSE-->

	<FORM ACTION="22-02 formulario y proceso juntos.php" METHOD=POST>
		<table align="center" border="0">
			<tr>
				<td align="left" width="100">Nombre:</td>
				<td align="center" width="150"><INPUT NAME="nombre" MAXLENGTH="25"
					TYPE="TEXT"
					VALUE="<?php if (isset($form_nombre)) echo $form_nombre; else echo ""; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" width="100">Email:</td>
				<td align="center" width="150"><INPUT NAME="mail" MAXLENGTH="25"
					TYPE="TEXT"
					VALUE="<?php if (isset($form_mail)) echo $form_mail; else echo ""; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" width="100">Motivo:</td>
				<td align="center" width="150"><INPUT NAME="motivo" MAXLENGTH="25"
					TYPE="TEXT"
					VALUE="<?php if (isset($form_motivo)) echo $form_motivo; else echo ""; ?>">
				</td>
			</tr>
			<tr>
				<td align="left" width="100">Mensaje:</td>
				<td><TEXTAREA NAME="mensaje" ROWS=3 COLS=20>
						<?php if (isset($form_mensaje)) echo $form_mensaje; else echo ""; ?>
					</TEXTAREA>
				</td>
			</tr>
			<tr>
				<td widht="100"><INPUT NAME="boton" TYPE="SUBMIT" VALUE="Enviar"></td>
				<td align="right" width="100"><INPUT NAME="borrar" TYPE="RESET"
					VALUE="Limpiar">
				</td>
			</tr>
		</TABLE>
		<INPUT NAME="control" MAXLENGTH="25" TYPE="hidden" VALUE="1">
	</FORM>

</body>
</html>
