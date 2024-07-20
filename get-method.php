<?php 

class abc{
    private $name = "Bipin sahani";
    private $data = ["name" => "Jaanu" , "course" => "PHP" , "fee" => "2000"];
    public function __get($property)
    {
       // echo "You are trying to access Non existing or private property ($property)";
       if(array_key_exists($property , $this->data)){
            return $this->data[$property];
       }else{
        return "This key ($property) is not defined";
       }
    }

}

$test= new abc();
 echo $test->age;

?>