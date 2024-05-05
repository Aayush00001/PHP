<?php
//w.a.p for static member function in class
class calc{
static $count;
public static function getCount() {
return self::$count++;
}
}
calc::$count = 1;
for($i = 0; $i < 5; ++$i) {
echo 'The next value is: '.
calc::getCount() . "<br>";
}
?>