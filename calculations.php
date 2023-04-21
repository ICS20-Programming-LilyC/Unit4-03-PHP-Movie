<?php

  // Establishing constants: first age threshold is 17, second threshold is 13 and third threshold is 5.
  define("FIRST_THRESHOLD", 17);
  define("SECOND_THRESHOLD", 13);
  define("THIRD_THRESHOLD", 5);

  // Define a message that will be displayed as a result after the appropriate input.
  $message = "";

  // Get the user's age from input form
  $userAge = intval($_POST["user-age"]);

  // First if statement: if user age is greater than or equal to 17, then display that they can see an R-rated movie alone.
  if ($userAge >= FIRST_THRESHOLD) {
    $message = "You're eligible to watch R-rated movies by yourself.";
  }

  // Otherwise, if age is greater than or equal to 13, then display that they can see a PG-13 rated movie alone.
  elseif ($userAge >= SECOND_THRESHOLD) {
    $message = "You're eligible to watch PG-13 rated movies by yourself.";
  }

  // Otherwise, if age is greater than or equal to 5, display that they can see a G or PG rated movie alone.
  elseif ($userAge >= THIRD_THRESHOLD) {
    $message = "You're eligible to watch G or PG rated movies by yourself.";
  }

  // Otherwise, if age is less than 0, display that they must enter a valid number for their age.
  elseif ($userAge < 0) {
    $message = "Please enter a valid number for your age.";
  }

  // Otherwise, if nothing is entered or if the number 0 is entered, display that they must enter their age.
  elseif (empty($userAge)) {
    $message = "Please enter your age.";
  }

  //else, any age less than 5.
  else {
    $message = "You should be supervised while watching a movie. Movies are fun, but it is recommended at your age to watch a family friendly movie or have supervision from a responsible adult.";
  }

  // Display the results to the user in the "results" index.php iframe. 
  echo $message . " Happy movie watching!";

?>
