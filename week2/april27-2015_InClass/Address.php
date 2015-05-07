<?php 

class Address
{
	private $houseNumber;
	private $streetName;

	
public function Address(){
	echo "old constructor";
}

public function	__construct($houseNumber,$streetName){
	if(is_numeric($houseNumber)){
		$this->houseNumber=$houseNumber;
	}
	
	if($streetName !== null){
		$this->streetName=$streetName;
	}
	echo "Constructor setting street name to: " .
	      $this->streetName . 
		  " and house number to: " . 
		  $this->houseNumber;	
}

public function __get($input){
	echo "ERROR! Cannot directly access $input";
	return $this->$input;
}
	

public function __set($name, $value) {
	if(is_null($value)) {
		echo "error.";
		return;
	}
		$this->$name = $value;
}

public function	__destruct()
{
	echo "You have all been good. Good bye.";
}


public function __toString()
{
	return $this->houseNumber ." " .
			$this->streetName;
}

public function	__clone() {
	$this->streetName = "Clone-" .$this->streetName;
}
	
public function	__call($method, $args){
	echo "unknown method" . $method	
		.implode(' ',$args);	
}
	
public function	__invoke ($number) {
	if ($number === "big") {
		echo "This house is big!";
	}else{
		echo "not";
	}
}

}

