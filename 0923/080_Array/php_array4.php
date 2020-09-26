<?php
    header("content-type: text/html; charset=utf-8");
    // "=>"  代表用key關聯內容值 
    $myArray = array(
        'myName'  =>  'Jeremy', 
        'myHeight'=>  191, 
        'myWeight'=>  91);
    echo "大家好，我的名字叫".$myArray['myName'];
    echo "<br>";
    echo "大家好，我的名字叫".$myArray[0]; //php陣列沒有index值
?>