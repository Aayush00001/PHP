<?php
trait demo{
function method(){
echo __trait__;
}
}
class Company{
use demo;
}
$a = new Company;
$a->method();

?>