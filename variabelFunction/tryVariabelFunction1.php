<?php

function foo (){
    echo "FOO" . PHP_EOL;
}

function bar (){
    echo "BAR" . PHP_EOL;
}

$getFinalFunction = "foo";
$getFinalFunction();

$getFinalFunction = "bar";
$getFinalFunction();

//$getFinalFunction = "bara";
//$getFinalFunction();
// error karena method variabel nya tidak ditemukan