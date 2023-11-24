<?php

class Bird {
  public $color;
  private $age;


  public function __construct($c, $a){
    $this->color=$c;
    $this->age=$a;
  }

  public function __destruct(){
      echo $this->color."is dead";
  }

  public function fly() {
    echo "fly".$this->color;
  }
}