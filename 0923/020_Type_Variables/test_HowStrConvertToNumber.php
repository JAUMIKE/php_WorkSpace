<?php
  $x = 1 + "10";  // 11
  $a = "11" + 1;  // 12
  $b = 1 + "x10"; // 1
  $c = 1 + "10x"; // 11
  $d = 1 + "11.5x";  // 12.5;
  $e = 1 + "x11.5";  // 1;
  
  echo $x;
  echo "<hr>";
  echo $a;
  echo "<hr>";
  echo $b;
  echo "<hr>";
  echo $c;
  echo "<hr>";
  echo $d;
  echo "<hr>";
  echo $e;
  echo "<hr>";
?>