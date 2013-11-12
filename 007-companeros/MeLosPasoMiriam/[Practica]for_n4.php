<?php

$x=array(17,18,25,24,3,7,6,9);
$n=count($x);
$aux=0;

for ($i=0;$i<=$n;$i++){
	$aux=$x[$i];
	$x[$i]=$x[$n];
	$x[$n]=$aux;
	$n--;
}
$n1=count ($x);
for ($i=0;$i<=$n1;$i++){
	echo "$x[$i] <br/>";
}
?> 