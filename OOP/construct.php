<?php   
    class Con{
        public $name;
        function __construct($name, $color){
            $this->name = $name;/* $this - это временные данные которые будут хранится внутри класса */
            $this->color = $color;
        }
        function show_name(){
            return $this->name;
        }
        function show_last(){
            $last = $this->name." DC - ".$this->color;
            return $last;
        }
    }
    $con = new Con("Flash", "Gold");/* Construct - это функция которая позволяет дать параметры прямо при вызове класса */
    echo $con->show_name()."<br>";
    echo $con->show_last();