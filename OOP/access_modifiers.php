<?php
    class Fruit1 {
        public $name;
        public $color;
        public $weight;

        function set_name($n) {  // a public function (default)
            $this->name = $n;
        }
        protected function set_color($n) { // a protected function
            $this->color = $n;
        }
        private function set_weight($n) { // a private function
            $this->weight = $n;
        }
    }
    $mango1 = new Fruit1();
    $mango1->set_name('Mango'); // OK
    $mango1->set_color('Yellow'); // ERROR
    $mango1->set_weight('300'); // ERROR

    class Fruit2 {
        public $name;
        protected $color;
        private $weight;
    }
    $mango2 = new Fruit2();
    $mango2->name = 'Mango'; // OK
    $mango2->color = 'Yellow'; // ERROR
    $mango2->weight = '300'; // ERROR
?>