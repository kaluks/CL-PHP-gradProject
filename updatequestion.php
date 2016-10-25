<?php
include("inc/questions.php");
include("inc/render.php");
include("inc/connection.php");
include("inc/functions.php");

  $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
?>

<!Doctype html />
<html>
<head>
    <title>Update Question <?php echo $question; ?></title>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>
    <h3>Update Question <a href="index.php">&lt;&lt; Back</a></h3>

  <?php Render::render_update_form(Questions::question_by_id($id)); ?>
</body>
</html>

<?php
if (Questions::updateQuestion($id)){
  header("location:index.php");
} else {
    echo "Oops. Question not updated.";
    //var_dump($_GET);
  }
  ?>
