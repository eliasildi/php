<?php

$x=array(17,23,13,9,100,24,11);
$i=0;
$n=count($x);

while ($i < $n-1){
  	$j=$i+1;
  	while ($j < $n){
  		if ($x[$i] > $x[$j]) {
  			$aux=$x[$i];
  			$x[$i]=$x[$j];
  			$x[$j]=$aux;
  		}
  		$j++;
  	}
  	$i++;
}
for ($i=0;$i<$n;$i++) {
	echo "$x[$i] ";
}
?>