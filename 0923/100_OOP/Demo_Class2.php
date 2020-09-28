<?php

$obj = new CAnimal();
$obj->makeNoise();
echo "<hr>";


// $obj->weight = 10;  // 如果是 $obj->weight = -10; 呢
// echo $obj->weight;

$obj->setWeight(10);

$obj->setWeight(-5);

echo $obj->getWeight();
echo "<br>";

// 這樣，資料正確了，不過，前一版的寫法比較直覺: $obj->weight = 10;
// 我們稍後再來解決這個問題。
//引入別的檔案的物件
include("Demo_Class1.php");
$objB = new CAnimal_A();
echo $objB->weight = 100;
echo "<br>";
$objB->makeNoise();


class CAnimal
{
	
	// public $weight;
	private $_weight = 0;
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
	
	public function setWeight($value)
	{
		if ($value >= 0)
			$this->_weight = $value;
	}
	
	public function getWeight()
	{
		return $this->_weight;
	}
	
}
class test extends CAnimal
{
	private $score  = 0;
	function __construct(){
		
	}
}
?>
