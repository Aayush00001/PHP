<?php
class ATM {
private $custid;
private $atmpin;
public function PinChange($cid,$apin) {
echo "---------perform tasks-----";
}
public function CheckBalance($cid,$apin){
echo "Your Account Number is: $cid and your pin is: $apin";
}
public function miniStatement($cid) {
echo "<br>---------perform tasks-----";
}
}
$obj = new ATM();
$obj ->CheckBalance(10005285637,"1**3");
?>