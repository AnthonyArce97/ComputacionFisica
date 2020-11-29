
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
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
   
    <scriptZZZZZZZZZZZZ src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></scriptZZZZZZZZZZZZ>
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
                        <div class="">
                            <div class="col-lg-9">
                                <h1 class="font-weight-bold mb-0">Bienvenido</h1>
                                <p class="lead text-muted">La calidad del aire en Santiago de Cali</p>

                            </div>
                            <div class="col-lg-3 ">
                                <button class="btn btn-primary w-100 aling-self-center">Descargar Informe</button>

                            </div>
                        </div>
                    </div>


                </section>

              

                <section class="bg-grey">
                    <div class="container "> 
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Estacion</th>
                                <th>Fecha</th>   
                                
                                <th>PM 2.5</th>
                                <th>PM 10</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
						$consulta = "SELECT * FROM estacion";
						$ejecutarConsulta = mysqli_query($enlace, $consulta);
						$verFilas = mysqli_num_rows($ejecutarConsulta);
            $fila = mysqli_fetch_array($ejecutarConsulta);
            
            

            if(isset($_POST['submit'])){ //Si el boton submit es presionado
              if(!empty($_POST['start_date']) && !empty($_POST['end_date'])){ //si los input date estan llenos
                $fechaS = $_POST['start_date']; //la fecha de inicio la cual es el primer input date
                $fechaE = $_POST['end_date']; //la fecha final que es el segundo input date
                if(!$ejecutarConsulta2){
                  echo"Error en la consulta";
                }else{
                  if($verFilas2<1){
                    echo"<tr><td>Sin registros</td></tr>";
                  }else{
                    for($i=0; $i<=$fila2; $i++){
                      echo'
                        <tr>
                          <td>'.$fila2[0].'</td>
                          <td>'.$fila2[1].'</td>
                          <td>'.$fila2[2].'</td>
                          <td>'.$fila2[3].'</td>
                          <td>'.$fila2[4].'</td>
                                                
                        </tr>
                      ';
                      $fila2 = mysqli_fetch_array($ejecutarConsulta2);
    
                    }
    
                  }
                }
              }
            }else{
						if(!$ejecutarConsulta){
							echo"Error en la consulta";
						}else{
							if($verFilas<1){
								echo"<tr><td>Sin registros</td></tr>";
							}else{
								for($i=0; $i<=$fila; $i++){
									echo'
										<tr>
											<td>'.$fila[1].'</td>
											<td>'.$fila[2].'</td>
											<td>'.$fila[3].'</td>
                      <td>'.$fila[4].'</td>
                      
                                            
										</tr>
									';
									$fila = mysqli_fetch_array($ejecutarConsulta);

								}

							}
            }
          }


					?>
                        </tbody>               
         </table>  
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
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script> 

  <!-- Load our React component. -->
  <script src="like_button.js"></script>

  <script>
    let temp = $("#btn1").clone();
    $("#btn1").click(function(){
        $("#btn1").after(temp);
    });
    
    $(document).ready(function(){
        var table = $('#example').DataTable({
           orderCellsTop: true,
           fixedHeader: true 
        });
    
        //Creamos una fila en el head de la tabla y lo clonamos para cada columna
        $('#example thead tr').clone(true).appendTo( '#example thead' );
    
        $('#example thead tr:eq(1) th').each( function (i) {
            var title = $(this).text(); //es el nombre de la columna
            $(this).html( '<input type="text" placeholder="Buscar...'+title+'" />' );
     
            $( 'input', this ).on( 'keyup change', function () {
                if ( table.column(i).search() !== this.value ) {
                    table
                        .column(i)
                        .search( this.value )
                        .draw();
                }
            } );
        } );   
    });
    
    
     
    
    </script>


    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Estacion 1', 'Estacion 2', 'Estacion 3', 'Estacion 4', 'Estacion 5', 'Estacion 6','Estacion 7','Estacion 8','Estacion 9','Estacion 10'],
        datasets: [{
            label: 'Medicion del Aire por Estaciones',
            backgroundColor: 'rgb(98, 225, 250)',
            borderColor: 'rgb(255, 99, 132)',
            data: [75, 82, 85, 82, 82, 83,85,75,67,85]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>




  </body>
</html>


<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#example').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fetch.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#example').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>