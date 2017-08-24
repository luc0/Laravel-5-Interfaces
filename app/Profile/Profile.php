<?php

namespace App\Profile;

use App\Car\CarInterface;

class Profile {

    public $name;
    public $age;
    public $state;
    public $drive;
    public $car;

    public function __construct($name, $age, DriveInterface $drive, CarInterface $car) {
        $this->name = $name;
        $this->age = $age;
        $this->state = "idle";
        $this->drive = $drive;
        $this->car = $car;
    }

    public function drive() {
        $this->state = $this->drive->drive($this->car);
    }

    public function sleep() {
        $this->state = "sleeping";
    }

}