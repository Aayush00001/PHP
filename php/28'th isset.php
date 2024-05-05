<?php
class Manager
{
    private $dat = array();
    public function __isset($n)
    {
        echo "__isset() magic method invoked.";
        return isset($this->dat[$n]);
    }
}
$obj2 = new Manager();
echo isset($obj2->empid);
?>