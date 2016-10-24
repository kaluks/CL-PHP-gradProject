<?php

class Render{
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

                <input class="button new-question" type="submit" name="submit" id="submit"  value="Submit Question & Answers"/>
            </form>
        <?php
    }


}
 ?>
