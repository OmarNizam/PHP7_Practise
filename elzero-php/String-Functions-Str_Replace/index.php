<?php


  /*
    Syntax : str_replace(Search, Replace, String, Count);
  */

  $str = "I Love PHP Too Much Because PHP Is Easy Language And PHP Is Famous";

  echo $str . "<br />";
// Explode converted from String to array
  $arr1 = explode(" ", $str);
  echo "<pre>";
  print_r($arr1);
  echo "</pre>";

  $str2 = str_replace("PHP", "JavaScript", $str);
  echo $str2 . "<br />";

  $arr2 = explode( " ", $str);
  echo "<pre>";
  print_r($arr2);
  echo "</pre>";
// implode converted from array to string
  $str3 = implode(" ", $arr2);
  echo $str3 . "<br />";


  $str = str_replace(array("PHP", "Is", "Easy"), "JavaScript", $str);  // replaced each word in the aray eith the Javascript wprd int he String
  echo $str . "<br />";


$str = "Line 1\n Line2\n\r Line3\n Line4 \r";
$order = ["\n", "\n\r", "\r"];
echo $str . "<br />";
$str = str_replace($order, "<br />", $str);

echo $str . "<br />";
