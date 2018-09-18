<?php
header('Content-type: image/jpeg');

$image = new Imagick('201809170809.jpeg');
$image->adaptiveResizeImage(200,200);


move_uploaded_file('201809170809.jpeg', "/s.jpg")
//echo $image;
?>