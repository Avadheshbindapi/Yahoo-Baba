<?php
class calculation{
    public $a , $b ,$c;
    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
$c1 = new calculation();
$c1->a = 20;
$c1->b = 10;

$c2 = new calculation();
$c2->a = 40; 
$c2->b = 10;

echo "Sum value c1: "  .$c1->sum();
echo "<br>";
echo "Subtraction value c2: " .$c2->sub();
echo "<br>";
echo "Subtraction value c1: " .$c1->sub();