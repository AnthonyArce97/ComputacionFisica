<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="compufisica";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <script src="Chart.js"></script>
    <link rel="stylesheet" href="style.css"> 
    <title>Alcaldia Santiago de Cali</title>
  </head>
  <body>
    <div class="d-flex">
        <div id="sidebar-container" class ="bg-primary">
            <div class="logo">
                <h4 class="text-light font-weight-bold">CALI-DAD</h4>
            </div>
            <div class="menu">
                
                <a href="dash.php" class="d-block text-light p-3"><i class="icon ion-md-cloudy mr-2 lead"></i>Medicion</a>
                <a href="graficos.php" class="d-block text-light p-3"><i class="icon ion-md-switch mr-2 lead"></i>Filtros</a>
                <a href="usuario.html" class="d-block text-light p-3"><i class="icon ion-md-contact mr-2 lead"></i>Perfil</a>
                
                


            </div>

        </div>

        <div class="w-100">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <!--Buscador -->

                
                
                  
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                   
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <img src="assets/img/pic.jpeg" class="img-fluid rounded-circle avatar mr-2">
                        Jorge Iván Ospina
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.html">Cerrar sesion</a>
                     
                      </div>
                    </li>
                    <li class="nav-item">
                      
                    </li>
                  </ul>
                  
                </div>
              </nav>

    <div id="content ">
                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <h1 class="font-weight-bold mb-0">Filtros</h1>
                               

                            </div>
                            
                        </div>
                    </div>


                </section>

                <section class="bg-mix" >
                    <div class="container ">
                        <div class="card "> 
                            <div class="card-body">
                            <form class="form-inline" method="POST" action="">
      <label>Fecha Desde:</label>
      <input type="date" class="form-control" placeholder="Start"  name="date1"/>
      <label>Hasta</label>
      <input type="date" class="form-control" placeholder="End"  name="date2"/>
      <button class="btn btn-primary" name="search"><i class="icon ion-md-search"></i><span class="glyphicon glyphicon-search"></span></button> <a href="graficos.php" type="button" class="btn btn-success">  <i class="icon ion-md-refresh"></i><span class = "glyphicon glyphicon-refresh"><span></a> <a href="drawChart.php" type="button" class="btn btn-success">  Graficos <span class = "glyphicon glyphicon-refresh"><span></a>
    </form>
    <br /><br />


                            <div class="table-responsive">    
                          <table class="table table-bordered">
                           <thead class="alert-info">
                                                      <tr>
                             <th>Estacion</th>
                            <th>Fecha</th>
                           <th>PM25</th>
                           
                          </tr>
                          </thead>
                          <tbody>
                                     <?php include'range.php'?>    
                                    </tbody>
                                     </table>
                                    </div>    

                            </div>

                        </div>

                    </div>
                </section>

            
              </div>


        </div>
        


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
  <script src="https://unpkg.com/react@16/umd/react.production.min.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js" crossorigin></script>

  <!-- Load our React component. -->
  <script src="like_button.js"></script>


 

  </body>

<script>
  <?php include'range.php'?>   
  </script>

</html>