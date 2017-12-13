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
//        array_pop($array);

$lastLang = array_pop($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $lastLang;

// Syntax :
//        array_shift($array);

$firstLang = array_shift($langs);
echo "<pre>";
print_r($langs);
echo "</pre>";
echo $firstLang;
