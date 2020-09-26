<?php 
    //啟用session，讓資料可以提出session陣列
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Browser 將request傳給Apache(web server) ， Apache傳一個網頁回去 -->
    <!-- 把index.php存進session的資料echo出來 -->
    Hello! <?php echo $_SESSION["uName"]?>
</body>
</html>