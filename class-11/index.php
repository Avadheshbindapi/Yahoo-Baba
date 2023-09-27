<?php
class abc{
    public function first(){
        echo "this is first function <br>";
        return $this;
    }

    public function second(){
        echo "this is second function <br>";
        return $this;
    }

    public function third(){
        echo "this is third function";
    }
}
$test = new abc();

$test->first()->second()->third();

// $test->first();
// $test->second();
// $test->third();


