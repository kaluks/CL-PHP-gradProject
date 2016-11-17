<?php

include ("inc/render.php");
include("inc/questions.php");

//Will load question according to <a> selected from questionlink page
//$quizQuestion = Questions::selectQuestion($nmbrLink);
?>

<DOCTYPE html>
<html>
<head>
   <title>GCS Practice Exam</title>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="css/main.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

  <div class="nav">
        <ul>
          <li class="home"><a href="index.php">home</a></li>
          <li class="question-list"><a href="questionlink.php">view questions</a></li>
          <li class="submit-question"><a href="newquestion.php">submit an exam question</a></li>
        </ul>
  </div>

  <header>
    <h1 class="main-header">GCS PRACTICE EXAM</h1>
    <h3 class="sub-header">practice for the geriatric clinical specialist exam<h3>
  </header>

  <div class="box" >
    <h1> Start Exam  <a href='questionlink.php' class='question-link'> HERE</a>
    </h1>
  </div>


  <span class="enter-question">
    <h2>SUBMIT YOUR OWN EXAM QUESTION <a class="enter-question-button" href="newquestion.php"
      >HERE</a> </h2>
  </span>

</body>
</html>
