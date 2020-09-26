<?php
  //類似於將別支程式複製貼上的概念 
  include("lib.php");
  //加入once代表如果引用過該程式則不予引用
  include_once("lib.php");
  //如果引用程式引用不到會出錯
  require("lib.php");

  echo "flag 1<br>";
  echo "flag 2<br>";
  echo "flag 3<br>";

?>