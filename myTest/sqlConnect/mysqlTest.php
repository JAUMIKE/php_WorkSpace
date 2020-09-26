<?php
    require("sqlConnection.php");
    // $result = mysqli_query($link,"select * from students");
    $sqlCommand = <<<sqlText
        select * from students;
    sqlText;
    $result = mysqli_query($link,$sqlCommand);
    // var_dump($result);
    
    while($row = mysqli_fetch_assoc($result)){
        echo "座號 : ".$row["csID"];
        echo " 姓名 : ".$row["cName"];
        echo " 性別 : ".$row["cSex"]."<br>";
    };
    
    exit();

?>