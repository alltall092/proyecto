<?php
header("Content-type:image/jpeg");
$size=imagecreate(600,600);
$x=600;
$color=imagecolorallocate($size,163,163,163);

$color2=imagecolorallocate($size,255,4,42);
imagefilledrectangle($size,20,$x-10,50,($x-150-100),$color2);
$color2=imagecolorallocate($size,255,4,42);
imagefilledrectangle($size,80,$x-10,110,($x-180-160),$color2);
$color2=imagecolorallocate($size,255,4,42);
imagefilledrectangle($size,150,$x-10,180,($x-140-160),$color2);


imagejpeg($size);

imagedestroy($size);

?>