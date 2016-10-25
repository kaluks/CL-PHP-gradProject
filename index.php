<?php

include ("inc/render.php");
include("inc/questions.php");

$quizQuestion = Questions::selectQuestion(15);
//var_dump($quizQuestion);
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
  <header>
    <h1 class="main-header">GCS PRACTICE EXAM</h1>
  </header>

<?php Render::render_single_question($quizQuestion); ?>


  <span class="enter-question">
    <h2>Enter a New Exam Question!</h2>
    <div class="add-question">

    </div>

    <?php Render::render_new_form(); ?>
  </span>


</body>
</html>
