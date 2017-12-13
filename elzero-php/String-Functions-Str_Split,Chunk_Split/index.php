<?php

  /*
    Syntax :
            str_split(String, lenght);
  */

$str = "Hello I love php";
echo $str . "<br />";

$arr = str_split($str, 2);
echo "<pre>";
print_r($arr);
echo "</pre>";


/*
  Syntax :
          chunk_split(String, lenght, end);
*/

$str = "Hello I love php";
echo $str . "<br />";

$arr = chunk_split($str, 2, "-");

echo $arr;
