<?php
if(!isset($_POST['oculto'])){
  exit();
}
include 'modelo/conexion.php';
$id=$_POST['id2'];
  $paterno=$_POST['txtapellidopaterno'];
  $materno=$_POST['txtapellidomaterno'];
  $nomb=$_POST['txtnombre'];
  $parcial=$_POST['txtparcial'];
  $final=$_POST['txtfinal'];
  $sentencia=$bd->prepare("UPDATE alumno SET apellido_paterno=?,apellido_materno=?,nombre=?,ex_parcial=?,ex_final=? WHERE id_alumno=?;"); 
  $resultado=$sentencia->execute([$paterno,$materno,$nomb,$parcial,$final,$id]);
 
  if($resultado===true){
   header('Location: index.php');
  }else {
    echo"Error";
  }

?>