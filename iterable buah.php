<?php
function printIterable(iterable $buahList) {
  foreach($buahList as $item) {
    echo $item . "<br>";
  }
}

// Dipanggil dengan array:
printIterable(["Apple", "Banana", "Grape"]);

// Dipanggil dengan object (ArrayIterator):
$iterator = new ArrayIterator(["Mango", "Orange", "Pineapple"]);
printIterable($iterator);
?>
