<?php
//w.p.s for single inheritance
class aa{
	public function ayush()
	{
		echo "aayush";
	}
	protected function AAYUSH()
	{
		echo "<br>AAYUSH";
	}
	private function Aayus()
	{
		echo "<br>Aayush";
	}
}
class bb extends aa{
	public function childmethoad()
	{
		$this->AAYUSH();
	}
}
$obj=new bb();
$obj->ayush();
$obj->childmethoad();

?>