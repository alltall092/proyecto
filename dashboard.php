<html>
    <head>
      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
        <style type="text/css">
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar .nav-pill li a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
a{
color:white;
text-decoration:none;
text-transform:capitalize;

}
thead{
background-color:blue;
color:white;


}
input{
margin:5px;
padding:5px;

}
i{
margin:2px;
padding:2px;
color:orange;

}

</style>
</head>
<body>
    
<div class="sidebar">
 
 
<ul class="nav nav-pills flex-column">
  <li class="nav-item">
    <a  href="#inicio" class="nav-link active" data-bs-toggle="tab"><i class="fa fa-server"></i>dashboard</a>
  </li>
  <li class="nav-item">
    <a  href="#contact"class="nav-link"  data-bs-toggle="tab" ><i class="fa fa-id-card"></i>contacto</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#acount" data-bs-toggle="tab"><i class="fa fa-user"></i>acount</a>
  </li>
  <li><a href="logout.php"><i class="fa fa-sign-out"></i>Cerrar Session</a>
</li>
</ul>



</div>

<div class="content">
  

    <div class="tab-content" id="myTabContent">



  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="profile-tab"><?php
require_once "api/conex.php"; 



  
$query = "select* from contacto";
$consulta=mysqli_query($con, $query);


?>
<table class="table table-hover">
 <thead>
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Correo</th>
<th>Mensaje</th>
<th>Eliminar</th>
</tr>
<thead>
<tbody>
<?php 

include("api/conex.php"); 
$consult="select * from contacto";
$consulta=mysqli_query($con,$consult);
while($fila=mysqli_fetch_array($consulta)){

  ?>
  <tr>
  <td><?php echo $fila["id"];?></td>
<td><?php echo $fila["nombre"];?></td>
<td><?php echo $fila["email"];?></td>
<td><?php echo $fila["mensaje"];?></td>
<td><a href="eliminarContact.php?id=<?php echo $fila['id'];?>">eliminar</a></td>

<?php }
?>
<tr>
</tbody>
</table>
</div>
<div class="tab-pane fade" id="acount" role="tabpanel" aria-labelledby="contact-tab">
<p> <i class="fa fa-user"></i><?php
  session_start();

  if(!isset($_SESSION['email'])) {
    header("Location:login.php");

}
  echo $_SESSION['email'];?></p>
<p><?php echo $_SESSION['rol'];

?></p>

<div class="container">

<h6> Cambiar Contraseña<h6>
  <div class="row">
    <div class="col-md-6 col-ms-6">
<form action="cambiarpassword.php" method="post">
<div class="form-group">

<label class="label-control">Contraseña</label>
<input type="password" class="form-control" name="pass1"/>
</div>
<div class="form-group">
<label class="label-control">Confimar Contraseña</label>
<input type="password" class="form-control" name="pass2"/>
</div>
<div class="form-group">

<input type="submit" class="btn btn-success" name="submit"/>
</div>

</form>
</div>
</div>
</div>
</div>

  <div class="tab-pane fade show active" id="inicio" role="tabpanel" aria-labelledby="contact-tab">
  <table class="table table-hover">
 <thead>
<tr>
<th>Id</th>
<th>Titulo</th>
<th>Contenido</th>
<th>Modificar</th>
<th>Eliminar</th>
</tr>
<thead>
<tbody>
<?php 

include("api/datos.php"); 

while($fila=mysqli_fetch_array($consulta)){

  ?>
  <tr>
  <td><?php echo $fila["id"];?></td>
<td><?php echo $fila["titulo"];?></td>
<td><?php echo $fila["texto"];?></td>
<td><button class="btn btn-primary"><a href="modificar.php?id=<?php echo  $fila['id'];?>">modificar</a></button></td>
<td><button class="btn btn-danger"><a href="eliminar.php?id=<?php echo $fila['id'];?>">eliminar</a></button></td>

<?php }
?>
<tr>
</tbody>
</table>

<br/>
<h2> ingresar datos</h2>
<br/>
<div class="container">
        <form action="dashboard1.php"   method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-8 col-ms-8">
        <div class="form-group">
<label class="label-control">titulo</label>
<input type="text" class="form-control"  name="titulo" value=""/>
</div>
<div class="form-group">
<label class="label-control">subir archivo</label>
<input type="file" class="form-control"name="imagen"/>
</div>
        <div class="form-group">
<label class="label-control">contenido</label>
<textarea name="texto" class="form-control" col="10" row="5"></textarea>

       
<div class="form-group">
<input type="submit" class="btn btn-primary" value="enviar">
</div>
<div>
<div>
</form>
</div>

  </div>

</div>
</div>
  

</div>
</body>

    </html>