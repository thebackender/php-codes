<?php
    include "class.php";
    $apple = new Fruit();
    $banana = new Fruit();
    $apple->set_name("Apple");
    $banana->set_name("Banana");
    $apple->set_color("Green");
    $apple->set_size("Small");

    echo $apple->get_name()." - ".$apple->get_color()." - ".$apple->get_size();
    echo "<br>";
    echo $banana->get_name();