<?php
header("Content-type:image/jpg");
$y=300;
$imagen=imagecreatetruecolor(400,$y);
$blanco=imagecolorallocate($imagen,225,225,225);
imagefilltoborder($imagen,0,0,$blanco,$blanco);
$rojo=imagecolorallocate($imagen,255,0,0);
imagefilledrectangle($imagen,10,$y-20,20,($y-20-50),$rojo);
imagefilledrectangle($imagen,30,$y-20,40,($y-20-70),$rojo);
imagefilledrectangle($imagen,50,$y-20,60,($y-20-60),$rojo);
imagefilledrectangle($imagen,70,$y-20,80,($y-20-90),$rojo);



//imagefilledellipse($imagen,250,250,100,20,$rojo);
imagejpeg($imagen);
imagedestroy($imagen);
?>