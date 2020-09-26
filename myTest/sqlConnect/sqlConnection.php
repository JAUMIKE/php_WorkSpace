<?php
    header("Content-Type: text/html; charset=utf-8");
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "class";

    $link = mysqli_connect($db_host,$db_username,$db_password);
    mysqli_select_db($link,"class");
    //如果錯誤訊息出現則顯示連線失敗
    if($link -> connect_error !=""){
        echo "資料庫連結失敗!";
    }else{
        //連線成功後設定字元集
       mysqli_query($link,"set names utf-8");
       echo "資料庫連線成功<br>";
    }
?>