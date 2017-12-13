<?php
//require "cookies.php";

// the cookies must be before any html code

$mainColor = '#FFF';

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
  $mainColor = $_POST['color'];
  setcookie('Background', $mainColor, time() + 3600, "/");
}

if (isset($_COOKIE['Background'])) {
  $body = $_COOKIE['Background'];
} else {
  $body = $mainColor;
}

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

//  unset the cookie:   make the value empty and the time one hour back  .... This is the way to delete the cookie
//setcookie('Background', '', time() - 3600, '/');

 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Modify Cookies</title>
   </head>
   <body style="background-color: <?= $body; ?>">
     <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
       <input type="color" name="color" />
       <input type="submit" value="Choose" />
     </form>
   </body>
 </html>
