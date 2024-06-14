<?php

    $myBike = new Bike(); $urBike = new Bike();
    echo "{$myBike -> getSpeed()}<br>";
    $myBike -> upSpeed();$myBike -> upSpeed();$myBike -> upSpeed();$myBike -> upSpeed();
    $myBike -> upSpeed();$myBike -> upSpeed();$myBike -> upSpeed();$myBike -> upSpeed();
    echo "{$myBike -> getSpeed()}<br>";
    $urBike -> upSpeed();$urBike -> upSpeed();$urBike -> upSpeed();$urBike -> upSpeed();
    $urBike -> upSpeed();$urBike -> upSpeed();$urBike -> upSpeed();$urBike -> upSpeed();
    $urBike -> upSpeed();
    echo "{$urBike -> getSpeed()} : {$myBike -> getSpeed()}<br>";
    

    $myScooter = new Scooter();
    echo "{$myScooter -> getSpeed()}<br>";
    $myScooter -> upSpeed();$myScooter -> upSpeed();$myScooter -> upSpeed();$myScooter -> upSpeed();
    $myScooter -> upSpeed();$myScooter -> upSpeed();$myScooter -> upSpeed();$myScooter -> upSpeed();
    echo "{$myScooter -> getSpeed()}<br>";


    //騎腳踏車
    class Bike {
        //捷安特工程師
        //var $speed = 0;  
        //private $speed = 0;
        protected $speed = 0; // 僅限於繼承的子類別使用
        
        function __construct(){
            $this -> speed = 0;
        }

        function upSpeed(){
            $this -> speed = $this -> speed < 1 ? 1 : $this -> speed * 1.5;
        }
        
        
        function downSpeed(){
            $this -> speed = $this -> speed < 1 ? 0 : $this -> speed * 0.7;
        }

        function getSpeed(){
            return $this->speed;    
        }

    }

    class Scooter extends Bike {

        private $gear;

        function __construct(){
            $this -> gear = 0;
        }

        function upSpeed(){
            $this -> speed = $this -> speed < 1 ? 1 : $this -> speed * $this -> gear * 2.1;
        }
    
        function changeGear($gear = 0){
            if ($gear >= 0 && $gear <= 4){
                $this -> gear = $gear;
            }
        }
    
        function getGear(){
            return $this -> gear;
        }

    
    }

?>
