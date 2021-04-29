<?php
    class Show{
        public $name;
        public $color;
        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        function __destruct(){
            echo "Color of {$this->name} is {$this->color}";/* Выполняется действия внутри этой функции, после вызова класса */
        }
    }
    $apple = new Show("Apple", "red");