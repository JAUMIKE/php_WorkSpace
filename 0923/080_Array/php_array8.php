<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray);
	var_dump($testArray);
	//A1,A18,A2
	echo "<br />";
	
	//以數值的概念排序
	natsort($testArray);
	var_dump($testArray);
	//A1,A2,A18
?>
