<?php

$num=123;
$inv=0;
$cte=$num;

while ($cte<>0) {
	$resto=$cte%10;
	$inv=$inv*10+$resto;
	$cte=(int)($cte/10);	
}
if ($num==$inv) {
	echo "Es Capicua";
}
else {
	echo "No es capicua";
}
?>