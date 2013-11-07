<?php

$x="ROMA AMOR";
$i=0;
$j=strlen($x)-1;

while ($i < $j) {
	$i++;
	$j--;
	if ($x[$i]==$x[$j]) {
		break;
	}	
}
if ($i <= $j) {
	echo "La frase es palindrome";
}
else {
	echo "No es palindrome";
}
?>