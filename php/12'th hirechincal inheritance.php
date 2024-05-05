<?php
//w.p.s for hirechincla onheritance
class parentclass
{
	public $first_name;
	function returnvar()
	{
		echo $this->fist_name;
	}
	function set_fist_name($set_this)
	{
		$this->fist_name=$set_this;
	}
}
class child_1 extends parentclass{
	function setval($set_this)
	{
		$this->fist_name=$set_this;
	}
	function getval()
	{
		echo $this->fist_name;
	}
}
class child_2 extends parentclass{
	function setval($set_this)
	{
		$this->fist_name=$set_this."-".$set_this;
	}
	function getval()
	{
		echo $this->fist_name;
	}
}
$obj1=new child_1();
$obj1->setval("this is first chuild classs");
$obj1->getval();
echo "<br>";
$obj1->set_fist_name("this is parentclass variable");
$obj1->returnvar();
echo "<br/><br/>";
$obj2=new child_2();
$obj2->setval("this is second child class");
$obj2->getval();

?>