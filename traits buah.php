<?php
// Definisikan trait
trait FruitTrait {
  public function get_details() {
    echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
  }
}

// Class Apple pakai trait
class Apple {
  use FruitTrait;
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
}

// Class Grape pakai trait
class Grape {
  use FruitTrait;
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
}

// Buat objek Apple
$apple = new Apple("Apple", "Merah");
$apple->get_details();

// Buat objek Grape
$grape = new Grape("Grape", "Ungu");
$grape->get_details();
?>
