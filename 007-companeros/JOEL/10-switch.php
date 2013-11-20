<?php

// SWITCH EN PHP
//
// el operador switch es un condicional que permite
// comparar el valor de una variable con varios valores
// permitiendo ejecutar distintas acciones dependiendo del valor
// al que se haya igualado, o ejecutar las opciones por defecto
// si no es igual a ninguno de los valores establecidos
//
// el formato es el que se muestra a continuación
/*
 switch  ( $variable ) {
case valor 1:
	instrucciones a ejecutar para valor 1
	break;
case valor 2:
	instrucciones a ejecutar para valor 2
	break;
.
.
.
case valor n:
	instrucciones a ejecutar para valor n
	break;
default:
	instrucciones a ejecutar para el default
}


*/

$valormes = -1;

switch ($valormes) {
	case 1:
		echo "es el mes de enero<br />";
		break;
	case 2:
		echo "es el mes de febrero<br />";
		break;
	case 3:
		echo "es el mes de marzo<br />";
		break;
	case 4:
		echo "es el mes de abril<br />";
		break;
	case 5:
		echo "es el mes de mayo<br />";
		break;
	case 6:
		echo "es el mes de junio<br />";
		break;
	case 7:
		echo "es el mes de julio<br />";
		break;
	case 8:
		echo "es el mes de agosto<br />";
		break;
	case 9:
		echo "es el mes de septiembre<br />";
		break;
	case 10:
		echo "es el mes de octubre<br />";
		break;
	case 11:
		echo "es el mes de noviembre<br />";
		break;
	case 12:
		echo "es el mes de diciembre<br />";
		break;
	default:
	echo "el valor de la variable está fuera de rango<br />";
}

// a veces queremos que se ejecuten la misma acción para varios valores de
// la variable, en ese caso agrupamos las opciones tal y como se muestra
// en el siguiente ejemplo

// ejemplo de switch con valores anidados

$valormes = 5;

switch ($valormes) {
	case 1:
	case 2:
	case 3:
		echo "el mes pertenece al primer trimestre<br />";
		break;
	case 4:
	case 5:
	case 6:
		echo "el mes pertenece al segundo trimestre<br />";
		break;
	case 7:
	case 8:
	case 9:
		echo "el mes pertenece al tercer trimestre<br />";
		break;
	case 10:
	case 11:
	case 12:
		echo "el mes pertenece al cuarto trimestre<br />";
		break;
	default:
		echo "el valor de la variable está fuera de rango<br />";
}

// el tipo de datos de la variable no tiene porque ser entero
// en este caso es un string, aunque no puede tomar valores decimales (float)

$estudios = "tel";

switch ($estudios){
	case "asir":
	case "daw":
	case "rca":
	case "tur":
		echo "el estudio corresponde a un cfgs<br />";
		break;
	case "aut":
	case "ele":
	case "tel":
		echo "el estudio corresponde a un cfgm<br />";
		break;
	default:
		echo "no es de un ciclo formativo<br />";
}

?>