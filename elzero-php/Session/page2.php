<?php

  session_start();

  echo 'Hello ' .  $_SESSION['username'] . ' How are you?' . "<br />";
  echo "Your favorite food is " . $_SESSION['favfood'] . "<br />";

  echo "<a href='logout.php'>Exit</a>";
