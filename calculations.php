<?php

  // Creating constants: first age threshold is 17, second is 13, third is 5
define("FIRST_THRESHOLD", 17);
define("SECOND_THRESHOLD", 13);
define("THIRD_THRESHOLD", 5);

  // Define message that will bes displayed as result later on
$message = "";

// Get the user's age from input form
$userAge = intval($_POST["user-age"]);

  // First if statement: if user age is greater than or equal to 17, display that they can see an R-rated movie alone.
if ($userAge >= FIRST_THRESHOLD) {
    $message = "You're eligible to watch R-rated movies by yourself.";
}

  // Otherwise, if age is greater than or equal to 13, display that they can see a PG-13 movie alone.
elseif ($userAge >= SECOND_THRESHOLD) {
    $message = "You're eligible to watch PG-13 rated movies by yourself.";
}

  // Otherwise, if age is greater than or equal to 5, display that they can see a G or PG movie alone.
elseif ($userAge >= THIRD_THRESHOLD) {
    $message = "You're eligible to watch G or PG rated movies by yourself.";
}

  // Otherwise, if age is less than 0, display that they must enter a valid age
elseif ($userAge < 0) {
    $message = "Please enter a valid number for your age.";
}

  // Otherwise, if nothing is entered, display that they msut enter their age
elseif (empty($userAge)) {
    $message = "Please enter your age.";
}

  //else (any age less than 5)
else {
    $message = "You should be supervised while watching a movie. Movies are fun, but it is recommended at your age to watch a family friendly movie or have supervision from a responsible adult.";
}

  // Display the results to the user in the "results" iframe
echo "$message" . " Thanks for your input and happy movie watching!";

?>