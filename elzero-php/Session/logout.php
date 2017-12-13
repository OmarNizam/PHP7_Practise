<?php

  session_start();

  session_unset();

  session_destroy();

  echo "<pre>";
  print_r($_SESSION);
  echo "</pre>";
