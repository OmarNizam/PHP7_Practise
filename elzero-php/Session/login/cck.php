<?php

  session_start();

  $admins = ['Osama', 'Omar', 'Martin', 'Sammer'];

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    if (in_array($user, $admins)) {
      // If the user is Admin
      $_SESSION['user'] = $user;   // if he is admin store the user name in a session called user
      echo "Welcome " . $_SESSION['user'] . " you will be directed to the controle panel area";
    } else {
      // If the user is not admin
      echo "Sorry you are not Admin and you are not permitted to see controle panel";
    }


  } else {
    echo "You can't browse this page directly";
  }

  // session_unset();
  // session_destroy();
