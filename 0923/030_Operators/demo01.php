<?php
    $x = 500;
    $z = ($y = $x); 
    echo ($y = TRUE)."<br>";
    echo ($y=$x)."<br>"; //($y = $x) 有return值的概念
    echo $z; //z = 500

?>