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

	// una de las primeras cosas que se deben aprender cuando se está
	// programando es que cuando se tiene un código que se ejecuta
	// muchas veces en dstintas partes del programa la mejor idea
	// es crear una subrutina independiente para llamarla cada vez
	// que la necesitemos. Esa simple medida nos permite conseguir un
	// código más legible, más compacto y más facil de depurar. A esta
	// subrutina se le conoce con el nombre de FUNCIÓN.

	// Por tanto una función es un bloque de código que realiza una tarea
	// bien definida y al que se le ha dado un nombre, para poder invocarlo
	// posteriormente.

	// esta función puede estar definida en el propio fichero del script
	// o puede estar definida de manera externa.

	// El esquema básico de una función es sencillo y es el que se
	// muestra a continuación:

	//	1. El programa principal llama a la función cada vez que necesite
	//     ejecutar la operación que tiene definida.
	//  2. La función recibe la llamada, opcionalmente también recibe
	//     valores con los que debe trabajar la función. A estos valores
	//     se llaman parámetros de la función.
	//  3. La función realiza las operaciones para la que fue diseñada.
	//  4. Al finalizar, opcionalmente puede devolver un resultado,
	//     devuelve el control al programa llamante. El resultado de una
	//     función se denomina el valor de retorno o el valor de la función.

	// TIPOS DE FUNCIONES

	// 1. Funciones nativas del lenguaje
	// 2. Funciones de extensión del lenguaje
	// 3. Funciones definidas por el usuario.

	// Las funciones nativas del lenguaje son las propias funciones
	// que ya vienen con el lenguaje, ejemplo: print, echo, las funciones
	// matemáticas, las de manipulación de string, de array, etc.

	// Las funciones de extención del lenguaje, son módulos que se
	// cargan para ampliar php para que se pueda realizar múltiples
	// usos. Ejemplo de estas extensiones son las de base de datos,
	// la de generación de pdf, la de manojos de protocolos de redes, etc.

	// La funciones definidas por el usuario

	// Son las que vamos a tratar en este tema.

	// Veremos los siguientes puntos

	// * Definir o declarar una función
	// * Usar la función


	// declarar o definir una funcion

	// function nombre_funcion( [param_1, param_2,...,param_n] )
	// {
	//
	//    instrucciones a ejecutar...
	//
	//      [ return $valor_a_retornar; ]
	// }

	// ejemplo de función con dos parámetros y que retorna un valor

	function concatenar($izq, $der)
	{
		// esta función concatena los dos string que se pasan por parametros
		$combi = $izq . $der;
		return $combi;
	}

	// ejemplo de función que no tiene parámetros y no retorna valor

	function Imprime_i()
	{
		$i = 3;
		echo $i."<br />";
	}

	// ejemplo de función que tiene parámetros y no retorna valor

	function genera_numeros( $long )
	{
		$i = 0;
		while ($i < $long)
			echo $i++."<br />";
	}

	// ejemplo de función que tiene parámetros y que retorna más de un valor
	// por eso se usa una array

	function intercambio( $a, $b)
	{
		$aux = $a;
		$a = $b;
		$b = $aux;

		return array($a,$b);
	}


	// uso ó llamada de las funciones

	// si la función no retorna valor

	// 		nombre_funcion( parametros_si_los_tiene );

	// si la función retorna valor

	// 		$variable_recoge = nombre_funcion( parametros_si_los_tiene );
	//
	// o en cualquier lugar dentro de una expresión
	//
	//      $variable = nombre_funcion( parametros ) otra_operaciones

	//function concatenar($izq, $der)
	//{
	//	// esta función concatena los dos string que se pasan por parametros
	//	$combi = $izq . $der;
	//	return $combi;
	//}

	$a = "Hasta Luego ";
	$b = "Lucas";
	echo "Ejecucion de la función concatenar()<br /><br />";
	$res = concatenar($a,$b);
	echo $res."<br />";
	echo "otra forma....<br />";
	echo concatenar($a,$b)."<br />";

	//function Imprime_i()
	//{
	//	$i = 3;
	//	echo $i."<br />";
	//}

	echo "Ejecucion de la función Imprime_i()<br /><br />";
	Imprime_i();

	//function genera_numeros( $long )
	//{
	//	$i = 0;
	//	while ($i < $long)
	//		echo $i++."<br />";
	//	}
	//}

	echo "Ejecucion de la función genera_numeros<br /><br />";

	genera_numeros(3);
	genera_numeros(6);

	//function intercambio( $a, $b)
	//{
	//	$aux = $a;
	//	$a = $b;
	//	$b = $aux;
	//
	//	return array($a,$b);
	//}

	echo "Ejecucion de la función intercambio<br /><br />";

	$valor1 = 15;
	$valor2 = 20;

	echo "Los valores intercambiados<br />";
	$res = intercambio($valor1, $valor2);
	echo $res[0]." ".$res[1];


	$valor1 = $res[0];
	$valor2 = $res[1];

	echo "<br />Despues del intercambio<br />";
	echo "<br />".$valor1." ".$valor2;
	?>

</body>
</html>
