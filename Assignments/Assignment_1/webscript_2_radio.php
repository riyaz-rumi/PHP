<title>Webscript 2</title>
<link href="css/webscript_2.css" rel="stylesheet">	
<div>
<?php
if(!isset($_GET['op'])) 
	echo '<h3>Warning</h3>You did not select any operation!<br /><a href="webscript_2_radio.html">Try Again</a><br />';
else {
	$op = $_GET['op'];
	$a = $_GET['f1'];
	$b = $_GET['f2'];
	// CALCULATION
	echo '<h2>Result</h2><hr />';
	switch($op) {
		case 'Addition':
			echo "<br />Addition : ($a + $b) = ".($a + $b)."<br /><br />";
			break;
		case 'Subtraction':
			echo "<br />Subtraction : ($a - $b) = ".($a - $b)."<br /><br />";
			break;
		case 'Multiplication':
			echo "<br />Multiplication : ($a * $b) = ".($a * $b)."<br /><br />";
			break;
		case 'Division':
			echo "<br />Division : ($a / $b) = ".($a / $b)."<br /><br />";
			break;
		case 'Modulo Division':
			echo "<br />Modulo Division : ($a % $b) = ".($a % $b)."<br /><br />";
			break;
		}
	echo '<hr /><a href="webscript_2_radio.html">Go Back</a><br /><br />';
}
?>
</div>
