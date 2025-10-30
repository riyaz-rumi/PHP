<title>Webscript 1</title>
<link href="css/webscript_1.css" rel="stylesheet">
<?php
	if (isset($_POST['Name']))
	{
		$a = $_POST['Name'];
		echo "<div>Good Morning, <big>".$a."</big><br />";
		echo "<a href='webscript_1.html'>Go Back</a></div>";
	}
?>

