<?php
    class Dog{

        private $name;
        private $birthDate;
        private $weightKg;
        private $breed;

        const MAX_DOG_WEIGHT_KG = 400;

        public function __construct($name, Date $birthDate, $weightKg, $breed)
        {
            //to ensure that all instance variables are put into a valid initial state immediately upon object creation
            if(strlen($name) > 0 && is_string($name))
                $this->name = $name;

            $this->birthDate = $birthDate;

            //set for both int and float.
            if(is_float($weightKg) && $weightKg > 0.1 && $weightKg < Dog::MAX_DOG_WEIGHT_KG)
                $this->weightKg = $weightKg;
            elseif(is_int($weightKg) && $weightKg < Dog::MAX_DOG_WEIGHT_KG && $weightKg > 0.1){
                $weightKg = number_format($weightKg, 1);
                $this -> weightKg = $weightKg;
            }

            //
            if(is_string($breed))
                $this->breed = $breed;
        }

        //NEED TO MOVE TO DATE CLASS // need to update!
//        public function validateDate($date, $format = 'Y-m-d H:i:s')
//        {
//            $d = DateTime::createFromFormat($format, $date);
//            return $d && $d->format($format) == $date;
//        }

        public function setName($name){
            if(is_null($name) || is_numeric($name))
                echo("Name is not valid.");
            if(is_string($name)){
                $this->name = $name;
            }
        }

        public function __toString (){
            return "Dog Name: $this->name BirthDate: $this->birthDate Weight KG: $this->weightKg Breed: $this->breed";
        }

        public function __set($name, $value)
        {
            if(is_numeric($value) || is_null($value)) {
                echo "error";
                return;
            };
            $this->$name = $value;
        }

        public function __get($name)
        {
            return $this->$name;
        }

        public function __clone(){
            //renaming variables so we can determine which is the clone.
            $this->name = "Clone-" .$this->name;
        }

        public function __destruct(){

            echo("Destruct Method Called.");
        }


    }

    class Date{
        //simple date class
        private $year;
        private $month;
        private $day;

        public function __construct($day, $month, $year)
        {
            if(checkdate($month,$day, $year)){
                $this->day = $day;
                $this->month = $month;
                $this->year = $year;
            } else{
                echo("ERROR: Please enter a valid date.");
            }
        }

        public  function setYear($year){
            if($year < 0){
                echo("Error: Year can not be negative");
            } elseif(is_int($year)){
                if(checkdate($this->month,$this->day, $year)){
                    $this->year = $year;
                } else{
                    echo("ERROR: Please enter a valid date.");
                }
            } else{
                echo("Error: Not An Integer.");
            }
        }

        public function setMonth($month){
            if(is_int($month)){
                if($month > 12 || $month < 1){
                    echo("Error: Set month between 1 and 12 inclusive.");
                } else{
                    if(checkdate($month,$this->day, $this->year)){
                        $this->month = $month;
                    } else{
                        echo("ERROR: Please enter a valid date.");
                    }
                }
            } else{
                echo("Error: Not An Integer.");
            }
        }

        public function setDay($day){
            if(is_int($day)){
                if($day > 31 || $day < 1){
                    echo("Error: Set day between 1 and 31 inclusive.");
                } else{
                    if(checkdate($this->month,$day, $this->year)){
                        $this->day = $day;
                    } else{
                        echo("ERROR: Please enter a valid date.");
                    }
                }
            } else{
                echo("Error: Not An Integer.");
            }
        }

        public function __toString(){
            //echos out YY-MM-DD
            echo("$this->year,$this->month,$this->day");

        }



    }


/************************
 *
 *     BEGIN TESTING CLASS
 *
 ***********************/

$birthDateOfLitter = new Date(11,1,2015);

$dog1 = new Dog("Mocha", $birthDateOfLitter, 288, "Lab");

echoForHTML($dog1);

echoForHTML($dog1->__get("weightKg"));

$dog2 = clone $dog1;

echoForHTML($dog2);





/************************
 *
 *     HELPER METHODS
 *
 ***********************/

function echoForHTML($string){
    //CLEAN UP FORMATTING A LITTLE BIT.
    echo "<p>" . $string . "</p>";
}

?>