<?php 
 require_once('ClassStudent01.php');
 $obj01 = new Student("Bob");
 $obj01->setData(01,"Bob","Man",100,90,80);
 $obj01->showData();
 $obj01 = Null;
 $obj02 = new Student("Jen");
 $obj02->setData(02,"Jen","Woman",90,95,100);
 $obj02->showData();
 $obj02 = Null;
?>


