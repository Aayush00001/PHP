<?Php
//w.a.p for create consturctor with multiple arugument and create destuctor
class fruit
{
	public $name;
	public $color;
	function __construct($nm,$col)
	{
		$this->name=$nm;
		$this->color=$col;
	}
	function __destruct()
	{
		echo "this fruit is:->".$this->name."<br>and the color is:->".$this->color."";
	}
}
$obj=new fruit("cherry","blue");
?>