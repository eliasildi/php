<?php

//Que lea el texto de un fichero y cuente el numero de vocales que hay.

$contador=0;
echo "<br /><br />Uso de la función fgetc()<br /><br />";
$nombrefichero = "vocales.txt";
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$carleido = fgetc($fp);
	if ($carleido == "a") {
		$contador++;
	}
	elseif ($carleido == "e") {
		$contador++;
	}
	elseif ($carleido == "i") {
		$contador++;
	}
	elseif ($carleido == "o") {
		$contador++;
	}
	elseif ($carleido == "u") {
		$contador++;
	}
	else {
		
	}
}
echo "El numero de vocales del fichero: $nombrefichero es $contador<br />";


//para hacerlo con una funcion

//switch ($carleido) {
//	case 'a':
//	case 'e':
//	case 'i':
//	case 'o':
//	case 'u':
// y mas opciones si hay
//		$contador++
//		break;



//ejercicio de contar las vocales y decir de cada tipo.


echo "<br /><br />Uso de la función fgetc()<br /><br />";

$nombrefichero = "vocales.txt";
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");

$aa=array("a","e","i","o","u");
$bb=array("A","E","I","O","U");
$cc=array("á","é","í","ó","ú");
$contador=array(0,0,0,0,0);

while (! feof($fp) ) {
	$unaletra=fread($fp,1);
	for ($i=0; $i<5; $i++) {
		if ($aa[$i]==$unaletra) {
			$contador[$i]++;
		}
		elseif ($bb[$i]==$unaletra) {
			$contador[$i]++;
		}
		elseif ($cc[$i]==$unaletra) {
			$contador[$i]++;
		}

	}
		

}

echo "Las vocales a son: $contador[0]<br />";
echo "Las vocales e son: $contador[1]<br />";
echo "Las vocales i son: $contador[2]<br />";
echo "Las vocales o son: $contador[3]<br />";
echo "Las vocales u son: $contador[4]<br />";


// con 1 condicional... OR....OR....

echo "<br /><br />Uso de la función fgetc()<br /><br />";

$nombrefichero = "vocales.txt";
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");

$aa=array("a","e","i","o","u");
$bb=array("A","E","I","O","U");
$cc=array("á","é","í","ó","ú");
$contador=array(0,0,0,0,0);

while (! feof($fp) ) {
	$unaletra=fread($fp,1);
	for ($i=0; $i<5; $i++) {
		if (($aa[$i]==$unaletra) || ($bb[$i]==$unaletra) || ($cc[$i]==$unaletra)) {
			$contador[$i]++;
		}

	}


}

echo "Las vocales a son: $contador[0]<br />";
echo "Las vocales e son: $contador[1]<br />";
echo "Las vocales i son: $contador[2]<br />";
echo "Las vocales o son: $contador[3]<br />";
echo "Las vocales u son: $contador[4]<br />";


//con 1 solo array...

echo "<br /><br />Uso de la función fgetc()<br /><br />";

$nombrefichero = "vocales.txt";
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");

$aa=array(array("a","e","i","o","u"),array("A","E","I","O","U"),array("á","é","í","ó","ú")); //esto es una matriz.
$contador=array(0,0,0,0,0);

while (! feof($fp) ) {
	$unaletra=fread($fp,1);
		for ($j=0; $j<5; $j++) {
			for ($i=0; $i<3; $i++) {
				if ($aa[$i][$j]==$unaletra) {
					$contador[$i]++;
				}
			}
		}

}

echo "Las vocales a son: $contador[0]<br />";
echo "Las vocales e son: $contador[1]<br />";
echo "Las vocales i son: $contador[2]<br />";
echo "Las vocales o son: $contador[3]<br />";
echo "Las vocales u son: $contador[4]<br />";
	

	
	
	
	
	
	
	
	
	


?>