<?php
include("inc/questions.php");
include("inc/render.php");
include("inc/connection.php");
include("inc/functions.php");

  $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Question ID not found.');
?>

<!Doctype html />
<html>
<head>
    <title>Update Question <?php echo $question; ?></title>
	<link rel="stylesheet" href="css/main.css" />
</head>
<body>

    <h3>Update Question <a href="index.php">&lt;&lt; Back</a></h3>
    <span>
      <?php Render::render_update_form(Questions::question_by_id($id)); ?>
    </span>

</body>
</html>

<?php
Questions::updateQuestion($id);
  ?>
