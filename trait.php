<?php 
trait hello{
    public function sayhello(){
        echo "Hello baby";
    }
    public function sayhiiiii(){
        echo "hIIIIIIIIIIII";
    }
}
trait bye{
    public function sayBye(){
        echo "Bye baby";
    }
}

class base {
    use hello;
    use bye;
}

class base2 {
    use hello;
}

$test = new base();
$test->sayhello();
$test->sayBye();
$test2 = new base2();
$test2->sayhello();
$test2->sayhiiiii();


?>