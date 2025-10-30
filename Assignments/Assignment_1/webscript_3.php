<title>Webscript 3</title>
<link href="css/webscript_3.css" rel="stylesheet">	
<div id="phpdiv">
<?php
if (!(isset($_POST['fv']) OR isset($_POST['lv'])))
	echo '<h3>Warning</h3>You have not selected!<br /><a href="webscript_3.html">Try Again</a><br />';
else {

	$a = $_POST['fv'];
	$b = $_POST['lv'];
	$i = $a;
	if($a == $b)
		echo "Both values are equal!";
	else {
		echo '<h3>Using "while" loop</h3>';
		while($i <= $b) 
			echo $i++." ";
		while($i >= $b) 
			echo $i--." ";
		$i = $a;
		echo '<h3>Using "do-while" loop</h3>';
		do {
			echo $i++." ";
		}while($i <= $b);
	}
	echo '<br /><br /><a href="webscript_3.html">Go Back</a>';
}
?>
</div>