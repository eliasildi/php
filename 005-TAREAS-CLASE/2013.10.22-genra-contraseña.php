<?php
$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$cad = "";
for($i=0;$i<12;$i++) {
	$cad .= substr($str,rand(0,62),1);
}
print $cad;
?>