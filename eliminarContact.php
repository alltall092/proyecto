<?php
require("api/conex.php");
$id=$_GET['id'];

$consulta="delete from contacto where id='$id'";
$consul=mysqli_query($con,$consulta);
if($consul==true){
echo "existoso";


}else{



}
header('location:dashboard.php');

?>