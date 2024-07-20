

<?php 
class student{
    public $course = "PHP";
    private $first_name;
    private $last_name;

    // private $detail = ['name' => 'Test name' , 'age' => '20'];
      public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
      }
      
    //   public function __isset($property){
    //     return isset($this->$property);
    //   }

    // public function __isset($name){
    //     return isset($this->detail[$name]);
    //   }

    public function __unset($property){
        unset($this->$property);
    }


}
$test = new student();
$test->setName("Bipin ", "Sahani");
unset($test->course);
print_r($test);
// echo $test->course;


// echo isset($test->first_name);
// echo isset($test->name);

?>