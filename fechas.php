<?php

include('conexion.php');

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final  = $_POST['fecha_final'];

$alumnosLista = $conexion->query("SELECT * FROM estacion WHERE Fecha BETWEEN '{$fecha_inicio}' AND '{$fecha_final}'"); 


echo '<table style="width:100%">
  <thead class="bg-primary">
    <th>Estacion</th>
    <th>Fecha</th> 
    <th>Hora</th>    
    <th>Pm25</th>
  </th>
  </thead>
  <tbody>';

while($alumno = $alumnosLista->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr> 
			<td>'.$alumno['Estacion'].'</td>
			<td>'.$alumno['Fecha'].'</td>
			<td>'.$alumno['Hora'].'</td>
			<td>'.$alumno['PM25'].'</td>
		</tr>';

}

echo '</tbody> </table>'; 

?>