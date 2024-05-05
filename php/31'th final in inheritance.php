<?php
    class baseclass
    {
        final public function morestring()
        {
            echo "baseclass::morestring()called\n";
        }
    }
    class childclass extends baseclass
    {
        public function morestring()
        {
            echo "childclass::morestring()called\n";
        }
    }
    $obj=new childclass;
    //result in fatal error cannot override methoad baseclass::morestirng()
?>