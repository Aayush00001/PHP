<?php
//w.a.p for ploymorphisyam using abstract class[without argument]
    abstract class base{
        abstract function printdata();
        function disp()
        {
            echo "message from abstract classs";
        }
    }
    class derived extends base
    {
        function printdata()
        {
            echo "derived classs<br>";
            $this->disp();
        }
    }
    $b1=new derived;
    $b1->printdata();
    
?>