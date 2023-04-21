<!DOCTYPE html>
<html lang="en-ca">

  <!--Meta data-->
  <meta charset="utf-8">
  <meta name="description" content="Movie rating webpage">
  <meta name="keywords" content="immaculata, ics2o">
  <meta name="author" content="Lily C">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!--Stylesheet CSS-->
    <link rel="stylesheet" href="./css/style.css">

    <!--MDL theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-amber.min.css" />

    <!--Title-->
      <title>Movie ratings Webpage</title>
  </head>
  <body>

    <!--Link to JavaScript file-->
    <script src="./js/script.js"></script>

     <!--Header-->
    <center>
   <?php echo "<h1>Movie Ratings with PHP</h1>"; ?>
    </center>

   <!--Text-->
   <div>
     <?php
       echo "<p>Do you ever struggle to confirm which movies you are allowed to watch? Well this webpage will do all that for you! It simply works by taking a movie's rating and your age, to determine if you're eligible to watch it.</p>";
     ?>
    </div>
    <?php echo "<h3>Please enter your input below:</h3>"; ?>

  <!--Div-->
    <form action="./calculations.php" method="post" target="results">
      <label for="user-age">Your age:</label>
      <input type="number" step="1" id="user-age" name="user-age" placeholder="Your age..."><br><br>
      <input type="submit" id="button" value="Verify" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
    </form>
     
  <!--iFrame-->
    <iframe name="results" id="results"></iframe>

  <!--Image-->
   <center>
   <img src="./images/movie.png" alt="Movie essentials" width="300" length="300">
   </center>
  </body>
</html>