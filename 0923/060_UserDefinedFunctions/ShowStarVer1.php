<?php

$x = "*****"; //如果變數設定在最外面，反而不會有效果
function ShowStar() //區域看不到全域
{	
	if(isset($x)){
		echo "YES";
	}else{
		echo "NO";
	}
	
}
ShowStar();
echo "<hr>";
?>


<?php

$y = "*****"; //如果變數設定在最外面，反而不會有效果
function ShowStar2() //區域看不到全域
{	
	global $y;
	if(isset($y)){
		echo "YES";
	}else{
		echo "NO";
	}
	echo $y;
	
}
ShowStar();
?>
