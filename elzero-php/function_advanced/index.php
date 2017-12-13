<?php
  //require 'func_advanced.php';
  $diet = [
    "Day one" => ["Apple", "Banana", "Milk"],
    "Day two" => ["Meat", "Apple", "Egg"],
    "Day three" => ["Egg", "Apple"],
    "Day four" => ["Rice", "Apple"],
    "Day five" => ["Bread", "Apple",
                    [
                      "salt" => "10%",
                      "sugar" => "20%",
                    ], "Banana"]
  ];

  echo "<pre>";
  print_r($diet);
  echo "</pre>";

  echo $diet["Day five"][2]["sugar"];
?>

<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Advanced function</title>
    <style>
      .nice-frame {
        padding:10px;
        text-align: center;
        width: 400px;
        margin: 20px auto;
        border-radius: 10px;
        background-color: #EEE;
        border: 1px solid #CCC;
        font-family: Tahoma, Arial;
        line-height: 2;
      }
      .nice-frame span {
        font-weight: bold;
        color: #F00;
      }
    </style>
  </head>
  <body>
    <?= $myElement; ?>
  </body>
</html> -->
