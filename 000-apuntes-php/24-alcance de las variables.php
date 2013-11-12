<?php 

// Alcance de las variables


// Las variables que se definen dentro de una función
// solo son accesibles dentro de la función.

// Cualquier variable que se haya definido fuera de las
// funciones, no se puede acceder a ellas desde dentro
// de la función, a no ser que se declaren como globales

// Ejemplo
//

$x = 3;

function A1()
{
	$x += 20; // es como escribvir $x = $x + 20   // // el $x vale 0 no coge el valor 3 de fuera
	echo "El valor de x ejecutando la funci&oacute;n A1 es: $x<br />";
}
echo "Mostrando que la variable externa no se puede acceder desde el interior de la función<br /><br />";

@A1(); // el @ quita el warning que aparece

echo "El valor de x despues de ejecutar la funci&oacute;n A1 es: $x<br />";

// Variables Globales

// Si queremos que una variable que está definida fuera de la función
// se pueda modificar dentro de la rutina, ésta debe ser declarada global
//
// Para ello se usa la instrucción global de la siguiente forma

$x = 3;

function A2()
{
	// declaramos $x como variable global, ahora la variable que se usa es la externa

	global $x;

	$x += 20;
	echo "El valor de x ejecutando la funci&oacute;n A2 es: $x<br />";
}

echo "<br />Mostrando la variable global se puede acceder desde el interior de la función<br /><br />";

A2();

echo "El valor de x despues de ejecutar la funci&oacute;n A2 es: $x<br />";

// Variables Estáticas

// Una variable estática es compartida entre todas las llamadas
// de una función, y se inicializa únicamente con la primera llamada
// de la función.

// Para declarar una variable estática se usa la palabra static.

function contador()  // ESTO PUEDE CAER EN EXAMEN
{
	static $cont = 0;
	// $cont = 0;
	return $cont++;
}

echo "<br />Mostrando la variable estatica<br /><br />";

for ($i = 1; $i <= 15; $i++)
	print contador()."<br />";

?>