<?php

function sayHello(string $nama, $filter){
    $finalName = $filter($nama);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name ";
}

sayHello("Aufi", "sampleFunction");
sayHello("Aufi", "strtoupper");
sayHello("Aufi", "strtolower");