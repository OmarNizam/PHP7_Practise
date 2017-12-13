<?php

  // Syntax :
  //            str_repeat(String, Repeatenum);
  //

  $str = "Omar <br />";

  $repeat = str_repeat($str, 5);

  echo $repeat;

  // Syntax:
  //          str_shuffle($str);  // It shuffle the string alphapites ...
  //

  $str1 = "Omar Nizam Aldeen Loves PHP";
  $shuffle = str_shuffle($str1);     // I tis very good when you want to get random password & other strings too
  echo $shuffle . "<br />";

// Syntax :
//          strlen($string);

// string length is giving you the number of chars in the string

  $length = strlen($str1);
  echo $length . "<br />";   // for example you can use it with username if user is  not allaw to type more than exact number of chars
  if ($length > 10) {
    echo "Sorry Your string is larger than 10 letters Please enter less than 10";
  }

  
