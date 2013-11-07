<?php

// script que procesa el formulario que recibe la frase
// utiliza el método get

echo "Procesando el formulario...<br /><br />";

$frase = $_GET["frase"];
$i = 0;
$j = strlen($frase) - 1;
$palindrome = TRUE;
while (($j > $i) and ( $palindrome ))
{
	if ($frase[$i] == $frase[$j])
	{
		$i++;
		$j--;
	}
	elseif ( $frase[$i] == ' ')
	$i++;
	elseif ($frase[$j] == ' ')
	$j--;
	else
		$palindrome = FALSE;
}
if ( $palindrome == TRUE )
	print 'La frase ES palindrome<br />';
else
	print 'La frase NO es palindrome<br />';
