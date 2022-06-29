
<html>
        <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
<style type="text/css">
.container{
margin:20px;
padding:10px;
background-color:white;



}
body{
background-color:green;



}
input{
margin:5px;
padding:5px;


}


</style>


</head>
<body>

<?php

include("api/datos.php"); 

if($fila=mysqli_fetch_array($consulta)){

  ?>
<div class="container">
        <div class="row">
        <div class="col-md-8">
<h2>Modificar</h2>
        <form action="modificar1.php"   method="post" enctype="multipart/form-data">
       
        <div class="form-group">

<input type="hidden" class="form-control"  name="id" value="<?php echo $fila['id'];?>"/>
</div>
       
        <div class="form-group">
<label class="label-control">titulo</label>
<input type="text" class="form-control"  name="titulo" value="<?php echo $fila['titulo'];?>"/>
</div>
<div class="form-group">
<label class="label-control">subir archivo</label>
<input type="file" class="form-control"name="imagen"/>
</div>
        <div class="form-group">
<label class="label-control">contenido</label>
<textarea name="texto" class="form-control" col="10" row="5" value="<?php echo $fila['texto'];?>"></textarea>

       
<div class="form-group">
<input type="submit" class="btn btn-success" value="enviar">
<div>
</form>
</div>
</div>
</div>
<?php } ?>
</body>
</html>