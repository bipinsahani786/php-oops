<?php 
class hello{
    public function sayhello(){
        echo "Hello everyone";
    }
}

class bye{
    public function bye(){
        echo "bye";
    }
}

function wow(hello $c){
    $c->sayhello();
}

$test = new hello();

wow($test);


?>