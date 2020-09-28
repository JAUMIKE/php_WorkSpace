<?php

$x = '{"cID":"01","cName":"\u7c21\u5949\u541b","cSex":"F","cBirthday":"1987-04-04","cEmail":"elven@superstar.com","cPhone":"0922988876","cAddr":"\u53f0\u5317\u5e02\u6fdf\u6d32\u5317\u8def12\u865f"}';

//json_decode 預設為true，true代表解碼成關聯式陣列，false代表解碼成關聯式物件
$obj = json_decode($x, false);

// echo $obj["cID"];
echo $obj->cID;

//  如果是$obj = json_decode($x, true); 
// 就要用 echo $obj["cId"]取值


