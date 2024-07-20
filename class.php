<?php 
class calculation{
    public $a, $b ,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
    
}


$c1 = new calculation();

$c1->a = 10;
$c1->b = 15;

echo $c1->sum();
echo "<br>";
echo $c1->sub();
echo "<br>";

$c2 = new calculation();

$c2->a = 240;
$c2->b = 15;

echo $c2->sum();
echo "<br>";
echo $c2->sub();


?>