<?php
//w.p.s for __debuginfo magic methoad
class magicmethoad{
    public $a;
    function __debuginfo()
    {
        return array("var"=>100);
    }
}
$obj=new magicmethoad();
var_dump($obj);
?>