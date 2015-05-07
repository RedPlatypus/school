<?php

// private limits the readability to the class only...
// protected is accessible to this class and its children / grandchildren / so on so forth.
// public can be seen by anyone.

    class Media{
        private $creatorName; // keep as private, because we still don't want the children to ruin this.
        private $title; //unless we don't care if the children ruin it... normally we will.

        public function __construct($creatorName, $title){

            $this->__set("creatorName", $creatorName);
            $this->__set("title", $title);
        }

//      PHP 5 introduces the final keyword, which prevents child classes from overriding a
//      method by prefixing the definition with final. If the class itself is being defined final
//      then it cannot be extended.

        public final function __set($variable, $value){
        // watch out for overriding when we call this in the constructor when
        // func is public. Therefore we use final which prevents overriding.
            if($value != null){
                $this->$variable = $value;
            }
        }

    }

    class Movie extends Media{
        private $movieLength;
        public function __construct($creatorName, $title, $movieLength){
            parent::__construct($creatorName, $title);
            if($movieLength < 0 || !is_float($movieLength)){
                echo ("ERROR: Movie length must be greater than 0.");
            } else{
                $this->movieLength = $movieLength;
            }

        }

    }

    class timeStamp{
        private $days;
        private $hours;
        private $minuites;
        private $seconds;
        private $timeFrame; // fps
        private $frames;
        private $milliSeconds;

        const HOURS_IN_DAY = 24;
        const MIN_IN_HOUR = 60;
        const SEC_IN_MIN = 60;
        const MILLISEC_IN_SEC = 100;

        public function __construct($hours,$minuites,$seconds){
            $this->hours = $hours;
            $this->minuites = $minuites;
            $this->seconds = $seconds;
        }

    }

    class Book extends Media{
        private $numberOfPages;

//        public function __construct(){
//            echo $this->title;
//        }
//
//        public function __set($variable, $value){
//
//        }


    }

/****************
 *
 *  BEGIN TESTING
 *
 ************/

//$movie = new Movie();

?>