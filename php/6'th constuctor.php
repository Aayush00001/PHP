<?php
//w.a.p for create constuctor of class
class fruit{
    public $name;
    function __construct($nm)
    {
        $this->name=$nm;
    }
    function get_name()
    {
        return $this->name;
    }
}
$obj=new fruit("apple");
$val=$obj->get_name();
echo $val;
?>