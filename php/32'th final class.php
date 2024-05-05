<?php
 final class baseclass
 {
    public function test()
    {
        echo "baseclass::test()calssed\n";
    }
    //as the class is redundant the final keyword is redundatnt the 
        final public function morestring()
    {
        echo "baseclass::morestring()called\n";
    }
 }
 class childclass extends baseclass{

 }
 //result in fatal error : class childclass may not inherit from final class(baseclaas)
 ?>