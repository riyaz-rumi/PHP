<?php

    header('content-type: image/png');
    // $image = imagecreate(400, 400);
    $image = imagecreatetruecolor(400, 400); // FIXED BLACK COLOR !

    $White = imagecolorallocate($image, 255, 255, 255);
    $Black = imagecolorallocate($image, 000, 000, 000);
    $Red = imagecolorallocate($image, 255, 000, 000);
    $Green = imagecolorallocate($image, 000, 255, 000);
    $Blue = imagecolorallocate($image, 000, 000, 255);
    $Yellow = imagecolorallocate($image, 255, 255, 000);

    // imagearc($image, 200, 200, 200, 200, 0, 0, $Yellow);
    imagefilledellipse($image, 200, 200, 200, 200, $Yellow);

    $text = 'Happiness!';
    $font_path ='c:/windows/fonts/forte.ttf';
    imagettftext($image, 25, 0, 125, 210, $Black, $font_path, $text);
    imagepng($image);
    imagepng($image, 'Happiness.png');
    ?>