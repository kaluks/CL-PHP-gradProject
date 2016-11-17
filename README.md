# CL-PHP-gradProject
As a graduation project for Code Louisville's PHP course, I've created a practice test for physical therapists studying for an advanced board exam.

The Code Louisville requirement is for the project to perform CRUD functions, which exist in my project as: Creating new questions, Reading questions from the db, Updating current questions, and Deleting questions.

To run:
1) Upload the sql db from exam_gcs.sql file in the root directory.
   The table "questions" contains the test questions and possible answers.

2) The PDO connection is located in inc/connection.php, where you'll create your own credentials to connect the uploaded database.


My next steps for this project:
-Create a paginated exam format, paging thru one question at a time.
-Randomize answer options.
-Incorporate php's session & session_start, allowing user registration and score calculation.
-Add a "citation" row for questions. This will serve as a resource tool for exam-takers and a verification tool for admins screening submitted questions.
