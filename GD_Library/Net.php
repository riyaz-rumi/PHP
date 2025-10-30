<?php

    header('content-type: image/png');
    // $image = imagecreate(400, 400);
    $image = imagecreatetruecolor(400, 400); // FIXED BLACK COLOR !

    $White = imagecolorallocate($image, 255, 255, 255);
    $Black = imagecolorallocate($image, 0, 0, 0);
    $Red = imagecolorallocate($image, 255, 0, 0);
    $Green = imagecolorallocate($image, 0, 255, 0);
    $Blue = imagecolorallocate($image, 0, 0, 255);
    // LINE CREATION
    imageline($image, 000, 000, 400, 400, $Green);
    imageline($image, 400, 000, 000, 400, $Green);
    imageline($image, 000, 200, 400, 200, $Green);
    imageline($image, 200, 000, 200, 400, $Green);

    imageline($image, 100, 000, 200, 200, $Green);
    imageline($image, 400, 100, 200, 200, $Green);
    imageline($image, 300, 000, 200, 200, $Green);
    imageline($image, 000, 100, 200, 200, $Green);
    imageline($image, 000, 300, 200, 200, $Green);
    imageline($image, 100, 400, 200, 200, $Green);
    imageline($image, 300, 400, 200, 200, $Green);
    imageline($image, 400, 300, 200, 200, $Green);
    
    // CIRCLE CREATION
    imagearc($image, 200, 200, 050, 050, 180, 180, $Green);
    imagearc($image, 200, 200, 100, 100, 180, 180, $Green);
    imagearc($image, 200, 200, 150, 150, 180, 180, $Green);
    imagearc($image, 200, 200, 200, 200, 180, 180, $Green);
    imagearc($image, 200, 200, 250, 250, 180, 180, $Green);
    imagearc($image, 200, 200, 300, 300, 180, 180, $Green);
    imagearc($image, 200, 200, 350, 350, 180, 180, $Green);
    imagearc($image, 200, 200, 400, 400, 180, 180, $Green);
    imagearc($image, 200, 200, 450, 450, 180, 180, $Green);
    imagearc($image, 200, 200, 500, 500, 180, 180, $Green);
    imagearc($image, 200, 200, 550, 550, 180, 180, $Green);
    imagepng($image, 'Net.png');
    imagepng($image);
?>