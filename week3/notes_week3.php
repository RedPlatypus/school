<?php

    class iPhone{

        private static $latestOS = "8.01.2";
        private static $numberOfiPhones = 1000;
        const MANUFACTURER = "Apple";
        private $OS;

        public  function __construct($OS){
            $this->OS = $OS;
            self::$numberOfiPhones++;
        }

        public static function getLatestOS(){
            return self::$latestOS;
        }
    }



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




