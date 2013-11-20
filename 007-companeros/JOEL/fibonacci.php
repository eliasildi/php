
<?php
//Serie fibonacci.

$n=20;
$aa=0;
$bb=1;
$cc=0;
while ($cc<=$n) {
	echo "$cc<br />";
	$aa=$bb;
	$bb=$cc;
	$cc=$aa+$bb;
}
?>
