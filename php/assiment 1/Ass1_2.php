<?php
/*2. Create a class called “Rectangle” that has the following properties:
length (float)
width (float)
The class should also have the following methods:
__construct() method that takes in the length and width of the rectangle and sets
them as properties of the object.
getArea() method that returns the area of the rectangle (length * width).
getPerimeter() method that returns the perimeter of the rectangle (2 * length + 2* width).*/
class Rectangle 
{
    private $length;
    private $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
    public function getArea() {
        return $this->length*$this->width;
    }
    public function getPerimeter() {
        return 2*($this->length+$this->width);
    }
}
$Rectangle=new Rectangle(10,10);
$area=$Rectangle->getArea();
echo $Rectangle->getPerimeter();
?>
