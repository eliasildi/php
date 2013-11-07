<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicios de PHP</title>
</head>
<body>
	<h2>Generación de enlaces</h2>
	<br />

	<?php

	if (isset($_POST["boton"])) {
?>
	<a href="<?php echo "http://".$_POST["direccion"]; ?>" target="_blank"><?php echo "Visite ... ".$_POST["empresa"]; ?>
	</a>
	<?php
}
else { ?>

	<FORM ACTION="ej43-generacion_enlaces_empresas_form.php" METHOD=POST>
		Nombre de la empresa :
		<INPUT NAME="empresa" SIZE="40" MAXLENGTH="40"
			TYPE="TEXT" VALUE="" /><br /> <br /> Dirección web:
		<INPUT NAME="direccion" SIZE="60" MAXLENGTH="60" TYPE="TEXT" VALUE="" /><br />
		<br /> <INPUT NAME="boton" TYPE="SUBMIT" VALUE="Procesar" />
	</FORM>

	<?php
}
?>

</body>
</html>
