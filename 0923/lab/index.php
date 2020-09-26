<?php
//告訴瀏覽器啟用session，讓資料可以存入session陣列
session_start();

//用$_POST收到的內容判斷是否為初次登入頁面，okButton是submit的name
if (isset($_POST["okButton"])) {
    //把user提交的資料存進session
    $_SESSION["uName"] = $_POST["userName"];
    //告訴瀏覽器重新導向該網頁
    header("location:hello.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post" action="">
        Your Name:
        <input type="text" name="userName">
        <input type="submit" name="okButton" value="OK">
    </form>
</body>

</html>