<?php

// arrays en php
//
// el array es la manera que hay para tener
// gran cantidad de datos bajo una misma denominación
// en la que sólo se difiere en la posición (índice)
//
// un ejemplo de array de números enteros

$x[0] = 1;
$x[1] = 2;
$x[2] = 3;
$x[3] = 4;
$x[4] = 5;
$x[5] = 6;

// un ejemplo de array de string

$s[0] = "hola";
$s[1] = "como";
$s[2] = "estas";


// en los dos casos anteriores el índice es un número
// entero. En los array el indice siempre va del valor
// 0 hasta el número de elementos - 1, es decir
// que en los ejemplos anteriores
//
// el primer elemento es $x[0] y $s[0]
// y el último elemento es $x[5] y $s[3]
//
// otra forma de llenar el array s anterior puede ser
//
$s1[] = "hola";
$s1[] = "como";
$s1[] = "estas";


//	obteniendose el mismo resultado que antes
//
// hay que ter cuidadado porque los array en php
// no tienen porque tener elementos consecutivos

$x1[0] = 10;
$x1[5] = 20;
$x1[10]= 30;

// en este caso el array tiene 3 elementos en las posiciones
// 0, 5 y 10
//
// a la hora de escribir los elementos del último array
// no se podrá hacer de la manera convencional ya que dará error


echo "<br />ejemplo de escritura array eltos no contiguos<br /><br />";
$i=0;
$nroelementos = count($x1);
while ( $i < $nroelementos ) {
	print "posicion $i tiene el valor $x1[$i]";
	$i++;
}
echo "<br />";

// en estos casos se debe utilizar el bucle foreach
// la forma de utilizar el foreach es la siguiente

//  foreach (array as $nombre_variable) {
//
//      las instrucciones a ejecutar UTILIZAN  $nombre_variable
//
//  }


echo "<br />usando el foreach con un array con índice numérico<br />";

foreach ($x1 as $aux) {
	print "este elemento tiene el valor $aux<br />";
}

// los elementos de un array no tienen porque ser del mismo tipo
// es decir sus elementos pueden ser de diferente tipo.
//
$x2[0] = 1;
$x2[1] ="abc";
$x2[2] = 17.50;

echo "<br />usando el foreach con array de <> elementos<br />";
$nroelemento = 1;
foreach ($x2 as $aux) {
	print "el elemento tiene el valor $aux<br />";
	$nroelemento++;
}

// en los array los índices no tienen porque ser numéricos
// sino que también pueden ser string -- arrays asociativos

$links = array("The Apache Web Server" => "www.apache.org",
		       "Apress" => "www.apress.com",
		       "The PHP Scripting Language" => "www.php.net");

echo "<br />Mostrando un array asociativo<br />";
echo "<br />Direcciones web:<br /><br />";
foreach($links as $title => $aux) {
	echo "$title *** $aux<br />";
}

// ejemplo

$Nombre[0]="Jose";
$Nombre[10]="Alberto";
$Nombre[20]="Raul";
$Nombre[30]="Pedro";
$Nombre[40]="Emilio";
$Nombre[50]= 13;  // un array no es de un tipo determinado
$Nombre[]= "Al final posicion 6"; // agrega un elemento al final
$Nombre[80]="El ultimo en pos 80";

/*
 $i = 0;
while ($i <= 7)
{
print "El nombre en posicion i es = $Nombre[$i]<br/>";
$i++;
}
*/
$i=0;
foreach ($Nombre as $aux)
{
	print "El en la posicion $i es = $aux<br/>";
	$i++;
}



// funciones de php para array
//
// FUNCION COUNT()
//
// la funcion count devuelve el nro de elementos que tiene el array
//
//

echo "<br />Probando la función count()<br />";
$x2[0] = 1;
$x2[1] ="abc";
$x2[2] = 17.50;
$nroelemento = count($x2);
echo "<br />El número de elementos del array x2 es = $nroelemento<br />";

// FUNCION SORT()
//
// la función sort() ordena de manera creciente los elementos de un array
//

echo "<br />Probando la función sort()<br />";
$x2[0] = 15;
$x2[1] = 3;
$x2[2] = 17;
echo "<br />El array antes de ordenar<br />";

foreach ($x2 as $aux) {
	print "$aux ";
	$nroelemento++;
}
echo "<br />";
sort($x2);
echo "<BR />El array después de ordenar<br />";
foreach ($x2 as $aux) {
	print "$aux<br />";
	$nroelemento++;
}

// FUNCION ARRAY()
//
// la función array() permite crear un array con índice numérico
// o con ídice asociativo. la forma de utilizar es:
//

$x2 = array(13,56,23); // crea un array de tres elementos con índice numérico
$sexo = array("hombre", "mujer"); //crea un array de dos elementos
$idiomas = array( "España" => "español",
		"Estados Unidos"=> "inglés",
		"Francia" => "francés",
		"China" => "chino");

// FUNCTION RANGE()
//
// la función range permite generar una secuencia de números
// desde un valor inicial hasta un valor final, incrementándolo
// en un valor determinado
// la función range tiene el siguiente formato
//
// 		range(valorinicial, valorfinal [,incremento])
//
$x2 = range(3,15,2); // (3,5,7,9,11,13,15)
//
// también se puede utilizar para generar una secuencia de caracteres
//
$aux = range('A','F'); // (A,B,C,D,E,F)

// FUNCIÓN PRINT_R()
//
// esta función permite escribir un array en su totalidad,
// aunque sólo se debe utilizar para testeo ya que el formato
// de salida no es bueno
//

$aux = range('A','D'); // (A,B,C,D)
echo "<br />uso de print_r<br />";
print_r($aux);
echo "<br />";

// FUNCIÓN IS_ARRAY()
//
// la función is_array() sirve para preguntar si una variable
// es de tipo array. En caso afirmativo devuelve TRUE y falso
// en el caso contrario
//
echo "<br />probando la función is_array<br />";
$states = array("Florida", "New York");
$state = "Ohio";
printf("\$states is an array: %s <br />",
(is_array($states) ? "TRUE" : "FALSE"));
printf("\$state is an array: %s <br />",
(is_array($state) ? "TRUE" : "FALSE"));

// Aquí hemos introducido un nuevo operador
//
// el operador ? : funciona de la siguiente forma
//
// condicion_a_evaluar ? intruccion si verdad : instruccion si falso

// FUNCIÓN ARRAY_UNSHIFT()
//
// la función array_unshift() permite añadir un elemento al
// comienzo de un array. Si los indices son numéricos se añade
// 1 a cada uno de ellos, siendo el nuevo elemento el que tiene
// el índice de valor 0.
//
// el prototipo de la función es el que se muestra acontinuación
//
// int array_unshift(array, valor_añadir [, valor_añadir...])

echo "<br />probando array_unshift<br />";
$states = array("Ohio","New York");
array_unshift($states,"California","Texas");

foreach ($states as $aux) {
	print "$aux<br />";
}

// FUNCIÓN ARRAY_PUSH()
//
// la función array_push()añade un elemento al final del array
//
// el prototipo de la función es el que se muestra a continuación
//
// int array_push(variable_array, valor_añadir [, valor_añadir...])

echo "<br />Probando array_push<br />";
$states = array("Ohio","New York");
array_push($states,"California","Texas");
foreach ($states as $aux) {
	print "$aux<br />";
}

// FUNCIÓN ARRAY_SHIFT()
//
// la función array_shift elimina y retorna el primer elemento
// del array, reduciendo en 1 el índice del resto de elementos
// que se quedan en el array
//
// el prototipo de la función es el que se muestra
//
//   $variable = array_shift( array )

echo "<br />probando array_shift<br />";
$states = array("Ohio","New York","California","Texas");
$state = array_shift($states);
foreach ($states as $aux) {
	print "$aux<br />";
}
echo "<br />el valor de la variable \$state = $state<br />";

// FUNCIÓN ARRAY_POP()
//
// la función array_pop elimina y retorna el último elemento del
// array
//
// el prototipo de la función es el que se muestra
//
//   $variable = array_pop( array )

echo "<br />probando array_pop<br />";
$states = array("Ohio","New York","California","Texas");
$state = array_pop($states);
foreach ($states as $aux) {
	print "$aux<br />";
}
echo "<br />el valor de la variable \$state = $state<br />";

// FUNCIÓN IN_ARRAY()
//
// la función in_array() busca un elemento dentro de un array
// devuelve TRUE si lo consigue y FALSE sino
//
//  in_array(valor_buscar, array [, verifica_tipo])
//
// verifica tipo un valor booleano si quiere que se compruebe tipo

echo "<br />probando in_array<br />";
$state = "Ohio";
$states = array("California", "Hawaii", "Ohio", "New York");
if (in_array($state, $states))  {
	echo "el valor buscado estaba en el array<br />";
}

// FUNCIÓN ARRAY_KEY_EXISTS()
//
// la función array_key_exists es igual a la anterior pero con
// array asociativos
//
// su prototipo es el siguiente
//
//	boolean array_key_exists( clave_a_buscar, array)

echo "<br />probando array_key_exists<br />";
$estado["Delaware"] = "December 7, 1787";
$estado["Pennsylvania"] = "December 12, 1787";
$estado["Ohio"] = "March 1, 1803";
if (array_key_exists("Ohio", $estado)) {
	printf("Ohio joined the Union on %s<br />", $estado["Ohio"]);
}

// FUNCIÓN ARRAY_SEARCH()
//
// la función array_search() busca un elemento en un array asociativo,
// si lo encuentra retorna la clave donde está ese elemento en el
// array y sino retorna FALSE
//
// el prototipo es el siguiente
//
// $valor_devuelto = array_search(valor_buscar, array [, strict])
//
// el parámetro strict es booleano y si se pone a TRUE es que
// queremos también la igualdad de tipos

echo "<br />probando array_search<br />";
$estado2["Ohio"] = "March 1";
$estado2["Delaware"] = "December 7";
$estado2["Pennsylvania"] = "December 12";
$founded = array_search("December 7", $estado2);
if ($founded)
	printf("%s was founded on %s.<br />", $founded, $estado2[$founded]);

?>