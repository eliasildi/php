<?php
// FRASE AL revez.(palindrome).

$frase="ROMA AMOR";

$i=0;
$cuentaletras=strlen($frase)-1;
$j=0;
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



// Ejercicio perfecto palindrome.

$frase="dabale arroz a la zorra el abad";

$i=0;
$j=strlen($frase)-1;
while ($i<$j) {
	if ($frase[$i]==$frase[$j]) {
		$i++;
		$j--;
	}
	
	elseif ($frase[$i]==' ') {
		$i++;
	}
	elseif ($frase[$j]==' ') {
		$j--;
	}
	else {
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