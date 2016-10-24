<?php

include ("inc/render.php");
include("inc/questions.php");

$quizQuestion = Questions::selectQuestion(3);
var_dump($quizQuestion);
?>

<DOCTYPE html>
<html>
<head>
  <title>GCS Practice Exam</title>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="css/main.css">
</head>
<body>

  <div class="exam">
    <div class="wrapper">
    <fieldset>
     <legend class="this-question">
        <?php echo $quizQuestion["question"]; ?>
     </legend>

     <form  action="submitAnswer.php" id="form1" method="POST">
       <label>
  		 <input type="radio" name="select" value="answer1" id="answer1" />
	  	    <?php echo $quizQuestion["answer1"]; ?></br>
	  	 </label>

       <label>
       <input type="radio" name="select" value="answer2" id="answer2" />
         <?php echo $quizQuestion["answer2"]; ?></br>
       </label>

       <label>
       <input type="radio" name="select" value="answer3" id="answer3" />
         <?php echo $quizQuestion["answer3"]; ?></br>
       </label>

       <label>
       <input type="radio" name="select" value="answer4" id="answer4" />
         <?php echo $quizQuestion["answer4"]; ?></br>
       </label>

      <label>
      <input type="radio" name="select" value="answer5" id="answer5" />
        <?php echo $quizQuestion["answer5"]; ?></br>
      </label>

      <input class="button" type="submit" name="submit" id="submit" value="Submit Answer" />
      <input type="hidden" name="id" value="form1" />
      <div class="delete">
        <a class="delete" href="deletequestion.php?id=<?php echo $quizQuestion["id"];?>"
        >X delete question X</a>
      </div>
     </form>
    </div>
   </div>
  </fieldset>

  <span class="enter-question">
    <h2>Enter a New Exam Question!</h2>
    <?php Render::render_new_form(); ?>
  </span>





</body>
</html>
