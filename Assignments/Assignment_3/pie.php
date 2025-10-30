<?php

    header('content-type: image/png');
    $image = imagecreate(700, 600);
    // $image = imagecreatetruecolor(700, 600); // FIXED BLACK COLOR !
    $White = imagecolorallocate($image, 255, 255, 255);
    $facebook = imagecolorallocate($image, 0, 51, 128);
    $insta = imagecolorallocate($image, 255, 102, 102);
    $linkedin = imagecolorallocate($image, 255, 187, 51);
    $youtube = imagecolorallocate($image, 245, 0, 0);
    $pinterest = imagecolorallocate($image, 148, 26, 25);
    $twitter = imagecolorallocate($image, 120, 194, 255);
    $fmb = imagecolorallocate($image, 80, 80, 80);
    imagefilledarc($image, 350, 350, 400, 400, 270, 124, $facebook, IMG_ARC_PIE);
    imagefilledarc($image, 350, 350, 400, 400, 124, 186, $insta, IMG_ARC_PIE);
    imagefilledarc($image, 350, 350, 400, 400, 186, 236, $linkedin, IMG_ARC_PIE);
    imagefilledarc($image, 350, 350, 400, 400, 236, 254, $youtube, IMG_ARC_PIE);
    imagefilledarc($image, 350, 350, 400, 400, 254, 264, $twitter, IMG_ARC_PIE);
    imagefilledarc($image, 350, 350, 400, 400, 264, 267, $pinterest, IMG_ARC_PIE);
    imagefilledarc($image, 350, 350, 400, 400, 267, 270, $fmb, IMG_ARC_PIE);
    $font_path ='c:/windows/fonts/arial.ttf';
    imagettftext($image, 16, 0, 380, 370, $White, $font_path, 'Facebook');
    imagettftext($image, 13, 0, 410, 390, $White, $font_path, '59%');
    imagettftext($image, 16, 0, 180, 400, $White, $font_path, 'Instagram');
    imagettftext($image, 13, 0, 210, 420, $White, $font_path, '17%');
    imagettftext($image, 16, 0, 185, 285, $White, $font_path, 'LinkedIn');
    imagettftext($image, 13, 0, 205, 305, $White, $font_path, '14%');
    imagettftext($image, 16, 0, 120, 160, $youtube, $font_path, 'Youtube');
    imagettftext($image, 13, 0, 140, 180, $youtube, $font_path, '5%');
    imagettftext($image, 16, 0, 180, 100, $twitter, $font_path, 'Twitter');
    imagettftext($image, 13, 0, 200, 120, $twitter, $font_path, '3%');
    imagettftext($image, 16, 0, 380, 60, $pinterest, $font_path, 'Pinterest');
    imagettftext($image, 13, 0, 405, 80, $pinterest, $font_path, '1%');
    imagettftext($image, 16, 0, 380, 120, $fmb, $font_path, 'Facebook Messenger Bots');
    imagettftext($image, 13, 0, 500, 140, $fmb, $font_path, '1%');
    imageline($image, 205, 152, 250, 152, $youtube);
    imageline($image, 250, 152, 290, 250, $youtube);
    imageline($image, 250, 95, 285, 95, $twitter);
    imageline($image, 285, 95, 320, 190, $twitter);
    imageline($image, 355, 55, 375, 55, $pinterest);
    imageline($image, 355, 55, 332, 160, $pinterest);
    imageline($image, 355, 115, 377, 115, $fmb);
    imageline($image, 355, 115, 342, 165, $fmb);
    imagepng($image);
    imagepng($image, 'pie.png');
?>