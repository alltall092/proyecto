<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script  src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>./bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-6">
<h2><?=$editar; ?></h2>
<form action="" method="post">
<div class="form-group">
<label class="control-label">nombre</label>
<input  class="form form-control" name="nombre" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">apellido</label>
<input  class="form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">usuario</label>
<input  class="form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">email</label>
<input  class="form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">pais</label>
<input  class="form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">fecha de nacimiento</label>
<input  class="form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">genero</label>
<input  class="form form-control" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">caracteristica</label>
<input  class="form form-control" type="text" value="" />
</div>
<input type="submit" class="btn btn-success btn-lg" value="enviar"  />  
<input type="reset" class="btn btn-success btn-lg" value="limpiar" />
</form>


</div>




</div>
</body>
</html>