<?php


abstract class Mammal{
	private $weightKg;
	
	public function __construct($kg){
		$this->setWeightKg($kg);
	}
	
	public abstract function speak();
	public abstract function move();
	
	
	
	public final function setWeightKg($kg){
		if($kg > 0.0){
			$this->weightKg = $kg;
		}
	}
}

class Dog extends Mammal{
	public function speak(){
		echo "woof";
	}
	public function move(){
		echo "run";
	}
}

$d = new Dog(2.5);
$d->speak();
$d->move();

//$m = new Mammal(5.0); // can not create an abstract class.