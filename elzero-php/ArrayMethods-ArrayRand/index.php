<?php

  $array = [
    'Omar',
    'Ahmed',
    'Osama',
    'Samer',
    'Sayed'
  ];

  $randomElement = array_rand($array, 3);

  echo "<pre>";
  print_r($array);
  echo "</pre>";

  echo $array[$randomElement[0]] . "<br />";
  echo $array[$randomElement[1]] . "<br />";
  echo $array[$randomElement[2]] . "<br />";
