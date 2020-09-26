<?php
    $datastr = date("Y-m-d 23:59:59");
    if(isset($_COOKIE["counter"])){
        $counter =$_COOKIE["counter"];
        $counter++;
        setcookie("counter",$counter,strtotime($datastr));
    }else{
        setcookie("counter",0,strtotime($datastr));
        header("location:cookieTest02.php");
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
        echo "你今天瀏覽本網頁的次數為: ".$counter." 次";
    ?>    
</body>
</html>