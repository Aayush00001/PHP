<?php
class A {
public $a = 1;
}
$a = new A;
$b = new A; 
$b->a=$a->a;

echo "Value of variable is before change in reference variable : ".$a->a."<br>";
$b->a = 2;
echo "Value of variable is after change in reference variable : ".$a->a."<br>";
$c = new A;
$d = &$c; 
$d->a = 3;
echo "Value of variable is: ".$c->a."<br>";
?>