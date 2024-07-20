<?php
// Using spl_autoload_register instead of __autoload

spl_autoload_register(function ($class) {
    require $class . ".php";
});

$test = new first();

$test2 = new second();
?>
