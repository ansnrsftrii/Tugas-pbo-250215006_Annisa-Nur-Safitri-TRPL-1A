<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Constructor langsung isi property saat objek dibuat
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  // Method untuk menampilkan detail buah
  public function get_details() {
    echo "Name: " . $this->name . ". Color: " . $this->color . ".<br>";
  }
}

// Buat objek Apple
$apple = new Fruit("Apple", "Red");
$apple->get_details();

// Buat objek Grape
$grape = new Fruit("Grape", "Purple");
$grape->get_details();
?>
