<?php 
function add(array $numbers)
{
    $sum=0;
    foreach($numbers as $item)
    {
        $num=$num+$item;
    }
    echo $sum;
}
add(array(10,20,30));
?>