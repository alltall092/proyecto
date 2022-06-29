<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
</head>
<style type="text/css">
.socials{
    list-style: none;
    display: flex;
    align-items: left;
    justify-content: left;
    margin: 1rem 0 3rem 0;
}
.socials li{
    margin: 0 10px;
}
.socials a{
    text-decoration: none;
    color: #fff;
    border: 1.1px solid white;
    padding: 5px;
    border-radius: 50%;
}
.socials a i{
    font-size: 1.1rem;
    width: 20px;
    transition: color .4s ease;
}

.socials a:hover i{
    color: aqua;
}
body{
background-color:blue;


}
.container{
margin:40px;
padding:40px;


}
form{
margin:10px;
padding:10px;


}
input{
    margin:5px;
padding:5px;




}
h2{
    color:blue;
    margin-top:5px;


}
label{
    color:blue;


}
p,h3,h6{
color:white;
margin:10px;
padding:10px;


}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-6 col-ms-6"  style="background-image:url('img/bugatti.jpg');background-repeat:no-repeat;background-size:200%;">
<h3>UBICACION</h3>
<br/>

<p>San Luis,Heredia Province,Costa Rica</p>
<br/>
<h6>SIGUENOS </h6>
<ul class="socials">
    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
 </ul>

</div>

    <div class="col-md-6"  style="background-color:white;">
    <center> <h2>formulario de contacto</h2></center>
      <form action="contact1.php" method="post">
      <div class="form-group">

<label class="label-control">nombre</label>
<input type="text" class="form-control" name="nombre"/>
</div>
<div class="form-group">

<label class="label-control">correo</label>
<input type="text" class="form-control" name="email"/>
</div>

<div class="form-group">

<label class="label-control">mensaje</label>
<textarea col="40" row="10" name="mensaje" class="form-control"></textarea>
</div>
<div class="form-group">
<input type="submit"name="submit" class="btn btn-primary" values="enviar">
</div>
</form>
</div>
</div>
<div>
</body>
</html>