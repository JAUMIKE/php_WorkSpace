<?php 
  $myArray = array('numx' => 100,'numy' => 200, 'numz' => 300);
  foreach($myArray as $key => $value){
      echo  $value."<br>";
  }
  var_export($myArray);
  echo "<br>";  
  print_r($myArray);  

  echo "<br>";
  $sArray = array('春','夏','秋','冬');
  foreach($sArray as $showSeason){
      echo $showSeason;
  }
  echo "<br>";
  for($i=0;$i<count($sArray);$i++){
      echo $sArray[$i];
  }
  $iArray = range(1,10,2);
  var_export($iArray);
?>


