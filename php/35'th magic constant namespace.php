<?php

namespace Computer_Sciecnec_Portal;
class Demo
{
public function getClassName(){
return __class__;
}
public function method(){
return __method__;
}
public function namesp() {
return __namespace__;
}
}
echo "<br>".Demo::class;//Classname::class
$obj = new Demo();
echo "<br>".$obj->getClassName();
echo "<br>".$obj->method();
echo "<br>".$obj->namesp();

?>