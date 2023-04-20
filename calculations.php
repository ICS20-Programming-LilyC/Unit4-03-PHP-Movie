<?php

  //initializing and declaring variables
  $age = intval($_POST["user-age"]);
  $message = "";

  //setting constants for age thresholds: first is 17, second is 13, third is 5
  define("FIRST_THRESHOLD", 17);
  define("SECOND_THRESHOLD", 13);
  define("THIRD_THRESHOLD", 5);


  //first if statement: if age is greater than or equal to 17
  if ($age >= FIRST_THRESHOLD) {
    $message = "You are old enough to see an R-rated movie on your own.";
  }
    
  //otherwise, if age is greater than or equal to 13
  else if ($age >= SECOND_THRESHOLD) {
    $message = "You can watch a PG-13 movie alone.";
  }
    
  //otherwise, if age is greater than or equal to 5
  else if ($age >= THIRD_THRESHOLD) {
    $message = "You can see a G or PG movie on your own.";
  }
    
  //else (any age less than 5)
  else {
   $message = "You should be supervised while watching a movie. Movies are fun, but it is recomended at your age to watch a family friendly movie or have supervision from a responsible adult.";
 }

 //displaying the message to the user
 echo $message = "Please enter age.";
?>