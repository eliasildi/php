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
	//
	// PHP permite que la lista de parámetros que se pase a una función
	// sea variable. Para hacerlo se tienen definida las siguientes funciones:
	//
	// func_num_args() Devuelve la cantidad de parámetros realmente recibidos
	//
	// func_get_arg(pnum) Devuelve el elemento pnum de la matriz de parámetros
	//                    Es una función que sólo se puede usar dentro de una
	//                    función.
	//
	// func_get_args() Devuelve el array de parámetros
	//                 Es una función que sólo se puede usar dentro de una
	//                 función.
	//

	// función con lista variable de parámetros

	function prueba() {

		// func_num_args() devuelve la cantidad de parámetros

		$params = func_num_args();
		echo "Cantidad de par&aacute;metros recibidos: $params<BR/>\n";
			
		for ($i = 0; $i <$params; $i++) {
			// func_get_arg() devuelve los parámetros de a uno
			echo func_get_arg($i) . "<BR/>";
		}
			
		// func_get_args() devuelve una matriz con la lista de elementos
		$mat = func_get_args();
		echo "La suma es " . array_sum($mat) . "<BR/>";
			
	}

	print "<B><U>Lista variable de par&aacute;metros</U></B><BR/><BR/>";

	// llamada a la función con 6 parámetros
	echo "<B>Ejemplo 1 </B><BR/>";
	prueba( 777, 2, 3, 5, 8, 9 );

	// llamada a la función con 2 parámetros
	echo "<BR/><B>Ejemplo 2 </B><BR/>";
	prueba( 100, 20 );

	// llamada a la función sin parámetros
	echo "<BR/><B>Ejemplo 3 </B><BR/>";
	prueba();

	echo "<BR/>Fin";


	function A( $valor1, $valor2=100, $valor3=6 )  //crear la función
	{

		// func_num_args(); devuelve el numero de parametros
		//                  que han pasado a la función

		$numeroparametros = func_num_args();
		print "<br />El numero de parametros pasados es = $numeroparametros<br />";

		// func_get_arg(i);  devuelve el parámetro almacenado en la posicion i
		//                   si hay n parámetros están en la posicion 0..n-1


		/*
		 $valor1 += 1;
		$valor2 += 1;
		$valor3 += 1;
		print "<br />Estoy dentro de la funci&oacute;n<br />";
		print "El par&aacute;metro tiene el valor = $valor1 <br />";
		print "El par&aacute;metro tiene el valor = $valor2 <br />";
		print "El par&aacute;metro tiene el valor = $valor3 <br />";

		*/

		$i = 0;
		$final = func_num_args();
		while ($i < $final)
		{
			$parametro = func_get_arg($i);
			print "el parametro $i es igual a = $parametro <br />";
			$i++;
		}

		$salida[0] = 0; // construimos el array que vamos a devolver
		$salida[1] = "hola";
		return $salida;
	}


	$i = 0;
	$j = 1;
	$k = 2;
	print "<br />Estoy dentro del principal antes de la funci&oacute;n<br />";
	print "La variable i tiene el valor = $i <br />";
	print "La variable j tiene el valor = $j <br />";
	print "La variable k tiene el valor = $k <br />";

	$valordevuelto = A($i);
	print "El valor 0 devuelto por la funci&oacute;n es = $valordevuelto[0] <br />";
	print "El valor 1 devuelto por la funci&oacute;n es = $valordevuelto[1] <br />";

	$valordevuelto = A($i,$j);
	print "El valor 0 devuelto por la funci&oacute;n es = $valordevuelto[0] <br />";
	print "El valor 1 devuelto por la funci&oacute;n es = $valordevuelto[1] <br />";

	$valordevuelto = A($i,$j,$k);
	print "El valor 0 devuelto por la funci&oacute;n es = $valordevuelto[0] <br />";
	print "El valor 1 devuelto por la funci&oacute;n es = $valordevuelto[1] <br />";

	print "<br />Estoy dentro del principal despu&eacute;s de la funci&oacute;n<br />";
	print "La variable i tiene el valor = $i <br />";
	print "La variable j tiene el valor = $j <br />";
	print "La variable k tiene el valor = $k <br />";

	?>

</body>
</html>
