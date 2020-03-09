<?php
header("Content-type:image/jpg");
$imagen=imagecreatetruecolor(600,600);
imagecopy($imagen,imagecreatefromjpeg('penguins.jpg'),0,0,0,0,600,600);
imagefilter($imagen,IMG_FILTER_EDGEDETECT);
/*$image2=imagecreatetruecolor(300,300);
imagecopyresized($image2,$imagen,0,0,0,0,300,300,600,600);*/
$rojo=imagecolorallocate($imagen,255,0,0);
imagestring($imagen,100,40,40,"la vida es bella para la persona que se aman",$rojo);

imagejpeg($imagen);
imagedestroy($imagen);

?>