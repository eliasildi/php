<?php

$x = array(13,34,65,278,-10);
$i = 0;
$j = 4;
if ($x[$i++] < $x[$j++]) {
	echo "entro por el if y la posicion de i es $i y el valor $x[$i]<br/> ";
}
else {
	echo "entro por el else y la posicion de j es $i y el valor $x[$j]<br/> ";
}
?>