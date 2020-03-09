<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script  src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>./bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<?php foreach($result->result_array()as $fila){?>
<p class="well">
<?php echo $fila["comentario"];?></p>
<br />

<?php } ?>
</div>

<div class="col-md-6" style="background-color:#D50000;">
<h2><?=$foro;?></h2>
<form action="<?php echo base_url();?>controlador/comentario" method="post">
<div class="form-group">
<label class="control-label">usuario</label>
<input class="form form-control" name="usuario" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">email</label>
<input  class="form form-control" name="email" type="text" value="" />
</div>
<div class="form-group">
<label class="control-label">comentario</label>
<textarea class="form form-control" name="comentario"  cols="20" rows="10"></textarea>
</div>
<div class="form-group">

<input class="btn btn-success btn-lg" type="submit" value="enviar" />  <input  class="btn btn-success btn-lg" type="reset" value="limpiar" />
</div>

</form>
</div>
</div>
</div>
</body>
</html>