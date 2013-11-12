<?php

// escribir por pantalla de manera vertical el
// contenido del string $frase

$frase = "Hola como estas";
$longitudfrase = strlen($frase);
$i = 0;
while ( $i < $longitudfrase ){
	echo "$frase[$i]<br />";
	$i = $i + 1;
}

?>