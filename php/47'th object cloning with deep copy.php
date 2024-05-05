<?php
class myclass
{
public $var1;
public $var2;
public function __clone()
{
$this->var1= $this->var1;
$this->var2= $this->var2;
}
}   
$obj1=new myclass();
$val=10;
$val2=20;
$obj1->var1=&$val;
$obj1->var2=&$val2;
$obj2=clone $obj1;
$obj1->var1=50;
echo "<br>".$obj1->var1."<br>".$obj1->var2;
echo "<br>Value of second object";
echo "<br>".$obj2->var1."<br>".$obj2->var2;
?>