<?php

$nombrefichero = "texto1.txt";
$cont_a=0;
$cont_e=0;
$cont_i=0;
$cont_o=0;
$cont_u=0;

$fp = fopen($nombrefichero, "r") or die ("No existe el archivo $nombrefichero<br />");

while (! feof($fp) ) {
	$leido = fgetc($fp);
	
	switch ($leido){
		case 'a':
		case 'A':
			$cont_a++;
			break;
		case 'e':
		case 'E':
			$cont_e++;
			break;
		case 'i':
		case 'I':
			$cont_i++;
			break;
		case 'o':
		case 'O':
			$cont_o++;
			break;
		case 'u':
		case 'U':
			$cont_u++;
			break;
	}
}

echo "Hay $cont_a A, $cont_e E, $cont_i I, $cont_o O, $cont_u U<br />";

?>