
<html>
  <head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
<style type="text/css">
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

  </style>
</head>
<body>


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
<body>
  </html>