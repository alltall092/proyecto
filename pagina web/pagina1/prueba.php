<?php 

	$conexion=new mysqli("localhost","root","120786","apagina1")or die("la base de datos no se puede conectar");
	$consulta="insert into registrarse(id,nombre,apellido,usuario,email,pass1,pass2,fecha_de_nacimiento,genero,pais,foto,caracteristica) values(null,'maria','mendez','maria01','maria01@gmail.com','123456','123456','19860112','mujer','colombia','ninguna','dfdfdfdfd')";
if($conexion->query($consulta)==true){
	
	echo "esta insertado";
}else{
	echo "error";
	
	
}




?>