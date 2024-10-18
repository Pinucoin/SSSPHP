<?php
class fruit{
	public $name;
	protected $color;
	private $weight;

	function __construct($name, $color, $weight){
		$this->name = $name;
		$this->color = $color;
		$this->weight = $weight;
	}

	function getName(){
		return $name;
	}

	function setColor($color){
		$this->color = $color;
	}
	function setWeight($weight){
		$this->weight = $weight;
	}
}

$mango = new Fruit("1", "2", "3");
$mango->name = "Mango";
$mango->setColor("Yellow");
$mango->setWeight("300");
print $mango->getName();
?>
