<?php

  function sanitzeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace("", "", $inputText);
    return $inputText;
  }

  function sanitzeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace("", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
  }

  function sanitzeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
  }

  if (isset($_POST['registerButton'])) {
    $username = sanitzeFormUsername($_POST['username']);
    $firstName = sanitzeFormUsername($_POST['firstName']);
    $lastName = sanitzeFormUsername($_POST['lastName']);
    $email = sanitzeFormUsername($_POST['email']);
    $email2 = sanitzeFormUsername($_POST['email2']);
    $password = sanitzeFormPassword($_POST['password']);
    $password2 = sanitzeFormPassword($_POST['password2']);

    $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

    if ($wasSuccessful == true) {
      $_SESSION['userLoggedin'] = $username;
      header("Location: index.php");
    }
  }
?>