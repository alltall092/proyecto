<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />


<?php
session_start();

require("api/conex.php");


switch($_SESSION['rol']){
		case 'administrador':
		header("Location:dashboard.php");
		break;
		case 'empleado':
		header("Location:dashboard.php");
		
		break;
		default: echo "error";
	}
	


	if(isset($_POST['submit'])){ 

	
	$email=$_POST['email'];
$pass1=$_POST['pass1'];
$campo=array();
if($email==""){
 array_push($campo,"el campo email esta vacio");	   			   }
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
   array_push($campo,"el campo email no es valido");
   }if($pass1==""){
   array_push($campo,"el campo contraseña esta vacio");
   }
   if(count($campo)>0){

	echo "<div class='alert alert-danger'>";
						
for($i=0;$i<count($campo);$i++){
echo "<li>".$campo[$i]."</li>";

}
}else{
echo "<div class='alert alert-success'>
validacion esta correcta<br/>";

$consulta="select id,nombre,apellido,email,rol,pass1,pass2 from usuario where email='$email' and pass1='$pass1'";
$consul=mysqli_query($con,$consulta);
$fila=mysqli_fetch_array($consul);

$row=mysqli_num_rows($consul);
	if($row ==true){		
	$_SESSION['email']=$email;
	$_SESSION['rol']=$fila['rol'];
	
switch($_SESSION['rol']){
		case 'administrador':
		header("Location:dashboard.php");
		break;
		case 'empleado':
		header("Location:dashboard.php");
		
		break;
		default: echo "error";
	}
	
	
}else{
			
echo "<p class='alert alert-danger'>el usuario o contrasena son incorrecto<a href='login.php'>Volver al login</a></p>";

}
	
}
		
	}
?>