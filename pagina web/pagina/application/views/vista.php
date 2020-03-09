<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script  src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>./bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
contador=0;
function slideshow(){
imagen=document.getElementsByClassName("img-rounded");
for(i=0;i<imagen.length;i++){
imagen[i].style="display:none;";	
	
	
}
contador++;
if(contador>imagen.length){
	contador=1;
	
	
	
	
}
imagen[contador-1].style="display:block;";

}
setInterval("slideshow()",3000);

</script>



<style type="text/css">
.nav{
	margin:5px;
	padding:5px;
	
	
	
	
	
}
.container-fluid{
	margin:5px;
	padding:5px;
	
	
	
	
}
.row{
	margin-left:40px;
	padding:5px;
	
	
	
	
	
	
}

.container-fluid .img-rounded{
	width:100%;
	position:absolute;
	
	
	
	
	
	
	
	
	

	
}

.col-md-2{
	background-color:#000;
	
	
	
	
	
}
.img-rounded{
	width:100%;
	height:400px;
	margin-right:30px;
	padding:10px;
	
	
	
	
}
i{
	margin:2px;
	padding:2px;
	color: #0D86FF;
	
	
}
.col-md-2 ul li a{
	margin:2px;
	padding:2px;
	border:0px solid  #FFFBF0;
	border-radius:20px;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
	font-size:18px;
	text-transform:capitalize;
	
	
	
}
.col-md-2{
	border-radius:15px;
	
	
	
	
	
}
body{
	background-image:url(<?php base_url();?>./imagenes/521718.jpg);
	background-size:100%;
	
	
	
}

</style>
</head>

<body onload="slideshow();">
<div class="container-fluid" style="background-color:#FFFBF0; margin:5px; padding:5px;">

<nav class="navbar navbar-inverse">
<div class="navbar-header">
<h2 class="navbar-brand"><img src="<?php echo base_url();?>//imagenes/IMG-20190307-WA0019.jpg" style="margin-top:-30px;border-radius:40px; padding:-10px;"height="60"  width="150" /></h2>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>
<div id="menu">

<ul class="nav navbar-nav">

<li><a href="#"><i class="fa fa-home"></i>foro</a></li>
<li><a href="#"><i class="fa fa-music"></i>musica</a></li>
<li><a href="#"><i class="fa fa-css3"></i>video</a></li>
</ul>
<?php if(!$this->session->userdata('usuario')){ ?>
<ul class="nav navbar-nav navbar-right">
<li><a href="<?php echo base_url();?>controlador/registrarse"><i class="fa fa-registered"></i>registrarse</a></li>
<li><a href="<?php echo base_url();?>controlador/iniciarsession"><i class="fa fa-sign-in"></i>iniciar session</a></li>

</ul>
<?php }else{?>
<ul class="nav navbar-nav  navbar-right">
<li><a href="<?php echo base_url();?>controlador/session"><i class="fa fa-user-o"></i><?php echo $this->session->userdata('usuario')?></a></li>
<li><a href="<?php echo base_url();?>controlador/salir"><i class="fa  fa-sign-out"></i>cerrar session</a></li>
 
</ul>
<?php }?>
</div>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-md-12" style="margin:-25px; padding:-25px;">

<img id="img" src="<?php echo base_url();?>./imagenes/er space planets stars awesome wallpaper.jpg" class="img img-rounded" />
<img id="img"  src="<?php echo base_url();?>./imagenes/510602.jpg" class="img img-rounded" />
<img id="img"  src="<?php echo base_url();?>./imagenes/imagen1.jpg" class="img img-rounded" />
<img  id="img" src="<?php echo base_url();?>./imagenes/rt outer space planets awesome wallpaper.jpg"class="img img-rounded" />
<img id="img"  src="<?php echo base_url();?>./imagenes/468739.jpg " class=" img img-rounded" />



</div>



<div class="col-md-12" style="margin-top:400px;">

<div class="col-md-2">
<h5 style="color:#FFFBF0; text-align:center; text-transform:capitalize; font-size:24px;">menu principal</h5>
<i class="fa fa-html5" style="font-size:110px; margin-left:40px; padding:5px;"></i>
<ul class="nav nav-stacked">
<li class="active"><a href="#inicio" data-toggle="tab"><i class="fa fa-folder-open-o"></i>inicio</a></li>

<li><a href="#noticias"data-toggle="tab"><i class="fa fa-folder-open-o"></i>noticias</a></li>
<li><a href="#galerias"data-toggle="tab"><i class="fa fa-folder-open-o"></i>galerias</a></li>
<li><a href="#contacto"data-toggle="tab"><i class="fa fa-folder-open-o"></i>contacto</a></li>
</div>
<div class="col-md-10">


<?=$hola;?>
<div class="tab-content">
<div id="inicio" class="tab-pane active">

<?php 
foreach($result->result_array() as $fila){?>
	
    
     
     <div class="well">
      <h3><?php echo $fila["titulo1"];?></h3>
     <br />
  <img  class="img img-thumb"src="<?php echo base_url();?>./imagenes/<?=$fila["galeria"];?>"  height="150" width="200"/>
   
 <p style=" margin-left:220px; margin-top:-170px; padding:30px; font-size:14px; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;"> <?php echo $fila["inicio"];?></p>
    
	</div>
<?php } ?>
</div>
<div id="noticias" class="tab-pane">
<?php 
foreach($result->result_array() as $fila){?>
	<h3><?php echo $fila["titulo2"];?></h3>
    <br />
	<p style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; font-size:18px;"class="well"><?php echo $fila["noticias"];?></p>
	
	
<?php } ?>



</div>
<div id="galerias" class="tab-pane">

<?php

foreach($result->result_array() as $fila){?>
	<div class="col-md-4">
	<img style="border:1px solid #00F; margin:2px; padding:2px;" src="<?php echo base_url();?>./imagenes/<?=$fila["galeria"];?>"  height="280" width="280"/>
  
	<h5><?php echo $fila["titulo3"];?></h5>
    <p><?php echo $fila["titulo4"];?></p>
</div>
<div class="col-md-4">
	<img style="border:1px solid #00F; margin:2px; padding:2px;" src="<?php echo base_url();?>./imagenes/<?=$fila["galeria"];?>"  height="280" width="280"/>
  
	<h5><?php echo $fila["titulo3"];?></h5>
    <p><?php echo $fila["titulo4"];?></p>
</div>
<div class="col-md-4">
	<img style="border:1px solid #00F; margin:2px; padding:2px;" src="<?php echo base_url();?>./imagenes/<?=$fila["galeria"];?>"  height="280" width="280"/>
  
	<h5><?php echo $fila["titulo3"];?></h5>
    <p><?php echo $fila["titulo4"];?></p>
</div>
<?php } ?>

</div>
<div id="contacto" class="tab-pane">
<div  class="container">
<div class="row">
<div class="col-md-6">
<h2>formulario de comentario</h2>
<form action="" method="post">
<div class="form-group">
<label class="control-label">usuario</label>
<input class="form form-control" type="text" name="usuario"  value="" />
</div>
<div class="form-group">

<label class="control-label">usuario</label>
<input type="text"  class="form form-control" name="email"value="" />
</div>
<div class="form-group">

<label class="control-label">mensaje</label>
<textarea  class="form form-control" cols="10" rows="10" name="mensaje"></textarea>
</div>


<input  type="submit"  class="btn btn-success btn-lg" value="enviar" /><input type="reset"  class=" btn btn-success btn-lg" value="limpiar" />

</form>
</div>
</div>
</div>
</div>



</div>



</div>

</div>
</div>
</div>
<div class="container-fluid" style=" background-color:#000095; color: #FFFBF0; font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
<div class="row">

<div class="col-md-3">
<dt>contacto</dt>
<dd>julio perez</dd>
<dt>telefono</dt>
<dd>8298046401</dd>
<dt>email</dt>
<dd>alltall092@gmail.com</dd>



</div>
<div class="col-md-3">
<dt>politica de nuestra empresa</dt>

<dd>somos una empresa dedicada al desarrollo web queremos mantener nuestra calidad en el mercado a nivel mundial</dd>
<br />
<dt>patrocinadores</dt>

<dd>unicaribe</dd>
<dd>la cocacola</dd>

<dd>presidente light</dd>
<dd>altice</dd>
<dd>banco popular</dd>

<dd>zona franca</dd>




</div>
<div class="col-md-3">
<dt>colaboradores</dt>
<dd>jose ramon gonzales</dd>
<dd>huascar brito</dd>
<dd>ronal cuesvas</dd>
<dd>waya record</dd>

<br />
<dt>publicidad</dt>
<dd>orange dominicana</dd>
<dd>accumed tenology</dd>
<dd>corning cable systems</dd>
<dd>cerveria nacional</dd>
</div>
<div class="col-md-3">
<img style="margin:5px; padding:5px;"  class="img img-circle"src="<?php echo base_url();?>/imagenes/573475.jpg" height="290"  width="290" />





</div>

</div>

</div>
</body>
</html>