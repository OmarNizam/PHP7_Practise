<?php

  $admins = ['Omar', 'Hassan', 'Osama'];
  $username = $_POST['username'];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (in_array($username, $admins)) {
      echo "Welcome " . $username . "To Controle Panel For Admin";
    } else {
      echo "Sorry This User Is Not Exist In Our Client Area !!!";
    }
  } else {
    echo "Sorry you canot browse this page directly...";
  }
