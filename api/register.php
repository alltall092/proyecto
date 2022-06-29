<?php
//require_once "conex.php"; 

if(isset($_POST['submit'])){ 
	$nombre= $_POST["nombre"];
	$apellido =$_POST["apellido"];
	$email =$_POST["email"];
   
	$rol= $_POST["rol"];
	$pass1 =$_POST["pass1"];
	$pass2 =$_POST["pass2"];		
 $campo=array();


	if($nombre==""){
		array_push($campo,"el campo nombre esta vacio");

		}
		if($apellido==""){
			array_push($campo,"el campo apellido esta vacio");
	
			}
			if($email==""){
				array_push($campo,"el campo email esta vacio");
		
				}
				if($rol==""){
					echo array_push($campo,"el campo empleado esta vacio");
		
					}
					if($pass1==""){
						array_push($campo,"el campo contraseña esta vacio");
		
						}
						if($pass1 != $pass2){
						array_push($campo,"la contraseña no coinciden");
						}
				
					
if(count($campo)>0){
	echo "<div class='alert alert-danger'>";
						
for($i=0;$i<count($campo);$i++){
echo "<li>".$campo[$i]."</li></div>";
header("location:http://localhost/pagina/registrar.php");
}
}else{
echo "<div class='alert alert-success'>
datos correcto";

}
echo "</div>";
	}

/*
$nombre= mysqli_real_escape_string($con,$_POST["nombre"]);
	 $apellido =mysqli_real_escape_string($con, $_POST["apellido"]);
	 $email = mysqli_real_escape_string($con,$_POST["email"]);
    
	 $rol= mysqli_real_escape_string($con,$_POST["rol"]);
	 $pass1 =mysqli_real_escape_string($con, $_POST["pass1"]);
	 $pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
  */

	/*$queryInsert = "INSERT INTO usuario(nombre,apellido,email,rol,pass1,pass2)values('$nombre',
	 '$apellido', '$email','$rol','$pass1','$pass2')";
	$cons=mysqli_query($con, $queryInsert);
	if($cons==true){
echo "existoso";

	}else{

echo "no es existoso";

	}
	*/



	?>

