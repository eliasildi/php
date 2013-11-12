<?php

// mostrar los caracteres ascii imprimibles 32 <= valor <= 126
// pero en este caso se muestran 10 caracteres por fila

echo "tabla ascii<br />";
$contador = 1;
for ($i = 32; $i <= 126; $i++) {
	$letra = chr($i);
	print "$letra  ";
	if (($contador % 10) == 0) {
		echo "<br />";
	}
	$contador++;
}

?>