<?php
require("api/conex.php");
$nombre= mysqli_real_escape_string($con,$_POST["nombre"]);
	
	 $email = mysqli_real_escape_string($con,$_POST["email"]);
    
	 $mensaje= mysqli_real_escape_string($con,$_POST["mensaje"]);
	

$queryInsert = "INSERT INTO contacto(nombre,email,mensaje)values('$nombre',
	 '$email','$mensaje')";
	$cons=mysqli_query($con, $queryInsert);
	if($cons==true){
echo "existoso";

	}else{

echo "no es existoso";

	}
header("location:contact.php");


?>