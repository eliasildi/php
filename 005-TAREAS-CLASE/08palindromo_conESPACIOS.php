<?php
$frase="ROMA AMOR";
$i=0;
$j=strlen($frase)-1;
while (($frase[$i]==$frase[$j]) OR (($frase[$i]==' ') OR ($frase[$j]==' ') )
{
$i=$i+1;
$j=$j-1;
if($i>=$j){
break;
}
}
if ($i>=$j){
echo"$frase es palindromo";
}
else {
echo"$frase no es palindromo<br/>";
}

?>