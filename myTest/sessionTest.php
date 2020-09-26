<?php
    session_start();
    //如果session陣列的值不存在則讓cookie開始計次
    if(!isset($_SESSION["countOK"])){
        $dateStr = date('Y-m-d 23:59:59');
        if(isset($_COOKIE["counter"])){
            $counter = $_COOKIE["counter"];
            $counter++;
            setcookie("counter",$counter,strtotime($dateStr));
        }else{
            setcookie("counter","0",strtotime($dateStr));
            header("location:cookieTest02.php");
        }
        $_SESSION["countOK"] =1; 
    }else{
        $counter = $_COOKIE["counter"];
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
    <?php
        echo "本網頁瀏覽人次為: ".$counter." 次"
    ?>
</body>
</html>