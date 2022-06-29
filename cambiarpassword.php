<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />

<?php 

if(isset($_POST['submit'])){ 
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

$campo=array();
				if($pass1 != $pass2){
          array_push($campo,"la contraseña no coinciden");
          }
      
        
if(count($campo)>0){

echo "<div class='alert alert-danger'>";
          
for($i=0;$i<count($campo);$i++){
echo "<li>".$campo[$i]."<a href='dashboard.php'>volver atras</a>"."</li>";

}
}else{
echo "<div class='alert alert-success'>
gracias por cambiar su contraseña\n";
require("api/conex.php");
session_start();
$email=mysqli_real_escape_string($con,$_SESSION["email"]);

$pass1 =mysqli_real_escape_string($con,$_POST["pass1"]);
$pass2 = mysqli_real_escape_string($con,$_POST["pass2"]);

                                                                                    
$queryInsert = "UPDATE usuario  SET pass1='$pass1',pass2='$pass2' WHERE email='$email'";
$cons=mysqli_query($con, $queryInsert);
if($cons==true){
echo "  su contraseña fue cambiada con existoso <a href='dashboard.php'>volver atras</a>";

}else{

echo "no es existoso";

}
}
echo "</div>";
}?>