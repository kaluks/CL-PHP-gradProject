<?php

require_once("inc/questions.php");
include("inc/render.php");
?>
<?php
    if (empty($_POST["question"]) && isset($_POST["submit"]))  {
       echo "QUESTION NOT ADDED. PLEASE FILL IN ALL FIELDS.";

    } elseif (Questions::createQuestion($_POST)){
      }
 ?>

<!DOCTYPE html/>
<html>
<head>
    <title>Exam Question Form</title>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
  <h3>SUBMIT YOUR OWN EXAM QUESTION </h3>
  <a href="index.php">&lt;&lt; Back</a>

  <?php Render::render_new_form(); ?>

  <div class="return-home">
    <button><a href='index.php' class='btn'>RETURN HOME </a></button>
  </div>
  <div class='question-link'>
    <button><a  href='questionlink.php' class='question-link'> VIEW ALL QUESTIONS</a></button>
  </div>

</body>
</html>
