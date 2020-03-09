<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<?php 
if(isset($_GET['pagina'])){
 if($_GET['pagina']=="inicio.php"||$_GET['pagina']=="producto.php"||$_GET['pagina']=="contacto.php"){
	 


$url=$_GET['pagina']);
 }else{
	$url="inicio.php"; 
	 
 }



}else
$url="inicio";
}


include("grafica/".$url.".php");

?>

</head>

<body>
<ul>
<li><a href="?pagina=inicio">inicio</a></li>
<li><a href="?pagina=producto">producto</a>></li>
<li><a href="?pagina=contacto">contacto</a></li>

</ul>
<?php 
echo "hola soy la pagina de inicio";

?>
</body>
</html>