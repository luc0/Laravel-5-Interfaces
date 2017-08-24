<?php

namespace App\Profile;

use App\Car\CarInterface;

interface DriveInterface {

    public function checkFuel(CarInterface $car);

    public function drive(CarInterface $car);

}