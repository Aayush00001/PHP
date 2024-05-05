<?php
//w.a.s for getterabd setter methoad for private variable

class aayush
{
    private $name;
    public function setname($name)//setter
    {
        $this->name=$name; 
    }
    public function getname()//getter
    {
        return $this->name;
    }
}
$obj=new aayush();
$obj->setname("aayush");
echo $obj->getname();

?>