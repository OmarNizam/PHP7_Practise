<?php

  /*
    Session Start or Resume:      session_start(option);

  */
session_start();
$_SESSION['username'] = "Omar";
$_SESSION['favfood'] = "Pizza";

echo "<a href='page2.php'>Room Number 2</a>" . "<br />";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

 ?>
