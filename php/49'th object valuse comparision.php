<?php
class MyClass {
public $data;
}
$obj1 = new MyClass();
$obj1->data = 42;
$obj2 = new MyClass();
$obj2->data = 42; 
$areEqual = ($obj1->data === $obj2->data);
var_dump($areEqual); 
?>