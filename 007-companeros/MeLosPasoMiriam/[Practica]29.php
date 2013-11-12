<?php

$letra=range('a','z');

for ($i=1;$i<=20;$i++){
	echo $letra[mt_rand(0,26)]." ";
}
?>