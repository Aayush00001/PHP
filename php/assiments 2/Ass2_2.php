<?php
// 2. Create a class called &amp;quot;Student&amp;quot; that has the following
// properties: name (string)
// id (integer)
// courses (array)
// The class should also have the following methods:
// __construct() method that takes in the name and id of the student
// and sets them as properties of
// the object.
// addCourse() method that takes in a course name and adds it to the
// courses array.
// removeCourse() method that takes in a course name and removes it
// from the courses array.
// getCourses() method that returns an array of the students &amp; courses.
class Student 
{
    public $name;
    public $id;
    public $courses;
    public function __construct($name, $id) 
    {
        $this->name = $name;
        $this->id = $id;
        $this->courses = array();
    }
    public function addCourse($course)
    {
        $this->courses[] = $course;
    }
    public function removeCourse($courseName) 
    {
        unset($this->courses[$courseName]);
    }

    public function getCourses()
    {
        return $this->courses;
    }
}
$student = new Student("aayush radhnapara", 11111);
$student->addCourse("php");
$student->addCourse("c#");
$student->addCourse("seo");
$student->removeCourse("cap");
$course=$student->getCourses();

echo "<br>Student Name:->>".$student->name."<br>";
echo "<br>Student ID:->>".$student->id."<br>";
echo "<br>Student Courses:->>".$student->courses[0]."<br>";
echo "<br>Student Courses:->>".$student->courses[1]."<br>";
echo "<br>Student Courses:->>".$student->courses[2]."<br>";

?>