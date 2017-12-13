<?php


  // $str = "Mary Had A Little Lamb and She LOVED It So";
  // echo $str . "<br />";
  //
  // $str = strtolower($str);
  // echo $str . "<br />";
  //
  // $str = strtoupper($str);
  // echo $str . "<br />";

$str =  "I Love PHP So Much & Although JavaScript";
echo $str . "<br />";
$count = str_word_count($str, 2, "&");
echo "<pre>";
print_r($count);
echo "</pre>";

// Syntax:
//        parse_str($String, $Array);

$link = "name=Omar&age=33&&year=2017&skill=2";
echo $link ."<br />";
parse_str($link, $myArray);
// echo $name . "<br />";
// echo $age . "<br />";
// echo $year . "<br />";
// echo $skill . "<br />";

echo "<pre>";
print_r($myArray);
echo "</pre>";

// Syntax:
//    nl2br($string); // New line To break Tag

$str2 = "Hello I Love PHP \n also i love js \n";

echo nl2br($str2);

// Syntax:
//          strpos($String, Search, offset);  // first two arrguments are required // offset is the start search index and it is required

$str3 = "I love PHP very much because PHP is famous and cool language";

$pos = strpos($str3, "PHP");
echo $pos . "<br />";
$pos2 = strpos($str3, "PHP", 8);
echo $pos2 . "<br />";

// Syntax:
//          stripos($String, Search, offset);  // first two arrguments are required // offset is the start search index and it is required

$pos2 = stripos($str3, "php");
echo $pos2 . "<br />";


$char = strstr($str3, "PHP");
echo $char . "<br />";

$str4 = "Omar@gmail.com";
$char2 = strstr($str4, "@");
echo $char2 . "<br />";
echo str_replace("@", "", $char2) . "<br />";

// Syntax :
       // stristr(String, Search, before-search);

  $char3 = stristr($str3, "pHp");
  echo $char3 . "<br />";


$str5 = "PHP";
$str6 = "PHP";
echo strcmp($str5, $str6) . "<br />";

// Syntax:
        //   strrev(String);   // string reverse and it take just one arggument


$str7 = "Omar Nizam Aldeen";
echo strrev($str7) . "<br />";


// Syntax:
//        substr(String, start, length);


$peice = substr($str3, 20, 22);
echo $peice . "<br />";

// Syntax:
//         substr_compare(str1, str2, start, length, case);

$str8 = "Omar Nizam Aldeen";
$str9 = "Nizam";
$compare = substr_compare($str8, $str9, 0);
echo $compare . "<br />";


/*
 Syntax :
            switch (variable) {
              case 'value':
                # code...
                break;

              default:
                # code...
                break;
            }
*/

$browser = "Mozilla FireFox";

switch ($browser) {
  case "Google Chrome":
    echo "Your favourite browser is Google Chrome" . "<br />";
    break;
  case "FireFox":
  case "Mozilla FireFox":
    echo "Your favourite browser is FireFox" . "<br />";
    break;
  case "Opera":
    echo "Your favourite browser is Opera" . "<br />";
    break;
  default:
    echo "Your favourite browser is not here" . "<br />";
    break;
}
