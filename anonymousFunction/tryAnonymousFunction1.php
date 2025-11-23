<?php

// anonymous function adalah function tanpa nama dan disimpan di variabel

$sayHello = function (string $name){
    echo "Hello $name " . PHP_EOL;
};

$sayHello("Aufi");
$sayHello("Dhuha");


function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good bye $finalName " . PHP_EOL;
}

sayGoodBye("Aufi", function (string $name): string {
    return strtoupper($name);
});

sayGoodBye("Dhuha", function (string $name): string {
    return strtolower($name);
});


// closure anonymous
$firstName = "Aufi";
$lastName = "Dhuha";

$sayHelloName = function () use ($firstName, $lastName){
    echo "Hello $firstName $lastName " . PHP_EOL;
};

$sayHelloName();

//$firstName = "Ahmad";
//$lastName = "Mutaafif";
//$sayHelloName();
// tidak akan menangkap nilai, karena nilai yang dijalankan nilai yang pertama dibuat

