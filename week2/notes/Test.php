<?php

class FileException extends Exception{}

class Blog{
	public function __construct($username){
		if(!($f = @fopen($username.".txt", "a"))){
			throw new FileException("file error!!");
		}
	}
}


function handleTheUncaughtExceptions(Exception $e){
	echo "Handled!";
	echo get_class($e);
}

set_exception_handler("handleTheUncaughtExceptions");


$b = new Blog("whatever/fake/fake/jason");


try{
	$b = new Blog("asdf/asdf/asdf/jason");
	
}catch(FileException $e){
	echo "file exception";
	die($e->getMessage());
}catch(UnexpectedValueException $e){
	echo "unexpectedvalue";
	die($e->getMessage());
}catch(Exception $e){
	echo "exception";
	die($e->getMessage());
}


?>