<?php
//w.a.p for ploymorephisyam using abstracct class and create abstract metthoad with argument
abstract class abstractclass{
    abstract protected function getvalue();
    abstract protected function prefixvalue($prefix);
    public function printout()
    {
        echo $this->getvalue()."<br>";
    }
}
class child1 extends abstractclass{
    protected function getvalue()
    {
        return "message from first derived class";
    }
    public function prefixvalue($prefix){
        return "{$prefix}child1";
    }
}
class child2 extends abstractclass{
    public function getvalue()
    {
        return "message from second derived class";
    }
    public function prefixvalue($prefix)
    {
        return "{$prefix}child2";
    }
}
$class1=new child1;
$class1->printout();
echo $class1->prefixvalue('abc')."<br>";
$class2=new child2;
$class2->printout();
echo $class2->prefixvalue('xyz')."<br>";
?>