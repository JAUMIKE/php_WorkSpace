<?php

$x = 100;
// 加上&會變成傳記憶體位址的概念

$y = &$x; //y傳址給x

$y = 200;
echo "x = $x </br>";


// unset($x);
unset($x); //unset = 清除值
echo "y = $y </br>";
echo "x = $x </br>";

?>