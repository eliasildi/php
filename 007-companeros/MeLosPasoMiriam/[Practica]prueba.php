<?php

$n=20;
$i=1;
$n1=0;
$n2=1;

if ($n==1){
	echo "$n2 ";
}
elseif ($n==2){
	echo "$n1 $n2 ";
}
else {
	echo "$n1 $n2 ";
  	$i=3;
  	while ($i<= $n){
  		$fn=$n1+$n2;
  		echo "$fn ";
  		$n1=$n2;
  		$n2=$fn;
  		$i++;
  	}
}
?>