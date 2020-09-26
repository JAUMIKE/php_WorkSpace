<?php
    // phpinfo();
    //單行註解
    /*
    多行註解
    
    */
 function showMsg(){
     echo " show this message <br>";
 }

 $myVal1 = 10;
 if($myVal1 >= 100 & showMsg()){
    echo "this value >= 100 ";
 }else{
    echo "this value < 100 。<br><hr>";
 }

?>


<?php
  $testIP = `ping http://google.com`;
  echo nl2br($testIP); // NL2BR
?>
