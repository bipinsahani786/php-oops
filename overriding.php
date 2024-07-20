<?php 
class base {
    public $name = "Parent class";

    public function calc($a, $b) {
         return $a + $b;
    }

}

class derived extends base {
    public $name = "child class";
//     public function calc($a, $b) {
//         return $a * $b;
//    }
}


$b1 = new derived();

echo $b1->name;

echo $b1->calc(5, 6);

?>