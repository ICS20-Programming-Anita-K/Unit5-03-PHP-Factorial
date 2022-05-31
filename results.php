<?php
  //initializing the variables
  $counter = 1;
  $facAnswer = 1;
  
  //get the user input from the text fields
  $userNum = intval($_POST['number']);

  //using a do... while loop to calculate the factorial
  do {
    $facAnswer = $facAnswer * $counter;
    $counter = $counter + 1;
  } while ($counter <= $userNum);

  //display the answer back to the user
  echo "The factorial of " . $userNum . " is " . $facAnswer . ".";
?>
