<?php 
    $s = "01234567389";
    //取字串方法
    $result = substr($s,3,4);
    echo $result."<br>";
    //回傳長度
    $resultLen = strlen($s);
    echo $resultLen."<br>";
    //取代字串
    $resultReplace = str_replace("23","-",$s);
    echo $resultReplace."<br>";
    //找出第一個指定值
    $resultPos = strpos($s,"3",0);
    $resultPos01 = strpos($s,"x01",0);
    $resultPos02 = strpos($s,"01",0);
    echo $resultPos."<br>";
    echo gettype($resultPos01)."<br>";

    if($resultPos01>=0){
        echo "Yes!!"; 
    }else{
        echo "NO!!";      //因為沒找到該值，回傳false，false = 0，因此被判定為YES
    }
    echo "<hr>";
    if($resultPos02){
        echo "Yes!!";
    }else{
        echo "NO!!";  //回傳NO，因為strpos如果找到值會回傳該值的位置，因為01的值找到後回傳的位置是0，0在PHP被當成false，因此回傳為NO

    }
    echo "<br>";
    if($resultPos02 !== false){
        echo "Yes!!";  //使用!== 較為嚴謹的判斷
    }else{
        echo "NO!!";  

    }
?>
