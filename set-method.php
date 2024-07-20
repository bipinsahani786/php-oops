<?php 

class abc{
    private $name;

   // private $data = ["name" => "Jaanu" , "course" => "PHP" , "fee" => "2000"];
   public function hello(){
    echo $this->name;
   } 
   public function __get($property)
    {
        echo "You are trying to access Non existing or private property ($property)";
    //    if(array_key_exists($property , $this->data)){
    //         return $this->data[$property];
    //    }else{
    //     return "This key ($property) is not defined";
    //    }
     }
     public function __set($property, $value){
        // echo "This is a non existing or private property : $property";
        if(property_exists($this,$property)){
            $this->$property = $value;
        }
        else{
            echo "property does not exist: $property";
        }
     }

}

$test= new abc();
  $test->name = "Jaanu baby";
//   $test->name;
$test->hello();
?>