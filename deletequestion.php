<?php


require_once("inc/questions.php");

if (Questions::deleteQuestion($_GET)){
  header("location:index.php");
  echo "That question has been deleted.";
} else {

  // var_dump($_GET);
}


 ?>
