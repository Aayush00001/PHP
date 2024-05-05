<?php
class circle
{
	public $r;
	function ayush($val)
	{
		$this->r=$val;
	}
}
$obj1=new circle();
$obj1->ayush(50);

$obj2=new circle();
$obj2->ayush(60);

$obj3=new circle();
$obj3->ayush(70);

echo $obj1->r*$obj1->r*3.14;

echo $obj2->r*$obj2->r*3.14;

echo $obj3->r*$obj3->r*3.14;

?>