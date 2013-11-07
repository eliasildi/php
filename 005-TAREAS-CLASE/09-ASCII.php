<?php

$n=0;
$cuenta=1;
for ($i=32; $i<=255; $i=$i+1) {
	$n=chr($i);
	echo "$n ";
	if (($cuenta % 10) == 0){
		echo "<br/>";
}
$cuenta++;
}



echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

#ASCCI

$n=0;

for ($i=32; $i<=255; $i=$i+1) {
	$n=chr($i);
	echo "$i ASCII, $n<br/>";
}

?>