<?php
class demo
{
	public $name;
	function set_name($nm)
	{
		$this->name=$nm;
	}
}
$obj=new demo();
$obj->set_name("1'st demo pro of opp ");
echo $obj->name;
?>