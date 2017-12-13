<?php
// Syntax :
            // addslashes($string);
//
  $str = "I Will'' Go' At 6 O'Clock";

  echo $str . "<br />";

  $skipped = addslashes($str);  // but slashes before the ' or \ .....
  echo $skipped . "<br />";

  $clean = stripslashes($skipped); // opposit of addslashes
  echo $clean . "<br />";

  $str1 = "I Love <b>PHP</b> Go To <a href='www.php.net'>PHP.NET</a> To Learn <i>PHP</i>.";
  echo $str1 . "<br />";
  $stripped = strip_tags($str1);   // Stripped all kind of tags in HTML or PHP or XML ...
  echo $stripped . "<br />";
