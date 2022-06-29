<?php
require("api/conex.php");
    
    $titulo= mysqli_real_escape_string($con,$_POST["titulo"]);
    $imagen =mysqli_real_escape_string($con,$_FILES['imagen']['name']);
    $texto = mysqli_real_escape_string($con,$_POST["texto"]);


//$archivo=$_FILE['imagen']['tmp_name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],"imagenes/".$_FILES['imagen']['name']);




$queryInsert = "INSERT INTO luxerycar(titulo,imagen,texto)values('$titulo',
	 '$imagen', '$texto')";
	$cons=mysqli_query($con, $queryInsert);
	if($cons==true){
echo "existoso";

	}else{

echo "no es existoso";

	}
header("location:dashboard.php");
?>