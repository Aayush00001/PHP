<?php
    class demo
    {
        public function getclassname()
        {
            return __CLASS__;
        }
        public function method()
        {
            return __METHOD__;
        }
    }
    $obj=new demo();
    echo "<br>".$obj->getclassname();
    echo "<br>".$obj->method();
?>