<?php
    class demo{
        public function add()
        {
            echo "addtion is:".(10+20);
        }
    }
    interface intdemo
    {
        public function sub();
    }
    $obj=new class extends demo implements intdemo
    {
        public function sayhello()
        {
            echo "hello word";
        }
        function sub()
        {
            echo "subtration is:".(20-10);
        }
    };
    $obj->sayhello();
    echo "<br>";
    $obj->add();
    echo "<br>";
    $obj->sub();
?>