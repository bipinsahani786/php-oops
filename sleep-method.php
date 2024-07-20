<?php 
class student{
    public $course = "PHP";
   private $first_name;
   private $last_name;

   public function setName($fname, $lname){
    $this->first_name = $fname;
        $this->last_name = $lname;

   }

   public function __sleep(){
    return ['first_name'];
   }

}

$obj = new student();

$obj->setName("Bipin", "Sahani");

$srl = serialize($obj);

echo $srl;


?>