<?php 
class student{
    private static function hello($name){
        echo "This is static $name function";
    }
    public static function __callStatic($method, $args){
    //   echo "This is a private method : $method";

    if(method_exists(get_called_class(), $method)){
         call_user_func_array([get_called_class(), $method], $args);
    }else{
        echo "Method does not exist : $method";
    }
    }
}


student::hello("Bipin Sahani");
?>