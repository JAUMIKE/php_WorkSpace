<?php 
    include "include_Folder/showFuc01.php";
   
    echo add(5,3)."<br>";
    // require "aabb.php"; //引用錯誤不往下執行
    include "aabb.php";  //引用錯誤會繼續往下執行
    include "include_Folder/showFunc02.php";
    echo multiplication(5,3);

?>
