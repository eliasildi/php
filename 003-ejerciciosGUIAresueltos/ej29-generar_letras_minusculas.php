<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejercicios de PHP</title>
</head>
<body>
	<h2>Simular el corte de una baraja espa&ntilde;ola</h2>
	<br />
	<?php

	$letra[0] = "a";
	$letra[1] = "b";
	$letra[2] = "c";
	$letra[3] = "d";
	$letra[4] = "e";
	$letra[5] = "f";
	$letra[6] = "g";
	$letra[7] = "h";
	$letra[8] = "i";
	$letra[9] = "j";
	$letra[10] = "k";
	$letra[11] = "l";
	$letra[12] = "m";
	$letra[13] = "n";
	$letra[14] = "ñ";
	$letra[15] = "o";
	$letra[16] = "p";
	$letra[17] = "q";
	$letra[18] = "r";
	$letra[19] = "s";
	$letra[20] = "t";
	$letra[21] = "u";
	$letra[22] = "v";
	$letra[23] = "w";
	$letra[24] = "x";
	$letra[25] = "y";
	$letra[26] = "z";

	// $letra=array("a","b","c"....)
	
	//$letra = "abcd....z"
	
	// $letra = range('a','z');


	for ($i = 1; $i <= 10; $i++)
		print $letra[mt_rand(0,26)]." ";

	?>
</body>
</html>
