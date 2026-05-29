<?php
class FruitMessage {
  const MESSAGE = "Ini adalah class Buah di PHP!";

  public function info() {
    echo self::MESSAGE . "<br>";
  }
}

$apple = new FruitMessage();
$apple->info();
?>
