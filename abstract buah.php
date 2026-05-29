<?php
class Fruit {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  public function get_details() {
    echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
  }
}

// Buat objek Apple
$apple = new Fruit("Apple", "Merah");
$apple->get_details();

// Buat objek Anggur
$grape = new Fruit("Anggur", "Ungu");
$grape->get_details();

// Buat objek Mangga
$mango = new Fruit("Mangga", "Hijau");
$mango->get_details();
?>
