<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
<style type="text/css">
body{
background-color:blue;


}
.container{
background-color:white;
margin:40px;
padding:15px;

-webkit-box-shadow:inset 10px 5px 7px 5px rgba(45,24,24,45);
box-shadow:inset 10px 5px 7px 5px rgba(45,24,24,45);
-webkit-border-radius: 10px 10px 10px 10px;
border-radius: 10px 10px 10px 10px;
}
form{
        margin:50px;
padding:15px;


}
input{

        margin:2px;
        padding:2px;
}
.label-control{
color:blue;
font-weight:bold;
text-transform:capitalize;

}
.btn-primary{
        color:white;
font-weight:bold;
text-transform:capitalize;


}
h2{
        color:blue;
font-weight:bold;
text-transform:capitalize;
margin-top:50px;
margin-left:60px;
margin-bottom:-40px;

}

</style>
</head>
<body>
<?php
require_once "api/conex.php"; 

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
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
array_push($campo,"el campo email no es valido");


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
echo "<li>".$campo[$i]."</li>";

}
}else{
echo "<div class='alert alert-success'>
datos correcto ya puede iniciar session";
$nombre= mysqli_real_escape_string($con,$_POST["nombre"]);
	 $apellido =mysqli_real_escape_string($con, $_POST["apellido"]);
	 $email = mysqli_real_escape_string($con,$_POST["email"]);
    
	 $rol= mysqli_real_escape_string($con,$_POST["rol"]);
	 $pass1 =mysqli_real_escape_string($con, $_POST["pass1"]);
	 $pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);
  

	$queryInsert = "INSERT INTO usuario(nombre,apellido,email,rol,pass1,pass2)values('$nombre',
	 '$apellido', '$email','$rol','$pass1','$pass2')";
	$cons=mysqli_query($con, $queryInsert);
	if($cons==true){
echo "existoso";

	}else{

echo "no es existoso";

	}
}
echo "</div>";
	}

?>
    <div class="container">
            <div class="row">
                    <div class="col-md-6">
                            <h2>registrar</h2>
        <form action="registrar.php" method="post">
        <div class="form-group">
<label class="label-control">nombre</label>
<input type="text" class="form-control"  name="nombre" value="">
</div>

        <div class="form-group">
<label class="label-control">apellido</label>
<input type="text"class="form-control"  name="apellido" value="">

        <div class="form-group">
<label class="label-control">email</label>
<input type="text"class="form-control"  name="email" value="">
</div>

        <div class="form-group">
<label class="label-control">Empleado</label>
<select name="rol" class="form-control" >
    <option value="">---------</option> 
    <option value="administrador">Admistrador</option> 
    <option value="empleado">Empleado</option> 

</select>
</div>
        <div class="form-group">
<label class="label-control">Contraseña</label>
<input type="password" class="form-control"  name="pass1" value="">
</div>

        <div class="form-group">
<label class="label-control">comfirmar Contraseña</label>
<input type="password" class="form-control" name="pass2" value="">
</div>
<div class="form-group">
<input type="submit"  name="submit" class="btn btn-primary" value="enviar">
<div>
</form>
</div>
</div>
</div>
    <div>
</body>
</html>