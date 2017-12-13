<?php

  $array = [
    'Omar',
    'Omar',
    'Ahmed',
    'Osama',
    'Osama',
    'Samer',
    'Sayed',
    'Sayed'
  ];

  echo "<pre>";
  print_r($array);
  echo "</pre>";

  $unique = array_unique($array);

  echo "<pre>";
  print_r($unique); // print the array after deleting the repeated elementes.
  echo "</pre>";
