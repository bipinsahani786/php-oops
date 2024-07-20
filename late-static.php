<?php 
class base{
    protected static $name = "Bipin";

    public function show(){
        echo static::$name;
        echo self::$name;
    }
}

class derived extends base{
    protected static $name = "baba";
}

$test = new derived();
$test->show();


?>