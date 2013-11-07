<?php

// VARIABLES EN PHP

// Una variable es una zona de memoria a la que se le asigna un nombre
// que la identifica y que puede guradar valores que pueden cambiar
// a lo largo del programa ( de ahí el nombre de variable )

// en PHP el nombre de una variable empieza con el signo $
// seguido de una letra o _ (guión bajo)

// en PHP el nombre de las variables si distinguen mayúsculas de minúsculas.

// en PHP no es obligatorio declarar las variables antes de usarlas,

// en PHP una variable puede no tener un valor asignado, es decir, puede
// estar sin inicializar, ya que en este caso se le asigna un valor por defecto
// dependiendo del contexto en el que se está utilizando

$a = 0;
$c = $a + $b; // en este caso a $b se toma como 0

$a = "Hola";
$c = $a . $b; // . es la operación de concatenación de string en este caso $b = ""

// para asignar un valor a una variable se usa el signo =

// las variables pueden tomar valores de los distintos tipos de datos que existen en PHP
// en un momento de la ejecución del programa una variable puede tener un valor entero
// y en un momento posterior puede tener almacenado un string o un valor booleano.

// echo es una de las funciones de php que permiten mostrar valores en el navegador

$x1 = 23;
echo $x1;      // con echo se manda a escribir en php
echo "<br/>";
echo '<br/>';

// como se puede observar lo que se puede escribir con echo
// puede estar encerrado entre comillas simples o comillas dobles
// la diferencia está que lo que se pone dentro de la comilla simples
// se muestra literal tal cual como está, mientras que el contenido
// que se encuentra entre comillas dobles es intrepretado y las variables
// son reemplazadas por el valor que tengan en ese momento

$x1 = $x1 + 12;
echo "El resultado de la suma es: $x1<br/>";  // se interpreta
echo 'El resultado de la suma es: $x1<br/>';  // no se interpreta

$media = 13.5; // las variables pueden tomar valores decimales (flotantes)
echo "El valor de la variable media es $media <br />";

$palabra = "hola"; // también pueden tomar valores de tipo string.
echo $palabra;


?>