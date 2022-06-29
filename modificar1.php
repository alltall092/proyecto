<?php
require("api/conex.php");
$id= mysqli_real_escape_string($con,$_POST["id"]);
    $titulo= mysqli_real_escape_string($con,$_POST["titulo"]);
    $imagen =mysqli_real_escape_string($con,$_FILES['imagen']['name']);
    $texto = mysqli_real_escape_string($con,$_POST["texto"]);


//$archivo=$_FILE['imagen']['tmp_name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],"imagenes/".$_FILES['imagen']['name']);




$queryInsert = "UPDATE luxerycar SET titulo='$titulo',
	 imagen='$imagen', texto='$texto' where id='$id'";
	$cons=mysqli_query($con, $queryInsert);
	if($cons==true){
echo "existoso";

	}else{

echo "no es existoso";

	}
header("location:dashboard.php");
?>