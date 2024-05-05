<?php
    class atm{
        private $custid;
        private $atmpin;
        public function PinChange($cid,$apin)
        {
            echo "------perform task-----";
        }
        public function checkbalance($cid,$apin)
        {
            echo "your amount number is:$cid and your pin is:$apin";
        }
        public function ministstement($cid)
        {
            echo "<br>----perform task-------";
        }
    }
    $obj=new atm();
    $obj->checkbalance(10005285637,"1**3");
?>