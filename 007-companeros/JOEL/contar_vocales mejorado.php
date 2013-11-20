<?php

$nombrefichero = "archivo01.txt";
$contvocal = 0;
$fp = fopen($nombrefichero, "r")  or die ("No existe el archivo \"$nombrefichero\"<br />");
while (! feof($fp) ) {
	$carleido = fgetc($fp);
	
	switch ($carleido) {
		case 'a':
		case 'e':
		case 'i':
		case 'o':
		case 'u':
		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U':
			$contvocal++;
		break;
	}
}

echo "El numero de VOCALES del fichero $nombrefichero es $contvocal <br />";
echo "<br /><br />Fin de la ejecución<br />";

?>