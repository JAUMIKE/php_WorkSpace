<?php
    include("config.php");
    $link = mysqli_connect($dbhost,$dbuser,$dbpass);
    // var_dump($link);
    mysqli_select_db($link,$dbname);
    $selectCommand = <<<sqlCommand
        select e.id, e.managerId,e.firstName, e.lastName, e.title, e.city, 
        e.officePhone,(select count(*) from employee a where a.managerId = e.id) as 		            "reportNum",picture
        from employee e;
    sqlCommand;
    $result = mysqli_query($link,$selectCommand);
    // var_dump($request);


?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<script src="scripts/jquery-1.9.1.min.js"></script>
<script src="scripts/jquery.mobile-1.3.2.min.js"></script>
<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
<link rel="stylesheet" href="styles.css" />
</head>
<body>
<div data-role="page" data-theme="c">

    <div data-role="header">
        <h1>Employee Details</h1>
    </div>
<!-- 內容顯示頁 -->
    <div data-role="content">
        <ul data-role="listview" data-filter="true">
        <?php while ($row = mysqli_fetch_assoc($result)){ ?>
            <li>
                <a href="employeeDetails.php?id=<?php echo $row["id"]?>"> 
                    <img src="images/<?= $row["picture"]?>">
                    <h4><?=$row["firstName"] ?></h4>
                    <p><?= $row["title"]?></p> <span class="ui-li-count"><?=$row["reportNum"] ?></span>
                </a>
            </li>
        <?php } ?>   
            </ul>
    </div>

</div>
</body>
</html>