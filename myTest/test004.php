<?php 
    header("Content-Type:text/html;charset=utf-8");
    //引用類別
    require_once("ClassPeple03.php");
    $ObjA = new People();
    $ObjA->setData("Tom","boy",11,45,151);
    echo "資料人姓名 : ".$ObjA->str_Name."<br>";
    echo $ObjA->str_Name."標準體重為 : ".$ObjA->calcWeight();
    echo "<hr>";
    //另一種引入檔案的寫法，使用繼承父類別People的子類別:PeopleMan
    require_once "ClassMan.php";
    $ObjB = new PeopleMan();
    $ObjB->setData('Mike',"Man",30,80,178);
    echo "資料人 : ".$ObjB->str_Name."<br>";
    echo $ObjB->str_Name."標準體重為 : ".$ObjB->calcPeopleWight()."<hr>";
    //引入另一份檔案，使用繼承父類別PeopleMan的子類別PeopleWoman
    require_once('ClassWoman.php');
    $ObjC = new PeopleWoman();
    $ObjC->setData("Jane","Woman",28,50,160);
    echo "資料人姓名 : ".$ObjC->str_Name."<br>";
    echo $ObjC->str_Name."標準體重為 : ".$ObjC->calcPeopleWight()."<hr>";
    //在ClassWoman新增歲數判別，若<=16歲則使用父類別函式計算標準體重
    $ObjD = new PeopleWoman();
    $ObjD->setData("Tony","Boy",12,44,152);
    echo "聯絡人姓名 : ".$ObjD->str_Name."<br>";
    echo $ObjD->str_Name."標準體重為 : ".$ObjD->calcWeight();
?>