<?php

  include 'includes/config.php';
//  session_destroy();

  if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedn = $_SESSION['userLoggedIn'];
  } else {
    header("Loction: register.php");
  }