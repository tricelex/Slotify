<?php
  include('includes/config.php');
  include('includes/classes/Account.php');
  include('includes/classes/Constants.php');
  $account = new Account($con);
  include('includes/handlers/regster-handler.php');
  include('includes/handlers/login-handler.php');

  function getInput($name) {
    if (isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
?>

<html>
  <head>
    <title>Welcome to Slotify</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
  </head>
  <body>
    <div id="background">
      <div id="loginContainer">
        <div id="inputContainer">
          <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <?php echo $account->getError(Constants::$loginFailed); ?>
              <label for="loginUsername">Username</label>
              <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g Chuckz" required>
            </p>
            <p>
              <label for="loginPassword">Password</label>
              <input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
            </p>
            <button type="submit" name="loginButton">LOGIN </button>
          </form>


          <form id="registerForm" action="register.php" method="POST">
            <h2>Create to your account</h2>
            <p>
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
              <label for="username">Username</label>
              <input id="username" name="username" type="text" placeholder="e.g KingChuckz" value="<?php getInput('username'); ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
              <label for="firstName">First Name</label>
              <input id="firstName" name="firstName" type="text" placeholder="e.g Chuckz" value="<?php getInput('firstName'); ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
              <label for="lastName">Last Name</label>
              <input id="lastName" name="lastName" type="text" placeholder="e.g Okoye" value="<?php getInput('lastName'); ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$emailDoNotMatch); ?>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailTaken); ?>
              <label for="email">Email</label>
              <input id="email" name="email" type="text" placeholder="e.g Chuckz@gmail.com" value="<?php getInput('email'); ?>" required>
            </p>
            <p>
              <label for="email2">Confirm Email</label>
              <input id="email2" name="email2" type="text" placeholder="e.g Chuckz@gmail.com" value="<?php getInput('email2'); ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$passwordsNotAlphaNumeric); ?>
                <?php echo $account->getError(Constants::$passwordsCharacters); ?>
              <label for="password">Password</label>
              <input id="password" name="password" type="password" placeholder="Your Password" required>
            </p>

            <p>
              <label for="password2">Confirm Password</label>
              <input id="password2" name="password2" type="password" placeholder="Confirm Your Password" required>
            </p>
            <button type="submit" name="registerButton">SIGN UP</button>
          </form>
        </div>
      </div>

    </div>

  </body>
</html>
