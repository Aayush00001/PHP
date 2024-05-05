<?php
//w.p.s for crerate trait and use the trait in the class
trait message1{
    public function msg1()
    {
        echo "opp is fun";
    }
}
trait message2{
    public function msg2()
    {
        echo "opp reduce code duplication";
    }
}
class welcome{
    use message1;    
}
class welcome2{
    use message1,message2;
}
echo "from first class<br>";
$obj=new welcome();
$obj->msg1();
echo "<br>";
echo "from second class <br>";
$obj2=new welcome2();
$obj2->msg1();
echo "<br>";
$obj2->msg2();

?>