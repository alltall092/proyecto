<?php
$contador=0;

$bd= new SQLite3('login.db');
$resultado=$bd->query("SELECT*FROM login WHERE usuario='".$_POST['usuario']."'AND password='".$_POST['password']."';");
while($fila=$resultado->fetchArray()){
echo"Has entrado correctamente  a la aplicacion";	
$contador++;	
	
}
if($contador==0){
	echo " no has entrado correstamente en la aplicacion";
	
}
$bd->close();
?>