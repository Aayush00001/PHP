<?php
class MyClass
{
    public $var1 = 'value 1';
    public $var2 = 'value 2';
    public $var3 = 'value 3';
    protected $protected = 'protected var';
    private $private = 'private var';
    function iterateVisible() {
        echo "From the Class iterateVisible: <br>";
        foreach ($this as $key => $value) {
        print "$key => $value <br>";
        }
    }
}
$obj = new MyClass();
foreach($obj as $key => $value) {
print "$key => $value <br>";
}
echo "<br>";
$obj->iterateVisible();
?>