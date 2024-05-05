<?php
/*1. Create a class called &quot;Person&quot; that has the following properties:
name (string)
age (integer)
gender (string)
The class should also have the following methods:
__construct() method that takes in the name, age, and gender of the person and
sets them as
properties of the object.
getName() method that returns the name of the person.
getAge() method that returns the age of the person.
getGender() method that returns the gender of the person.
introduce() method that outputs a message introducing the person, like “Hi, my
name is [name], I’m [age] years old, and I’m a [gender].”*/

class aayush {
    private $name;
    private $age;
    private $gender;
    
    public function __construct($name, $age, $gender) 
    {
        $this->name=$name;
        $this->age=$age;
        $this->gender=$gender;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getAge() 
    {
        return $this->age;
    }
    public function getGender()
    {
        return $this->gender;
    }
    
}
$aayush=new aayush("aayush",20,"male");
echo $aayush->getname();
echo $aayush->getage();
echo $aayush->getgender();


?>
