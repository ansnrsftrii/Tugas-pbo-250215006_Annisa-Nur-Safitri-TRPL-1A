<?php
// Abstract base class
abstract class Fruit {
  public $name;

  // Constructor
  public function __construct($name) {
    $this->name = $name;
  }

  // Abstract method - wajib diimplementasi oleh child class
  abstract public function intro();
}

// Child class Apple
class Apple extends Fruit {
  public function intro() {
    return "Manis dan segar! Saya adalah $this->name.<br>";
  }
}

// Child class Grape
class Grape extends Fruit {
  public function intro() {
    return "Kecil tapi nikmat! Saya adalah $this->name.<br>";
  }
}

// Buat objek Apple
$apple = new Apple("Apple");
echo $apple->intro();

// Buat objek Grape
$grape = new Grape("Grape");
echo $grape->intro();
?>
