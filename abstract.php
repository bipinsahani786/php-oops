<?php 
 abstract class parentclass{
    public $name;

    abstract protected function cacl($a, $b);
}


class childclass extends parentclass{

public function cacl($c, $d){
    echo $c+$d;
}
}


$test = new childclass();

$test->cacl(5,6);
?>