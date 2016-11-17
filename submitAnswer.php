
<!Doctype html />
<html>
<head>
	<link rel="stylesheet" href="css/main.css" />
  <title>Answer Received</title>
</head>
<body>

  <?php
  include("inc/functions.php");

	if (isset($_POST['submit'])) {
		if(isset($_POST['radio'])) {
			if ($_POST['radio'] == "answer1"){
				echo	"<h2>YOU ARE CORRECT! </h2>";
		  } else {
					echo "<h2>SORRY, wrong answer.</h2>";
		    }
		}
  }
 ?>
 <div class="next-q">
	<h1>CONTINUE EXAM <a href='questionlink.php' class='question-link'> HERE</a></h1>
	</h2>
</div>

</body>
</html>
