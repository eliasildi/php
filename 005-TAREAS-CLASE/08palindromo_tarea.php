<?php
$frase = "dabale arroz a la zorra el abad";
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
echo  'La frase ES palindrome<br />';
else
echo  'La frase NO es palindrome<br />';

?>