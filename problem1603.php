<?php

// Proble Name: Design Parking System

class ParkingSystem {
    public $big, $medium, $small;
    /**
     * @param int $big
     * @param int $medium
     * @param int $small
     */
    function __construct($big, $medium, $small) {
        $this->big = $big;
        $this->medium = $medium;
        $this->small = $small;
    }
  
    /**
     * @param int $carType
     * @return Boolean
     */
    function addCar($carType) {
        if($carType == 1 && $this->big >= 1){
            $this->big -= 1;
            return true;
        }else if($carType == 2 && $this->medium >= 1){
            $this->medium -= 1;
            return true;
        }else if($carType == 3 && $this->small >= 1){
            $this->small -= 1;
            return true;
        }else{
            return false;
        }

    }
}

$parkingSystem = new ParkingSystem(1,1,0);

echo $parkingSystem->addCar(1);
echo PHP_EOL;
echo $parkingSystem->addCar(2);
echo PHP_EOL;
echo $parkingSystem->addCar(3);
echo PHP_EOL;
echo $parkingSystem->addCar(1);
