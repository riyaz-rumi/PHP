<?php
	header('content-type: image/png');
	$canvas = imagecreatetruecolor(400, 400);// For image Creation & $canvas is the resource!
	//$bg = imagecolorallocate($canvas, 0, 0, 0);// Returntype Boolean!
	
	$yellow = imagecolorallocate($canvas, 255, 255, 0);
	$white = imagecolorallocate($canvas, 255, 255, 255);
	$black = imagecolorallocate($canvas, 0, 0, 0);
	
	$font = 'C:\Windows\Fonts\BuxtonSketch.ttf';
	$str = "Good Morning";
	
	// imagefilledrectangle($canvas, 0, 0, 100, 100, $white);
	imagefilledellipse($canvas, 200, 200, 200, 200, $yellow);

	//Corner
	// imagefilledrectangle($canvas, 0, 0, 100, 100, $yellow);
	imagefilledellipse($canvas, 000, 000, 150, 150, $yellow);
	imagefilledellipse($canvas, 400, 000, 150, 150, $yellow);
	imagefilledellipse($canvas, 000, 400, 150, 150, $yellow);
	imagefilledellipse($canvas, 400, 400, 150, 150, $yellow);
		
	//imagestring($canvas, 5, 70, 100, 'Good Morning', $black);
	imagettftext($canvas, 20, 0, 130, 200, $black, $font, $str);

	//Arc
	imagearc($canvas, 200, 200, 180, 180, 0, 0, $black);

	imagearc($canvas, 000, 000, 120, 120, 0, 0, $black);
	imagearc($canvas, 400, 000, 120, 120, 0, 0, $black);
	imagearc($canvas, 000, 400, 120, 120, 0, 0, $black);
	imagearc($canvas, 400, 400, 120, 120, 0, 0, $black);

	// imageline($canvas, 400, 0, 0, 400, $white);
	
	imagepng($canvas, 'f_png.png');
	imagepng($canvas);
?>