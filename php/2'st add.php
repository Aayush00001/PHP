<?php
class add {
    private $number1;
    private $number2;

    public function setNumbers($number1, $number2) {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    public function getSum() {
        return $this->number1 + $this->number2;
    }
}
$obj1 = new add();
$obj2 = new add();

$obj1->setNumbers(5, 10);
$obj2->setNumbers(15, 20);

$sum1 = $obj1->getSum();
echo "Sum 1-> $sum1";
$sum2 = $obj2->getSum();
echo "<br>Sum 2-> $sum2";
?>
