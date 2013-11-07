<?php

## DECIR SI EL NUMERO ES CAPICUA 123 por ejemplo dividimos entree 10 nos da 12 eso entre 10 nos da 1 y ya tenemos 321

$numero=123321;
$inverso=0;
$cte=$numero;

while ($cte <>0)
	{
		$resto=$cte%10; #% el tanto por ciento nos devuelve el resto
		$inverso=$inverso*10+$resto;
		$cte=(int)($cte/10);
	}
	if ($numero==$inverso)
	{
		echo "$numero es capicua<br/>";
	}
	else
	{
	echo "$numero NO es capicua<br/>";
	}

		
?>




