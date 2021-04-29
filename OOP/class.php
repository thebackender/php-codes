<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  public $size;

  // Methods
  function set_name($name) {
      $this->name = $name;
  }
  function get_name() {
      return $this->name;
  }

  function set_color($color){
      $this->color = $color;
  }
  function get_color(){
      return $this->color;
  }

  function set_size($size){
      $this->size = $size;
  }
  function get_size(){
      return $this->size;
  }
}
?>