<?php

// cara 1
function sayHello(string $name, callable $filter) { // tipe data callable
    $finalName = call_user_func($filter, $name); // bisa menggunakan function call_user_func
    echo "Hello $finalName " . PHP_EOL;
}

// cara 2
function sayHello2(string $name, callable $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName " . PHP_EOL;
}

sayHello("Aufi", function ($name) {
    return strtoupper($name);
});
sayHello("Aufi", fn($name) => strtoupper($name));
sayHello("Aufi", "strtoupper");
sayHello("Aufi", "strtolower");

echo "" . PHP_EOL;

sayHello2("Aufi", "strtoupper");
sayHello2("Aufi", "strtolower");
