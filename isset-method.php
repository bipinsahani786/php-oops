<?php 
class student{
    public $course;
    private $first_name;
    private $last_name;

    private $detail = ['name' => 'Test name' , 'age' => '20'];
      public function setName($fname, $lname){
        $this->first_name = $fname;
        $this->last_name = $lname;
      }
      
    //   public function __isset($property){
    //     return isset($this->$property);
    //   }

    public function __isset($name){
        return isset($this->detail[$name]);
      }


}
$test = new student();
// $test->course = "PHP";
// $test->setName("Bipin ", "Sahani");


// echo isset($test->first_name);
echo isset($test->name);

?>