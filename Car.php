<?php

class Car {
  public $brand ;
  private $mileage;


  public function __construct($barndss, $mileageee){
    $this->brand=$barndss;
    $this->mileage=$mileageee;
  }

  public function __destruct(){
      echo $this->brand."is dead at mileage ".$this->mileage;
  }

  public function increaseMileage($amaunt) {
    $this->mileage = $amaunt+$this->mileage;
  }
}