<?php

  $diet = array(
    'Day1' => array('banana', 'Apple', 'Bread'),
    'Day2' => array('Meat', 'Bread', 'Sugar'),
    'Day3' => array('Fish', 'Salt', 'Apple'),
   );

  // to print all the array
  echo "<pre>";
  print_r($diet);
  echo "</pre>";

foreach ($diet as $day => $food) {
  echo "<h3>In " . $day . " I will eat :</h3>";
  foreach ($food as $item) {
    echo "- " . $item . "<br />";
  }
}
