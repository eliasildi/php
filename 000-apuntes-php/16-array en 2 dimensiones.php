<?php

// ARRAYS EN DOS DIMENSIONES
//
// Ejemplos de array de dos dimensiones los podemos
// tener en el plano cartesiano, en el tablero de ajedrez,
// en la estadisticas de dos dimensiones, almacenar los datos de fotos, etc.
//
// por eso es útil los arrays de dos dimensiones (matrices)
//
// Una matriz como la siguiente
//
//		(5) columnas el índice va de 0..4
//
//		      1  3  5  8  2
//	3 filas	  3  9  0  3  5
//	 0..2	  8  1  0  7  6
//
//  donde el elemento 7 de la tercera fila y cuarta columna se puede
//  se puede referenciar como matriz[2][3]
//
// como se puede apreciar ahora se tiene otro par de [] para la nueva
// dimensión.
//				$matriz[ fila ][ columna ]
//
// la matriz anterior se llena de forma manual de la siguiente forma
//
$matriz[0][0] = 1;
$matriz[0][1] = 3;
$matriz[0][2] = 5;
$matriz[0][3] = 8;
$matriz[0][4] = 2;
$matriz[1][0] = 3;
$matriz[1][1] = 9;
$matriz[1][2] = 0;
$matriz[1][3] = 3;
$matriz[1][4] = 5;
$matriz[2][0] = 8;
$matriz[2][1] = 1;
$matriz[2][2] = 0;
$matriz[2][3] = 7;
$matriz[2][4] = 6;

// el procedimiento para crear la matriz anterior usando
// la instrucción array
//
//
$matriz = array( array( 1, 3, 5, 8, 2 ), array( 3, 9, 0, 3, 5 ), array( 8, 1, 0, 7, 6 ));
//
//	Es obvio que para recorrer una matriz como la anterior se debe usar dos bucles anidados
//
//  Si queremos usar los bucles condicionales while, for, do while deberemos
// 	averiguar primero el número de filas y de columnas que tiene la matriz
//	Para ello debemos usar la función count()
//
// Para averiguar el número de filas se pasa a la función count()
// la variable que representa la matriz
//  Para averiguar el número de columnas se pasa a la función la fila a la que se quiera
//  contar los elementos

echo "<br />Mostrando el nro de filas y columnas de la matriz<br />";
$nfil = count($matriz);
$ncol = count($matriz[0]);
echo "la matriz \$matriz tiene $nfil filas y $ncol columnas<br />";

//  El recorrido de la matriz para escribirla es el que se muestra a continuación
//
echo "<br />Los elementos de la matriz son <br /><br />";
$i = 0; // se moverá por las filas
while ( $i < $nfil ) {
	$j = 0;
	// $ncol = count($matriz[$i]);
	while ( $j < $ncol ) {
		echo $matriz[$i][$j]."   ";
		$j++;
	}
	echo "<br />";
	$i++;
}

// Un ejemplo de una matriz multidimensional asociativa
// es el que se puede obtener si queremos representar
// los valores de esta tabla

// 	First key        Second key         Value
// 	Soda can           Shape           Cylinder
// 	                   Color           Red
// 			  		   Material        Metal
// 	Notepad		       Shape           Rectangle
// 	                   Color           White
// 			           Material        Paper
// 	Apple              Shape           Sphere
// 	                   Color           Red
// 			           Material        Fruit
// 	Orange             Shape           Sphere
// 	                   Color           Orange
// 			           Material        Fruit
// 	Phonebook          Shape           Rectangle
// 	                   Color           Yellow
// 			           Material        Paper
//
// Para crearla
//
$objects=array(	'Soda can' => array('Shape' => 'Cylinder',
		        'Color'    => 'Red',
		        'Material' => 'Metal'),
			   
		        'Notepad' => array('Shape'    => 'Rectangle',
		        'Color'    => 'White',
				'Material' => 'Paper'),
				'Apple' => array('Shape'    => 'Sphere',
				'Color'    => 'Red',
				'Material' => 'Fruit'),
				'Orange' =>array('Shape'    => 'Sphere',
				'Color'    => 'Orange',
				'Material' => 'Fruit'),
				'Phonebook' =>  array('Shape'    => 'Rectangle',
				'Color'    => 'Yellow',
				'Material' => 'Paper'));

echo "<br /><br />Los elementos de la matriz asociativa son <br /><br />";
print_r($objects);

?>