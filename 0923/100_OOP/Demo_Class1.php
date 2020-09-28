<?php
//根據類別new出一個物件，並賦予物件參考($obj)記憶體位置指向物件實體(instance)
$obj = new CAnimal_A();
$obj->makeNoise();
echo "<hr>";


//這樣寫法也可以
// $controlName =  "CAnimal";
// $obj = new $controlName()

//-> 代表指向物件實體
$obj->weight = -10;  // 如果是 $obj->weight = -10; 呢
echo $obj->weight."<br>";
var_dump($obj);
//宣告類別
class CAnimal_A
{
	//要讓外面知道，宣告成public
	public $weight;
	// private $weight; 
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
		
	}
}

?>
