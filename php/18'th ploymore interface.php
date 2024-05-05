<?php
//w.p.s for ploymore =phisyam using interface
interface myinterfacename{
    public function metthoad1();
    public function metthoad2();
}
class myclass implements myinterfacename{
    public function metthoad1()
    {
        echo "methoiod 1 called"."<br>";
    }
    public function metthoad2()
    {
        echo "methoad 2 called"."<br>";
    }
}
$obj=new myclass;
$obj->metthoad1();
$obj->metthoad2();

?>