<?php 
class cls{
    public $sentence="aayush";
}
function display(cls $var1)
{
    echo $var1->sentence;
}
display(new cls());
?>