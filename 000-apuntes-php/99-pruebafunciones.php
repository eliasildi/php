<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Bucles en PHP</title>
</head>
<body>
	<h1>Como usar bucles en PHP</h1>
	<br />
	<?php

	function A ($valor)
	{
		$aux = $valor."e";
		return $aux;
	}

	$devuelto = A("e");
	print "Devuelto es = $devuelto <br />";


	?>
</body>
</html>
