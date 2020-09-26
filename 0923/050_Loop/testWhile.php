<?php
$iSum = 0;
$i = 1;
while ($i <= 10)
{
	$iSum += $i;
	$i += 1;
}
echo $iSum;

echo "<hr>";

$iSum = 0;
$i = 0;
while ($i < 10)
{
	$i++;
	$iSum += $i;	
}
echo $iSum;

echo "<hr>";
$total = 0;
for ($k=1; $k<=10; $k++){
	$total += $k;
}
echo $total;
?>