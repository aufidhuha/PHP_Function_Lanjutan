<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$dataResult = array_map(fn(int $value) => $value * 10, $data); // array_map dengan function callable atau callback function
var_dump($dataResult);

// mengurutkan array dengan ascending
sort($data);
var_dump($data);

// mengurutkan array dengan descending
rsort($data);
var_dump($data);

sort($data);

// mengambil keys
var_dump(array_keys($data));
// mengambil values
var_dump(array_values($data));


$person = [
    "first_name" => "Aufi",
    "last_name" => "Dhuha"
];

var_dump(array_keys($person));
var_dump(array_values($person));
