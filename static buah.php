<?php
class Fruit {
  // Static property
  public static $category = "Fruit";

  // Static method
  public static function info() {
    echo "Hello, I am a " . self::$category . "!<br>";
  }
}

// Panggil static method langsung dari class
Fruit::info();

// Akses static property langsung dari class
echo Fruit::$category;
?>
