<?php
// 4. Create a class called &amp; Car&amp; that has the following properties:
// make (string),model (string),year (integer),price (float)
// The class should also have the following methods:
// __construct() method that takes in the make, model, year, and price
// of the car and sets them as properties of the object.
// getMake() method that returns the make of the car.
// getModel() method that returns the model of the car.
// getYear() method that returns the year of the car.
// getPrice() method that returns the price of the car.
// You can also add methods to calculate the depreciation of the car over
// time, or to determine the resale value based on the current market conditions.
class Car 
{
    private $make;
    private $model;
    private $year;
    private $price;
    public function __construct($make, $model, $year, $price) 
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
    }
    public function getMake() 
    {
        return $this->make;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getYear() 
    {
        return $this->year;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function calculateDepreciation($years) 
    {
        $currentYear = date("Y");
        $depreciationRate=0.1;
        $depreciatedPrice = $this->price;
        for ($i = 0; $i < $years; $i++) 
        {
            $depreciatedPrice -= $depreciatedPrice * $depreciationRate;
        }
        return $depreciatedPrice;
    }
    public function determineResaleValue($marketCondition) 
    {
        $resaleValue = 0;
        switch ($marketCondition) 
        {
            case 'excellent':
                $resaleValue = $this->price*0.8;
                break;
            case 'good':
                $resaleValue = $this->price*0.6;
                break;
            case 'fair':
                $resaleValue = $this->price*0.4;
                break;
            case 'poor':
                $resaleValue = $this->price*0.2;
                break;
            default:
                echo "Invalid market condition.\n";
                break;
        }
        return $resaleValue;
    }
}
$car = new Car("Toyota", "Camry",2018,25000.0);
echo "<br>Make:->>".$car->getMake();
echo "<br>Model:->>".$car->getModel();
echo "<br>Year:->>".$car->getYear();
echo "<br>Price:->>".$car->getPrice();
$years=3;
$depreciatedPrice = $car->calculateDepreciation($years);
echo "<br>Depreciated Price after $years years:->>".$depreciatedPrice;
$marketCondition='good';
$resaleValue = $car->determineResaleValue($marketCondition);
echo "<br>Resale Value in $marketCondition market condition:->>".$resaleValue;

?>