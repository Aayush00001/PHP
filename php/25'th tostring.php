<?php
//w.p.s for 
class MagicMethod
{
function __toString()
{
    return "You are using MagicMethod object as a String ";
}
}
$obj = new MagicMethod();
echo $obj;
?>