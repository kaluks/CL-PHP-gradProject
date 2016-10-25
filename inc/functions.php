<?php
function countQuestions(){
  include("connection.php");
  $sql = $db->query("SELECT FLOOR(RAND()*COUNT(*))
    AS questioncount
    FROM questions");
  $questionCount = $sql->fetch();

  $result = $db->query(
    "SELECT *
     FROM questions
     ORDER BY id
     LIMIT $questionCount,1"
  );
  return $result;
}
 ?>
