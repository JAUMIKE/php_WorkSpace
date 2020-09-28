<?php
//物件在new出的當下會執行一次建構函式
$obj = new CAnimal(3);
echo "weight: ", $obj->getWeight(), "<br>";
$obj2 = $obj;
$obj3 = $obj;
echo "flag 1<br>";
$obj = null;
echo "flag 2<br>";
$obj3 = null;
echo "flag 3<br>";


class CAnimal
{
	// public $weight;
	private $_weight = 0;
	//__func ==>建構函式，當物件建立後執行
	function __construct($weightValue = 0) {
		echo "Object Created.<br>";
		$this->setWeight($weightValue);
		// 還是寫成這樣: (哪一個比較好? @@" )
		// $this->_weight = $weightValue;
	}
	//解構函式 
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

?>
