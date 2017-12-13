<?php


  if (empty($_SESSION['counter'])) {
    $_SESSSION['counter'] = 1;
  } else {
    $_SESSION['counter'] ++;
  }
  echo "<a href='counter.php'>Counter</a>";
  echo "<div>You viewed this page " . $_SESSION['counter'] . " Times </div>";
