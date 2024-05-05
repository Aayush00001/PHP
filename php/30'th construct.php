<?php
class Employee
{
    public $name; public $age; public $gender;
    public function __construct($name = "", $age = 25, $gender ='Male')
    {
        $this->name = $name;
        $this->age= $age;
        $this->gender = $gender;
    }
    public function __sleep()
    {
        echo "<br>__sleep() will be called if the serialize() method is used outside the class.<br>";
        return array('name', 'age');
    }
    public function __wakeup()
    {
        echo "<br>__wakeup() will be called if the unserialize()method is called outside the class.<br>";
        $this->gender = 'Male';
    }
}
$obj1 = new Employee('abc');
echo "<br>".serialize($obj1);
var_dump(unserialize(serialize($obj1)));
?>