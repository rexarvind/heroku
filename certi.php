<?php
header('Content-type: image/jpeg');

if (isset($_POST['submit'])){

$name = $_POST['name'];
$font = 'poppinsm.ttf';
$image = imagecreatefromjpeg('bg.jpg');
$color = imagecolorallocate($image, 20, 19, 20);

imagettftext($image, 35, 0, 317, 400, $color, $font, $name);




imagejpeg($image);
imagedestroy($image);

}


