<?php
//w.p.s for __call()magic methoad
class magicmethoad{
    function __call($name,$parameters)
    {
        echo "<br>name of methoad=>".$name."<br>";
        echo "parmeters provide <br>";
        print_r($parameters);
    }
}
$obj=new magicmethoad();
$obj->aayush("magic","methoad");
$obj->get(10,20,30);
?>