<?php
//w.a.p for sttic variable in class
class demo{
private static $static_member = "aayush";
function __construct() {
echo self::$static_member;
// Accessing static variable
}
}
new demo();
?>