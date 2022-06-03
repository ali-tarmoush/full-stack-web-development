# Instructions
## Looking at the below class:
<?php
class Car {
  public $name;
  public $color;
  ​
  function set_name($name) {
    $this->name = $name;
  }
}
​
$toyota = new Car();
$toyota->set_name("Toyota");
?>

* Implement the get method for the car $name.
* Implement the set and get methods for the car $color.
* Give the color black for a car called toyota and the color red for a car called bmw and print both of them on the screen.