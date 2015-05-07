<?php

/*
	Author: Brendan Robertson
	Created: April 27, 2015
	Update: April 27, 2015
	FileName: Assignment1
    Purpose: Create A Student Class
*/

/*
- $studentNumber
- $firstName
- $lastName
- $emailAddress - $streetAddress - $city
- $province
- $postalCode
*/

class Student {
    private $studentNumber;
    private $firstName;
    private $lastName;
    private $emailAddress;
    private $streetAddress;
    private $city;
    private $postalCode;

    public function setFirstName($firstName){
        if(ob_get_length($firstName) < 2)
            echo("Your name must be longer than 1 character.");
        else
            $this ->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this ->lastName = $lastName;
    }
    public function setEmailAddress($emailAddress){

    }
}

?>