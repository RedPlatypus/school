<?php

//require_once("Address.php");

function __autoload($class){
	echo "looking for class $class...";
	require_once($class . ".php");
}

$addr= new Address(1234, "main");


echo '<br/>';
echo 'house number: ' . $addr->houseNumber;
echo '<br/>';
echo 'street name: ' . $addr->streetName;

$addr->__set("houseNumber", null);
echo 'house number: ' . $addr->houseNumber;

echo $addr;

echo "<br>";
echo $addr->streetName ."<br>";
$addr2 = clone $addr;
echo $addr2->streetName ."<br>";

$addr->getName('blah','blah');

echo "<br>";

$addr('big');
//$addr("dog");

unset($addr);