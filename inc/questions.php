<?php
class Questions {

  //CREATE
  public static function createQuestion($submission) {
    include("connection.php");
		$submission["id"] = null;
		if (!isset($submission["question"]))
      { $submission["question"] = null;}
		if (!isset($submission["answer1"]))
      { $submission["answer1"] = null;}
		if (!isset($submission["answer2"]))
      { $submission["answer2"] = null;}
		if (!isset($submission["answer3"]))
      { $submission["answer3"] = null;}
    if (!isset($submission["answer4"]))
      { $submission["answer4"] = null;}
		if (!isset($submission["answer5"]))
      { $submission["answer5"] = null;}

   if($_POST){
      try{
          $query = "INSERT INTO `questions`
          SET question=:question, answer1=:answer1, answer2=:answer2,
              answer3=:answer3, answer4=:answer4, answer5=:answer5";

          // prepare query
          $stmt = $db->prepare($query);

          // posted values
          $question=htmlspecialchars(strip_tags($_POST['question']));
          $answer1=htmlspecialchars(strip_tags($_POST['answer1']));
          $answer2=htmlspecialchars(strip_tags($_POST['answer2']));
          $answer3=htmlspecialchars(strip_tags($_POST['answer3']));
          $answer4=htmlspecialchars(strip_tags($_POST['answer4']));
          $answer5=htmlspecialchars(strip_tags($_POST['answer5']));

          // bind parameters
          $stmt->bindParam(':question', $question);
          $stmt->bindParam(':answer1', $answer1);
          $stmt->bindParam(':answer2', $answer2);
          $stmt->bindParam(':answer3', $answer3);
          $stmt->bindParam(':answer4', $answer4);
          $stmt->bindParam(':answer5', $answer5);

          // Execute prepared query
          if($stmt->execute()){
              echo "<div class='alert alert-success'>Your exam question was saved.</div>";
          }else{
              echo "<div class='alert alert-danger'>Unable to save record.</div>";
          }
      }
      catch(PDOException $exception){
          die('ERROR: ' . $exception->getMessage());
      }
   } //close if
 } //close createQuestion


  //UPDATE
  public function updateQuestion(Array $submission) {
      include("connection.php");
      $stmt = $this->db->prepare($sql);
      $sql = "
            UPDATE `questions`
            SET question = :question,
                answer1 = :answer1,
                answer2 = :answer2,
                answer3 = :answer3,
                answer4 = :answer4,
                answer5 = :answer5
            WHERE id = :id";

        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":question", $submission["question"]);
        $stmt->bindParam(":answer1", $submission["answer1"]);
        $stmt->bindParam(":answer2", $submission["answer2"]);
        $stmt->bindParam(":answer3", $submission["answer3"]);
        $stmt->bindParam(":answer4", $submission["answer4"]);
        $stmt->bindParam(":answer5", $submission["answer5"]);
        return $stmt->execute();
    }

    //DELETE
    public function deleteQuestion(){
      include("connection.php");
      try {
          //check if id is set
          $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

          // delete query
          $query = "DELETE FROM `questions` WHERE id = ? LIMIT 1";
          $stmt = $db->prepare($query);
          $stmt->bindParam(1, $id);

          if($stmt->execute()){
              header("Location:index.php");
              echo "That question has been deleted from the database.";
          }else{
              die('Unable to delete record.');
          }
      }
      catch(PDOException $exception){
          die('ERROR: ' . $exception->getMessage());
      }
    }

  public function selectQuestion($id){
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
      echo "retrieved results.  ";

    } catch (Exception $e){
      echo "Unable to retrieve sample question.";
      exit;
    }
    $quizQuestion = $results->fetch(PDO::FETCH_ASSOC);
   return  $quizQuestion;
  }

  public function allQuestions(){
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



} //close Questions Class
 ?>
