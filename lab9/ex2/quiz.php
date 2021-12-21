<?php
  $quesOneChoice = $_POST["questionOne"];
  $quesTwoChoice = $_POST["questionTwo"];
  $quesThreeChoice = $_POST["questionThree"];
  $quesFourChoice = $_POST["questionFour"];
  $quesFiveChoice = $_POST["questionFive"];

  $question1Ans = "Three";
  $question2Ans = 300;
  $question3Ans = "Thomas_Edison";
  $question4Ans = "Moon";
  $question5Ans = 7;

  $score =  0;

  echo "Question 1: If you cut a quarter into thirds, how many pieces would you have?<br>";
  echo "You answered:" . $quesOneChoice ."<br>";
  echo "Correct answer:" . $question1Ans ."<br>";


  echo "<br>Question 2: If a football field is 100 yards long, how many feet long is the football field?<br>";
  echo "You answered:" . $quesTwoChoice ."<br>";
  echo "Correct answer:" . $question2Ans ."<br>";


  echo "<br>Question 3: Who invented the light bulb?<br>";
  echo "You answered:" . $quesThreeChoice ."<br>";
  echo "Correct answer:" . $question3Ans ."<br>";


  echo "<br>Question 4: What causes tides?<br>";
  echo "You answered:" . $quesFourChoice ."<br>";
  echo "Correct answer:" . $question4Ans ."<br>";

  echo "<br>Question 5: Which planet is closest to the sun?<br>";
  echo "You answered:" . $quesFiveChoice ."<br>";
  echo "Correct answer:" . $question5Ans ."<br>";

  if($quesOneChoice == $question1Ans)
  {
    $score++;
  }

  if($quesTwoChoice == $question2Ans)
  {
    $score++;
  }

  if($quesThreeChoice == $question3Ans)
  {
    $score++;
  }

  if($quesFourChoice == $question4Ans)
  {
    $score++;
  }

  if($quesFiveChoice == $question5Ans)
  {
    $score++;
  }

  echo "<br>You answered " . $score . " questions correctly.<br>";
  $percentage = ($score /5)*100;
  echo "Your score as an percentage is: " . $percentage . "%";

?>
