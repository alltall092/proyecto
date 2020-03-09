<?php
class session{
	
	public $usuario;
	public $pass1;
	public $campo=array();
	public $campo2=array();
	public function __construct(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
	$this->usuario=$_POST['usuario'];
	$this->pass1=$_POST['pass1'];
		}
	
		
		
		
	}
	public function validar(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			
			
			
		if($this->usuario==""){
		array_push($this->campo,"<p class='error'>el campo esta vacio</p>");
			
			
			
		}
		if($this->pass1==""){
			
			array_push($this->campo,"<p class='error'>el campo de contraseña esta vacio</p>");
			
			
		}
		
		$conexion=new mysqli("localhost","root","120786","apagina1")or die("no se pude contatar la base datos");
					
			$consulta=$conexion->query("select usuario,pass1 from registrarse where usuario='".$this->usuario."' and pass1='".$this->pass1."'");
			
			if($consulta->num_rows==0){
			$consulta=$conexion->query("select usuario,pass1 from registrarse where usuario='".$this->usuario."' and pass1='".$this->pass1."'");

			
					array_push($this->campo,"<p class='error'>el usuario o contraseña son incorrectos</p>");
				return false;
			}
		
		   
		}
		   
		
	}
	public function mensaje(){
	if(isset($_POST['submit'])){
					
		$i=0;
		if(count($this->campo)>0){
			
		while($i<count($this->campo)){
				return $this->campo[$i];	
					
				$i++;			

		}
		}else{
		
			$conexion=new mysqli("localhost","root","120786","apagina1")or die("no se pude contatar la base datos");
					
			$consulta=$conexion->query("select usuario,pass1 from registrarse where usuario='".$this->usuario."' and pass1='".$this->pass1."'");
			if($fila=$consulta->fetch_array()){
			session_start();
			
				$_SESSION['usuario']=$fila['usuario'];
					header("location:session.php");

				return true;
			
			}
		
			
		
					
					
					}
	}

	}
	
	
}





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
.col-md-4{
	background-color: #B0FFB0;
	height:600px;
	position:center;
	padding:5px;
	margin:10px 400px 100px 400px;
	padding:50px;
	-webkit-box-shadow:15px 10px 10px 10px #5677A9;
	
	box-shadow:5px 5px 15px 5px #5677A9;
	
}
form{
	color: #3535FF;
	text-transform:capitalize;
	

	
	
	
}
h2{
color: #3535FF;
	text-transform:capitalize;
	
	margin-top:110px;
	
}
body{
	background-color:#00324A;
	
	
}
.error{
	color:red;
	
	
	
}
.correcto{
	color:#0F0;
	
	
	
}


</style>


</head>

<body>


<div class="container">
<div class="col-md-4">
<?php 
$s=new session();
echo $s->validar();
echo $s->mensaje();

?>
<h2>iniciar session</h2>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div class="form-group">
<label class="control-label">usuario</label>
<input type="text"  class="form form-control" name="usuario" value="" />
</div>
<div class="form-group">
<label class="control-label">contraseña</label>
<input type="password"  class="form form-control" name="pass1" value="" />
</div>
<input type="submit"  name="submit"class="btn  btn-lg btn-primary" value="enviar" />
</form>

</div>
</body>
</html>