<link href="Average_css.css" rel="stylesheet">	
<body bgcolor = 'black'>
<center>
<font color = 'Cyan' face = 'Times New Roman'>
<?php
	$a = $_POST['avg'];
	// COMPARISION 
	if($a >= 40 and $a < 50) 
		echo "<br />Your Average is ".$a."%<br /><br />You're Pass!<br />";
	
	elseif($a >= 50 and $a < 60) 
		echo "<br />Your Average is ".$a."%<br /><br />You Got Sencond Class!<br />";
	
	elseif($a >= 60 and $a < 70) 
		echo "<br />Your Average is ".$a."%<br /><br />You Got First Class!<br />";
	
	elseif($a >= 70 and $a < 100) 
		echo "<br />Your Average is ".$a."<br /><br />You Got Distinction!<br />";
	
	else 
		echo "<br />Your Average is ".$a."%<br /><br />You You're Failed!<br />";
	

?>
<br /><a href="Average_html.html" color=Cyan>Go Back</a>
</center>
</font>
</body>