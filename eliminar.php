<?php
  if(!isset($_GET['id'])){
    exit();
  }
  $codigo=$_GET['id'];
  include 'modelo/conexion.php';
  $sentencia=$bd->prepare("DELETE FROM alumno WHERE id_alumno=?; "); 
  $resultado=$sentencia->execute([$codigo]);
 
  if($resultado===true){
   header('Location: index.php');
  }else {
    echo"Error";
  }
?>