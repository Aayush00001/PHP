<?php
//w.a.p for methoad overriding
class parentclass{
    public function publicmethoad()
    {
        echo "this is public methoad of aprent class";
    }
}
class childclass extends parentclass{
    public function publicmethoad()
    {
        echo "public methoad of parent class is overridden in child class";
    }
}
$obj=new childclass();
$obj->publicmethoad();
?>