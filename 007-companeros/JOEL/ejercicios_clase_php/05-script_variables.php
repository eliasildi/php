<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Primer Script en PHP</title>
</head>
<body>
	<p>Uso de variables en PHP</p>
	<?php

	$i = 0;   // a i se le asigna un valor entero
	print "El valor de i es $i <br />";
	$i = "HOLA";
	print "El valor de i es ahora una cadena : $i <br />";

	// asignación por valor
	echo '<p>Asignación por valor</p>';

	$var1 = "Hola";
	$var2 = 3;
	$var3 = $var2;

	print "$var1, $var2, $var3 <br />";

	// asignación por referencia
	echo '<p>Asignación por referencia</p>';

	$Cadena = "Tipo de dato string";
	$Ref = &$Cadena;    // en $Ref se guarda la dirección de $Cadena se usa &
	echo "El valor de Cadena es = $Ref<br />";
	echo "El valor de Ref es = $Cadena<br />";
	$Cadena =  "Asignamos otra cadena a la variable Cadena";
	echo "El valor de Ref es = $Ref<br />";
	$Ref = "Ahora asignamos otro valor a la cadena Ref";
	print "El valor de Cadena es = $Cadena<br />";

	?>
</body>
</html>
