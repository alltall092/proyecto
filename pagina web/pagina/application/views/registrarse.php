<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script  src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>./bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<style type="text/css">
form{
	margin-left:40px;
	padding:5px;
	
	
}
body{
	background-image:url(<?php base_url();?>../imagenes/imagen1.jpg)
	
	
	
}
form,h2{
	color:#FFFBF0;
	
	
}
.container{
	background-color: #00AA2B;
	border-radius:50px;
	margin:10px;
	padding:5px;
	background-size:150%;
	
	
	
}


</style>

</head>
<body>

<div class="container">
<h2><?=$registrar;?></h2>
<div class="row">
<div class="col-md-6" >
<form action="<?php echo base_url();?>controlador/validacion" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="label-control">nombre</label>
<input type="text" name="nombre" class="form form-control" value="<?php echo set_value('nombre');?>" />

</div>
<?php echo form_error('nombre');?>
<div class="form-group">
<label class="label-control">apellido</label>
<input type="text" name="apellido" class="form form-control" value="<?php echo set_value('apellido');?>" />
</div>
<?php echo form_error('apellido');?>

<div class="form-group">
<label class="label-control">usuario</label>
<input type="text"  name="usuario"class="form form-control" value="<?php echo set_value('usuario');?>" />
</div>
<?php echo form_error('usuario');?>

<div class="form-group">
<label class="label-control">email</label>
<input type="text" name="email" class="form form-control" value="<?php echo set_value('email');?>" />
</div>
<?php echo form_error('email');?>

<div class="form-group">
<label class="label-control">contraseña1</label>
<input type="password" name="pass1" class="form form-control" value="<?php echo set_value('pass1');?>" />
</div>
<?php echo form_error('pass1');?>
<div class="form-group">
<label class="label-control">contraseña2</label>
<input type="password" name="pass2" class="form form-control" value="<?php echo set_value('pass2');?>" />
</div>
<?php echo form_error('pass2');?>

<div class="form-group">
<label class="label-control">pais</label>
<input type="text" name="pais" class="form form-control" value="<?php echo set_value('pais');?>" />
</div>
<?php echo form_error('pais');?>

<div class="form-group">
<label class="label-control">fecha de nacimiento</label>
<input type="date" name="fecha_de_nacimiento" class="form form-control" value="<?php echo set_value('fecha_de_nacimiento');?>" />
</div>
<?php echo form_error('fecha_de_nacimiento');?>

<div class="form-group">
<label class="label-control">hombre</label>
<input type="radio" name="genero" value="hombre" />
<label class="label-control">mujer</label>
<input type="radio" name="genero" value="mujer" />

</div>
<?php echo form_error('genero');?>
<div class="form-group">
<label class="label-control">foto</label>
<input  name="foto" type="file" value="" />

</div>
<div class="form-group">
<label class="label-control">caracteristica</label>
<textarea name="caracteristica"  cols="60" rows="10" class="form-control" ></textarea>

</div>
<?php echo form_error('caracteristica');?>
<input type="submit" class="btn btn-success btn-lg"  value="enviar" />
<input  class="btn btn-success btn-lg"  type="reset" value="limpiar" />

</form>




</div>




</div>


</body>
</html>