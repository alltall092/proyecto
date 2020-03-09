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
<?=$eliminar;?>
<?php 
if($fila=$resultado->row()){?>
<?php echo $fila->eventos ?>

<br/>
<a href="<?php echo base_url(); ?>controlador/eliminar2?id=<?php echo $fila->id; ?>" class="btn btn-danger">eliminar</a>


<?php } ?>
</body>
</html>