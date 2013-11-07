<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Funciones en PHP</title>
</head>
<body>
	<h2>Uso de funciones en PHP</h2>
	<br />

	<?php

	// En el ejercicio anterior hemos visto el uso de las funciones,
	// en algunas de ellas hemos puesto parámetros.

	// Los parámetros son valores que se pasan a la función
	// para que sean procesados por el código de la misma.
	// Existen tres tipos de parámetros:
	//
	//	1. Parámetros por valor
	//	2. Parámetros por referencia
	//	3. Parámetros predeterminados
	//
	// Los parámetros por valor
	//
	// Es el modo predeterminado para el paso de parámetros en PHP.
	// En este caso lo que se pasa a la función es una copia de del
	// valor pasado, esto es, si la función modifica dicho valor,
	// el cambio se ve reflejado en el interior de la función. Pero
	// el valor de la variable en el exterior no cambia.

	// Ejemplo

	function prueba1( $var1 ) {
		echo "*. Valor del parámetro recibido en función prueba: $var1 <BR /><BR />";
		$var1 = 100;
		echo "*. Valor de \$var1 modificado en función prueba: $var1 <BR /><BR />";
	}


	print "<B><U>Parámetros pasados por valor</U></B><BR /><BR />";

	$var1 = 12;
	echo "1. (antes de llamada a la función) valor de \$var1 en código principal: $var1 <BR /><BR />";

	prueba1($var1);

	echo "2. (después de llamada a la función) valor de \$var1 en código principal: $var1 <BR /><BR />";

	echo "Fin<br />";

	// Se modifica el valor del parámetro

	?>

	<?php
	//
	// Los parámetros por referencia
	//
	// En el ejemplo anterior hemos visto la modificación que se realiza a una variable
	// que es pasada como parámetro por valor no afecta en el código llamante.
	//
	// En el caso de pase de parámetros por referencia, el comportamiento anterior
	// es modificado porque ahora los cambios que se realicen en los parámetros
	// si se reflejan en el código que llama a la función.

	function prueba2(&$var2) {
    echo "*. Valor del parámetro recibido en función prueba: $var2 <BR /><BR />";
    $var2 = 100;
    echo "*. Valor del parámetro modificado en función prueba: $var2 <BR /><BR />";
}

print "<B><U>Parámetros pasados por referencia</U></B><BR /><BR />";

$var1 = 12;
echo "1. (antes de llamada a la función) valor de \$var1 en código principal: $var1 <BR /><BR />";

prueba2($var1);

echo "2. (después de llamada a la función) valor de \$var1 en código principal: $var1 <BR /><BR />";

echo "Fin<br />";

// Se modifica el valor del parámetro
// el parámetro aquí se llama $var2, pero ocupa la misma
// dirección que $var1 (se considera como una alias dentro de la función)
?>
	<?php
	//
	// Los parámetros predeterminados
	//
	//
	// En la definición de los parámetros de la función se puede declarar
	// un valor predeterminado para uno o varios de los parámetros, que se
	// usarán si al llamar a la función se omite el pase del parámetro. El valor
	// que se asigna al valor predeterminado debe ser constante, no puede
	// ser una variable.
	//
	// Los parámetros con valores predeterminados deben ser los últimos
	// en la declaración de parámetros.

	function prueba3($a, $b=6, $c=3) {
    print " La suma es " . ($a + $b + $c) .  "<BR /><BR />";
}

print "<B><U>Parámetros predeterminados</U></B><BR /><BR />";

$var1 = 12;

// 1. en este caso se pasa un valor

print "Caso 1 : ";
prueba3($var1);

// 2. en este caso se pasan dos valores

print "Caso 2 : ";
prueba3($var1, 100);

// 3. en este caso se pasan tres valores

print "Caso 3 : ";
prueba3($var1, 100, 200);

// 4. en este caso no se pasa ningún valor
// con @ evitamos el mensaje de error

print "Caso 4 : ";
@PRUEBA3();

// 5. en este caso no se pasa ningún valor
// saldrá un mensaje de Advertencia porque no hay parámetro 1

print "Caso 5 : ";
prueba3();

echo "Fin<br />";

// La función tiene un parámetro normal y dos con valores predeterminados

?>

</body>
</html>
