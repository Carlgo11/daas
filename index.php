<?php
include __DIR__ . '/res/settings.php'; // File where ad-HTML, ad-CSS and top-bar color is saved.
$_SESSION['dox'] = htmlspecialchars($_GET["q"]);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">

    <!-- Mobile top-bar-color -->
    <meta name="theme-color" content="<?php echo $col; ?>"> <!-- Top-bar color for android -->
    <meta name="msapplication-navbutton-color" content="<?php echo $col; ?>"> <!-- Top-bar color for windows-phone -->
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $col; ?>"> <!-- Top-bar color for IOS -->

    <!-- Icon -->
    <link rel="icon" href="res/icon.jpg">

    <!-- Title -->
    <title>Simple Doxer</title>

    <!-- Bootstrap CSS + Font-Awesome Icon Lib + Tether.io -->
    <link href="res/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap JS +jQuery + Tether.io-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="res/bootstrap.min.js"></script>



    <!-- Styling from settings.php will be added here -->
    <style>
      <?php echo $adCss; ?>
    </style>
  </head>

  <body style="padding-top: 2rem;">
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="./">Simple Doxing Tool</a>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav mr-auto">

        </ul>
        <form class="form-inline my-2 my-lg-0" action="">
          <input class="form-control mr-sm-2" type="text" placeholder="Greger Thörn" value="<?php echo $_SESSION['dox']; ?>" name="q" id="q">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Dox</button>
        </form>
      </div>
    </nav>

    <div class="container" style="padding-top: 2rem;"> <!-- container -->
      <center>
        <?php
        $doxer = 'https://www.hitta.se/sök?vad=';
        if(!isset($_GET["q"])) {

                  echo '<br><form><div class="form-group"><label for="q" style="font-weight: bold;">Name/Phone/Address:</label><input class="form-control mr-sm-2" type="text" placeholder="Greger Thörn" name="q" id="q" style="font-size: 150%; text-align: center;"><br><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Dox</button></div></form>';

                  if (isset($ad)) {
                    echo '<div class="customad">'.$ad.'</div>';
                  }

                } else {

                  header("Location: ".$doxer." ".$_SESSION['dox']);

                }
        ?>
      </center>
    </div> <!-- /container -->
  </body>
</html>
