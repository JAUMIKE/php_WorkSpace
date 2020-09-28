<?php

$obj = new CDog(3, 10);
$obj->makeNoise();
echo "weight: ", $obj->getWeight(), "<br>";
echo "price: ", $obj->getPrice(), "<br>";

class CAnimal
{
	// public $weight;
	private $_weight = 0;

	function __construct($weightValue = 0) {
		echo "Object Created.<br>";
		$this->setWeight($weightValue);
	}
	
	function __destruct() {
		echo "Object destroyed.";
	}
	
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
//cDog 繼承 CAnimal類別，並新增price()，使用要用到繼承父型的東西，要使用parent::來呼叫 
class CDog extends CAnimal {
	//加_變數名稱是為了要區分private、public的概念
	private $_price = 0;
	
	function __construct($weightValue = 0, $priceValue = 0) {
		//繼承物件
		parent::__construct($weightValue);
		//本身物件
		$this->setPrice($priceValue);
	}
	
	public function makeNoise()
	{
		parent::makeNoise();
		echo "<br>";
		echo "Dog: Bark!<br>";
	}
	
	public function setPrice($value)
	{
		if ($value >= 0)
			$this->_price = $value;
	}
	
	public function getPrice()
	{
		return $this->_price;
	}
	

}

?>
