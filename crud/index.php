<?php 
include 'database.php';

$obj = new database();
// $obj->insert('students', ['student_name' => 'Ram Kumar' , 'age' => '20' , 'city' => 'Supaul']);
// echo "Insert result is : ";
// print_r($obj->getResult());


// $obj->update('students', ['student_name' => 'Raju Kumar'], 'id="6"');
// echo "update result is : ";
// print_r($obj->getResult());


$obj->delete('students','id="6"');
 echo "Delete result is : ";
 print_r($obj->getResult());


?>