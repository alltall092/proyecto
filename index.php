<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
<style type="text/css">

html {
  	width: 100%;
  	margin: 0px;
  }
  
  @media only screen and (max-width: 600px) {
  iframe {
    width: 100%;
  }
}


nav{
    margin:5px;
padding:5px;

}
.container-fluid .d-block {
height:400px;
margin:2px;
padding:5px;
}

.navbar {
background-color:red;
padding:10px;


}

i  {
margin:2px;
padding:2px;




}
.navbar-nav{
color:white;


}
a{
font-family:'arial';


}
.container{
background-color:white;
padding:10px;
margin-bottom:0px;





}
p{
	-moz-column-count: 2;
-moz-column-gap: 1px;
-webkit-column-count: 2;
-webkit-column-gap: 1px;
column-count: 2;
column-gap: 1rem;
text-transform:capitalize;
font-family:'arial';
margin:2px;
padding:2px;

}

body{
margin: 0px;
padding:0px;



}

</style>
</head>
<body style="background-color:lightgrey;">
    
    <div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-blue">

<a class="navbar-brand"  href="#" style="color:white; font-size:35px;"><img src="img/luxerycar.jpg" class="img img-circle" height="70" width="130" style="-webkit-border-radius: 200px 200px 200px 200px;
border-radius: 200px 200px 200px 200px; "/>Luxury cars Services</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	<li class="nav-item">
	  <a class="nav-link active" aria-current="page" href="home.php"><i class="fa fa-home"></i>Home</a>
	</li>
	<li class="nav-item">
	  <a class="nav-link" href="contact.php"><i class="fa fa-address-card"></i>Contact</a>
	</li>
	<li class="nav-item">
	  <a  href="about.php" class="nav-link"><i class="fa fa-info-circle"></i>About</a>
	</li>
  </ul>
  
	<?php
			session_start();   
  if(isset($_SESSION['email'])){ ?>
<ul class="navbar-nav navbar-right">
	<li class="nav-item">
	  <a class="nav-link active" aria-current="page" href="dashboard.php"><i class="fa fa-user"></i><?php
   
	   echo $_SESSION['email'];?></a>
	</li>
	<li class="nav-item">
	  <a class="nav-link" href="login.php"><i class="fa fa-sign-out"></i>Cerrar Session</a>
	</li>
 
  </ul>

  <?php }else{ ?>
  <ul class="navbar-nav navbar-right">
	<li class="nav-item">
	  <a class="nav-link active" aria-current="page" href="login.php"><i class="fa fa-sign-in"></i>Iniciar Sesion</a>
	</li>
	<li class="nav-item">
	  <a class="nav-link" href="registrar.php"><i class="fa fa-registered"></i>Registrar</a>
	</li>
 
  </ul>
<?php 
 
} ?>
</div>
</div>
</nav>
<div class="container-fluid">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>
<div class="carousel-inner">
<div class="carousel-item active">
  <img src="img/car.jpg" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
  <img src="img/CarService.jpg" class="d-block w-100" alt="...">
</div>
<div class="carousel-item">
  <img src="img/car2.jpg" class="d-block w-100" alt="...">
</div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="visually-hidden">Next</span>
</button>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div>




<div class="container">

<center>

<div style="margin-top: 20px;"> 

</div>
<br/>
<br/>
	<div style="background-color: #f9f9f9;">

<div class="row container">
	

		
<div class="col-md-6 col-sm-12">
	<h2>mecanica general</h2>
<p>Contamos con más de 20 años de experiencia en la industria automotriz. Contamos con personal altamente calificado y capacitado constantemente bajo certificaciones a niveles ASE. De esta manera, garantizamos el mejor servicio para su vehículo.
Si tiene algún problema en los sistemas mecánicos de su vehículo, no dude en acudir a Center’s Auto para solucionarlo, ya que contamos con los últimos equipos de análisis y recambios auténticos acordes a la normativa de los fabricantes.

En caso de avería de su coche, nuestro personal se encuentra altamente cualificado y preparado para hacer que todo vuelva a funcionar. Gracias a los numerosos años de experiencia, al uso de los últimos equipos de análisis y al acceso a los datos técnicos necesarios, nuestros especialistas realizarán de manera rápida y profesional cualquier trabajo mecánico que precise su vehículo.
</p>
	
</div>
		<div class="col-md-6 col-sm-12">
		<img src="img/taller.jpg"  style="max-width:100%;height:400px;">
	</div>
		<div class="col-md-6 col-sm-12">
		<img src="img/taller6.jpg"  style="max-width:100%; height:450px; margin:10px;padding:5px;">
	</div>	

		<div class="col-md-6 col-sm-12">
	
		<h2>Descripción</h2>
		<ol style="font-family:'arial' margin:5px; padding:5px; text-transform:capitalize;">
<li>• Cambio de aceite de motor.</li>
<li>• Cambio de filtro de aceite.</li>
<li>• Revisión de fugas de aceite.</li>
<li>• Caja de velocidades, motor, hidráulico, frenos catarina y caja de timón.</li>
<li>• Revisión de fugas de agua en sistemas de enfriamiento.</li>
<li>• Revisión de condición y ajuste de fajas.</li>
<li>• Revisión de depósitos de líquido de limpiabrisas.</li>
<li>• Revisión de mangueras.</li>
<li>• Revisión, limpieza y graduación de frenos.</li>
<li>• Revisión de luces (internas y externas), bocina, limpiabrisas, puertas eléctricas, alarma de retroceso y luz de emergencia.</li>
<li>• Revisión de juego de pedales (freno, clutch, y freno de mano).</li>
<li>• Verificación de sistema de escape y freno de motor.</li>
<li>• Verificación de funcionamiento de sistema de embrague.</li>
<li>• Revisión de batería (líquido y nivel de ácido).</li>
</ol>
	</div>	
</div>

<div class="row">
	<div class="col-md-12 col-sm-12">
		<img src="img/taller3.jpg" style="max-width:100%; width:100%; height:350px; margin:5px; padding:5px;">
	</div>

	</div>

</div>

<div class="row container">
	<?php 
	include("api/datos.php");
	
while($fila=mysqli_fetch_array($consulta)){
	if($fila['id']>0){
	
	?>

	<div class="col-md-6 col-sm-12">

		<img src="imagenes/<?=$fila['imagen'];?> " style="max-width:100%;margin:5px; padding:5px;">
	</div>
		<div class="col-md-6 col-sm-12">
		<h2> <?php echo $fila['titulo'];?></h2>
		<br/>
		<p><?php echo $fila['texto'];?></p>
	</div>	
<?php
	}else{?>

<div class="col-md-6 col-sm-12">

<h6 style="color:red"> no data </h6>
</div>
<div class="col-md-6 col-sm-12">
	<h6 style="color:red"> no data <h6>

</div>	

 <?php } } ?>


</div>


<div class="row container">
			<div class="col-md-6 col-sm-12" >
		<img src="img/car4.jpg" style="max-width:100%; margin:5px; padding:5px; height:750px;">
	</div>	

		<div class="col-md-6 col-sm-12">
		<img src="img/car11.jpg" style="max-width:100%;margin:5px; padding:5px;">
	</div>	
</div>


<div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/ltDbfMouJMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


<div class="row">
	<div class="col-md-12 col-sm-12">
		<img src="img/meca1.jpg" style="max-width:100%; margin:5px; padding:5px;">
	</div>


</div>

<div class="row">
	
	<div class="col-md-4 col-sm-12">
		<img src="img/car5.jpg" style="max-width:100%;">
	</div>
		<div class="col-md-4 col-sm-12">
		<img src="img/taller2.png" style="max-width:100%;">
	</div>	

		<div class="col-md-4 col-sm-12">
		<img src="img/taller3.jpg" style="max-width:100%;">
	</div>	
	
</div>








</div>
</center>

    
</div>
</div>
<br/>
<br/>
<br/>
<?php require("footer.php");?>





</div>


</body>
</html>