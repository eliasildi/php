<?php

// mostrar los caracteres ascii imprimibles 32 <= valor <= 126
// cada caracter se imprime en una línea

for ($i = 32; $i <= 255; $i++) {
	$letra = chr($i);
	print "Ascii nro: $i  su caracter es = $letra <br />";
}

?>