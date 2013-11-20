<?php

//Saber si un numero es capicua

$numero=123;

$inverso=0;

$cociente=$numero;

while ($cociente <>0){
	$resto=$cte%10;
	$inverso=$inverso*10+$resto;
	$cte=(INT)($cte/10);
}

if ($numero==$inverso) {
	echo "$numero es capicua<br />";
}
	else {
		echo "$numero NO es capicua<br />";
	}
	
	
	
// FRASE AL revez.

	$frase="ROMA AMOR";
	
	$i=0;
	$cuentaletras=strlen($frase)-1;
	
	while ($frase[$i]==$frase[$j]) {
		$i=$i+1;
		$j=$j-1;
		if ($i>=$j) {
			break;
		}
		
		
	}
if ($i>=$j) {
	echo "$frase es palindrome<br />";
}

else { 
	echo "$frase no es palindrome<br />";
}
?>