<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Programaci&oacute;n -- Ejercicio de PHP</title>
</head>
<body>
<p>Generación de Contraseña</p>

<?php

// declaración de la función generarcontrasenia

function generarcontrasenia($long)
{
	$contaux = NULL; // la contraseña a generar
	
	$caracteres = "@#%&?¿+-*=/¡!"."0123456789"."abcdefghijklmnopqrstuvwxyz"."ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$valor_max = strlen( $caracteres ) - 1;
	$i = 1;
	while ( $i <= $long ) {
		$valor = mt_rand(0, $valor_max ); 
		$contaux .= $caracteres[$valor];  
		$i++;
	}
	return $contaux;	
}

// declaración de la función revisar

function revisar($contrasenia)
{

// revisamos que comienze por un caracter A..Z ó a..z

	if ( ( (ord($contrasenia[0]) >= ord('a')) and ( ord($contrasenia[0]) <= ord('z'))) or
		 ( (ord($contrasenia[0]) >= ord('A')) and ( ord($contrasenia[0]) <= ord('Z')))
	   )
		return TRUE;
	else
		return FALSE;

// revisa que al menos haya un dígito del 0..9
	
	//$i = 0;
	//$encontre = false;
	//$long = strlen($contrasenia);
	//while ( ($i < $long) and (! $encontre)) {
	//	if (( ord($contrasenia[$i]) >= 48 ) and  ( ord($contrasenia[$i]) <= 57) )
	//		$encontre = true;
	//	else
	//		$i++;
	//}
	//
	//if ( ! $encontre )
	//	return false;

// revisa que haya una letra mayúscula en la contraseña
		
	//$i = 0;
	//$encontre = false;
	//$long = strlen($contrasenia);
	//while ( ($i < $long) and (! $encontre)) {
	//	if ( (ord($contrasenia[$i]) >= 65 ) and  ( ord($contrasenia[$i]) <= 90) )
	//		$encontre = true;
	//	else
	//		$i++;
	//}
	//
	//if ( ! $encontre )
	//	return false;
	//else
	//	return true;
}

// programa principal

$longitud = 10;
$termine = FALSE;
while (! $termine ) {
	$auxcontr = generarcontrasenia( $longitud );
	if ( revisar( $auxcontr ) ) {
		print "la contraseña es = $auxcontr <br />";
		$termine = TRUE;
	}
}
?>
</body>
</html>