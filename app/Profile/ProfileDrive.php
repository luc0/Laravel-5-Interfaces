<?php

namespace App\Profile;

use App\Car\CarInterface;

class ProfileDrive implements DriveInterface {

    public function checkFuel(CarInterface $car) {
        return $car->fuel;
    }

    public function drive(CarInterface $car) {
        if( $this->checkFuel($car) ) {
            return "driving";
        }else{
            return "Run out of fuel";
        }

    }

}