<link href="webscript_1_css.css" rel="stylesheet">	
<body bgcolor = 'black'>
<font color = 'Cyan' face = 'Times New Roman'>
<?php
	$a = $_POST['limit'];
	$i = $j = 1;
	for($i = 1; $i <= $a; $i++) {
		for($j = 1; $j <= $i; $j++) {
			echo $i." ";
		}
		echo "<br />";
	}

?>
<br /><a href="webscript_1_html.html" color=Cyan>Go Back</a>
</font>
</body>