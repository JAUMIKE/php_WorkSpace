<?php
    include_once 'ClassStudent02.php';
    //在外部環境中取類別常數用class名稱::常數名稱
    echo "****".Student::title."開始****<br>";
    $objA = new Student("Bob");
    $objA->setData(01,"Bob","Man");
    $objA->showData();
    $objB = new Student("Mike");
    $objB->setData(02,"Mike","Man");
    $objB->showData();
    $objC = new Student("Mary");
    $objC->setData(03,"Mary","Woman");
    // $objC = Null;
    $objC->showData();
    echo "目前總共有".Student::$countNum."個物件<br>";
    echo Student::showEndMsg("到此結束加總運算<br>");
    
?>