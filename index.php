<?php
  include 'includes/config.php';
  print_r($_SESSION);
//  session_destroy();

  if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedn = $_SESSION['userLoggedIn'];
  } else {
    header("Location: register.php");
  }
?>

<html>
  <head>
    <title>Welcome to Slotify!</title>
  </head>

  <body>
    Hello!
  </body>

</html>