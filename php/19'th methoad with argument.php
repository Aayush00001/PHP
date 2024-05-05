<?php
//w.p.s for ploymorephisam using interface and create interface methiad with argumenyt
interface myinterfacename{
    public function add($a,$b);
}
class myclass implements myinterfacename{
    public function add($a,$b)
    {
        return $a+$b;   
    }
}
$obj=new myclass;
echo "<br>addition is:->".$obj->add(10,5);
?>