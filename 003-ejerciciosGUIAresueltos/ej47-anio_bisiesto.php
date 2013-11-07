<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Programaci&oacute;n en PHP</title>
</head>
<body>
	<p>Verificar si un a&ntilde;o es bisiesto</p>
	<?php

	if ( isset($_GET['boton']) )   {
	$anio = (int)$_GET["numero"];
	if ( ($anio % 4 == 0) and
	     (($anio % 400 == 0) OR ($anio % 100 != 0)) )
		print "El a&ntilde;o $anio es Bisiesto <br />";
	else
		print "El a&ntilde;o $anio NO es Bisiesto <br />";
}
else {   // cerramos el código de php para mostrar el formulario
?>
	<form ACTION="ej47-anio_bisiesto.php" METHOD=GET>
		Introduzca un a&ntilde;o: <INPUT NAME="numero" size="5" MAXLENGTH="5"
			TYPE="TEXT" VALUE="" /><br /> <INPUT NAME="boton" TYPE="SUBMIT"
			VALUE="Enviar"><br />
	</FORM>
	<?php	
}
?>
</body>
</html>
