<?php

class Media{
	private $creatorName;
	private $title;
	
	public function __construct($creatorName, $title){
		$this->creatorName = $creatorName;
		$this->setTitle($title);
	}
	
	protected final function setTitle($t){
		if($t != null){
			$this->title = $t;
		}
	}
}	

class Movie extends Media{
	private $durationMinutes;
	
	public function __construct($durationMinutes, $creatorName, $title){
		parent::__construct($creatorName, $title);
		$this->durationMinutes = $durationMinutes;
	}
}

class Book extends Media{
	private $numberOfPages;
	
	public function __construct(){
		echo "the title is " . $this->title;
		$this->title = null;
	}
}

$m = new Movie(100, "spielberg", "e.t.");
var_dump($m);

