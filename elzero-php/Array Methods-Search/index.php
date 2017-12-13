<?php

 $array = [
   "HTML",
   "CSS",
   "JavaScript",
   "MySQL",
   "Ruby",
   "PHP"
 ];

  // Syntax :
  //        in_array($needle, $haystack, type);

  if (in_array("PHP", $array)) {
    echo "Yes it is exist !! <br />";
  }


  // Syntax :
  //        array_search($needle, $haystack, type);

  $lang = array_search("JavaScript", $array, true);

  echo "Yes, It is found in Index " . $lang. " And the value is " . $array[$lang] . "<br />";

  // Syntax :
  //        array_key_exists($key, $search);    // if the array is indexed we use the index as key && if the array is associative array we use the key as key.

  if (array_key_exists(2, $array)) {
    echo "Yes it is found ... " . $array[2];
  }

  
