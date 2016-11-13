
<!Doctype html />
<html>
<head>
	<link rel="stylesheet" href="css/main.css" />
  <title>Answer Received</title>
</head>
<body>

  <?php
  include("inc/functions.php");
  echo "* receive & compare user's answer * </br>";
	echo "<h2>Good job!</h2>";

  echo calculateScore("answer1");
 ?>
 <div class="next-q">
	<h2>CONTINUE WITH QUESTIONS <a href='questionlink.php' class='question-link'> HERE</a>
	</h2>
</div>



</body>
</html>
