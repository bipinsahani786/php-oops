<?php 
class abc {
    public function __construct() {
        echo "this is construct function \n";
    }
    public function hello() {
        echo "hello everyone\n";
    }

    public function __destruct() {
        echo "this is destruct function\n";
    }
}

$test = new abc();
$test->hello();

?>