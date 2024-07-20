<?php 
class employee{
    public $name , $age , $salary;

    function __construct($n , $a , $s){
       $this->name = $n;
       $this->age = $a;
       $this->salary = $s;
    }
    // function __construct(){
    //     echo "Employee constructor";
    //     }

    function info(){
        echo "<h2>Employee profile</h2>";
        echo "Employee name :" . $this->name ."<br>";
        echo "Employee age :" . $this->age ."<br>";
        echo "Employee salary :" . $this->salary ."<br>";
    }
}

class manager extends employee{
    // function __construct(){
    //  echo "Manager constructor";
    //  }  
    public $ta = 1000;
    public $phone = 500;
    public $totalSalary;
    function info(){
        $this->totalSalary = $this->salary+ $this->ta + $this->phone;
        echo "<h2>Manager profile</h2>";
        echo "Employee name :" . $this->name ."<br>";
        echo "Employee age :" . $this->age ."<br>";
        echo "Employee salary :" . $this->totalSalary ."<br>";
    }
}

$e1 = new manager("Bipin" , 23 ,15000);
$e2 = new employee("Shiva" , 23 , 5000);

$e1 ->info();
$e2 ->info();

?>