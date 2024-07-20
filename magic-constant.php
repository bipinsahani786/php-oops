<?php 

echo "line number :" . __LINE__ ."";

echo "The full path of this file is :" . __FILE__;

echo "This full path of this directory is : " .__DIR__;



function myFunction(){
    echo "The function name is :". __FUNCTION__ ."";
}

myFunction();

?>