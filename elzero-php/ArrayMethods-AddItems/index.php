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
print_r($langs); // print the main array
echo "</pre>";

  // Syntax :
  //        array_push($array, $var);

array_push($langs, "Java", "Python");
echo "<pre>";
print_r($langs); // print the main array after adding new elements to the end of it.
echo "</pre>";

  //Syntax :
  //        array_unshift($array, $var);

array_unshift($langs, "AJAX");
echo "<pre>";
print_r($langs); // print the main array after adding new elements to the biggening of it.
echo "</pre>";
