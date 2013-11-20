<?php

// verificar si un número es capicua

$valorleido = 1221;
$numinv = 0;
$cociente = $valorleido;
while ( $cociente != 0)
{
	$resto = $cociente % 10;
	$numinv = $numinv * 10 + $resto;
	$cociente = (int)($cociente / 10);
}
if ( $valorleido == $numinv )
	print "El n&uacute;mero $valorleido Es capic&uacute;a<br />";
else
	print "El n&uacute;mero $valorleido NO es capic&uacute;a<br />";
?>