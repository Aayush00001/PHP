<?php
class MyClass 
{
public $data;
}
$obj1 = new MyClass();
$obj1->data = 42;
$obj2 = clone $obj1;
echo "obj1=".$obj1->data;
echo "<br>obj2=".$obj2->data;
$obj2->data = 100;
echo "<br>obj1=".$obj1->data;
echo "<br>obj2=".$obj2->data;
?>