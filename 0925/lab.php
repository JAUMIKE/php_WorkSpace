<?php
$scoreList = array(100, 50, 75, 95);
$userName = "Chao";



?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP Sample</title>
    <style>
        .fail{
            color:red;
        }
        .success{
            color: green;
        }
    </style>
</head>

<body>
    Welcome <?= $userName ?>
    <!-- 使用php包住html並用if判斷userName是否符合條件 -->
    <?php if ($userName  == "Chao") { ?>
        <a href="#">Login</a>
    <?php } else { ?>
        <a href="#">Log Out</a>
    <?php } ?>
    <ul>
        <?php  foreach($scoreList as $value){ ?>
         <!-- 我的三元運算子寫法 -->
         <!-- <li class="<?php echo ($value < 60)? "fail":""?>"><?= $value ?></li> -->
         <!-- 老師寫法 -->
         <li class="<?=($value >= 60)? "pass":"fail"?>"><?= $value ?></li>
         <!-- 一般if判斷式 -->
         <!--  <li class=<?php if($value < 60){ echo "fail"; }?>><?= $value ?></li>  -->
            
        <?php } ?>   
    </ul>
</body>

</html>