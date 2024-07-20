<?php
interface parent1{
    function calc($a, $b);
}
interface parent2{
    function sub($c, $d);
}

class childClass implements parent1, parent2{
    public function calc($a, $b){
        echo $a + $b . "\n";
    }

   public  function sub($c, $d){
        echo  $c - $d;
    }
}

$test = new childClass();
$test->calc(5,5);
$test->sub(5,5);

?>