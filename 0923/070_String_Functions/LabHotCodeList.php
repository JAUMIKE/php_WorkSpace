<?php
$sData = "908872526535442041985072568716";
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1); //宣告ch變數，存入sData每個字母的值 ，9,0,8,8,7......
	$result = $ch . str_replace($ch, "", $result); //result ch值先串接字首，result只要符合ch字母值就用空字串取代掉
 
}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5); //
?>