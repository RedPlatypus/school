<?php 

class Person
{
	private $weightKg = 100.0;
	private $firstName;
	private $placeOfBirth;
	private $eyeColor;
	
	private static $numberOfArms = 2;
	private static $hasHair = true;
	private static $numberAlive = 7000000000000000000;
	
	const $breathesAir; // also static and public	

	public function __construct(){
		
		self::$numberAlive++;
		static::$numberAlive++;
		Person::$numberAlive++;
	}
}
echo Person::$weightKg;



