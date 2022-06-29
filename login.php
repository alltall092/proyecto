<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
<style type="text/css">
.col-md-6{
background-color:white;
height:400px;
padding: 10px;



}
body{
background-color:red;


}
.container .row{
margin: 50px;
padding: 50px;


}
form{
  margin-top:50px;
  padding:10px;



}
center{
margin-top:10px;

}
input{
margin:5px;
padding:5px;


}
label{
text-transform:capitalize;

}
h2{
color:green;
font-family:'arial';

}
</style>



</head>
<body>








<div class="container">
<div class="row">
<div class="col-md-6 col-ms-6" style="background-image:url('img/bugatti.jpg');background-repeat:no-repeat;background-size:200%;">
</div>

    <div class="col-md-6 col-ms-6">
    <center> <h2>Login</h2></center>
      <form action="login1.php" method="post">

<div class="form-group">

<label class="label-control">correo</label>
<input type="text" class="form-control" name="email"/>
</div>
<div class="form-group">
<label class="label-control">Contraseña</label>
<input type="password" class="form-control" name="pass1"/>
</div>
<div class="form-group">
<input type="submit"name="submit" class="btn btn-success" values="enviar">
No tiene cuenta? <a href="registrar.php">Crea tu cuenta</a>
</div>

</form>
</div>
</div>
<div>

</body>
</html>