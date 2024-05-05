<?php
spl_autoload_register(function ($class_name)
{
include $class_name . '.php';
});
$obj = new atm();
$obj2 = new myclass();
echo "<br>objects of test1 and test2 class created successfully<br>";
$obj->PinChange(10005285637,"1**3");
?>