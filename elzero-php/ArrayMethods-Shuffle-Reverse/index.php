<?php

$langs = [
  "HTML",
  "CSS",
  "JavaScript",
  "MySQL",
  "Ruby",
  "PHP"
];

echo "<pre>";
print_r($langs);
echo "</pre>";

// Syntax :
//         array_reverse($array, Preserve);  // Preserve by default False but if you write it true : it will keep the keys as the original order.

$reversed = array_reverse($langs, false); //

echo "<pre>";
print_r($reversed);
echo "</pre>";

// Syntax :
//         shuffle($array);

shuffle($langs);

echo "<pre>";
print_r($langs);
echo "</pre>";
