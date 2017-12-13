<?php

  $array1 = array_fill(1, 20, array_fill(5, 10, "Omar"));

  echo "<pre>";
  print_r($array1);
  echo "</pre>";

$array2 = array_fill(2, 5, ["Osama", "Ahmed", "Samer"]);

echo "<pre>";
print_r($array2);
echo "</pre>";
