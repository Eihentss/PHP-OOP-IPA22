<?php

include "Dog.php";
include "Cat.php";
include "Bird.php";
include "Car.php";

$myDog = new Dog;
$myDog2 = new Dog;
$myDog->color = "Black";
// echo $myDog2->color;


$myBird = new Bird("Black", 541);
$myBird->color = "Black";
echo $myBird->color."<br>";
$myBird->fly();

$myBird2 = new Bird("Blue" ,0.5);
$myBird2->color = "Blue";
$myBird2->fly();

$cats = [];
for ($i = 0; $i < 21; $i++) {
  array_push($cats, new Cat);
}


$myCar = new Car("Ikea", 1500);
$myCar2 = new Car("Formula", 58);
$myCar ->increaseMileage(240);





