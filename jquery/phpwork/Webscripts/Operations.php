<body bgcolor = 'black'>
<link href="Operations.css" rel="stylesheet">	
<font color = 'Cyan' face = 'Times New Roman'>
<?php
	$a = $_GET['f1'];
	$b = $_GET['f2'];
	$op = $_GET['op'];
	echo "1st Number : ".$a."<br />2nd Number : ".$b."<br />";
	// COMPARISION 
	if($a > $b)
		echo "<br />$a is greater than $b.<br /><br />";
	elseif($a < $b)
		echo "<br />$a is smaller than $b.<br /><br />";
	else 
		echo "<br />Both nums are equal.<br /><br />";

	// CALCULATION
	switch($op) {
		case '+':
			echo "Addition : ($a + $b) = ".($a + $b)."<br />";
			break;
		case '-':
			echo "Subtraction : ($a - $b) = ".($a - $b)."<br />";
			break;
		case '*':
			echo "Multiplication : ($a * $b) = ".($a * $b)."<br />";
			break;
		case '/':
			echo "Division : ($a / $b) = ".($a / $b)."<br />";
			break;
		case '%':
			echo "Modulo Division : ($a % $b) = ".($a % $b)."<br />";
			break;
		default:
			echo "Something went wrong!";
			break;
	}
?>
<br /><a href="Operations.html" color=Cyan>Go Back</a>
</font>
</body>