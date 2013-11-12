<?php
$n1=1;
$n2=50;
$n3=10;

if ($n1>$n2) {
	if ($n1>$n3) {
		if ($n2>$n3) {
			echo "muestra $n1,$n2,$n3 <br/>";
		}
		else {
			echo "muestra $n1,$n3,$n2 <br/>";
		}
	}
	else {
		if ($n3>$n2) {
			if ($n2>$n1) {
				echo "muestra $n3,$n2,$n3 <br/>";
			}
			else {
				echo "muestra $n3,$n1,$n2 <br/>";
			}
		}
	}
}
else {
	if ($n2>$n3) {
		if ($n3>$n1) {
			echo " muestra $n2,$n3,$n1 <br/>";
		}
		else {
			echo "muestra $n2,$n1,$n3 <br/>";
		}
	}
	else {
		echo "muestra $n3,$n2,$n1 <br/>";
	}
}
?>