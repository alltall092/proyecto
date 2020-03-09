<?php 
$conexion=new mysqli("localhost","root","120786","apagina1")or die("la base datos no se puede conectar");
$consulta=$conexion->query("select*from menuprincipal");
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="w3frankwork.css" rel="stylesheet" type="text/css" />
<link  href="font-awesome-4.7.0/css/font-awesome.css"rr rel="stylesheet" type="text/css" /> 
<link href="Metro-UI-CSS-master/build/css/metro.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
contador=0;
function slide(){
imagen=document.getElementsByClassName("img-rounded");
for(i=0;i<imagen.length;i++){
	imagen[i].style.display="none";
}
contador++;
if(contador>imagen.length){
	contador=1;
}
imagen[contador-1].style.display="block";
	
	
}
setInterval("slide()",3000);




</script>
<style type="text/css">

.jumbotron{
	height:400px;
	background-color:#190936;
	color:#FFF;
	
	
	
}
.col-md-2{
	margin-left:-30px;

	
	
	
	
	
}

.col-md-2 li{
	list-style:none;
	text-decoration:none;
	border-bottom:1px solid #FFFBF0;
		background-color: #23678D;
		padding:1px;
		margin:1px;
		border-radius:5px;
		-webkit-box-shadow:5px 5px 10px #A0A0A4;
		width:115%;
		
	
}
a{color:#FFFBF0;
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;

text-transform:capitalize;
font-size:18px;




}
.nav-stacked  li a:hover{
	background-color:#003C6B;
	color:#FFF;
	
	
}
.nav-stacked >li.active a{
	background-color:#151415;
	
	
}
.navbar-header{
	display:inline-block;
	
	
	
}
h1{
	display:inline-block;
	
	
	
}

body{
	background-image:url(imagenes/521718.jpg);
	
	
	
}
.container{
	background-color:rgba(255,255,255,0.5);
	margin:10px 10px 10px 100px;
	border-radius:10px;
	
	
	
	
	
	
}
.navbar{
	margin-top:10px;
	margin-bottom:10px;
	padding-top:10px;
	padding-bottom:10px;
	
	
	
	
	
}
.img-rounded{
	width:100%;
	height:400px;
	margin:2px;
	padding:2px;
	
	overflow:hidden;
	
	
}

.slider{
overflow:hidden;
width:100%;
height:400px;
	
	
}
.slider .img-rounded{
	position:absolute;
	overflow:hidden;
	

	
	
	
	
}
i{
	margin:0px;
	
	
	
	
}
 i{
	 margin:2px;
	 
	 padding:2px;
 }
	
	
.navbar-inverse{	background-color:#0C0935;

	
}

</style>



</head>

<body onload="slide();">
<div class="container">
<nav class="navbar navbar-inverse">
<div class="navbar-header">
<h1 class="navbar-brand">web designer</h1>
<ul class=" nav navbar-nav">
<li><a href="#"><i class=" fa  fa-folder-open-o" ></i>foro</a></li>
<li><a href="#"><i class=" fa  fa-folder-open-" ></i>musica</a></li>
<li><a href="#"><i class=" fa  fa-folder-open-o" ></i>descargas</a></li>
<li><a href="registrarse.php"><i class=" fa  fa-folder-open-o" ></i>registrarse</a></li>
`<li><a href="iniciarsession.php"><i class=" fa  fa-folder-open-o" ></i>iniciar session</a></li>

</ul>
</div>



</nav>
<div class="col-12">
<div class="slider">
<img src="images/slide01.jpg" class=" img img-rounded" />

<img src="images/slide02.jpg" class=" img img-rounded" />
<img src="images/slide03.jpg" class=" img img-rounded" />
<img src="images/slide04.jpg" class=" img img-rounded" />
<img src="images/slide05.jpg" class=" img img-rounded" />
</divu></div>
<div class="col-md-12">
<div class="col-md-2" >
<ul class="nav nav-stacked">
<li><a href="#inicio" data-toggle="tab"><i class=" fa  fa-folder-open-o" ></i>inicio</a></li>
<li><a href="#noticias" data-toggle="tab"><i class=" fa  fa-folder-open-o" ></i>noticias</a></li>
<li><a href="#imagenes"data-toggle="tab"><i class=" fa  fa-folder-open-o" ></i>imagenes</a></li>
<li><a href="#contacto"data-toggle="tab"><i class=" fa  fa-folder-open-o" ></i>contacto</a></li>
`

</ul>
</div>
<br />
<div class="col-md-10">
<div class="tab-content">
<div id="inicio" class="tab-pane active">
<?php 
while($fila=$consulta->fetch_array()){
	?>
    
	<p><?php echo $fila["inicio"];?></p>
	
<?php } ?>




</div>
<div id="noticias" class="tab-pane">
<?php 
$conexion=new mysqli("localhost","root","120786","apagina1")or die("la base datos no se puede conectar");
$consulta=$conexion->query("select*from menuprincipal");
 
while( $fila=$consulta->fetch_array()){
	?>
	<p><?php echo $fila['noticias'];?></p>
	
<?php 
}




?>
</div>
<div id="imagenes" class="tab-pane">
<?php 
$conexion=new mysqli("localhost","root","120786","apagina1")or die("la base datos no se puede conectar");
$consulta=$conexion->query("select*from menuprincipal");
while( $fila=$consulta->fetch_array()){
	?>
<img src="imagenes/<?=$fila["imagenes"];?>" height="200" width="200" />
	
<?php 
}




?>
</div>
<div id="contacto" class="tab-pane">
<h2>formulario de contacto</h2>
<div class="col-md-5">
<form action="" method="post">
<div class="form-group">
<label class=" control-label">usuario</label>
<input class=" form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">email</label>
<input class=" form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">cementario</label>
<textarea class=" form form-control" cols="10" rows="10"></textarea>
</div>
<input type="submit"  class="btn btn-lg btn-primary" value="enviar" />
<input type="reset"  class="btn btn-lg btn-primary" value="limpiar" />
</form>

</div>
</div>
</div>





</div>

<div class="col-md-12">
<div class="jumbotron">
<div class="col-md-3">
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>

</div>
<div class="col-md-3">
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>

</div>
<div class="col-md-3">
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>

</div>
<div class="col-md-3">
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>
<dt>contacto</dt>
<dl>8298046401</dl>

</div>
</div>
</div>
</div>
</div>
</body>

</html>