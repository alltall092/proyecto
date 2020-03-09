<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script  src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>./bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
<link href="<?php echo base_url();?>./bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>/./font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css" />
 
<style type="text/css">
/*!
 * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/)
 * Copyright 2013-2016 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap/blob/gh-pages/LICENSE)
 */

 body {
    overflow-x: hidden;
	background-attachment:scroll;
 }
 ul li{
	 color:#FFFBF0;
	 
	 
	 
 }

/* Toggle Styles */

#wrapper {
    padding-left: 0;

    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
	
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
	background-color:#00C632;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
li a{

	text-transform:capitalize;
	font-size:16px;
	
	
	
}


#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #FFFBF0;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #FFFBF0;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}


.navbar{
	margin:5px;
	padding:5px;
	background-color: #00B32D;
	
	
	
	
}
.icon-bar:hover{
	background-color:#FFFBF0;
	
	
	
	
}
i{
	margin:2px;
	padding:2px;
	font-size:18px;
}
</style>
</head>

<body>


<nav class="navbar navbar-inverse">
<div class="navbar-header">
 
<div class="media">

  <button type="button" class=" media-object navbar-toggle" id="menu-toggle"> 
         <span class="sr-only">Toggle navigation</span> 
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 

      </button> 
    
 
</div>
</div>


</nav>
             
  <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                    <?=$session;?>    
<?php echo $this->session->userdata("usuario");?>

                    </a>
                </li>
                
						
						 
						 
				
					 
                <i style="font-size:130px; color:#FFFBF0; margin:20px; padding:20px;" class="fa fa-user-circle"></i>
               
                <li>
                
                         
                    <a href="#inicio" data-toggle="tab"><i class="fa fa-home"></i>inicio</a>
                </li>
                <li>
                    <a href="#noticias" data-toggle="tab"><i class="fa fa-newspaper-o"></i>noticias</a>
                </li>
                <li>
                    <a href="#perfil" data-toggle="tab"><i class="fa fa-user"></i>perfil</a>
                </li>
                <li>
                    <a href="#eventos" data-toggle="tab"><i class="fa fa-calendar"></i>Eventos</a>
                </li>
                <li>
                    <a href="#favoritos"data-toggle="tab"><i class="fa fa-star-o"></i>favoritos</a>
                </li>
                 <li>
                    <a href="#estadisticas" data-toggle="tab"><i class="fa fa-bar-chart"></i>estadisticas</a>
                </li>
                <li>
                    <a href="#foto" data-toggle="tab"><i class="fa fa-photo"></i>foto</a>
                </li>
                
                <li>
                    <a href="#salir"><i class="fa fa-sign-out"></i>cerrar session</a>
                </li>
                	
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <div class="tab-content">
                      <div id="inicio" class="tab-pane active">
                      
                    <?php foreach($result->result_array() as $fila){?>
                    <p><?php echo $fila["inicio"];?></p>
                    <input type="button" class="btn btn-primary" value="like" />  <input type="submit" class="btn btn-primary" value="no like" />
                    <?php }?>
                      
                      </div>
                       <div id="noticias" class="tab-pane">
                      
                      <?php foreach($result->result_array() as $fila){?>
                    <p><?php echo $fila["noticias"];?></p>
                   <input type="button" class="btn btn-primary" value="like" />  <input type="submit" class="btn btn-primary" value="no like" />
                    <?php }?>
                      
                      
                      
                      </div>
                       <div id="perfil" class="tab-pane">
                      
                     <?php 
					if($fila=$result->row()){
						 ?>
                         <table class="table table-condensed  table-hover" cellpadding="2" cellspacing="5">
                        
                         <tr>
                         <th>nombre</th>                                                          
                    
           
                         <th>apellido</th>
                       
                        
                         <th>usuario</th>
                      
                        
                         <th>email</th>
                      
                       
                         <th>pais</th>
                      
                       
                         <th>fecha de nacimiento</th>
                         
                      
                         <th>genero</th>
                      
                         <th>caracteristica</th>
                     
                        
                   
                         
                       
                         </tr>
                         <tr>
                           <td><?php echo $fila->nombre;  ?> </td>
                 
                         <td><?php echo $fila->apellido;  ?></td>
                   
                         <td><?php echo $fila->usuario;  ?></td>
               
                         <td><?php echo $fila->email;  ?></td>
                     
                         <td><?php echo $fila->pais;  ?></td>
                    
                       
                         <td><?php echo $fila->fecha_de_nacimiento;  ?></td>
                       
                         <td><?php echo $fila->genero;  ?></td>
                 
                 
                         <td><?php echo $fila->caracteristica;  ?></td>
                        
                           <td><a  class="btn btn-primary"href="<?php echo base_url();?>controlador/edictar">edictar</a></td>
                          
                      
                             <td><a class="btn btn-danger" href="<?php echo base_url();?>controlador/eliminar">eliminar</a></td>
                         </tr>
                         </table>
						
						 
						 
					 <?php  } ?>
					 
					 
					 
				
					
                      
                      </div>
                       <div id="eventos" class="tab-pane">
                       <h4>eventos sociales y educaticavos</h4>
                       </br>
                    <table  class="table" cellpadding="10" cellspacing="10">
                    <tr>
                    <th>
                    eventos
                    </th>
                    <th>
                    tipos
                      </th>
                      <th>caracteristica
                      </th>
                      <th>
                      objetivos
                      </th>
                      <th>
                      fecha
                      </th>
                       <th>
                      insertar
                      </th>
                       <th>
                      eliminar
                      </th>
                      </tr>
                      
                      <?php foreach($result->result_array() as $fila){?>
						  
						  <tr>
                      <td>
                      <?php 
					  echo $fila["eventos"];?>
					</td>
                    <td>
                      <?php 
					  echo $fila["tipos"];?>
						</td>
                    
<td>
                      <?php 
					  echo $fila["caracteristica"];?>
						</td>
                  
                         <td>
                      <?php 
					  echo $fila["objetivos"];?>
						</td>
                 
                         <td>
                      <?php 
					  echo $fila["fecha"];?>
						</td>
                          <td>
                    <a class=" btn btn-success" href="#">insertar</a>
						</td>
                              <td>
                    <a class=" btn btn-danger" href="<?php echo base_url()?>controlador/eliminar?id=<?php echo $fila["id"];?>">eliminar</a>
						</td>
                 </tr>    
					 <?php  }?>
                      </table>
                      </div>
                       <div id="favoritos" class="tab-pane">
                      
                      <?php foreach($result->result_array() as $fila){?>
                    <p><?php echo $fila["favoritos"];?></p>
                    <?php }?>
                      
                      
                      </div>
                       <div id="estadisticas" class="tab-pane">
                       <!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>

<script src="<?php echo base_url();?>./high/code/highcharts.js"></script>
<script src="<?php echo base_url();?>./high/code/highcharts-3d.js"></script>
<script src="<?php echo base_url();?>./high/code/modules/exporting.js"></script>

<div id="container" style="height: 400px"></div>


		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: '<h2>resultado de la estadistida 2019</h2>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        data: [
			   <?php 
			   foreach($result->result_array() as $fila){ ?>
            ['<?php echo $fila["mes"]; ?>', <?php echo $fila["valor"]; ?> ],
            
			<?php } ?> ]
    }]
});
		</script>
	</body>
</html>

                     
        
   </div>
   <div id="foto" class="tab-pane">
   
   <form action="<?php echo base_url();?>controlador/foto" method="post" enctype="multipart/form-data">
   
   <input type="file" name="foto" value="subir foto" />
   <input type="submit" value="enviar" />
   
   </form>
   


 </div>
 <div id="salir" class="tab-pane">
   
   
salir
 
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 