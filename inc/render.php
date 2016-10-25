<?php

class Render{

  public static function render_single_question($quizQuestion){
    ?>
    <div class="exam">
      <div class="wrapper">
      <fieldset class="question-field">
       <legend class="this-question">
          <?php echo $quizQuestion["question"]; ?>
       </legend>

       <form  action="submitAnswer.php" id="form1" method="POST">
         <label>
         <input type="radio" name="select" value="answer1" id="answer1" />
            <?php echo $quizQuestion["answer1"]; ?></br>
         </label>

         <label>
         <input type="radio" name="select" value="answer2" id="answer2" />
           <?php echo $quizQuestion["answer2"]; ?></br>
         </label>

         <label>
         <input type="radio" name="select" value="answer3" id="answer3" />
           <?php echo $quizQuestion["answer3"]; ?></br>
         </label>

         <label>
         <input type="radio" name="select" value="answer4" id="answer4" />
           <?php echo $quizQuestion["answer4"]; ?></br>
         </label>

        <label>
        <input type="radio" name="select" value="answer5" id="answer5" />
          <?php echo $quizQuestion["answer5"]; ?></br>
        </label>

        <input class="button" type="submit" name="submit" id="submit" value="Submit Answer" />
        <input type="hidden" name="id" value="form1" />


        <div class="update">
          <a class-"update" href="updateQuestion.php?id=<?php echo $quizQuestion["id"]; ?>"
            >&#x270E; Update this Question &#x270E;</a>
        </div>
        <div class="delete">
          <a class="delete" href="deletequestion.php?id=<?php echo $quizQuestion["id"];?>"
          >X delete question X</a>
        </div>
       </form>
      </fieldset>
      </div>
     </div>
  <?php
 }

  public static function render_new_form() {
       ?>
            <form action="newquestion.php" method="POST">
                <label for="question">Question:  
                    <textarea type="text" id="question" name="question" ></textarea>
                </label></br>
                <label for="answer1">Correct Answer:
                    <input type="text" id="answer1" name="answer1" />
                </label></br>
                <label for="answer2">Alternate Answer 1:
                    <input type="text" id="answer2" name="answer2" />
                </label></br>
                <label for="answer3">Alt Answer Two:
                    <input type="text" id="answer3" name="answer3" />
                </label></br>
                <label for="answer4">Alternate Answer 3:
                    <input type="text" id="answer4" name="answer4" />
                </label></br>
                <label for="answer5">Alternate Answer 4:
                    <input type="text" id="answer5" name="answer5" />
                </label></br>

                <input class="new-question" type="submit" name="submit" id="submit-2"  value="Enter Your Question"/>
            </form>
        <?php
    }
    public static function render_update_form($row){
      ?>
      <!--we have our html form here where new user information will be entered-->
<form action='updatequestion.php?id=<?php echo htmlspecialchars($row["id"]); ?>' method="POST" border='0'>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Question</td>
            <td><input type='text' name='question' value=" <?php echo $row["question"];?> " class='form-control' /></td>
        </tr>
        <tr>
            <td>The Correct Answer:</td>
            <td><input name='answer1' class='form-control' value="<?php echo $row["answer1"];?>" /></td>
        </tr>
        <tr>
            <td>Alternate Answer</td>
            <td><input type='text' name='answer2' value="<?php echo $row["answer2"];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Alternate Answer</td>
            <td><input type='text' name='answer3' value="<?php echo $row["answer3"];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Alternate Answer</td>
            <td><input type='text' name='answer4' value="<?php echo $row["answer4"];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Alternate Answer</td>
            <td><input type='text' name='answer5' value="<?php echo $row["answer5"];?>" class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to Question</a>
            </td>
        </tr>
    </table>
</form>

<?php
    } //close render update form

}
 ?>
