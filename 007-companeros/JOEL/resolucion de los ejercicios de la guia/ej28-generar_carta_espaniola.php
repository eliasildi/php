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

	$numero[0] = "as";
	$numero[1] = "2";
	$numero[2] = "3";
	$numero[3] = "4";
	$numero[4] = "5";
	$numero[5] = "6";
	$numero[6] = "7";
	$numero[7] = "8";
	$numero[8] = "9";
	$numero[9] = "sota";
	$numero[10] = "caballo";
	$numero[11] = "rey";

	$palo[0] = "oros";
	$palo[1] = "copas";
	$palo[2] = "bastos";
	$palo[3] = "espadas";

	$numcarta = mt_rand(0,11);
	$valorpalo = mt_rand(0,3);

	print "la carta generada es $numero[$numcarta] de $palo[$valorpalo]<br />";

	?>
</body>
</html>
