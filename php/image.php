<?php
// Set the content-type
header('Content-Type: image/png');

// Create the image
$im = imagecreatetruecolor(200, 60);

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 59, $white);

// The text to draw
$text = '#2274';
// Replace path by your own font path

$font = 'C:\Windows\Fonts\ariblk.ttf';

// Add the text
imagettftext($im, 30, 0, 20, 45, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>