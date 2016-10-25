
<?php
echo "* receive & compare user's answer * </br>";

$score = 0;

//mock answer submissions
$submittedAnswer = "answer1";
$correctAnswer = "answer1";

 if ($submittedAnswer == $correctAnswer){
   $score ++;
 }
echo "Your Score is $score";
 ?>
