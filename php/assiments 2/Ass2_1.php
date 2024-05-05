<?php
// 1. Create Real Time Application of Inheritance with Abstract Class &amp;Interface.
abstract class name 
{
    protected $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    abstract public function ayush();

    public function getName() 
    {
        return $this->name;
    }
}
interface surname 
{
    public function Aayush();
}
class fname extends name implements surname
{
    public function ayush()
    {
        return "radhanpara";
    }
    public function Aayush()
    {
        return "soni";
    }
}
$obj=new fname("aayush");
echo "<br>Name->>".$obj->getName();
echo "<br>fname->>".$obj->Aayush();
echo "<br>surname->>".$obj->ayush();
?>