<?php

$langs = [
  "HTML",
  "CSS",
  10,
  "JavaScript",
  "MySQL",
  20,
  "Ruby",
  "PHP",
  15
];

echo "<pre>";
print_r($langs); // print the main array.
echo "</pre>";

// Syntax :
//        sort($array);

sort($langs);
echo "<pre>";
print_r($langs); // print array after sort.
echo "</pre>";

// Syntax :
//        rsort($array);  // sort the array but invese

rsort($langs);
echo "<pre>";
print_r($langs); // print array after sort.
echo "</pre>";
