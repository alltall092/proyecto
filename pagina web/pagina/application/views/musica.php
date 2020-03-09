<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js' type='text/javascript'/>
<script>
//<![CDATA[
var audio;var playlist;var tracks;var current;initaudio();function initaudio(){current=0;audio=$('audio');playlist=$('#playlist');tracks=playlist.find('li a');len=tracks.length-1;audio[0].volume=1;playlist.find('a').click(function(e){e.preventDefault();link=$(this);current=link.parent().index();runaudio(link,audio[0])});audio[0].addEventListener('ended',function(e){current++;if(current>len){current=0;link=playlist.find('a')[0]}else{link=playlist.find('a')[current]}runaudio($(link),audio[0])})}function runaudio(link,player){player.src=link.attr('href');par=link.parent();par.addClass('active').siblings().removeClass('active');audio[0].load();audio[0].play()}
//]]>
</script>
<style type="text/css">
#playlist, #player {
width: 400px; /* Ancho de todo el contenedor */
padding: 20px;
margin: 0 auto;
display: block;
text-align: center;
}
#player {
/* Imagen de fondo del primer contenedor */
background: url(//lh3.googleusercontent.com/-9dx_GmP6Yeg/U06qBO9M4EI/AAAAAAAAFEY/FXrhlltF7xc/s300/bg.png);
padding: 10px 20px;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
}
audio {
width:300px; /* Ancho del reproductor */
margin:0 auto;
display: inline-block
}
#player:after {
/* Imagen animada */
content: url(//lh3.googleusercontent.com/-KoD5KVOAsGQ/U1B_dWFttoI/AAAAAAAAFFc/uJ3SjLPlDHQ/s75/equalizador.gif);
padding-left: 10px;
}
#playlist {
margin: 0 auto 20px auto;
display: block;
background: #424242; /* Fondo del segundo contenedor */
border-top: 5px solid #9F111B;
border-bottom-left-radius: 10px;
border-bottom-right-radius: 10px;
text-align: left;
font-size: 12px; /* Estilos de fuente */
font-family: 'Trebuchet MS', Trebuchet, Verdana, sans-serif;
font-weight: normal;
}
#playlist li, #playlist ul li {
background-image: none;
list-style-type: none;
padding: 0;
margin: 0;
}
#playlist li a {
color: #CCC; /* Color de las canciones */
background: #222; /* Fondo de las canciones */
padding: 7px 5px;
display: block;
padding-left: 10px;
text-decoration: none;
}
#playlist li a:hover{
background: #9F111B; /* Color de fondo al pasar el cursor */
text-decoration: none;
}
#playlist .active a {
color: #B11623; /* Color de la canción activa */
font-style: italic;
text-decoration: none;
}
#playlist .active a:before {
content: "\25B6";
color: #CCC;
font-style: normal;
padding-right: 8px;
}
#playlist .active a:hover {
color: #222; /* Color de la canción activa al pasar el cursor */
}





</style>

</head>

<body>
<?php echo $musica;?>
<div id='player'>
<audio controls='autoplay' id='audio' preload='auto' tabindex='0' type='audio/mpeg'>
<source src='<?php echo base_url();?>./musica/Romeo Santos - Loca (Www.SobraoDeFlow.Com).mp3' type='audio/mp3'/>
Hola, tu navegador no está actualizado y no puede mostrar este contenido.
</audio>
</div>
<ul id='playlist'>
<li class='active'><a href='URL de la primera canción'>Nombre de la primera canción</a></li>
<li><a href='URL de la segunda canción'>Nombre de la segunda canción</a></li>
<li><a href='URL de la tercera canción'>Nombre de la tercera canción</a></li>
</ul>
</body>
</html>