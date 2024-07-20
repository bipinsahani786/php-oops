<?php 
class school {
    public function getNames(student $names){
        foreach($names->Names() as $name){
            echo "<br>".$name."<br>";
        }
    }
}

class student {
    public function Names(){
        return ["ram", "krishna", "ravi"];
    }
}

class library{

}
$lib = new library();
$sch = new school();    
$stu = new student();

$sch->getNames($stu);
?>