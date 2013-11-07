<?php
$frase="ROMA AMOR";
$i=0;
$j=strlen($frase)-1;
while ($frase[$i]==$frase[$j])
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
#otro modo
$frase="salta lenin el atlas";
$i=0;
$j=strlen($frase)-1;
while ($i<$j) {
	
	if ($frase[$i]==$frase[$j]){
		$i=$i+1;
		$j=$j-1;
	}
	elseif ($frase[$i]==' '){
		$i=$i+1;
		}
		elseif ($frase[$j]==' '){
			$j=$j-1;
	}
	else {
		break;
	}
}
		
if ($i>=$j){
	echo "frase es palindromo";
}
else {
	echo "frase no es palindromo<br/>";
}
?>