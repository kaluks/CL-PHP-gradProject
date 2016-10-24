<?php


require_once("inc/questions.php");

unset($_POST["submit"]);
if (Questions::createQuestion($_POST)){
  header("location:index.php");
} else {
    echo "Oops. Question not added.";
    var_dump($_POST);
}
 ?>
