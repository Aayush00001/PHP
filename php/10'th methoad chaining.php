<?php 
//w.a.p for methoad chaining

class demo {
private $str;
function __construct()
{
$this->str = "I ";
}
function addA()
{
$this->str .= "am ";
return $this;
}
function addB()
{
$this->str .= "gamer";
return $this;
}
function getStr()
{
return $this->str;
}
}
$obj = new demo();
echo $obj->addA()->addB()->getStr();
?>