<?php

  /*
    Synatx:
            explode(seprator, string, limit);     // seprator & string are requied but limit is optional.
      Explode split your string into array.
  */

$str = "Hello, I, love, php, too, much";
echo $str . "<br />";

$arr = explode(", ", $str);
echo "<pre>";
print_r($arr);
echo "</pre>";
