<?php
include("inc/render.php");
include("inc/questions.php");  ?>



<!DOCTYPE html>
<html>
<head>
   <title>Links to Questions</title>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="css/main.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<span class="all-questions"> <?php
//ordered list of all questions, linking each question to exam page
    echo  Render::render_list_all(Questions::allQuestions()); ?>
</span>

<a href='index.php' class='btn'>RETURN HOME </a>



</html>
