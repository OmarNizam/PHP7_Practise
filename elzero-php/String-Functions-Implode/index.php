<?php

/*
  Syntax:
          implode(Seprator, Array);
*/

$arr = ["Omar", "will", "start", "his", "job", "on", "Wednesday"];
echo "<pre>";
print_r($arr);
echo "</pre>";

$str = implode(" ", $arr);
echo $str;
