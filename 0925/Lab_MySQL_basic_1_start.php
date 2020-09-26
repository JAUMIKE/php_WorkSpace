<?php
header("content-type:text/html; charset=utf-8");

// 0. 請先建立 Class 資料庫 （SetupDB/setup_class.txt）


// 1. 連接資料庫伺服器
// $link = @mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());  
// $result = mysqli_query($link, "set names utf8");
// mysqli_select_db($link, "class");


$link = mysqli_connect("localhost","root","") or die(mysqli_connect_error());
$result = mysqli_query($link,"set names utf8");
var_dump($result);
mysqli_select_db($link,"class");
//將sql語法存入$commandText變數
$commandText = <<<myCommand
    select * from 
        students;
myCommand;


$result = mysqli_query($link,$commandText);
var_dump($result);
//mysqli_fetch_assoc($result) => 讀出一筆資料 ，把sql查詢的結果存入 $row，並使用迴圈顯示查詢結果
while($row = mysqli_fetch_assoc($result)){
    echo $row["cName"]."<br>";
}

mysqli_close($link);
// 2. 執行 SQL 敘述
// $commandText = "select * from students";
// $result = mysqli_query($link, $commandText);

// 3. 處理查詢結果
// while ($row = mysqli_fetch_assoc($result))
// {
//   echo "ID：{$row['cID']}<br>";
//   echo "Name：{$row['cName']}<br>";
//   echo "<HR>";
// }

// 4. 結束連線
// mysqli_close($link);

echo "<br />-- Done --";
?>
