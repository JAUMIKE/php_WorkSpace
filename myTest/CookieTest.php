<?php
    $setResult = setcookie("testCookie","My content of cookie !",strtotime("2020-09-24-00-00-00"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie test</title>
</head>
<body>  
<?php
    if($setResult){
        if(isset($_COOKIE["testCookie"])){
            echo "Cookie回應的內容為:".$_COOKIE["testCookie"];
        }else{
            echo "Cookie 儲存成功，請重整頁面!";
        }
    }

?>
    
</body>
</html>
