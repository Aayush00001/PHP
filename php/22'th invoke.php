<?php
//w.p.s for invoke magic methoad
class employee
{
    private $n;
    private $mail;
    public function __construct($n,$mail){
        $this->n=$n;
        $this->mail=$mail;
    }
    public function __invoke()
    {
        echo "you can not call object as a function";
    }
}
$obj3=new employee("abc","123@gmail.com");
$obj3();
?>