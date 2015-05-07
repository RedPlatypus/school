<?php

class Name
{
	private $first;
	private $middle;
	private $last;
	private $prefix;
	private $suffix;
	private $nicknames = array();
	private $maiden;
	
	const   MAX_NAME_LENGTH = 64;
	
	public function __construct($first, $last, $middle = null, 
								$nicknames = null,
								$prefix = null, $suffix = null)
	{
		$this->first = $first;
		$this->last  = $last;	
		$this->middle = $middle;		
	}
	
	public function getInitials()
	{
		$initials = $this->first[0] . ".";
		if(!(empty($this->middle))){
			$initials = $initials . $this->middle[0]. ".";
		}
		$initials .= $this->last[0] . ".";
		
		return strtoupper($initials);
	}
	
}
//$n1 = new Name("charlie", "sheen");
//$n2 = new Name("mel", "gibson", "alazar");

echo Name::MAX_NAME_LENGTH;

?>