<?php
include ("connection.php");
include ("functions.php");
$quizQuestion = selectQuestion();
var_dump($quizQuestion);
?>

<DOCTYPE html>
<html>
<head>
  <title>GCS Practice Test</title>
   <link rel="stylesheet" href="css/main.css">
</head>
<body>

  <div class="exam">
    <div class="wrapper">
     <legend>
        <?php echo $quizQuestion->question; ?>
     </legend>

     <form  action="submitAnswer.php" method="POST">
       <label>
  		 <input type="radio" name="answer1" value="answer1" id="answer1" />
	  	    <?php echo $quizQuestion->answer1; ?>
	  	 </label>

       <label>
       <input type="radio" name="answer2" value="answer2" id="answer2" />
         <?php echo $quizQuestion->answer2; ?>
       </label>

       <label>
       <input type="radio" name="answer3" value="answer3" id="answer3" />
         <?php echo $quizQuestion->answer3; ?>
       </label>

       <label>
       <input type="radio" name="answer4" value="answer4" id="answer4" />
         <?php echo $quizQuestion->answer4; ?>
       </label>

      <label>
      <input type="radio" name="answer5" value="answer5" id="answer5" />
        <?php echo $quizQuestion->answer5; ?>
      </label>

      <input type="submit" name="submit" id="submit" value="SUBMIT ANSWER" />
    </form>
   </div>
  </div>


  <div class="user-suggestion" method="POST">
    <form>
      <label>Suggest a test question
          <input type="text" name="question" id="question"/>
          <input type="submit" id="submit" value="SEND SUGGESTION">
      </label>
    </form>
  </div>

</body>
</html>
