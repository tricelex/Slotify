<?php
  include 'includes/config.php';
  //  session_destroy();

  if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedn = $_SESSION['userLoggedIn'];
  } else {
//    header("Location: register.php");
  }
?>

<html>
  <head>
    <title>Welcome to Slotify!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>

  <body>

    <div id="nowPlayingBarContainer">
      <div id="nowPlayingBar">

        <div id="nowPlayingLeft">
          <div class="content">
            <span class="albumLink">
              <img class="albumArtwork" src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg"/>
            </span>
            <div class="trackInfo">
              <span class="trackName">
                <span>King</span>
              </span>
              <span class="artistName">
                <span>Tamara Bracknell</span>
              </span>
            </div>
          </div>
        </div>

        <div id="nowPlayingCenter">
          <div class="content playerControls">
            <div class="buttons">
              <button class="controlButton shuffle" title="Shuffle Button">
                <img src="assets/images/icons/shuffle.png" alt="Shuffle"/>
              </button>
              <button class="controlButton previous" title="Previous Button">
                <img src="assets/images/icons/previous.png" alt="Previous"/>
              </button>
              <button class="controlButton play" title="Play Button">
                <img src="assets/images/icons/play.png" alt="Play"/>
              </button>
              <button class="controlButton pause" title="Pause Button" style="display: none;">
                <img src="assets/images/icons/pause.png" alt="Pause"/>
              </button>
              <button class="controlButton next" title="Next Button">
                <img src="assets/images/icons/next.png" alt="Next"/>
              </button>
              <button class="controlButton repeat" title="Repeat Button">
                <img src="assets/images/icons/repeat.png" alt="Repeat"/>
              </button>
            </div>
            <div class="playbackBar">
              <span class="progressTime current">0.00</span>
              <div class="progressBar">
                <div class="progressBarBg">
                  <div class="progress"></div>
                </div>
              </div>
              <span class="progressTime remaining">0.00</span>
            </div>
          </div>
        </div>

        <div id="nowPlayingRight">
          <div class="volumeBar">
            <button class="controlButton volume" title="Volume Button">
              <img src="assets/images/icons/volume.png" alt="Volume ">
            </button>
            <div class="progressBar">
              <div class="progressBarBg">
                <div class="progress"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </body>

</html>