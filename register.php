<?php
  include('includes/config.php');
  include('includes/classes/Account.php');
  include('includes/classes/Constants.php');
	  $account = new Account($con);
  include('includes/handlers/register-handler.php');
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
  </head>
  <body>
      <?php
        if (isset($_POST['registerButton'])) {
          echo "<script>
          $(document).ready(function () {
            $('#loginForm').hide();
            $('#registerForm').show();
          });
          </script>";
        } else {
          echo "<script>
          $(document).ready(function () {
            $('#loginForm').show();
            $('#registerForm').hide();
          });
          </script>";
        }
      ?>

    <div id="background">
      <div id="loginContainer">
        <div id="inputContainer">
          <form id="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <?php echo $account->getError(Constants::$loginFailed); ?>
              <label for="loginUsername">Username</label>
              <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g Chuckz" value="<?php getInput('loginUsername'); ?>" required>
            </p>
            <p>
              <label for="loginPassword">Password</label>
              <input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" value="<?php getInput('loginPassword'); ?>" required>
            </p>
            <button type="submit" name="loginButton">LOGIN </button>
            <div class="hasAccountText">
              <span id="hideLogin">Don't have an account yet? Signup here</span>
            </div>
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
              <input id="email" name="email" type="email" placeholder="e.g Chuckz@gmail.com" value="<?php getInput('email'); ?>" required>
            </p>
            <p>
              <label for="email2">Confirm Email</label>
              <input id="email2" name="email2" type="email" placeholder="e.g Chuckz@gmail.com" value="<?php getInput('email2'); ?>" required>
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
            <div class="hasAccountText">
              <span id="hideRegister">Already have an account yet? Login here.</span>
            </div>
          </form>
        </div>

        <div id="loginText">
          <h1>Get Great Music, Right Now!</h1>
          <h2>Listen to loads of songs for free</h2>
          <ul>
            <li>Discover music you'll fall in love with</li>
            <li>Create your playlist</li>
            <li>Follow artist to keep up to date</li>
          </ul>
        </div>
      </div>

    </div>

  </body>
</html>
