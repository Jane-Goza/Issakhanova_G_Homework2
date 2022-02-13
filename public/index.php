<?php

spl_autoload_register(function ($class) {
    require_once '../includes/classes/' . $class .  '.php'; //require all files from includes/classes
});

//call classes
//$canine = new Canine();
//$feline = new Feline();
//$bird = new Bird();
$parrot = new Parrot(); 
$cardinal = new Cardinal();
$wolf = new Wolf();
$dog = new Dog();
$houseCat = new HouseCat();
$jaguar = new Jaguar();
$lion = new Lion();

//$myAnimals = new Animals($canine, $feline, $bird);
$myBird = new Bird($parrot, $cardinal); //rename parent classes and show the children classes
$myCanine = new Canine($wolf, $dog);
$myFeline = new Feline($houseCat, $jaguar, $lion);

//echo $myAnimals->eat();
//echo $myAnimals->drink();
//echo $myAnimals->speak(); 
//echo $myAnimals->move();

echo $myBird->eat(); // require answer 
echo $myBird->drink(); // require answer 
echo $myBird->speak(); // require answer 
echo $myBird->move(); // require answer 

echo $myCanine->eat(); // require answer 
echo $myCanine->drink(); // require answer 
echo $myCanine->speak(); // require answer 
echo $myCanine->move(); // require answer 

echo $myFeline->eat(); // require answer 
echo $myFeline->drink(); // require answer 
echo $myFeline->speak(); // require answer 
echo $myFeline->move(); // require answer 

var_dump($myBird, $myCanine, $myFeline); //show the information
//var_dump($myAnimals);
die; //close