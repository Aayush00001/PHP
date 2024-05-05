<?php
//w.p.s for multilevel inheritance
class a{
    public $a;
}
class b extends a{
    public $b;
}
class c extends b{
    function __construct($x,$y)
    {
        $this->a=$x;
        $this->b=$y;
    }
    function disp()
    {
        echo "value of main class is:-$this->a";
        echo "<br>value of base class is:-$this->b";
    }
}
$obj=new c(10,20);
$obj->disp();

?>