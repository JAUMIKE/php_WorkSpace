<?php
    $x = 0xf;
    $y = "0xf";
    $resultA = $x.$y;
    $resultB = $x+$y;
    $resultC = dechex($x) . $y;  //dechex 10進位轉16進位
    echo "$resultA";
    echo "<hr>";
    echo "$resultB";
    echo "<hr>";
    echo "$resultC";
?>