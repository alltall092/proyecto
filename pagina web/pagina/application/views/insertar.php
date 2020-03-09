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
<div class="col-md-6">
<h2><?=$insertar;?></h2>
<form action="" method="post">
<div class="form-group">
<label class="control-label">eventos</label>
<input type="text" class="form form-control" name="eventos" value="" />
</div>
<div class="form-group">
<label class="control-label">tipos</label>
<input type="text" class="form form-control" name="tipos" value="" />
</div> 
<div class="form-group">
<label class="control-label">caracteristicas</label>
<input type="text" class="form form-control" name="caracteristica" value="" />
</div>
<div class="form-group">
<label class="control-label">objectivos</label>
<input type="text" class="form form-control"  name="objectivos" value="" />
</div>
<div class="form-group">
<label class="control-label">fecha</label>
<input type="date"  class="form form-control"  name="fecha" value="" />
</div>
<input type="submit"  class="btn btn-success" value="enviar" />
<input type="reset" class="btn btn-success" value="limpiar" />
</form>
</div>
</div>
</div>
</body>
</html>