<?php 
class base{
    public static $name = "Bipin Sahani";
    public static function show()
    {
        echo self::$name;
    }

    // public function __construct($n){
    //     self::$name = $n;   
    // }
}

class derived extends base{
    public static function show(){
        echo parent::$name;
    }
}

$test = new derived("wow");
$test->show();

// echo base::$name;

// base::show();

?>