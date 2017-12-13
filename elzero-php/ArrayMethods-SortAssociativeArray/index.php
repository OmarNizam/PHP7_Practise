<?php

$langs = [
  "HTML" => 80,
  "CSS" => 70,
  "JavaScript" => 45,
  "MySQL" => 90,
  "Ruby" => 95,
  "PHP" => 30,
];

echo "<pre>";
print_r($langs); // print the main array.
echo "</pre>";

// Syntax :
//        sort($array);

asort($langs);
echo "<pre>";
print_r($langs); // print array after sort.
echo "</pre>";

// Syntax :
//        rsort($array);  // sort the array but invese

arsort($langs);
echo "<pre>";
print_r($langs); // print array after sort.
echo "</pre>";

// Syntax :
//        ksort($array);

ksort($langs);
echo "<pre>";
print_r($langs); // print array after sorting keys
echo "</pre>";

// Syntax :
//        krsort($array);

krsort($langs);
echo "<pre>";
print_r($langs); // print array after sorting keys reversed
echo "</pre>";
