<?php

function selectQuestion($id=1){
  include ("connection.php");
  try {
    $results = $db->prepare(
      "SELECT `id`,`question`, `answer1`, `answer2`,
               `answer3`, `answer4`, `answer5`
      FROM `questions`
      WHERE id = ?
      LIMIT 1
      "
    );
    $results->bindParam(1,$id,PDO::PARAM_INT);
    $results->execute();

  } catch (Exception $e){
    echo "Unable to retrieve sample question.";
    exit;
  }
  $quizQuestion = $results->fetch();
  return $quizQuestion;
}

function allQuestions(){
  include("connection.php");
  try{
    $results = $db->query(
      "SELECT id, question, answer1, answer2, answer3, answer4, answer5
      FROM questions"
    );
    echo "Exam questions retrieved.";
    exit;
  } catch (Exception $e){
    echo "Unable to retrieve exam questions";
    exit;
  }
  $questionStack = $results->fetchAll();
  return $questionStack;
}
 ?>
