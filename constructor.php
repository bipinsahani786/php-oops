<?php 

class person {
    public $name; public $age;
    public function __construct($name="no name", $age=0) {
        $this->name = $name;
        $this->age = $age;
    }


    function show(){
        echo "{$this->name}-{$this->age}";
    }
}

$p1 = new person(); 
 $p2 = new person("Bipin",23);

$p1->show();
$p2->show();

?>