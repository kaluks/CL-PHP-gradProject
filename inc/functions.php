<?php

function calculateScore($submittedAnswer){

  $score = 0;

  //mock answer submissions
  //$submittedAnswer = "answer2";
  $correctAnswer = "answer1";

   if ($submittedAnswer === $correctAnswer){
     $score ++;
     $score = $score/$score;
   }
  echo "<h1>Your Score is $score</h1>";
}



 ?>
