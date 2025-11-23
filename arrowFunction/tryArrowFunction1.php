<?php

$firstName = "Aufi";
$lastName = "Dhuha";

//anonnymous funtion
$sayHello1 = function () use ($firstName, $lastName): string {
    return "Hello 1 $firstName $lastName " . PHP_EOL;
};

echo $sayHello1();


//arrow function
$sayHello2 = fn() => "Hello 2 $firstName $lastName " . PHP_EOL;

echo $sayHello2();