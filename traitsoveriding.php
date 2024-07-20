<?php 
trait hello{
    private function sayhello(){
        echo "hello from traite";
    }
}


trait hi{
    public function sayhello(){
        echo "hello from hii traite";
    }
}

class base{
    use hello{
        hello::sayhello as public newhello;
    }
    // use hi{
    //     hello::sayhello insteadof hi;
    //     hi::sayhello as newhello;
    // }
    // public function sayhello(){
    //     echo "hello  everyone from base class";
    // }
}

// class child extends base{
//     use hello;
//     public function sayhello(){
//         echo "hello  everyone";
//     }
// }



$test = new base();
// $test->sayhello();

$test->newhello();
?>