<?php
class Fruit{
	public $name;
	public $color;
	public function __construct($name, $color){
		$this->name = $name;
		$this->color = $color;
	}
}

class Strawberry extends Fruit {
	public $weight = 10;
	public function __construct($name, $color, $weight){
		parent::__construct($name, $color);
		$this->weight = weight;	
	}
	public function message(){
		echo $this->weight;
	}
}
	$strawberry = new Strawberry("Strawberry", "red", "50");
	$strawberry->message();

?>
