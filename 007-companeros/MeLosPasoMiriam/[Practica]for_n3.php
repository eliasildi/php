<?php

$x=array(17,18,25,24,3,7,6,9);
$n=count($x);
$suma=0;

for ($i=0;$i<$n;$i++){
	$suma=$suma+$x[$i];
}
$media=$suma/$n;
echo "La media es $media";
?>