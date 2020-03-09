<?php
header("Content-type:image/png");
$imagen=imagecreatetruecolor(600,600);
$blanco=imagecolorallocate($imagen,255,255,255);
imagefilltoborder($imagen,0,0,$blanco,$blanco);
$negro=imagecolorallocate($imagen,0,0,0);
//imagestring($imagen,5,40,40,"hola como estas",$rojo);
$texto="hola soy un texto";
$font="ariali.ttf";
imagettftext($imagen,25,10,60,60,$negro,$font,$texto);
imagepng($imagen);
imagedestroy($imagen);

?>