<?php
class testclass{
public function test1(){
return new class(){
public function test2(){
echo "test2 method of nested anonymous class";
}
};
}
}
$obj2=new testclass();
$obj2->test1()->test2();
?>