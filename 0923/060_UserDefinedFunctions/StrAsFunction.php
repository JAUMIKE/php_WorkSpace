<?php

function testA($i) {
	return $i + 1;
}

function testB($i){
	return $i+100;
}
// $x = 1;
// echo test($x);

$x = 2;
$p = "testA";
echo $p($x)."<br>";

$y = "testB";
echo $y($x);
?>