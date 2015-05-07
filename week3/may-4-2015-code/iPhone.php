<?php 

class iPhone{
	private static $latestOS = '8.01.2';
	const MANUFACTURER = 'apple';
	private $OS;
	private static $numberOfIphones = 1000;
	
	public function __construct($os){
		$this->OS = $os;
		self::numberOfIphones++;
	}
	
	public static function getLatestOS(){
		return self::$latestOS;
	}
	
	public static function getCurrentOS(){
		return $this->OS;
	}
	
	
}

$i = new iPhone("7.1");
echo $i->getLatestOS();
echo $i->getCurrentOS();