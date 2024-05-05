<?php
//w.p.s fopr __set__ state  magic methoad
class employee{
    public $ename;
    private $mail;
    public function __construct($ename,$mail)
    {
        $this->ename=$ename;
        $this->mail=$mail;
    }
    public static function __set__state(array $array)
    {
        $obj=new employee;
        $obj->ename=$array["ename"];
        $obj->mail=$array["mnail"];
        return $obj;
    }
}
$obj4=new employee("abc","1232gmail.com");
var_export($obj4);
?>