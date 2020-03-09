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
<script type="text/javascript">
function menu(){
	var m=document.getElementById("menu").classList.toggle("mover");
	
	
	
}

</script>




<style type="text/css">
#menu.mover{
	left:-200px;
	
	
	
}
#menu{

	
	
}
.col-md-2{
	margin-top:-75px;
	background-color: #00254A;
	width:200px;
	left:0;
	
position:fixed;
	height:100%;
	-webkit-transition:all 500ms linear;
	transition:all 500ms linear;
	
	
	
	
	
	
	
	
}
.col-md-2 li a{
	border-bottom:1px #FFF solid;
	color:#FFF;
	
	
	
}
.nav-stacked li a:hover{
	background-color:#5353FF;
	color:#333;
	
}
	
	
	


</style>
</head>

<body>
<div class="container-fluid">
<nav class="navbar navbar-inverse">
<button type="button" class="navbar-toggle media-object" onclick="menu();">
<span class="sr-only">navegacion</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>

</button>

</nav>
<div class="col-md-2" id="menu">
<ul class="nav nav-stacked">
<li><a href="#"><i class=" fa fa-home"></i>inicio</a></li>
<li><a href="#"><i class=" fa fa-newspaper-o"></i>noticias</a></li>
<li><a href="#"><i class=" fa fa-user-o"></i>perfil</a></li>
<li><a href="#"><i class=" fa fa-photo"></i>fotos</a></li>
<li><a href="#"><i class=" fa fa-calendar"></i>eventos</a></li>
<li><a href="#"><i class=" fa fa-bar-chart"></i>estadistica</a></li>
<li><a href="#"><i class=" fa fa-sign-out"></i>cerrar session</a></li>
</ul>

</div>
<div class="col-md-10">



</div>
</div>

</body>
</html>