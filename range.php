<?php
  require'conn.php';
  if(ISSET($_POST['search'])){
    $date1 = date("Y-m-d", strtotime($_POST['date1']));
    $date2 = date("Y-m-d", strtotime($_POST['date2']));
    $query=mysqli_query($conn, "SELECT * FROM `estacion` WHERE `fecha` BETWEEN '$date1' AND '$date2'") or die(mysqli_error());
    $row=mysqli_num_rows($query);
    if($row>0){
      while($fetch=mysqli_fetch_array($query)){
?>
  <tr>
    <td><?php echo $fetch['estacion_numero']?></td>
    <td><?php echo $fetch['fecha']?></td>
    <td><?php echo $fetch['pm25']?></td>
    
  </tr>
<?php

      }
    }else{
      echo'
      <tr>
        <td colspan = "4"><center>Registros no Existen</center></td>
      </tr>';
    }
  }else{
    $valoresY=array();
    $valoresX=array();
    $query=mysqli_query($conn, "SELECT * FROM `estacion`") or die(mysqli_error());
    
    while($fetch=mysqli_fetch_array($query)){
?>
  <tr>
    <td><?php echo $fetch['estacion_numero']?></td>
    <td><?php echo $fetch['fecha']?></td>
    <td><?php echo $fetch['pm25']?></td>
    
  </tr>
      



<?php
    }
   

  }
?>