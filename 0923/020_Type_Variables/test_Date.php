<?php
  date_default_timezone_set('Asia/Taipei');  //加上這行時區才會正常
  // echo date("Y-m-d H:i:s");
  $x = getdate();
  echo gettype($x), "<br>";
  print_r($x);
  print($x);
  
  echo "<hr>"; 

  $x = date('Y-m-d H:i:s',0); //dateformat
  $x = date('Y-m-d H:i:s'); //2020-09-23 13:30:00
  echo $x, "<br>";
  echo gettype($x), "<br>";
  
  echo "<hr>";

  $x = gmdate('Y-m-d H:i:s'); 
  echo $x, "<br>";
  
  echo "<hr>";

  $x = strtotime(date('Y-m-d H:i:s'));
  $y = strtotime("2020-09-23 00:00:00");
  echo $x, "<br>";
  echo $y, "<br>";
  echo gettype($x), "<br>";
  echo gettype($y), "<br>";
  
?>