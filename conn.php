<?php
  $conn=mysqli_connect("localhost", "root", "", "compufisica");
  
  if(!$conn){
    die("Error: Failed to connect to database!");
  }
?>