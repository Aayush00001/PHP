<?php
//w.p.s for declare private member of class anad access private member of class
class parentclass{
    private function privatemethoad()
    {
        echo "<br>this is private methoad of parent class";
    }
    public function publicmethoad()
    {
        echo "<br> this is public methoad of parent class";
        $this->privatemethoad();
    }
}
class childclass extends parentclass{
    public function childmethoad()
    {
        $this->publicmethoad();
    }
}
$obj=new childclass();
$obj->publicmethoad();
$obj->childmethoad();
?>