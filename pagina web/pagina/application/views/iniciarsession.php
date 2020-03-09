<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script  src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>./bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />

</head>
<style type="text/css">
.container{
	margin-top:40px;
	margin-left:400px;
padding:90px;
	
	
	
}
form,h2{
	color:#FFFBF0;
	
	
}
body{
	background-image:url(<?php base_url();?>../imagenes/510602.jpg);
	background-position:center;
	
	
	
	
}
.col-md-6{
	font-family:Arial, Helvetica, sans-serif;
	text-transform:capitalize;
	margin-top:20px;
	padding-top:20px;
	background-color:rgba(0,85,170,0.7);
	border-radius:10px;
	margin-bottom:50px;
	padding-bottom:50px;
	border-radius:20px;
	
	
	
	
}




</style>










</head>

<body>

<div class="container">
<div class="row">
<div class="col-md-6">
<h2><?=$session;?></h2>
<p> <?php echo $this->session->flashdata('');?></p>
<form action="<?php echo base_url();?>controlador/session2" method="post">
<div class="form-group">
<label class="label-control">usuario</label>
<input  class=" form form-control" name="usuario" type="text" value="<?php echo set_value('usuario');?>" />
</div>
<?php echo form_error("usuario");?>
<div class="form-group">
<label class="label-control">contraseña</label>
<input  class=" form form-control" name="pass1" type="password" value="<?php echo set_value('pass1');?>" />
</div>

<?php echo form_error("pass1");?>
<input  class="btn btn-lg btn-primary" type="submit" value="enviar" />

</form>



</div>
</div>
</div>
</body>
</html>