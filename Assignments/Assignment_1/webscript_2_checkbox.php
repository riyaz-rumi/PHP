<title>Webscript 2</title>
<link href="css/webscript_2.css" rel="stylesheet">	
<div>
<?php
	
	if(!isset($_GET['op'])) 
		echo "<h3>Warning</h3>You have not selected any operation!<br /><br /><a href='webscript_2_checkbox.html'>Try Again</a><br /><br />";
	else {
		$op = $_GET['op'];
		$a = $_GET['f1'];
		$b = $_GET['f2'];
		// CALCULATION
		echo '<h2>Calculation</h2><hr />';
		echo "<table class=='result'><tr>";
		foreach($op as $symbol)
		{
			if($symbol == '+')
				echo "Addition : ".$a." ".$symbol." ".$b." = ".($a + $b)."<br />";
			elseif($symbol == '-')
				echo "Subtraction : ".$a." ".$symbol." ".$b." = ".($a - $b)."<br />";
			elseif($symbol == '*')
				echo "Multiplication : ".$a." ".$symbol." ".$b." = ".($a * $b)."<br />";
			elseif($symbol == '/')
				echo "Division : ".$a." ".$symbol." ".$b." = ".($a / $b)."<br />";
			elseif($symbol == '%')
				echo "Modulo Division : ".$a." ".$symbol." ".$b." = ".($a % $b)."<br />";
			}	
			echo "</tr></table>";
			echo '<hr /><a href="webscript_2_checkbox.html">Go Back</a><br />';
	}
?>
</div>