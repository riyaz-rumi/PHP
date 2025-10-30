<?php
	header('content-type: image/png');
	$canvas = imagecreatetruecolor(400, 400);// For image Creation & $canvas is the resource!
	
	//$white = imagecolorallocate($canvas, 255, 255, 255);	
	$white = imagecolorallocate($canvas, 200, 200, 200);	
	$blue = imagecolorallocate($canvas, 000, 000, 255);
	$red = imagecolorallocate($canvas, 255, 000, 000);
	$green = imagecolorallocate($canvas, 000, 255, 000);
	$black = imagecolorallocate($canvas, 0, 0, 0);
	
	// MOON
	imagefilledellipse($canvas, 200, 200, 200, 200, $white);
	
	// STARS
	imagepng($canvas, 'moon.png');
	imagepng($canvas);
?>