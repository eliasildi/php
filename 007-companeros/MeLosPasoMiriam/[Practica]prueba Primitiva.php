<?php
$primitiva=array(1,23,28,32,37,39,48);
for ($i=0;$i<=6;$i++){
	if ($i == 0) {
		echo "$primitiva[1] ,$primitiva[2] ,$primitiva[3] ,$primitiva[4] ,$primitiva[5] ,$primitiva[6]</br>";
	}
	if ($i == 1) {
		echo "$primitiva[0] ,$primitiva[2] ,$primitiva[3] ,$primitiva[4] ,$primitiva[5] ,$primitiva[6]</br>";
	}	
	if ($i == 2) {
		echo "$primitiva[0] ,$primitiva[1] ,$primitiva[3] ,$primitiva[4] ,$primitiva[5] ,$primitiva[6]</br>";
	}	
	if ($i == 3) {
		echo "$primitiva[0] ,$primitiva[1] ,$primitiva[2] ,$primitiva[4] ,$primitiva[5] ,$primitiva[6]</br>";
	}	
	if ($i == 4) {
		echo "$primitiva[0] ,$primitiva[1] ,$primitiva[2] ,$primitiva[3] ,$primitiva[5] ,$primitiva[6]</br>";
	}	
	if ($i == 5) {
		echo "$primitiva[0] ,$primitiva[1] ,$primitiva[2] ,$primitiva[3] ,$primitiva[4] ,$primitiva[6]</br>";
	}	
	if ($i == 6) {
		echo "$primitiva[0] ,$primitiva[1] ,$primitiva[2] ,$primitiva[3] ,$primitiva[4] ,$primitiva[5]</br>";
	}
}
?>