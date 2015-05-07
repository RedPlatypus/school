<?php
/*
	Author: Brendan Robertson
	Created: April 27, 2015
	Update: April 27, 2015
	FileName: Assignment1
*/

class Student {
 private $firstName;

    public function getFirstName(){
        return $this -> firstName;

    }


    public function __set($name, $value)
    {
        if(is_numeric($value) || is_null($value)) {
            echo "error";
            return;
        }
        echo "<br/>Setting '$name' to '$value' using magic method\n <br/>";
        $this->$name = $value;
    }

    public function __call($method, $args){
        echo("<br/>Unknown $method<br/>");
    }
}

$me = new Student();
$me ->__set("firstName",null);
echo($me ->getFirstName());

echo $me->myNewMethod();
?>