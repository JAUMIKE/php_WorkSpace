<?php
$a = 20;
function myFunction($b) {
	// echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;
	//echo "a = $a<br>";
	return $c = ($b + $a);
}
echo $a;
echo "<hr>";

// 請預測答案是多少?
echo myFunction(40) + $c;
echo "<hr>";
echo myFunction(40);
echo "<hr>";
echo $c;

?>