<?php
  if(!isset($_POST['oculto'])){
    exit();
  }


  
  include 'modelo/conexion.php';
  $paterno=$_POST['txapellidopaterno'];
  $materno=$_POST['txtapellidomaterno'];
  $nomb=$_POST['txtnombre'];
  $parcial=$_POST['txtparcial'];
  $final=$_POST['txtfinal'];
  $sentencia=$bd->prepare("INSERT INTO alumno (apellido_paterno,apellido_materno,nombre,ex_parcial,ex_final) VALUES (?,?,?,?,?);"); 
  $resultado=$sentencia->execute([$paterno,$materno,$nomb,$parcial,$final]);
 
  if($resultado===true){
   header('Location: index.php');
  }else {
    echo"Error";
  }
?>