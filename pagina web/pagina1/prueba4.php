<?php 

	$conexion=new mysqli("localhost","root","120786","apagina1")or die("la base de datos no se puede conectar");
	$consulta=$conexion->query("insert into registrarse values('maria','mendez','maria01','maria01@gmail.com','123456','123456','07041974','mujer','colombia','ninguna','dfdfdfdfd')");

echo $consulta;


?>