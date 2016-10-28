<?php


require_once("inc/questions.php");


if (Questions::deleteQuestion($_GET)){
  header("location:questionlink.php");
} else {

  // var_dump($_GET);
}


 ?>
