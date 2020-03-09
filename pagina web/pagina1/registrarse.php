<?php



class registrar{
	public $nombre;
	public $apellio;
	public $usuario;
	public $email;
	public $pass1;
	public $pass2;
	public $fecha_de_nacimiento;
	public $genero;
	public $pais;
	public $foto;
	public $caracteristica;
	public $campo=array();
	public $contador;
	
	
	public $mensaje=array();
	public  function  __construct(){
			if($_SERVER['REQUEST_METHOD']=='POST'){
	$this->nombre=$_POST['nombre'];
$this->apellido=$_POST['apellido'];
$this->usuario=$_POST['usuario'];
$this->email=$_POST['email'];
$this->pass1=$_POST['pass1'];
$this->pass2=$_POST['pass2'];
$this->fecha_de_nacimiento=date("Y-m-d");
$this->genero=isset($_POST['genero']);
$this->pais=$_POST['pais'];
$this->foto=$_FILES['foto']['name'];
$this->caracteristica=$_POST['caracteristica'];

}

	



}

public function formulario(){
	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$conexion=new mysqli("localhost","root","120786","apagina1")or die("la base de datos no se puede conectar");
	if($conexion->query("insert into registrarse(nombre,apellido,usuario,email,pass1,pass2,fecha_de_nacimiento,genero,pais,foto,caracteristica)values(
																																				   
																																			'".$this->nombre."',
																																			'".$this->apellido."',
																																		'".$this->usuario."',
																																		'".$this->email."',
																																		'".$this->pass1."',
																																		'".$this->pass2."',
																																		'".$this->fecha_de_nacimiento."',
'".$this->genero."',
'".$this->pais."',
'".$this->foto."',
'".$this->caracteristica."')")==true){
		echo "insertado";
		
	}else{
		echo "error al insertar";
		
	}
	}
	/*if($this->nombre==""){
	 array_push($this->campo,"<div class='error'>el nombre esta vacio</div>");

	}
	if($this->apellido==""){
	 array_push($this->campo,"<div class='error'>el apellido esta vacio</div>");

	}
	if($this->usuario==""){
	array_push($this->campo,"<div class='error'>el usuario esta vacio</div>");

	}
	if($this->email==""){
	 array_push($this->campo,"<div class='error'>el email esta vacio</div>");

	}
	if($this->pass1==""){
	 array_push($this->campo,"<div class='error'>la contraseña1 esta vacio</div>");

	}
	if($this->pass1!=$this->pass2){
	 array_push($this->campo,"<div class='error'>la contraseña no coinciden</div>");

	}
	if($this->fecha_de_nacimiento==""){
	 array_push($this->campo,"<div class='error'>la fecha esta vacio</div>");

	}
	if($this->genero==""){
		
		 array_push($this->campo,"<div class='error'>el genero esta vacio</div>");
		
		
	}
	if($this->pais==""){
	 array_push($this->campo,"<div class='error'>el pais esta vacio</div>");

	}
	if($this->caracteristica==""){
	 array_push($this->campo,"<div class='error'>la caracteristica estan vacio</div>");

	}
	
}*/
}

/*
public function message(){
	//$msj=$this->mensaje;
	
	if(isset($_POST['submit'])){
		$contador=0;
		if(count($this->campo)>0){
	
	while($contador<count($this->campo)){
 return $this->campo[$contador];
	$contador++;
	
	}
	}else{

		echo "<div class='correcto'><h2>registro correcto</h2></div>";
	}
		
	}
		
	

	
	
}
*/

	
	

}
	
$b=new registrar();



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
<style type="text/css">
label h2{
	
	
	
	
}
body{
	background-image:url(imagenes/imagen1.jpg);
	
	
	
}
.container{
	border-radius:5px;
		-webkit-box-shadow:5px 5px 15px 5px #5677A9;
	box-shadow:5px 5px 15px 5px #5677A9;

	margin:5px 80px 5px; 80px;

padding:5px;
}
.col-md-6{
	padding:50px;
	text-transform:capitalize;
	color:#FFF;
	
	
}
.error{
	color:#F00;
	border:1px solid  #F00;
	background-color:#FFD5D5;
	height:50px;
	width:500px;
	text-align:center;
	margin:40px;
	margin-bottom:-60px;
}
.correcto{
	background: #9DFF9D;
	border: 1px solid #333;
	height:50px;
	width:500px;
	text-align:center;
	margin:40px;
	margin-bottom:-60px;
	
	
	
}

</style>
</head>

<body>
<div class="container  w3-blue">
<?php
$b=new registrar();
echo $b->formulario();
//echo $b->message();



?>

<div class="col-md-6">
<h2>formulario para registrarse</h2>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
<div class="form-group">
<label class="control-label">nombre</label>
<input type="text"  class="form form-control" name="nombre" value="" />


</div>
<div class="form-group">
<label class="control-label">apellido</label>
<input type="text"  class="form form-control"  name="apellido" value="" />

</div>
<div class="form-group">
<label class="control-label">usuario</label>
<input type="text"  class="form form-control" name="usuario" value="" />
</div>
<div class="form-group">
<label class="control-label">email</label>
<input type="text"  class="form form-control" name="email" value="" />
</div>

<div class="form-group">
<label class="control-label">contreseña</label>
<input type="password"  class="form form-control" name="pass1" value="" />
</div>
<div class="form-group">
<label class="control-label">contreseña confirmada</label>
<input type="password"  class="form form-control" name="pass2" value="" />
</div>
<div class="form-group">
<label class="control-label">fecha de nacimiento</label>
<input type="date"  class="form form-control" name="fecha_de_nacimiento" value="<?php date('Y-m-d',$b->fecha_de_nacimiento);?>" />
</div>
<div class="form-group">

<label class="control-label">genero</label>
<br/>
hombre <input type="radio"  class="radio radio-inline" name="genero" value="<?php if($b->genero=='hombre')echo 'checked'?>" />
mujer <input type="radio"  class="radio radio-inline" name="genero" value="<?php if($b->genero=='mujer')echo 'checked'?>" />

</div>
<div class="form-group">
<label class="control-label">pais</label>
<input type="text"  class="form form-control" name="pais" value="" />
</div>
<div class="form-group">
<label class="control-label">subir foto</label>
<input type="file"  class="btn btn-primary" name="foto" value="" />
</div>
<div class="form-group">
<label class="control-label">caracteristica</label>
<textarea cols="10" rows="10" name="caracteristica" class="form form-control"></textarea>
</div>
<div class="form-group">

<input type="submit" name="submit"  class="btn btn-lg  btn-success" value="enviar" />
<input type="reset"  class="btn btn-lg  btn-success" value="limpiar" />
</div>
</form>


</div>



</div>

</body>
</html>