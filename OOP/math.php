<?php
    class Math{
        public $num;
        function find_square($num){
            $this->num = $num;
            return $num*$num;
        }
        function sqr3(){
            $conum = $this->num;/* $this-> haves last set value */
            $sqr3 = pow($conum, 3);/* Can not use $this-> outside of function */
            return $sqr3;
        }
    }
    $finder = new Math();
    echo $finder->find_square(12)."<br>";
    echo $finder->find_square(2)."<br>";
    echo $finder->sqr3();