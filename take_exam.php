<?php

include ("inc/render.php");
include("inc/questions.php");

//ID from _get and in URL
$id = $_GET['id'];

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

<?php

$quizQuestion = Questions::question_by_id($id); //can insert/modify $id here to show specific question
if (isset($quizQuestion['question'])){
  Render::render_single_question($quizQuestion);
} else { echo  "<h2> Sorry, cannot find question matching that ID.</h2>";
  }
  ?>
  <a href='index.php' class='btn'>RETURN HOME </a>
